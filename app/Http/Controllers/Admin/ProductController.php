<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\CategorySub;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index($id_category, $id_sub_category)
    {
        $dataProducts = CategoryProduct::where('category_sub_id', $id_sub_category)->get();
        $dataCategory = Category::find($id_category);
        $dataCategorySub = CategorySub::find($id_sub_category);
        return view('app.products.index', [
            'category' => $dataCategory,
            'categorySub' => $dataCategorySub,
            'dataProducts' => $dataProducts,
        ]);
    }

    public function show($id_category, $id_sub_category, $id_product)
    {
        $product = CategoryProduct::findOrFail($id_product);
        $categorySub = CategorySub::findOrFail($product->category_sub_id);
        $category = Category::findOrFail($categorySub->category_id);

        return view('app.products.products-show', compact('product', 'categorySub', 'category'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'category_sub_id' => 'required|exists:category_subs,id',
            'name' => 'required|string|max:255',
            'images' => 'required|array|min:1',
            'images.*' => 'required|mimes:jpg,jpeg,png,avif,svg,webp|max:5120',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'description' => 'required|string',
            // 'description_point' => 'required|array|min:1',
            // 'description_point.*' => 'required|string|max:500',
            'width' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'depth' => 'required|numeric|min:0',
        ], [
            'category_sub_id.required' => 'Category subcategory is required.',
            'category_sub_id.exists' => 'Selected subcategory does not exist.',
            'name.required' => 'Product name is required.',
            'name.max' => 'Product name cannot exceed 255 characters.',
            'images.required' => 'At least one product image is required.',
            'images.min' => 'At least one product image is required.',
            'images.*.mimes' => 'Image must be in JPG, JPEG, AVIF, SVG, WEBP or PNG format.',
            'images.*.max' => 'Image size cannot exceed 2MB.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a number.',
            'price.min' => 'Price cannot be negative.',
            'discount.numeric' => 'Discount must be a number.',
            'discount.min' => 'Discount cannot be negative.',
            'discount.max' => 'Discount cannot exceed 100%.',
            'description.required' => 'Description is required.',
            // 'description_point.required' => 'At least one key point is required.',
            // 'description_point.min' => 'At least one key point is required.',
            // 'description_point.*.required' => 'Key point cannot be empty.',
            // 'description_point.*.max' => 'Key point cannot exceed 500 characters.',
            'width.required' => 'Width is required.',
            'width.numeric' => 'Width must be a number.',
            'width.min' => 'Width cannot be negative.',
            'height.required' => 'Height is required.',
            'height.numeric' => 'Height must be a number.',
            'height.min' => 'Height cannot be negative.',
            'depth.required' => 'Depth is required.',
            'depth.numeric' => 'Depth must be a number.',
            'depth.min' => 'Depth cannot be negative.',
        ]);

        DB::beginTransaction();

        try {
            $imagePaths = [];

            // Upload dan simpan gambar
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    $fileName = time() . '_' . $index . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                    $path = $image->storeAs('products', $fileName, 'public');
                    $imagePaths[] = $path;
                }
            }

            // Buat product
            $product = CategoryProduct::create([
                'category_sub_id' => $validated['category_sub_id'],
                'name' => $validated['name'],
                'image' => $imagePaths,
                'price' => $validated['price'],
                'discount' => $validated['discount'] ?? 0,
                'description' => $validated['description'],
                // 'description_point' => $validated['description_point'],
                'width' => $validated['width'],
                'height' => $validated['height'],
                'depth' => $validated['depth'],
            ]);

            DB::commit();

            return redirect()
                ->route('app.products.index', ['id_category' => $request->input('id_category'), 'id_sub_category' => $validated['category_sub_id']])
                ->with('success', 'Product "' . $product->name . '" created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            // Hapus gambar yang sudah terupload jika terjadi error
            if (!empty($imagePaths)) {
                foreach ($imagePaths as $path) {
                    Storage::disk('public')->delete($path);
                }
            }

            return back()
                ->withInput()
                ->with('error', 'Failed to create product: ' . $e->getMessage());
        }
    }

    public function create($id_category, $id_sub_category)
    {
        $dataProducts = CategoryProduct::where('category_sub_id', $id_sub_category)->get();
        $dataCategory = Category::find($id_category);
        $dataCategorySub = CategorySub::find($id_sub_category);
        return view('app.products.products-create', [
            'category' => $dataCategory,
            'categorySub' => $dataCategorySub,
            'dataProducts' => $dataProducts,
        ]);
    }


    public function edit($id_product)
    {
        $product = CategoryProduct::findOrFail($id_product);
        $categorySub = CategorySub::findOrFail($product->category_sub_id);
        $category = Category::findOrFail($categorySub->category_id);

        return view('app.products.products-edit', compact('product', 'categorySub', 'category'));
    }

    public function update(Request $request, $id_product)
    {
        // Validasi input
        $validated = $request->validate([
            'category_sub_id' => 'required|exists:category_subs,id',
            'name' => 'required|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'nullable|mimes:jpg,jpeg,png,avif,svg,webp|max:5120',
            'delete_images' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'description' => 'required|string',
            // 'description_point' => 'required|array|min:1',
            // 'description_point.*' => 'required|string|max:500',
            'width' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'depth' => 'required|numeric|min:0',
        ], [
            'category_sub_id.required' => 'Category subcategory is required.',
            'category_sub_id.exists' => 'Selected subcategory does not exist.',
            'name.required' => 'Product name is required.',
            'name.max' => 'Product name cannot exceed 255 characters.',
            'images.*.mimes' => 'Image must be in JPG, JPEG, AVIF, SVG, WEBP or PNG format.',
            'images.*.max' => 'Image size cannot exceed 5MB.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a number.',
            'price.min' => 'Price cannot be negative.',
            'discount.numeric' => 'Discount must be a number.',
            'discount.min' => 'Discount cannot be negative.',
            'discount.max' => 'Discount cannot exceed 100%.',
            'description.required' => 'Description is required.',
            // 'description_point.required' => 'At least one key point is required.',
            // 'description_point.min' => 'At least one key point is required.',
            // 'description_point.*.required' => 'Key point cannot be empty.',
            // 'description_point.*.max' => 'Key point cannot exceed 500 characters.',
            'width.required' => 'Width is required.',
            'width.numeric' => 'Width must be a number.',
            'width.min' => 'Width cannot be negative.',
            'height.required' => 'Height is required.',
            'height.numeric' => 'Height must be a number.',
            'height.min' => 'Height cannot be negative.',
            'depth.required' => 'Depth is required.',
            'depth.numeric' => 'Depth must be a number.',
            'depth.min' => 'Depth cannot be negative.',
        ]);

        DB::beginTransaction();

        try {
            // Cari product yang akan diupdate
            $product = CategoryProduct::findOrFail($id_product);

            // Ambil gambar lama
            $currentImages = $product->image ?? [];
            $imagesToDeleteIndices = [];

            // Proses penghapusan gambar yang dipilih
            if ($request->filled('delete_images')) {
                $imagesToDeleteIndices = array_map('intval', explode(',', $request->delete_images));

                // Hapus file gambar dari storage
                foreach ($imagesToDeleteIndices as $index) {
                    if (isset($currentImages[$index])) {
                        Storage::disk('public')->delete($currentImages[$index]);
                    }
                }

                // Filter array gambar, hapus yang sudah ditandai untuk dihapus
                $currentImages = array_values(array_filter($currentImages, function ($value, $key) use ($imagesToDeleteIndices) {
                    return !in_array($key, $imagesToDeleteIndices);
                }, ARRAY_FILTER_USE_BOTH));
            }

            $newImagePaths = [];

            // Upload gambar baru jika ada
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    $fileName = time() . '_' . $index . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                    $path = $image->storeAs('products', $fileName, 'public');
                    $newImagePaths[] = $path;
                }
            }

            // Gabungkan gambar lama (yang tidak dihapus) dengan gambar baru
            $allImages = array_merge($currentImages, $newImagePaths);

            // Validasi bahwa minimal ada 1 gambar
            if (empty($allImages)) {
                throw new \Exception('Product must have at least one image.');
            }

            // Update product
            $product->update([
                'category_sub_id' => $validated['category_sub_id'],
                'name' => $validated['name'],
                'image' => $allImages,
                'price' => $validated['price'],
                'discount' => $validated['discount'] ?? 0,
                'description' => $validated['description'],
                'description_point' => $validated['description_point'],
                'width' => $validated['width'],
                'height' => $validated['height'],
                'depth' => $validated['depth'],
            ]);

            DB::commit();

            return redirect()
                ->route('app.products.index', [
                    'id_category' => $request->input('id_category'),
                    'id_sub_category' => $validated['category_sub_id']
                ])
                ->with('success', 'Product "' . $product->name . '" updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            // Hapus gambar baru yang sudah terupload jika terjadi error
            if (!empty($newImagePaths)) {
                foreach ($newImagePaths as $path) {
                    Storage::disk('public')->delete($path);
                }
            }

            return back()
                ->withInput()
                ->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }


    public function destroy($id_product)
    {
        DB::beginTransaction();

        try {
            // Cari product yang akan dihapus
            $product = CategoryProduct::findOrFail($id_product);

            // Hapus file gambar dari storage
            if (!empty($product->image)) {
                foreach ($product->image as $imagePath) {
                    Storage::disk('public')->delete($imagePath);
                }
            }

            // Hapus product dari database
            $product->delete();

            DB::commit();

            return back()
                ->with('success', 'Product "' . $product->name . '" deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->with('error', 'Failed to delete product: ' . $e->getMessage());
        }
    }
}
