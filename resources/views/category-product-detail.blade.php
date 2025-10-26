@extends('layouts.page')
@section('title', 'Products')
@section('content')
  {{-- Hero Section with Image Gallery --}}
  <section class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      {{-- Left Side - Image Gallery (Scrollable) --}}
      @php
        $images = is_array($product->image) ? $product->image : json_decode($product->image, true);
      @endphp
      <div class="space-y-4">
        {{-- Main Image --}}
        <div class="relative aspect-square bg-gray-100 rounded overflow-hidden">
          <img src="{{ asset('storage/' . $images[0]) }}" alt="Celeste TV Unit"
            class="w-full h-full object-cover cursor-pointer">
        </div>

        {{-- Thumbnail Grid --}}
        <div class="grid grid-cols-2 gap-4">
          @foreach (array_slice($images, 1) as $thumb)
            <div class="aspect-square bg-gray-100 rounded overflow-hidden cursor-pointer hover:opacity-80 transition">
              <img src="{{ asset('storage/' . $thumb) }}" alt="Product Thumbnail" class="w-full h-full object-cover">
            </div>
          @endforeach
        </div>
      </div>

      {{-- Right Side - Product Details (Sticky) --}}
      <div class="lg:sticky lg:top-8 lg:self-start space-y-6 lg:h-fit">
        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600">
          <ol class="flex flex-wrap items-center gap-2">
            <li><a href="/" class="hover:text-gray-900">Home</a></li>
            <li>›</li>
            <li><a href="{{ route('category.sub', ['id_category' => $category->id]) }}"
                class="hover:text-gray-900">{{ $category->name }}</a></li>
            <li>›</li>
            <li><a
                href="{{ route('category.products', ['id_category' => $category->id, 'id_sub_category' => $categorySub->id]) }}"
                class="hover:text-gray-900">{{ $categorySub->name }}</a></li>
            <li>›</li>
            <li class="text-gray-900">{{ $product->name }}</li>
          </ol>
        </nav>

        {{-- Sale Badge --}}
        @if ($product->discount != 0)
          <div class="inline-block">
            <span class="bg-red-900 text-white text-xs font-semibold px-3 py-1 rounded">
              Sale -{{ $product->discount }}%
            </span>
          </div>
        @endif


        {{-- Product Title --}}
        <div>
          <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
          <p class="text-md text-gray-600">{{ $product->description }}</p>
        </div>

        {{-- Dimensions --}}
        <div class="flex flex-wrap gap-6">
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 flex items-center justify-center text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-500">Height</p>
              <p class="text-sm font-semibold text-gray-900">{{ $product->height }}cm</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 flex items-center justify-center text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12M8 12h12m-12 5h12" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-500">Width</p>
              <p class="text-sm font-semibold text-gray-900">{{ $product->width }}cm</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 flex items-center justify-center text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-500">Depth</p>
              <p class="text-sm font-semibold text-gray-900">{{ $product->depth }}cm</p>
            </div>
          </div>
        </div>


        {{-- Features --}}
        <ul class="space-y-3">
          @foreach ($product->description_point as $index => $point)
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-700">{{ $point }}</span>
            </li>
          @endforeach
        </ul>

        {{-- Price --}}
        <div class="flex items-baseline gap-3">
          @if ($product->discount !== 0)
            <span class="text-3xl font-bold text-red-900">$
              {{ number_format($product->price * (1 - $product->discount / 100), 0, ',', '.') }}</span>
            <span class="text-xl text-gray-400 line-through">$
              {{ number_format($product->price, 0, ',', '.') }}</span>
          @else
            <span class="text-3xl font-bold text-red-900">$ {{ number_format($product->price, 0, ',', '.') }}</span>
          @endif
        </div>

        {{-- Action Buttons --}}
        <div class="gap-3">
          <a href="mailto:{{ $emailOrder->email }}?subject=Order%20Produk%20{{ $product->name }}&body=Halo,%0A%0ASaya tertarik dengan produk {{ $product->name }}.%0A%0ADetail produk:%0A- Nama: {{ $product->name }}%0A- Harga: ${{ number_format($product->price, 0, ',', '.') }}%0A- Deskripsi: {{ $product->description }}%0A%0ATerima kasih."
            class="inline-block" target="_blank">
            <div
              class="transition flex items-center justify-center gap-2 bg-black text-white font-semibold py-3 px-6 rounded-lg hover:bg-gray-800">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              Order Now
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Features Section --}}
  {{-- <section class="bg-gray-50 py-16 mt-10">
    <div class="container mx-auto w-10/12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-20">
        <div class="flex items-center justify-center gap-4 text-gray-600">
          <iconify-icon icon="basil:award-outline" width="32"></iconify-icon>
          <p class="text-md">5 years Warranty</p>
        </div>
        <div class="flex items-center justify-center gap-4 text-gray-500">
          <iconify-icon icon="iconoir:credit-cards" width="32"></iconify-icon>
          <p class="text-md">Pay in 3 instalments
            at no extra cost</p>
        </div>
        <div class="flex items-center justify-center gap-4 text-gray-500">
          <iconify-icon icon="solar:refresh-linear" width="32"></iconify-icon>
          <p class="text-md">Free returns within 60 days</p>
        </div>
        <div class="flex items-center justify-center gap-4 text-gray-500">
          <iconify-icon icon="material-symbols:delivery-truck-speed-outline" width="32"></iconify-icon>
          <p class="text-md">Delivery to your room of choice</p>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- Product Description --}}
  {{-- <section class="px-4 py-16">
    <div class="container mx-auto w-10/12 grid grid-cols-1 md:grid-cols-3 gap-10">
      <div class="md:col-span-2 space-y-6">
        <div class="flex items-center gap-3">
          <iconify-icon icon="quill:text-left" width="24" height="24"></iconify-icon>
          <h2 class="text-md font-semibold text-lg">Product Description</h2>
        </div>
        <div>
          <p>The Adam TV unit is crafted from untreated teak sourced from Indonesia. Featuring a closed niche and a
            removable
            shelf, it's ideal as a practical storage piece. You'll appreciate its sophisticated look and classic, elegant
            lines, with added charm in its natural beige tone. For added convenience, it includes a sliding door and a
            cable
            cut-out at the back for easy cable management.</p>
          <p>For a harmonious living room, explore our Les Essentiels collection—a range of functional furniture in a
            modern
            style. With their timeless, elegant design, these pieces will find their place easily throughout the home.</p>
          <p>To create a warm, inviting atmosphere, style your unit with decorative accessories. Discover our selection of
            décor chosen by our designers. Here you'll find our original wall calendar, the Bonbonne Nanou vase, the
            Léonti
            Green lantern, one of our two Bluegrey boxes, the Litho Ipso frame, and our Hedda ethnic rug.</p>
        </div>
      </div>

      <div>
        <img src="{{ asset('img/product/meja-02.avif') }}" alt="Product Detail Image"
          class="w-full h-full object-cover rounded-lg">
      </div>
    </div>
  </section> --}}


  <!-- Our Selection Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between mb-8">
        <div>
          <h3 class="text-2xl font-normal text-gray-900 mb-4">You might also like</h3>
        </div>
        <div class="flex gap-2">
          <button
            class="product-prev bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button
            class="product-next bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <!-- Product Grid -->
      <div class="relative">
        <div class="product-carousel flex gap-3 overflow-x-hidden">
          @foreach ($recommendationProducts as $recomprod)
            <div class="flex-shrink-0 w-60 bg-white rounded-lg overflow-hidden shadow-lg group">
              <a
                href="{{ route('category.products.detail', ['id_category' => $category->id, 'id_sub_category' => $categorySub->id, 'id_product' => $recomprod->id]) }}">
                <div class="relative">
                  <img src="{{ asset('storage/' . $recomprod->image[0]) }}" alt="{{ $recomprod->name }}"
                    class="w-full h-80 object-cover">
                  <div
                    class="absolute bottom-4 left-4 text-white right-4 z-10 group-hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-between text-sm">
                      <div>
                        <h4 class="font-semibold">{{ $recomprod->name }}</h4>
                        <p class="font-light">{{ Str::substr($recomprod->description, 0, 28) }}</p>
                        <p class="font-semibold text-sm">Rp. {{ number_format($recomprod->price, 0, ',', '.') }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="absolute bg-gradient-to-t from-black/90 to-white/0 bottom-0 right-0 h-2/3 left-0"></div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
