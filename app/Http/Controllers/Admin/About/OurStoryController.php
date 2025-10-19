<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\OurStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurStoryController extends Controller
{
    public function index()
    {
        $stories = OurStory::orderBy('order', 'asc')->get();
        return view('app.about.our-story.index', compact('stories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,avif,webp|max:2048',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('our-story', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        OurStory::create($validated);

        return redirect()->route('app.about.our-story.index')
            ->with('success', 'Story section added successfully!');
    }

    public function edit($id)
    {
        $story = OurStory::findOrFail($id);
        return response()->json($story);
    }

    public function update(Request $request, $id)
    {
        $story = OurStory::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,avif,webp|max:2048',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($story->image && Storage::disk('public')->exists($story->image)) {
                Storage::disk('public')->delete($story->image);
            }
            $validated['image'] = $request->file('image')->store('our-story', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        $story->update($validated);

        return redirect()->route('app.about.our-story.index')
            ->with('success', 'Story section updated successfully!');
    }

    public function destroy($id)
    {
        $story = OurStory::findOrFail($id);

        // Delete image if exists
        if ($story->image && Storage::disk('public')->exists($story->image)) {
            Storage::disk('public')->delete($story->image);
        }

        $story->delete();

        return redirect()->route('app.about.our-story.index')
            ->with('success', 'Story section deleted successfully!');
    }
}
