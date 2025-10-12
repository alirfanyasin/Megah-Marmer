<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageCategoryMenuController extends Controller
{
    public function index()
    {
        $dataCategories = Category::all();
        return view('app.settings.manage-category-menu', [
            'dataCategories' => $dataCategories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,jpeg,png,gif,webp,avif|max:2048',
        ]);

        $filePath = $request->file('image')->store('categories', 'public');


        Category::create([
            'name' => $request->name,
            'image' => $filePath,
        ]);

        return redirect()
            ->route('settings.manage-category-menu')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return response()->json([
            'id' => $category->id,
            'name' => $category->name,
            'image' => Storage::url($category->image)
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif,webp,avif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
        ];

        // Jika ada file image baru
        if ($request->hasFile('image')) {
            // Hapus image lama
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
            // Upload image baru
            $filePath = $request->file('image')->store('categories', 'public');
            $data['image'] = $filePath;
        }

        $category->update($data);

        return redirect()
            ->route('settings.manage-category-menu')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Hapus image dari storage
        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()
            ->route('settings.manage-category-menu')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
