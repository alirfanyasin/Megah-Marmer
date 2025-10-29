<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\HomeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeImageController extends Controller
{
    public function index()
    {
        $homeImageData = HomeImage::first();
        return view('app.settings.home-image', compact('homeImageData'));
    }

    public function edit($id)
    {
        $homeImage = HomeImage::findOrFail($id);
        return response()->json([
            'headline' => $homeImage->headline,
            'name' => $homeImage->name,
            'description' => $homeImage->description,
            'hero_img' => $homeImage->hero_img,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'headline' => 'required|string|max:255',
            'name' => 'nullable|string',
            'description' => 'nullable|string',
            // Multiple files: allow up to 5 images, each up to 5MB
            'hero_img' => 'nullable|array|max:5',
            // Use mimes only to support AVIF even if GD/Imagick lacks support for getimagesize
            'hero_img.*' => 'mimes:jpeg,jpg,png,webp,avif|max:5120',
        ]);

        $homeImage = HomeImage::findOrFail($id);

        $data = [
            'headline' => $request->headline,
            'name' => $request->name,
            'description' => $request->description,
        ];

        // Handle multiple image uploads (append up to 5 total)
        $existingImages = is_array($homeImage->hero_img) ? $homeImage->hero_img : (empty($homeImage->hero_img) ? [] : [$homeImage->hero_img]);

        // Remove selected existing images
        $removeImages = $request->input('remove_images', []);
        if (!is_array($removeImages)) {
            $removeImages = [];
        }
        if (!empty($removeImages)) {
            $remaining = [];
            foreach ($existingImages as $path) {
                if (!in_array($path, $removeImages, true)) {
                    $remaining[] = $path;
                } else {
                    // Delete file only if it's a stored relative path (not external URL or absolute public path)
                    $isExternal = str_starts_with($path, 'http://') || str_starts_with($path, 'https://') || str_starts_with($path, '/');
                    if (!$isExternal && Storage::disk('public')->exists($path)) {
                        Storage::disk('public')->delete($path);
                    }
                }
            }
            $existingImages = $remaining;
        }

        if ($request->hasFile('hero_img')) {
            $newFiles = $request->file('hero_img');
            $storedPaths = [];
            foreach ($newFiles as $file) {
                $storedPaths[] = $file->store('home-images', 'public');
            }

            $merged = array_values(array_filter(array_merge($existingImages, $storedPaths)));

            // Enforce max 5 images total
            if (count($merged) > 5) {
                return redirect()->route('app.settings.home-image.index')
                    ->with('error', 'Maximum 5 images are allowed. Remove some before adding more.');
            }

            $data['hero_img'] = $merged;
        }

        $homeImage->update($data);

        return redirect()->route('app.settings.home-image.index')
            ->with('success', 'Home image updated successfully!');
    }
}
