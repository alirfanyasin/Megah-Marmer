@extends('layouts.page')
@section('title', 'Home')
@section('content')

  <!-- Hero Section with Slider -->
  <section class="relative min-h-screen overflow-hidden">
    <!-- Slider Container -->
    <div class="hero-slider relative w-full h-screen">
      <!-- Slide 1 -->
      <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-100"
        style="background-image: url('{{ asset('storage/' . $homeImageData->hero_img) }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen">
          <div class="text-center text-white">
            <h2 class="text-5xl md:text-6xl font-bold mb-4">{{ $homeImageData->headline }}</h2>
            <p class="text-5xl md:text-6xl font-bold mb-8">{{ $homeImageData->description }}</p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0"
        style="background-image: url('{{ asset('img/bg-hero.jpg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen">
          <div class="text-center text-white">
            <h2 class="text-5xl md:text-6xl font-bold mb-4">{{ $homeImageData->headline }}</h2>
            <p class="text-5xl md:text-6xl font-bold mb-8">{{ $homeImageData->description }}</p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0"
        style="background-image: url('{{ asset('img/bg-wood.jpg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen">
          <div class="text-center text-white">
            <h2 class="text-5xl md:text-6xl font-bold mb-4">{{ $homeImageData->headline }}</h2>
            <p class="text-5xl md:text-6xl font-bold mb-8">{{ $homeImageData->description }}</p>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0"
        style="background-image: url('{{ asset('img/bg-wood2.jpg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen">
          <div class="text-center text-white">
            <h2 class="text-5xl md:text-6xl font-bold mb-4">{{ $homeImageData->headline }}</h2>
            <p class="text-5xl md:text-6xl font-bold mb-8">{{ $homeImageData->description }}</p>
          </div>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0"
        style="background-image: url('{{ asset('img/coffe-table.avif') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen">
          <div class="text-center text-white">
            <h2 class="text-5xl md:text-6xl font-bold mb-4">{{ $homeImageData->headline }}</h2>
            <p class="text-5xl md:text-6xl font-bold mb-8">{{ $homeImageData->description }}</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Dots -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3">
      <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors duration-300 active"
        data-slide="0"></button>
      <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors duration-300"
        data-slide="1"></button>
      <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors duration-300"
        data-slide="2"></button>
      <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors duration-300"
        data-slide="3"></button>
      <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors duration-300"
        data-slide="4"></button>
    </div>

    <!-- Navigation Arrows -->
    <button
      class="hero-prev absolute left-8 top-1/2 transform -translate-y-1/2 z-20 bg-black/30 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-black/50 transition-colors duration-300">
      <i class="fas fa-chevron-left text-lg"></i>
    </button>
    <button
      class="hero-next absolute right-8 top-1/2 transform -translate-y-1/2 z-20 bg-black/30 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-black/50 transition-colors duration-300">
      <i class="fas fa-chevron-right text-lg"></i>
    </button>
  </section>

  <!-- Our Worlds Section -->
  <section class="py-16 bg-white" id="our-world-selection">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Megah Marmer, creator of furniture</h2>
        <h3 class="text-3xl font-bold text-gray-900 mb-8">Our worlds</h3>

        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-8">
          <a href="{{ route('products.all') }}"
            class="bg-black text-white px-6 py-2 hover:cursor-pointer rounded-full">All</a>
          @foreach ($categories as $categoryMenu)
            <a href="{{ route('category.sub', ['id_category' => $categoryMenu->id]) }}"
              class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-300">{{ $categoryMenu->name }}</a>
          @endforeach
        </div>
      </div>

      <!-- Category Grid -->
      <div class="relative">
        <div class="worlds-carousel flex gap-6 overflow-x-hidden">
          @foreach ($categories as $category)
            <a href="{{ route('category.sub', ['id_category' => $category->id]) }}"
              class="flex-shrink-0 w-80 relative rounded-lg overflow-hidden">
              @if ($category->image && file_exists(public_path('storage/' . $category->image)))
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
              @else
                <img src="{{ $category->image }}" alt="{{ $category->name }}"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
              @endif
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end">
                <h4 class="text-white text-xl font-bold p-4 w-full">{{ $category->name }}</h4>
              </div>
            </a>
          @endforeach

        </div>

        <!-- Navigation Buttons -->
        <button
          class="worlds-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button
          class="worlds-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </section>

  <!-- Our Selection Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between mb-8">
        <div>
          <h3 class="text-3xl font-bold text-gray-900 mb-2">Our selection</h3>
          <div class="flex flex-wrap">
            The best choice for product recommendations for you
          </div>
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
        <div class="product-carousel flex gap-6 overflow-x-hidden">
          @foreach ($recommendationProducts as $recomprod)
            <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg group">
              <a
                href="{{ route('category.products.detail', ['id_category' => $recomprod->categorySub->category->id, 'id_sub_category' => $recomprod->categorySub->id, 'id_product' => $recomprod->id]) }}">
                <div class="relative">
                  <img src="{{ asset('storage/' . $recomprod->image[0]) }}" alt="{{ $recomprod->name }}"
                    class="w-full h-64 object-cover group-hover:scale-105 transition-all duration-300">
                  <div
                    class="absolute bottom-4 left-4 text-white right-4 z-10 group-hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-between text-sm">
                      <div>
                        <h4 class="font-semibold">{{ $recomprod->name }}</h4>
                        <p class="font-light">{{ Str::substr($recomprod->description, 0, 38) }}</p>
                        <p class="font-semibold text-sm">$ {{ number_format($recomprod->price, 0, ',', '.') }}</p>
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

  <!-- Our Category Products Section -->
  {{-- <section class="py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="mb-8">
        <h3 class="text-4xl font-bold text-gray-900 mb-2">Our Category Products</h3>
        <p class="text-gray-600">Best category for and have</p>
      </div>

      <div class="relative">
        <div class="news-carousel flex gap-6 overflow-x-hidden">
          @foreach ($categorySubDatas as $subCategoryData)
            <div class="flex-shrink-0 w-96 bg-white rounded-lg overflow-hidden shadow-lg">
              <div class="relative h-64">
                @if ($subCategoryData->image && file_exists(public_path('storage/' . $subCategoryData->image)))
                  <img src="{{ asset('storage/' . $subCategoryData->image) }}"
                    alt="Contemporary living space featuring modern sofa and wooden furniture elements"
                    class="w-full h-full object-cover">
                @else
                  <img src="{{ $subCategoryData->image }}"
                    alt="Contemporary living space featuring modern sofa and wooden furniture elements"
                    class="w-full h-full object-cover">
                @endif
                <div class="absolute bottom-4 left-4 text-white">
                  <h4 class="text-xl font-bold mb-2">{{ $subCategoryData->name }}</h4>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <button
          class="news-prev hover:cursor-pointer absolute left-0 top-1/2 transform -translate-y-1/2 bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button
          class="news-next hover:cursor-pointer absolute right-0 top-1/2 transform -translate-y-1/2 bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </section> --}}

  <!-- Features Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-wrap justify-center gap-8 lg:gap-16">
        <div class="flex items-center space-x-3">
          <i class="fas fa-tools text-gray-600 text-xl"></i>
          <span class="text-gray-700">Assembled Furniture</span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-tree text-gray-600 text-xl"></i>
          <span class="text-gray-700">Solid wood Furniture</span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-hammer text-gray-600 text-xl"></i>
          <span class="text-gray-700">Traditional Craftmanship</span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-shield-alt text-gray-600 text-xl"></i>
          <span class="text-gray-700">5 year Warranty</span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-clock text-gray-600 text-xl"></i>
          <span class="text-gray-700">Designed to last</span>
        </div>
      </div>
    </div>
  </section>


  {{-- Discover --}}
  <section class="bg-cover relative bg-center bg-[url('../../public/img/bg-wood2.jpg')] min-h-screen">
    <div class="absolute bg-gradient-to-b from-black/70 to-white/0 bottom-0 right-0 top-0 h-full left-0"></div>

    <div class="py-8 md:py-12 lg:py-16 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <header class="mb-6 md:mb-8">
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-2">Right now</h3>
          <p class="text-sm sm:text-base text-gray-300">Discover our latest news</p>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 mb-3">
          <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group">
            <img
              src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
              alt="Living space sofa"
              class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
            <div
              class="absolute bg-gradient-to-t p-3 flex items-center text-white text-sm sm:text-base lg:text-lg from-black/70 to-white/0 backdrop-blur-xs bottom-0 right-0 h-3/12 left-0">
              The sofa defines your living space.
            </div>
          </div>

          <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group">
            <img
              src="https://images.unsplash.com/photo-1600494448850-6013c64ba722?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1074"
              alt="DARIO modular sofa"
              class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
            <div
              class="absolute bg-gradient-to-t p-3 flex items-center text-white text-sm sm:text-base lg:text-lg from-black/70 to-white/0 backdrop-blur-xs bottom-0 right-0 h-3/12 left-0">
              The DARIO modular sofa is thoughtfully designed.
            </div>
          </div>

          <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group sm:col-span-2">
            <img
              src="https://images.unsplash.com/photo-1683731332610-23d833f5871f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
              alt="Favourite furniture pieces"
              class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
            <div
              class="absolute bg-gradient-to-t p-3 flex items-center text-white text-sm sm:text-base lg:text-lg from-black/70 to-white/0 backdrop-blur-xs bottom-0 right-0 h-3/12 left-0">
              Rediscover your favourite pieces
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
          <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group sm:col-span-2">
            <img
              src="https://images.unsplash.com/photo-1525906336592-11c866dd1d4a?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
              alt="FSC certified forest"
              class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
            <div
              class="absolute bg-gradient-to-t p-3 flex items-center text-white text-sm sm:text-base lg:text-lg from-black/70 to-white/0 backdrop-blur-xs bottom-0 right-0 h-3/12 left-0">
              What does it mean when a forest is FSC® certified?
            </div>
          </div>

          <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group">
            <img
              src="https://images.unsplash.com/photo-1615506430606-b37113426217?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
              alt="New coffee tables"
              class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
            <div
              class="absolute bg-gradient-to-t p-3 flex items-center text-white text-sm sm:text-base lg:text-lg from-black/70 to-white/0 backdrop-blur-xs bottom-0 right-0 h-3/12 left-0">
              New arrivals - Coffee tables
            </div>
          </div>

          <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group">
            <img
              src="https://images.unsplash.com/photo-1605885795793-097ffaee6b7c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1074"
              alt="New chairs" class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
            <div
              class="absolute bg-gradient-to-t p-3 flex items-center text-white text-sm sm:text-base lg:text-lg from-black/70 to-white/0 backdrop-blur-xs bottom-0 right-0 h-3/12 left-0">
              New arrivals - Chairs
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="absolute bg-gradient-to-t from-black/70 to-white/0 bottom-0 right-0 top-0 h-full left-0"></div>
  </section>

  <!-- New Products Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center mb-8">
        <div class="flex-1">
          <div class="flex items-center mb-4">
            <div>
              <h3 class="text-2xl font-bold text-gray-900">Our Newest Products</h3>
              <p class="text-gray-600">Check out our latest and high-quality products.!</p>
            </div>
          </div>
        </div>

        <div class="flex gap-2">
          <button
            class="instagram-prev bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button
            class="instagram-next bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <!-- New Products Grid -->
      <div class="relative">
        <div class="instagram-carousel flex gap-4 overflow-x-hidden">
          @foreach ($newProducts as $newProduct)
            <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg group">
              <a
                href="{{ route('category.products.detail', ['id_category' => $newProduct->categorySub->category->id, 'id_sub_category' => $newProduct->categorySub->id, 'id_product' => $newProduct->id]) }}">
                <div class="relative">
                  <img src="{{ asset('storage/' . $newProduct->image[0]) }}" alt="{{ $newProduct->name }}"
                    class="w-full h-64 object-cover group-hover:scale-105 transition-all duration-300">
                  <div
                    class="absolute bottom-4 left-4 text-white right-4 z-10 group-hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-between text-sm">
                      <div>
                        <h4 class="font-semibold">{{ $newProduct->name }}</h4>
                        <p class="font-light">{{ Str::substr($newProduct->description, 0, 38) }}</p>
                        <p class="font-semibold text-sm">$ {{ number_format($newProduct->price, 0, ',', '.') }}</p>
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
