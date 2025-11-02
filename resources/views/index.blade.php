@extends('layouts.page')
@section('title', 'Home')
@section('content')

  <!-- Hero Section with Slider -->
  <section class="relative h-screen overflow-hidden">
    <!-- Slider Container -->
    <div class="hero-slider relative h-screen w-full z-[1]">
      @php
        $rawImages = is_array($homeImageData->hero_img ?? null)
            ? $homeImageData->hero_img
            : (!empty($homeImageData?->hero_img)
                ? [$homeImageData->hero_img]
                : []);
        $resolved = [];
        foreach ($rawImages as $img) {
            if (is_string($img)) {
                if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://')) {
                    $resolved[] = $img;
                } elseif (str_starts_with($img, '/')) {
                    $resolved[] = asset(ltrim($img, '/'));
                } else {
                    $resolved[] = asset('storage/' . $img);
                }
            }
        }
        if (count($resolved) === 0) {
            $resolved = [
                asset('img/bg-hero.jpg'),
                asset('img/bg-wood.jpg'),
                asset('img/bg-wood2.jpg'),
                asset('img/coffe-table.avif'),
            ];
        }
      @endphp

      @foreach ($resolved as $idx => $url)
        <div
          class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out {{ $idx === 0 ? 'opacity-100' : 'opacity-0' }}"
          style="background-image: url('{{ $url }}');">

          {{-- Black Overlay --}}
          <div class="absolute inset-0 bg-black/50 z-[2]"></div>

          {{-- Konten di atas overlay --}}
          <div class="relative z-[2] flex items-center justify-center min-h-screen">
            <div class="text-center text-white px-6 drop-shadow-lg">
              <h2 class="text-5xl md:text-6xl font-bold mb-4">{{ $homeImageData->headline }}</h2>
              <p class="text-5xl md:text-6xl font-bold mb-4">{{ $homeImageData->name }}</p>
              <p class="text-3xl md:text-4xl mb-8">{{ $homeImageData->description }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Navigation Dots -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3">
      @foreach ($resolved as $i => $_)
        <button
          class="hero-dot w-3 h-3 rounded-full bg-white/60 hover:bg-white transition-colors duration-300 {{ $i === 0 ? 'active' : '' }}"
          data-slide="{{ $i }}"></button>
      @endforeach
    </div>

    <!-- Navigation Arrows -->
    <button
      class="hero-prev absolute left-8 top-1/2 transform -translate-y-1/2 z-20 bg-white/40 text-black w-12 h-12 rounded-full flex items-center justify-center hover:bg-white/60 transition-colors duration-300">
      <i class="fas fa-chevron-left text-lg"></i>
    </button>
    <button
      class="hero-next absolute right-8 top-1/2 transform -translate-y-1/2 z-20 bg-white/40 text-black w-12 h-12 rounded-full flex items-center justify-center hover:bg-white/60 transition-colors duration-300">
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


  <section class="py-16 bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-5">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Join Us on Social Media!</h2>
      <p class="text-xl text-gray-900 mb-8">Follow our journey, explore creative moments, and stay connected
        with our latest stories.</p>
    </div>


    {{-- Preview Video --}}
    <section>
      <div class="relative w-full overflow-hidden rounded-lg">
        <iframe class="w-full h-[600px]"
          src="https://www.youtube.com/embed/_QJF2ThyUV0?autoplay=1&mute=1&controls=0&loop=1&playlist=_QJF2ThyUV0&modestbranding=1&showinfo=0&rel=0&disablekb=0"
          title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
          referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
      </div>
    </section>

    <section>
      <div class="grid grid-cols-4 gap-3 mt-8">
        <div class="overflow-hidden rounded-xl w-full h-72">
          <a href="https://www.instagram.com/megah.marmer?igsh=MTh0cmE5bGpuNm1qbw%3D%3D" target="_blank">
            <img
              src="https://scontent.cdninstagram.com/v/t51.82787-15/571510409_18009311342803903_2782332124334334445_n.webp?_nc_cat=107&ig_cache_key=Mzc1NTkyNjc1MTc1MjEyNTcyNA%3D%3D.3-ccb1-7&ccb=1-7&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjE0NDB4MTQ0MC5zZHIuQzMifQ%3D%3D&_nc_ohc=wId6wW5bxCcQ7kNvwH6qsmI&_nc_oc=AdkbR6pwPdWhWDPUXkDSCZEkZSDGdUT3Qs73JaRQOrDU4Xa2X09JAA9h9Qzzq9l1UnQ&_nc_ad=z-m&_nc_cid=1225&_nc_zt=23&_nc_ht=scontent.cdninstagram.com&_nc_gid=KL-asGWCeN8VArXZZuZhZQ&oh=00_Afj9YWksBws0gRLzsm-q_RQC4hvp3KjrtN5AKvTnnV4xTw&oe=690CB238"
              alt="">
          </a>
        </div>
        <div class="overflow-hidden rounded-xl w-full h-72">
          <a href="https://web.facebook.com/profile.php?id=100083996764908&sk=photos" target="_blank">
            <img
              src="https://scontent.fsub32-2.fna.fbcdn.net/v/t51.82787-15/569356821_18008216207803903_8320461017739290166_n.webp?stp=dst-jpg_tt6&_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEEh2404MWGdmNm4NJ3vba02AnVFJ_kh6XYCdUUn-SHpYNPW5GhHRDqwsBzY5ottPa4zLOKyHbniFGniu44p77g&_nc_ohc=og52WscvxX8Q7kNvwFbTqaj&_nc_oc=AdleAM7_hhoaeVnIeYozRjFJyQyZ47EcXgbCplaDlf5jugDRkgULR1HmFvNxH_ppJpY&_nc_zt=23&_nc_ht=scontent.fsub32-2.fna&_nc_gid=2nWdYC7-atn0GWkeiyLZmQ&oh=00_AfgFJhYdo1er-1WI9OpLrPhv537ixrFQwdplPP2TeYFhyQ&oe=690CAACA"
              alt="">
          </a>
        </div>
        <div class="overflow-hidden rounded-xl w-full h-72">
          <a href="https://id.pinterest.com/megahmarmer/" target="_blank">
            <img src="https://i.pinimg.com/736x/c1/c1/85/c1c185fb81eb15a1487f90b43c1cb5f8.jpg" alt="">
          </a>
        </div>
        <div class="overflow-hidden rounded-xl w-full h-72">
          <a href="https://www.linkedin.com/in/megah-marmer-1996a5372/" target="_blank">
            <img
              src="https://media.licdn.com/dms/image/v2/D4E22AQFhlefAIE8B0A/feedshare-shrink_2048_1536/B4EZo.sT2QIQAw-/0/1761988402145?e=1763596800&v=beta&t=aKyxHoyRkRpBwyuiRQt5xTMKAnwYC8-uoqHgJRu9swQ"
              alt="">
          </a>
        </div>
      </div>
    </section>



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
          @foreach ($ourSelectionProducts as $orderItem)
            @php
              $product = $orderItem->categoryProduct;

              // Formatter USD
              $usd = fn($v) => number_format((float) $v, 2, '.', ',');

              // Data harga & diskon
              $price = (float) $product->price;
              $disc = max(0, min(100, (int) ($product->discount ?? 0)));
              $final = round(($price * (100 - $disc)) / 100, 2);
              $hasDisc = $disc > 0 && $final < $price;
            @endphp

            <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg group">
              <a
                href="{{ route('category.products.detail', [
                    'id_category' => $product->categorySub->category->id,
                    'id_sub_category' => $product->categorySub->id,
                    'id_product' => $orderItem->category_product_id,
                ]) }}">
                <div class="relative">
                  <img src="{{ $product->first_image_url }}" alt="{{ $product->name }}"
                    class="w-full h-64 object-cover group-hover:scale-105 transition-all duration-300">

                  <div
                    class="absolute bottom-4 left-4 text-white right-4 z-10 group-hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-between text-sm">
                      <div>
                        <h4 class="font-semibold">{{ $product->name }}</h4>
                        <p class="font-light">{{ \Illuminate\Support\Str::limit($product->description, 38) }}</p>

                        @if ($hasDisc)
                          <div class="flex items-baseline gap-2">
                            <span class="font-semibold text-sm">${{ $usd($final) }}</span>
                            <span class="text-xs line-through text-gray-300">${{ $usd($price) }}</span>
                          </div>
                        @else
                          <span class="font-semibold text-sm">${{ $usd($price) }}</span>
                        @endif
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


  {{-- Season --}}
  {{-- <section class="bg-cover relative bg-center bg-[url('../../public/img/bg-wood2.jpg')] min-h-screen"> --}}
  <section class="min-h-screen bg-gray-900">
    <div class="absolute bg-gradient-to-b from-black/70 to-white/0 bottom-0 right-0 top-0 h-full left-0"></div>

    <div class="py-8 md:py-12 lg:py-16 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <header class="mb-6 md:mb-8">
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-2">Right now</h3>
          <p class="text-sm sm:text-base text-gray-300">Discover our latest news</p>
        </header>

        @php
          $items = ($seasons ?? collect())->values();
        @endphp
        @if ($items->count() > 0)
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 mb-3">
            @if ($items->get(0))
              <a href="{{ route('products.all') }}">
                <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group hover:cursor-pointer">
                  <img src="{{ asset('storage/' . $items[0]->image) }}" alt="{{ $items[0]->title }}"
                    class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">

                  <div
                    class="absolute bg-gradient-to-t from-black/70 to-transparent backdrop-blur-xs p-3 flex flex-col justify-end text-white text-sm sm:text-base lg:text-lg bottom-0 right-0 left-0 h-3/12">
                    <p class="font-semibold truncate">{{ $items[0]->title }}</p>
                    <p class="text-gray-200 line-clamp-2 text-sm">{{ $items[0]->description }}</p>
                  </div>
                </div>
              </a>
            @endif

            @if ($items->get(1))
              <a href="{{ route('products.all') }}">
                <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group hover:cursor-pointer">
                  <img src="{{ asset('storage/' . $items[1]->image) }}" alt="{{ $items[1]->title }}"
                    class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
                  <div
                    class="absolute bg-gradient-to-t from-black/70 to-transparent backdrop-blur-xs p-3 flex flex-col justify-end text-white text-sm sm:text-base lg:text-lg bottom-0 right-0 left-0 h-3/12">
                    <p class="font-semibold truncate">{{ $items[1]->title }}</p>
                    <p class="text-gray-200 line-clamp-2 text-sm">{{ $items[1]->description }}</p>
                  </div>
                </div>
              </a>
            @endif

            @if ($items->get(2))
              <a href="{{ route('products.all') }}" class="col-span-2">
                <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group col-span-2 hover:cursor-pointer">
                  <img src="{{ asset('storage/' . $items[2]->image) }}" alt="{{ $items[2]->title }}"
                    class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
                  <div
                    class="absolute bg-gradient-to-t from-black/70 to-transparent backdrop-blur-xs p-3 flex flex-col justify-end text-white text-sm sm:text-base lg:text-lg bottom-0 right-0 left-0 h-3/12">
                    <p class="font-semibold truncate">{{ $items[2]->title }}</p>
                    <p class="text-gray-200 line-clamp-2 text-sm">{{ $items[2]->description }}</p>
                  </div>
                </div>
              </a>
            @endif
          </div>

          <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-3">
            @if ($items->get(3))
              <a href="{{ route('products.all') }}">
                <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group hover:cursor-pointer">
                  <img src="{{ asset('storage/' . $items[3]->image) }}" alt="{{ $items[3]->title }}"
                    class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
                  <div
                    class="absolute bg-gradient-to-t from-black/70 to-transparent backdrop-blur-xs p-3 flex flex-col justify-end text-white text-sm sm:text-base lg:text-lg bottom-0 right-0 left-0 h-3/12">
                    <p class="font-semibold truncate">{{ $items[3]->title }}</p>
                    <p class="text-gray-200 line-clamp-2 text-sm">{{ $items[3]->description }}</p>
                  </div>
                </div>
              </a>
            @endif
            @if ($items->get(4))
              <a href="{{ route('products.all') }}">
                <div class="overflow-hidden rounded w-full h-64 sm:h-72 relative group hover:cursor-pointer">
                  <img src="{{ asset('storage/' . $items[4]->image) }}" alt="{{ $items[4]->title }}"
                    class="h-full w-full object-cover group-hover:scale-110 transition-all duration-500">
                  <div
                    class="absolute bg-gradient-to-t from-black/70 to-transparent backdrop-blur-xs p-3 flex flex-col justify-end text-white text-sm sm:text-base lg:text-lg bottom-0 right-0 left-0 h-3/12">
                    <p class="font-semibold truncate">{{ $items[4]->title }}</p>
                    <p class="text-gray-200 line-clamp-2 text-sm">{{ $items[4]->description }}</p>
                  </div>
                </div>
              </a>
            @endif
          </div>
        @endif
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
            @php
              // Formatter USD: 1,234.56
              $usd = fn($v) => number_format((float) $v, 2, '.', ',');

              $price = (float) $newProduct->price; // decimal -> string, paksa ke float
              $disc = max(0, min(100, (int) ($newProduct->discount ?? 0))); // clamp 0..100
              $final = round(($price * (100 - $disc)) / 100, 2);
              $hasDisc = $disc > 0 && $final < $price;

              // Amanin gambar pertama
              $img0 =
                  is_array($newProduct->image) && isset($newProduct->image[0])
                      ? asset('storage/' . $newProduct->image[0])
                      : asset('img/placeholder.jpg');
            @endphp

            <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg group">
              <a
                href="{{ route('category.products.detail', [
                    'id_category' => $newProduct->categorySub->category->id,
                    'id_sub_category' => $newProduct->categorySub->id,
                    'id_product' => $newProduct->id,
                ]) }}">
                <div class="relative">
                  <img src="{{ $img0 }}" alt="{{ $newProduct->name }}"
                    class="w-full h-64 object-cover group-hover:scale-105 transition-all duration-300">

                  <div
                    class="absolute bottom-4 left-4 text-white right-4 z-10 group-hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-between text-sm">
                      <div>
                        <h4 class="font-semibold">{{ $newProduct->name }}</h4>
                        <p class="font-light">
                          {{ \Illuminate\Support\Str::limit($newProduct->description, 38) }}
                        </p>

                        @if ($hasDisc)
                          <div class="flex items-baseline gap-2">
                            <span class="font-semibold text-sm">${{ $usd($final) }}</span>
                            <span class="text-xs line-through text-gray-300">${{ $usd($price) }}</span>

                          </div>
                        @else
                          <span class="font-semibold text-sm">${{ $usd($price) }}</span>
                        @endif
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

<script async src="https://www.tiktok.com/embed.js"></script>
