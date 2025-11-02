@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
  <!-- Stats Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Total Categories</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">{{ $totalCategory }}</h3>
        </div>
        <div class="w-12 h-12 bg-green-100 flex items-center justify-center">
          <iconify-icon icon="mdi:dollar" width="30" height="30" class="text-green-600"></iconify-icon>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Total Products</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">{{ $totalProduct }}</h3>
        </div>
        <div class="w-12 h-12 bg-purple-100 flex items-center justify-center">
          <iconify-icon icon="solar:box-outline" width="30" height="30" class="text-purple-600"></iconify-icon>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Total Location</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">{{ $totalLocation }}</h3>
        </div>
        <div class="w-12 h-12 bg-blue-100 flex items-center justify-center">
          <iconify-icon icon="lets-icons:bag" width="30" height="30" class="text-blue-600"></iconify-icon>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Total Message</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">{{ $totalMessage }}</h3>
        </div>
        <div class="w-12 h-12 bg-amber-100 flex items-center justify-center">
          <iconify-icon icon="ri:user-add-line" width="30" height="30" class="text-amber-600"></iconify-icon>
        </div>
      </div>
    </div>
  </div>

  <!-- Products Table -->
  <div class="bg-white border border-gray-200 mb-6">
    <div class="px-6 py-4 border-b border-gray-200">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-bold text-gray-900">Newest Product</h2>
        <a href="#" class="text-amber-600 hover:text-amber-700 font-medium"></a>
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Discount
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($products as $product)
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-chair text-gray-400"></i>
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                    <div class="text-sm text-gray-500">SKU: FRN-001</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="text-sm text-gray-900">{{ $product->categorySub->name }}</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                @if ($product->discount !== 0)
                  <span class="text-sm font-medium text-gray-900 block">$
                    {{ number_format($product->price * (1 - $product->discount / 100), 0, ',', '.') }}</span>

                  <span class="text-sm font-medium text-gray-400 line-through">$
                    {{ number_format($product->price, 0, ',', '.') }}</span>
                @else
                  <span class="text-sm font-medium text-gray-900 block">$
                    {{ number_format($product->price, 0, ',', '.') }}</span>
                @endif
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                @if ($product->discount !== 0)
                  <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800">-{{ $product->discount }}%</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Recent Subscriber -->
  <div class="bg-white border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-bold text-gray-900">Newest Message</h2>
        <a href="#" class="text-amber-600 hover:text-amber-700 font-medium"></a>
      </div>
    </div>
    <div class="p-6">
      <div class="space-y-4">
        @foreach ($totalMessages as $totalMessage)
          <div class="flex items-center justify-between p-4 border border-gray-200 hover:bg-gray-50 transition-colors">
            <div class="flex items-center space-x-4">
              <div class="w-10 h-10 bg-amber-600 flex items-center justify-center">
                <span class="text-white font-bold text-sm uppercase">{{ Str::substr($totalMessage->name, 0, 2) }}</span>
              </div>
              <div>
                <p class="font-medium text-gray-900">{{ $totalMessage->name }}</p>
                <p class="text-sm text-gray-500">{{ $totalMessage->email }}</p>
              </div>
            </div>
            <div>
              {{ Str::substr($totalMessage->message, 0, 60) }}
            </div>
            <div>
              <span
                class="px-3 py-1 text-xs font-medium bg-blue-100 text-blue-800">{{ $totalMessage->created_at->format('d M Y, H:i') }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
