<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    public function index()
    {
        $phoneNumber = PhoneNumber::first();
        return view('app.settings.phone-number', compact('phoneNumber'));
    }

    public function store(Request $request)
    {
        // Cek apakah sudah ada data
        if (PhoneNumber::count() > 0) {
            return redirect()->back()->with('error', 'Phone number already exists. Please edit the existing one.');
        }

        $validated = $request->validate([
            'phone_number' => 'required|string|max:20',
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

        $validated['phone_number'] = $convertTo62($validated['phone_number']);

        PhoneNumber::create($validated);

        return redirect()->route('app.settings.phone-number.index')
            ->with('success', 'Phone number added successfully.');
    }

    public function edit($id)
    {
        $phoneNumber = PhoneNumber::findOrFail($id);
        return response()->json($phoneNumber);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'phone_number' => 'required|string|max:20',
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

        $validated['phone_number'] = $convertTo62($validated['phone_number']);

        $phoneNumber = PhoneNumber::findOrFail($id);
        $phoneNumber->update($validated);

        return redirect()->route('app.settings.phone-number.index')
            ->with('success', 'Phone number updated successfully.');
    }

    public function destroy($id)
    {
        $phoneNumber = PhoneNumber::findOrFail($id);
        $phoneNumber->delete();

        return redirect()->route('app.settings.phone-number.index')
            ->with('success', 'Phone number deleted successfully.');
    }
}
