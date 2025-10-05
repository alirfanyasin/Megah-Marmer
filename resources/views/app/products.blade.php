@extends('layouts.app')

@section('content')
  <div class="px-2 sm:px-3 lg:px-2 py-8">
    <!-- Header Section -->
    <div class="mb-12">
      <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
        <div>
          <h1 class="text-4xl font-bold text-gray-900 mb-3 tracking-tight">Koleksi Furniture</h1>
          <p class="text-gray-600 text-md">Temukan furniture berkualitas untuk melengkapi ruangan Anda dengan gaya yang
            sempurna</p>
        </div>
      </div>
    </div>

    <!-- Stats Section -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 mb-12">
      <div class="bg-white shadow p-6 border-l-4 rounded-md border-amber-600">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-amber-900 mb-1">Total Produk</p>
            <p class="text-3xl font-bold text-amber-700">156</p>
          </div>
          <div class="bg-amber-600 text-white p-4 rounded-md">
            <i class="fas fa-couch text-2xl"></i>
          </div>
        </div>
      </div>

      <div class="bg-white shadow rounded-md p-6 border-l-4 border-blue-600">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-blue-900 mb-1">Kategori</p>
            <p class="text-3xl font-bold text-blue-700">12</p>
          </div>
          <div class="bg-blue-600 text-white p-4 rounded-md">
            <i class="fas fa-th-large text-2xl"></i>
          </div>
        </div>
      </div>

      <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 border-l-4 border-green-600">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-green-900 mb-1">Produk Baru</p>
            <p class="text-3xl font-bold text-green-700">24</p>
          </div>
          <div class="bg-green-600 text-white p-4">
            <i class="fas fa-star text-2xl"></i>
          </div>
        </div>
      </div>

      <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 border-l-4 border-red-600">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-red-900 mb-1">Stok Terbatas</p>
            <p class="text-3xl font-bold text-red-700">8</p>
          </div>
          <div class="bg-red-600 text-white p-4">
            <i class="fas fa-fire text-2xl"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">

      @forelse($products ?? [] as $product)
        <!-- Product Card -->
        <div
          class="hover:shadow-2xl transition-all duration-500 overflow-hidden group border border-gray-200 flex flex-col">
          <!-- Product Image -->
          <div class="relative overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 aspect-square">
            <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500' }}"
              alt="{{ $product->name ?? 'Produk' }}"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

            <!-- Badges -->
            <div class="absolute top-0 left-0 flex flex-col gap-2">
              @if ($product->is_new ?? false)
                <span class="bg-green-600 text-white text-xs font-bold px-4 py-2 shadow-lg">
                  <i class="fas fa-star mr-1"></i>Baru
                </span>
              @endif
              @if (($product->discount ?? 0) > 0)
                <span class="bg-red-600 text-white text-xs font-bold px-4 py-2 shadow-lg">
                  Sale -{{ $product->discount }}%
                </span>
              @endif
            </div>

            <div class="absolute top-0 right-0 flex flex-col gap-2">
              @if ($product->stock <= 5)
                <span class="bg-red-600 text-white text-xs font-bold px-4 py-2 shadow-lg">
                  <i class="fas fa-fire mr-1"></i>Terbatas
                </span>
              @endif
            </div>

            <!-- Quick Actions Overlay -->
            <div
              class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center gap-3">
              <a href=""
                class="bg-white text-gray-900 p-4 hover:bg-amber-600 hover:text-white transition-all shadow-lg transform translate-y-8 group-hover:translate-y-0 hover:scale-110 duration-300">
                <i class="fas fa-edit"></i>
              </a>
              <a href=""
                class="bg-white text-gray-900 p-4 hover:bg-blue-600 hover:text-white transition-all shadow-lg transform translate-y-8 group-hover:translate-y-0 hover:scale-110 duration-300 delay-75">
                <i class="fas fa-eye"></i>
              </a>
            </div>
          </div>

          <!-- Product Info -->
          <div class="p-6 flex flex-col flex-grow">
            <!-- Category & Stock -->
            <div class="flex items-center justify-between mb-4">
              <span class="text-xs font-semibold text-amber-900 bg-amber-50 px-3 py-2 border border-amber-200">
                {{ $product->category ?? 'Furniture' }}
              </span>
              <span class="text-xs font-medium text-gray-600 bg-gray-100 px-3 py-2">
                <i class="fas fa-box-open mr-1"></i>{{ $product->stock ?? 0 }}
              </span>
            </div>

            <!-- Product Name -->
            <h3
              class="text-lg font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-amber-600 transition-colors leading-tight">
              {{ $product->name ?? 'Nama Produk' }}
            </h3>

            <!-- Description -->
            <p class="text-sm text-gray-600 mb-4 line-clamp-2 leading-relaxed flex-grow">
              {{ $product->description ?? 'Deskripsi produk akan ditampilkan di sini' }}
            </p>

            <!-- Price & Action -->
            <div class="flex items-center justify-between pt-4 border-t border-gray-200 mt-auto">
              <div>
                @if (($product->discount ?? 0) > 0)
                  <p class="text-xs text-gray-400 line-through mb-1">
                    Rp {{ number_format($product->original_price ?? 0, 0, ',', '.') }}
                  </p>
                @endif
                <p class="text-2xl font-bold text-amber-700">
                  Rp {{ number_format($product->price ?? 0, 0, ',', '.') }}
                </p>
              </div>

            </div>
          </div>
        </div>
      @empty

        <!-- Sample Product 1 -->
        <div class="bg-white transition-all duration-500 overflow-hidden group flex flex-col rounded-md">
          <div class="relative overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 aspect-square">
            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500" alt="Sofa Minimalis"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute top-5 left-0">
              <span class="bg-red-600 text-white text-xs font-bold px-4 py-2 shadow-lg rounded-r-xl">
                Sale -15%
              </span>
            </div>
            <div
              class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center gap-3">
              <button
                class="bg-white text-gray-900 p-4 hover:bg-amber-600 hover:text-white transition-all shadow-lg transform translate-y-8 group-hover:translate-y-0 hover:scale-110 duration-300">
                <i class="fas fa-edit"></i>
              </button>
              <button
                class="bg-white text-gray-900 p-4 hover:bg-blue-600 hover:text-white transition-all shadow-lg transform translate-y-8 group-hover:translate-y-0 hover:scale-110 duration-300 delay-75">
                <i class="fas fa-eye"></i>
              </button>
            </div>
          </div>
          <div class="p-6 flex flex-col flex-grow">
            <div class="flex items-center justify-between mb-4">
              <span class="text-xs font-semibold text-amber-900 bg-amber-50 px-3 py-2 border border-amber-200">Sofa</span>
              <span class="text-xs font-medium text-gray-600 bg-gray-100 px-3 py-2"><i
                  class="fas fa-box-open mr-1"></i>24</span>
            </div>
            <h3
              class="text-lg font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-amber-600 transition-colors leading-tight">
              Sofa Minimalis Modern 3 Seater
            </h3>
            <p class="text-sm text-gray-600 mb-4 line-clamp-2 leading-relaxed flex-grow">
              Sofa modern dengan desain minimalis, nyaman untuk ruang tamu Anda
            </p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-200 mt-auto">
              <div>
                <p class="text-2xl font-bold text-amber-700">Rp 4.500.000</p>
              </div>
            </div>
          </div>
        </div>
      @endforelse
    </div>

    <!-- Pagination -->
    <div
      class="mt-12 flex flex-col sm:flex-row items-center justify-between bg-white shadow border border-gray-200 px-8 py-6 gap-4">
      <div class="text-sm text-gray-600">
        Menampilkan <span class="font-bold text-gray-900">1-12</span> dari <span
          class="font-bold text-gray-900">156</span> produk
      </div>

      <div class="flex gap-2">
        <button
          class="px-5 py-3 border border-gray-300 hover:bg-gray-100 transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
          disabled>
          <i class="fas fa-chevron-left"></i>
        </button>

        <button class="px-5 py-3 bg-amber-600 text-white font-semibold shadow">1</button>
        <button class="px-5 py-3 border border-gray-300 hover:bg-gray-100 transition-colors">2</button>
        <button class="px-5 py-3 border border-gray-300 hover:bg-gray-100 transition-colors">3</button>
        <span class="px-5 py-3 text-gray-500">...</span>
        <button class="px-5 py-3 border border-gray-300 hover:bg-gray-100 transition-colors">13</button>

        <button class="px-5 py-3 border border-gray-300 hover:bg-gray-100 transition-colors">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>
@endsection
