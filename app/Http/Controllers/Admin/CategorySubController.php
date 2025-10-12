<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorySub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategorySubController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,jpeg,png,avif,svg,webp|max:2048',
        ]);


        $filePath = $request->file('image')->store('category_sub', 'public');

        CategorySub::create([
            'category_id' => $id,
            'name' => $request->name,
            'image' => $filePath,
        ]);

        return redirect()
            ->route('category-sub-menu.index', $id)
            ->with('success', 'Sub kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $subCategory = CategorySub::findOrFail($id);
        return response()->json([
            'id' => $subCategory->id,
            'name' => $subCategory->name,
            'image' => asset('storage/' . $subCategory->image)
        ]);
    }

    public function update(Request $request, $id)
    {
        $subCategory = CategorySub::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|mimes:jpg,jpeg,png,avif,svg,webp|max:2048',
        ]);

        $data = [
            'name' => $request->name,
        ];

        if ($request->hasFile('image')) {
            // Hapus image lama
            if ($subCategory->image && Storage::disk('public')->exists($subCategory->image)) {
                Storage::disk('public')->delete($subCategory->image);
            }
            $filePath = $request->file('image')->store('category_sub', 'public');
            $data['image'] = $filePath;
        }

        $subCategory->update($data);

        return redirect()
            ->route('category-sub-menu.index', $subCategory->category_id)
            ->with('success', 'Sub kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $subCategory = CategorySub::findOrFail($id);

        // Hapus image dari storage
        if ($subCategory->image && Storage::disk('public')->exists($subCategory->image)) {
            Storage::disk('public')->delete($subCategory->image);
        }

        $categoryId = $subCategory->category_id;
        $subCategory->delete();

        return redirect()
            ->route('category-sub-menu.index', $categoryId)
            ->with('success', 'Sub kategori berhasil dihapus.');
    }
}
