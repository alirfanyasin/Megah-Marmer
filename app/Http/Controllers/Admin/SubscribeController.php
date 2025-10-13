<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribers = Subscribe::orderBy('created_at', 'desc')->get();
        return view('app.subscribe', compact('subscribers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        Subscribe::create($validated);
        return back()->with('success', 'You have subscribed');
    }

    public function destroy($id)
    {
        try {
            $subscriber = Subscribe::findOrFail($id);
            $subscriber->delete();

            return redirect()->route('app.subscribe.index')
                ->with('success', 'Subscriber berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('app.subscribe.index')
                ->with('error', 'Gagal menghapus subscriber');
        }
    }
}
