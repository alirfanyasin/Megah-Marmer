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
            'hero_img' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:5120',
        ]);

        $homeImage = HomeImage::findOrFail($id);

        $data = [
            'headline' => $request->headline,
            'name' => $request->name,
            'description' => $request->description,
        ];

        // Handle image upload
        if ($request->hasFile('hero_img')) {
            // Delete old image if exists
            if ($homeImage->hero_img && Storage::disk('public')->exists($homeImage->hero_img)) {
                Storage::disk('public')->delete($homeImage->hero_img);
            }

            // Store new image
            $imagePath = $request->file('hero_img')->store('home-images', 'public');
            $data['hero_img'] = $imagePath;
        }

        $homeImage->update($data);

        return redirect()->route('app.settings.home-image.index')
            ->with('success', 'Home image updated successfully!');
    }

    // public function destroy($id)
    // {
    //     $homeImage = HomeImage::findOrFail($id);

    //     // Delete image file if exists
    //     if ($homeImage->hero_img && Storage::disk('public')->exists($homeImage->hero_img)) {
    //         Storage::disk('public')->delete($homeImage->hero_img);
    //     }

    //     $homeImage->delete();

    //     return redirect()->route('app.settings.home-image.index')
    //         ->with('success', 'Home image deleted successfully!');
    // }
}
