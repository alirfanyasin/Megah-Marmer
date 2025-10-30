<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\EmailOrder;
use Illuminate\Http\Request;

class EmailOrderController extends Controller
{
    public function index()
    {
        $emailOrder = EmailOrder::first();
        return view('app.settings.email-order', compact('emailOrder'));
    }

    public function store(Request $request)
    {
        if (EmailOrder::count() > 0) {
            return redirect()->back()->with('error', 'Email already exists. Please edit the existing one.');
        }

        $validated = $request->validate([
            'email' => 'required',
        ]);

        EmailOrder::create($validated);

        return redirect()->route('app.settings.email-order.index')
            ->with('success', 'Email added successfully.');
    }

    public function edit($id)
    {
        $emailOrder = EmailOrder::findOrFail($id);
        return response()->json($emailOrder);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'email' => 'required',
        ]);
        $emailOrder = EmailOrder::findOrFail($id);
        $emailOrder->update($validated);

        return redirect()->route('app.settings.email-order.index')
            ->with('success', 'Email updated successfully.');
    }

    public function destroy($id)
    {
        $emailOrder = EmailOrder::findOrFail($id);
        $emailOrder->delete();

        return redirect()->route('app.settings.email-order.index')
            ->with('success', 'Email deleted successfully.');
    }
}
