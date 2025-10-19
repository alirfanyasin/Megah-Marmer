@extends('layouts.page')
@section('title', 'Category Products')
@section('content')
  <div>
    <section id="category-desc" class="max-w-5xl mx-auto my-10 space-y-4 px-4 text-center">
      <h2 class="text-2xl font-semibold">All Products</h2>
    </section>
    <section class="max-w-7xl mx-auto">
      @if (request('search'))
        <div class="px-4 pt-6">
          <p class="text-gray-700 text-sm mb-4">
            Showing results for: <span class="font-semibold">{{ request('search') }}</span>
          </p>
        </div>
      @endif

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        @forelse ($allProducts as $product)
          @php
            // Gambar: dukung array JSON atau string single path
            $img = is_array($product->image)
                ? $product->image[0] ?? null
                : (is_string($product->image)
                    ? $product->image
                    : null);
            $imgUrl = $img ? Storage::url($img) : asset('images/placeholder.jpg');

            $hasDiscount = (int) ($product->discount ?? 0) > 0;
            $finalPrice = $hasDiscount
                ? (int) round($product->price * (1 - (int) $product->discount / 100))
                : (int) $product->price;
          @endphp

          <div class="overflow-hidden transition-shadow duration-300 group bg-white rounded-lg shadow">
            <a href="{{ route('category.products.detail', ['id_category' => $product->categorySub->category->id, 'id_sub_category' => $product->categorySub->id, 'id_product' => $product->id]) }}"
              class="block">
              <div class="relative overflow-hidden bg-gray-100">
                @if ($hasDiscount)
                  <div
                    class="absolute top-4 left-4 bg-red-900 text-white px-3 py-1 rounded-md text-sm font-semibold z-10">
                    Sale -{{ (int) $product->discount }}%
                  </div>
                @endif

                <img src="{{ $imgUrl }}" alt="{{ $product->name }}"
                  class="w-full h-80 object-cover transition-transform duration-300 group-hover:scale-105" loading="lazy">

                <div
                  class="absolute bottom-4 right-4 flex flex-col gap-2 z-10 opacity-0 translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                  <button class="bg-black hover:bg-gray-800 text-white rounded-full p-3 transition" type="button"
                    aria-label="Quick view">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                  </button>
                </div>
              </div>

              <div class="p-4">
                <h3 class="text-xl font-bold text-gray-900 mb-1 line-clamp-1">{{ $product->name }}</h3>
                <p class="text-gray-600 text-sm mb-3">{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>

                <p class="text-gray-600 font-semibold text-sm mb-1">
                  {{ optional(optional($product->categorySub)->category)->name }} -
                  {{ optional($product->categorySub)->name }}
                </p>

                <div class="flex items-center gap-2">
                  <p class="text-red-900 font-bold text-lg">Rp. {{ number_format($finalPrice, 0, ',', '.') }}</p>
                  @if ($hasDiscount)
                    <p class="text-gray-400 line-through text-sm">Rp.
                      {{ number_format((int) $product->price, 0, ',', '.') }}</p>
                  @endif
                </div>
              </div>
            </a>
          </div>
        @empty
          <p class="text-center text-gray-500 col-span-full py-10">No products found.</p>
        @endforelse
      </div>

      <div class="px-4 pb-8 bg-white text-black">
        {{-- pakai pagination yang sudah kamu custom kemarin --}}
        {{ $allProducts->onEachSide(1)->withQueryString()->links() }}
      </div>
    </section>


  </div>
@endsection
