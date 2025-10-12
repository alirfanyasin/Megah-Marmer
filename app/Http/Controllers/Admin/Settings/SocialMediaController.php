<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SocialMediaController extends Controller
{
    public function index()
    {
        $dataSocialMedia = SocialMedia::orderBy('created_at', 'desc')->get();
        return view('app.settings.social-media', compact('dataSocialMedia'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'link' => 'required|url|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        SocialMedia::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'link' => $request->link,
        ]);

        return redirect()->route('app.settings.social-media.index')
            ->with('success', 'Social media added successfully!');
    }

    public function edit($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        return response()->json($socialMedia);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'link' => 'required|url|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'link' => $request->link,
        ]);

        return redirect()->route('app.settings.social-media.index')
            ->with('success', 'Social media updated successfully!');
    }

    public function destroy($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->delete();

        return redirect()->route('app.settings.social-media.index')
            ->with('success', 'Social media deleted successfully!');
    }
}
