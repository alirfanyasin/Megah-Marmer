@extends('layouts.page')
@section('title', 'Products')
@section('content')
  {{-- Hero Section with Image Gallery --}}
  <section class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      {{-- Left Side - Image Gallery (Scrollable) --}}
      <div class="space-y-4">
        {{-- Main Image --}}
        <div class="relative aspect-square bg-gray-100 rounded-lg overflow-hidden">
          <img src="{{ asset('img/product/meja-01.avif') }}" alt="Celeste TV Unit"
            class="w-full h-full object-cover cursor-pointer">
        </div>

        {{-- Thumbnail Grid --}}
        <div class="grid grid-cols-2 gap-4">
          <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer hover:opacity-80 transition">
            <img src="{{ asset('img/product/meja-02.avif') }}" alt="Celeste TV Unit View 2"
              class="w-full h-full object-cover">
          </div>
          <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer hover:opacity-80 transition">
            <img src="{{ asset('img/product/meja-04.avif') }}" alt="Celeste TV Unit View 3"
              class="w-full h-full object-cover">
          </div>
          <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer hover:opacity-80 transition">
            <img src="{{ asset('img/product/meja-03.avif') }}" alt="Celeste TV Unit View 4"
              class="w-full h-full object-cover">
          </div>
          <div
            class="relative aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer hover:opacity-80 transition">
            <img src="{{ asset('img/product/meja-05.avif') }}" alt="Celeste TV Unit View 5"
              class="w-full h-full object-cover">
          </div>
        </div>
      </div>

      {{-- Right Side - Product Details (Sticky) --}}
      <div class="lg:sticky lg:top-8 lg:self-start space-y-6 lg:h-fit">
        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-600">
          <ol class="flex flex-wrap items-center gap-2">
            <li><a href="/" class="hover:text-gray-900">Home</a></li>
            <li>›</li>
            <li><a href="/living-room" class="hover:text-gray-900">Living room</a></li>
            <li>›</li>
            <li><a href="/tv-stands" class="hover:text-gray-900">TV Stands</a></li>
            <li>›</li>
            <li class="text-gray-900">Celeste - Solid pine TV unit - 180 cm</li>
          </ol>
        </nav>

        {{-- Sale Badge --}}
        <div class="inline-block">
          <span class="bg-red-900 text-white text-xs font-semibold px-3 py-1 rounded">
            Sale -20%
          </span>
          <span class="text-sm text-gray-600 ml-2">Until 06/10</span>
        </div>

        {{-- Product Title --}}
        <div>
          <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Celeste</h1>
          <p class="text-lg text-gray-600">Solid pine TV unit - 180 cm</p>
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
              <p class="text-sm font-semibold text-gray-900">50cm</p>
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
              <p class="text-sm font-semibold text-gray-900">180cm</p>
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
              <p class="text-sm font-semibold text-gray-900">50cm</p>
            </div>
          </div>
        </div>

        {{-- Reviews and Certifications --}}
        <div class="flex flex-wrap items-center gap-4">
          <div class="flex items-center gap-2">
            <div class="flex text-yellow-400">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path
                  d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
              </svg>
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path
                  d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
              </svg>
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path
                  d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
              </svg>
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path
                  d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
              </svg>
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path
                  d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
              </svg>
            </div>
            <a href="#reviews" class="text-sm text-gray-700 hover:underline">122 Reviews</a>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-xs text-gray-600 bg-gray-100 px-2 py-1 rounded">Eco-friendly grade</span>
          </div>
        </div>

        {{-- Features --}}
        <ul class="space-y-3">
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
            <span class="text-sm text-gray-700">Solid pine certified FSC<sup>®</sup>. Responsible forest
              management</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
            <span class="text-sm text-gray-700">Easy to maintain: pre-coated with a protective varnish</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
            <span class="text-sm text-gray-700">Practical and functional: unit with smart storage solutions</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
            <span class="text-sm text-gray-700">Pre-assembled</span>
          </li>
        </ul>

        {{-- Price --}}
        <div class="flex items-baseline gap-3">
          <span class="text-3xl font-bold text-red-900">£699</span>
          <span class="text-xl text-gray-400 line-through">£879</span>
        </div>

        {{-- Action Buttons --}}
        <div class="gap-3">
          <button
            class="flex-1 bg-black text-white font-semibold py-3 px-6 rounded-lg hover:bg-gray-800 transition flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            Add to basket
          </button>
        </div>

        {{-- Delivery Info --}}
        <div class="bg-gray-50 p-4 rounded-lg">
          <p class="text-sm text-gray-700">
            <span class="font-semibold">Delivery within 10 working days</span> : Delivery from £49.90
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- Features Section --}}
  <section class="bg-gray-50 py-16 mt-10">
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
  </section>

  {{-- Product Description --}}
  <section class="px-4 py-16">
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
  </section>


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
          @for ($i = 0; $i < 12; $i++)
            <!-- Product 1 -->
            <div class="flex-shrink-0 w-60 bg-white rounded-lg overflow-hidden shadow-lg group">
              <a href="">
                <div class="relative">
                  <img
                    src="https://placeholder-image-service.onrender.com/image/320x300?prompt=Wooden bed frame with slatted headboard, neutral bedding, and modern bedroom styling&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                    alt="Théodore wooden bed frame with vertical slat headboard design"
                    class="w-full h-80 object-cover">
                  <div
                    class="absolute bottom-4 left-4 text-white right-4 z-10 group-hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-between text-sm">
                      <div>
                        <h4 class="font-semibold">Samson</h4>
                        <p class="font-light">Lorem ipsum dolor sit.</p>
                      </div>
                      <p class="font-semibold text-sm">£699</p>
                    </div>
                  </div>
                  <div class="absolute bg-gradient-to-t from-black/90 to-white/0 bottom-0 right-0 h-1/3 left-0"></div>
                </div>
              </a>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </section>
@endsection
