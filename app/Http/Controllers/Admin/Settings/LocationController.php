<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    public function index()
    {
        $dataLocations = Location::orderBy('created_at', 'desc')->get();
        return view('app.settings.location', compact('dataLocations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'google_map' => 'nullable|string',
            'phone' => 'nullable|string',
            'image' => 'required|mimes:jpg,jpeg,png,gif,webp,avif|max:4096',
        ], [
            'name.required' => 'Location name is required',
            'address.required' => 'Address is required',
            'image.required' => 'Image is required',
            'image.mimes' => 'Image format must be: JPG, JPEG, PNG, GIF, WEBP, AVIF',
            'image.max' => 'Maximum image size is 4MB',
        ]);

        // Convert phone
        $convertTo62 = function (?string $number) {
            if (!$number) return null;
            // Ambil hanya angka dan plus
            $number = preg_replace('/[^0-9+]/', '', $number ?? '');
            // +62 -> 62
            if (strpos($number, '+62') === 0) {
                $number = '62' . substr($number, 3);
            }
            // 0xxx -> 62xxx
            elseif (strpos($number, '0') === 0) {
                $number = '62' . substr($number, 1);
            }
            // Sisakan angka saja
            return preg_replace('/[^0-9]/', '', $number);
        };

        $validated['phone'] = $convertTo62($validated['phone']);

        // Extract src from iframe if provided
        if ($request->google_map) {
            $validated['google_map'] = $this->extractSrcFromIframe($request->google_map);
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('locations', 'public');
        }

        Location::create($validated);

        return redirect()->route('app.settings.location.index')
            ->with('success', 'Location added successfully');
    }

    private function extractSrcFromIframe($input)
    {
        // Check if input contains iframe tag
        if (strpos($input, '<iframe') !== false) {
            preg_match('/src="([^"]+)"/', $input, $matches);
            return $matches[1] ?? $input;
        }
        return $input;
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);

        // Return data with full image URL
        $imageUrl = $location->image
            ? (filter_var($location->image, FILTER_VALIDATE_URL)
                ? $location->image
                : asset('storage/' . $location->image))
            : null;

        return response()->json([
            'id' => $location->id,
            'name' => $location->name,
            'address' => $location->address,
            'phone' => $location->phone,
            'google_map' => $location->google_map,
            'image' => $imageUrl,
        ]);
    }

    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'google_map' => 'nullable|string',
            'phone' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp,avif|max:4096',
        ], [
            'name.required' => 'Location name is required',
            'address.required' => 'Address is required',
            'image.image' => 'File must be an image',
            'image.mimes' => 'Image format must be: JPG, JPEG, PNG, GIF, WEBP, AVIF',
            'image.max' => 'Maximum image size is 4MB',
        ]);

        // Convert phone
        $convertTo62 = function (?string $number) {
            if (!$number) return null;
            // Ambil hanya angka dan plus
            $number = preg_replace('/[^0-9+]/', '', $number ?? '');
            // +62 -> 62
            if (strpos($number, '+62') === 0) {
                $number = '62' . substr($number, 3);
            }
            // 0xxx -> 62xxx
            elseif (strpos($number, '0') === 0) {
                $number = '62' . substr($number, 1);
            }
            // Sisakan angka saja
            return preg_replace('/[^0-9]/', '', $number);
        };

        $validated['phone'] = $convertTo62($validated['phone']);

        // Extract src from iframe if provided
        if ($request->google_map) {
            $validated['google_map'] = $this->extractSrcFromIframe($request->google_map);
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($location->image && Storage::disk('public')->exists($location->image)) {
                Storage::disk('public')->delete($location->image);
            }
            $validated['image'] = $request->file('image')->store('locations', 'public');
        }

        $location->update($validated);

        return redirect()->route('app.settings.location.index')
            ->with('success', 'Location updated successfully');
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);

        // Delete image if exists
        if ($location->image && Storage::disk('public')->exists($location->image)) {
            Storage::disk('public')->delete($location->image);
        }

        $location->delete();

        return redirect()->route('app.settings.location.index')
            ->with('success', 'Location deleted successfully');
    }
}
