<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\OurSelectionOrder;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class OurSelectionOrderController extends Controller
{
    public function index()
    {
        $orderDatas = OurSelectionOrder::with('categoryProduct')
            ->orderBy('order_number', 'asc')
            ->paginate(10);
        $products = CategoryProduct::select('id', 'name')->orderBy('name')->get();
        return view("app.settings.our-selection-order", compact("orderDatas", "products"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|integer',
            'category_product_id' => 'required|exists:category_products,id',
        ]);

        OurSelectionOrder::create($validated);

        return redirect()->route('app.settings.our-selection-order.index')
            ->with('success', 'Order item created successfully');
    }

    public function edit($id)
    {
        $order = OurSelectionOrder::with('categoryProduct')->findOrFail($id);
        return response()->json([
            'id' => $order->id,
            'order_number' => $order->order_number,
            'category_product_id' => $order->category_product_id,
            'product_name' => optional($order->categoryProduct)->name,
            'product_image' => optional($order->categoryProduct)->first_image_url,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'order_number' => 'required|integer',
            'category_product_id' => 'required|exists:category_products,id',
        ]);

        $order = OurSelectionOrder::findOrFail($id);
        $order->update($validated);

        return redirect()->route('app.settings.our-selection-order.index')
            ->with('success', 'Order item updated successfully');
    }

    public function destroy($id)
    {
        $order = OurSelectionOrder::findOrFail($id);
        $order->delete();

        return redirect()->route('app.settings.our-selection-order.index')
            ->with('success', 'Order item deleted successfully');
    }
}
