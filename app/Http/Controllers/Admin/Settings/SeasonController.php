<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeasonController extends Controller
{
    public function index()
    {
        $seasons = Season::latest()->get();
        return view("app.settings.season", compact('seasons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'required|mimes:jpeg,jpg,png,webp,avif|max:5120',
        ]);

        if (Season::count() >= 5) {
            return redirect()->route('season.index')->with('error', 'Maximum 5 seasons allowed.');
        }

        $path = $request->file('image')->store('seasons', 'public');

        Season::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect()->route('season.index')->with('success', 'Season created successfully.');
    }

    public function edit($id)
    {
        $season = Season::findOrFail($id);
        return response()->json([
            'id' => $season->id,
            'title' => $season->title,
            'description' => $season->description,
            'image' => $season->image,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|mimes:jpeg,jpg,png,webp,avif|max:5120',
        ]);

        $season = Season::findOrFail($id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($season->image && Storage::disk('public')->exists($season->image)) {
                Storage::disk('public')->delete($season->image);
            }
            $data['image'] = $request->file('image')->store('seasons', 'public');
        }

        $season->update($data);

        return redirect()->route('season.index')->with('success', 'Season updated successfully.');
    }

    public function destroy($id)
    {
        $season = Season::findOrFail($id);
        if ($season->image && Storage::disk('public')->exists($season->image)) {
            Storage::disk('public')->delete($season->image);
        }
        $season->delete();
        return redirect()->route('season.index')->with('success', 'Season deleted successfully.');
    }
}
