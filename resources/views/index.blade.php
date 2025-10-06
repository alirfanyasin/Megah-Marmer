@extends('layouts.page')
@section('title', 'Home')
@section('content')

  <!-- Hero Section -->
  <section class="relative min-h-screen bg-cover bg-center bg-[url('../../public/img/bg-hero.jpg')]">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen">
      <div class="text-center text-white">
        <h2 class="text-5xl md:text-6xl font-bold mb-4">10% off the entire website*</h2>
        <p class="text-xl md:text-2xl mb-8">with code <span class="font-bold">SITE259</span></p>
        <button class="bg-black text-white px-8 py-3 rounded hover:bg-gray-800 transition duration-300">
          Shop now
        </button>
      </div>
    </div>
  </section>

  <!-- Our Worlds Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Megah Marmer, creator of furniture</h2>
        <h3 class="text-3xl font-bold text-gray-900 mb-8">Our worlds</h3>

        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-8">
          <button class="bg-black text-white px-6 py-2 rounded-full">All</button>
          <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-300">Living Room</button>
          <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-300">Dining Room</button>
          <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-300">Bathroom</button>
          <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-300">Bedroom</button>
          <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-300">Garden</button>
          <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-300">Decor</button>
        </div>
      </div>

      <!-- Category Grid -->
      <div class="relative">
        <div class="worlds-carousel flex gap-6 overflow-x-hidden">
          <div class="flex-shrink-0 w-80 relative rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/320x400?prompt=Modern minimalist living room with wooden furniture, neutral colors, and clean design aesthetic&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Living room interior with modern furniture and warm wooden elements"
              class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
              <h4 class="text-white text-xl font-bold p-6">Living Room</h4>
            </div>
          </div>

          <div class="flex-shrink-0 w-80 relative rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/320x400?prompt=Elegant dining room with wooden table, modern chairs, and warm ambient lighting&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Dining room with wooden table and contemporary seating arrangement" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
              <h4 class="text-white text-xl font-bold p-6">Dining room</h4>
            </div>
          </div>

          <div class="flex-shrink-0 w-80 relative rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/320x400?prompt=Modern bathroom with wooden vanity, circular mirror, and contemporary fixtures&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Contemporary bathroom featuring wooden vanity and modern design elements"
              class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
              <h4 class="text-white text-xl font-bold p-6">Bathroom</h4>
            </div>
          </div>

          <div class="flex-shrink-0 w-80 relative rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/320x400?prompt=Cozy bedroom with wooden headboard, neutral bedding, and minimalist decor&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Serene bedroom with wooden headboard and natural textures" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
              <h4 class="text-white text-xl font-bold p-6">Bedroom</h4>
            </div>
          </div>

          <div class="flex-shrink-0 w-80 relative rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/320x400?prompt=Outdoor garden furniture with wooden table and chairs in natural setting&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Garden furniture set with wooden table and seating in outdoor environment"
              class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
              <h4 class="text-white text-xl font-bold p-6">Garden</h4>
            </div>
          </div>

          <div class="flex-shrink-0 w-80 relative rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/320x400?prompt=Decorative accessories including ceramic vases, wooden bowls, and modern home decor items&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Collection of modern home decor accessories and decorative objects" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
              <h4 class="text-white text-xl font-bold p-6">Decor</h4>
            </div>
          </div>
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
          <h3 class="text-3xl font-bold text-gray-900 mb-4">Our selection</h3>
          <div class="flex flex-wrap gap-4">
            <button class="bg-black text-white px-4 py-2 rounded">New arrivals</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Premium</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Bestseller</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Bathroom</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Home Decor</button>
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
          <!-- Product 1 -->
          <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative">
              <img
                src="https://placeholder-image-service.onrender.com/image/320x300?prompt=Wooden bed frame with slatted headboard, neutral bedding, and modern bedroom styling&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Théodore wooden bed frame with vertical slat headboard design" class="w-full h-64 object-cover">
              <div class="absolute bottom-4 left-4 bg-black bg-opacity-75 text-white p-3 rounded">
                <h4 class="font-bold">Théodore</h4>
                <p class="text-lg font-bold">£699</p>
              </div>
            </div>
          </div>

          <!-- Product 2 -->
          <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative">
              <img
                src="https://placeholder-image-service.onrender.com/image/320x300?prompt=Round wooden dining table with smooth finish and modern minimalist design&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Fanie round wooden dining table with contemporary design" class="w-full h-64 object-cover">
              <div class="absolute bottom-4 left-4 bg-black bg-opacity-75 text-white p-3 rounded">
                <h4 class="font-bold">Fanie</h4>
                <p class="text-lg font-bold">£279</p>
              </div>
            </div>
          </div>

          <!-- Product 3 -->
          <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative">
              <img
                src="https://placeholder-image-service.onrender.com/image/320x300?prompt=Modern bathroom vanity with wooden cabinet, round mirror, and contemporary fixtures&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Jill bathroom vanity unit with wooden cabinet and circular mirror" class="w-full h-64 object-cover">
              <div class="absolute bottom-4 left-4 bg-black bg-opacity-75 text-white p-3 rounded">
                <h4 class="font-bold">Jill</h4>
                <p class="text-lg font-bold">£299</p>
              </div>
            </div>
          </div>

          <!-- Product 4 -->
          <div class="flex-shrink-0 w-80 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative">
              <img
                src="https://placeholder-image-service.onrender.com/image/320x300?prompt=Modern sectional sofa in beige color with modular design and comfortable cushions&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Dario modular sectional sofa with neutral upholstery and contemporary styling"
                class="w-full h-64 object-cover">
              <div class="absolute bottom-4 left-4 bg-black bg-opacity-75 text-white p-3 rounded">
                <h4 class="font-bold">Dario</h4>
                <p class="text-lg font-bold">£2,399</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Right Now Section -->
  <section class="py-16 bg-white relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-200 rounded-full transform -translate-x-48 -translate-y-48">
      </div>
      <div
        class="absolute bottom-0 right-0 w-96 h-96 bg-orange-200 rounded-full transform translate-x-48 translate-y-48">
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="mb-8">
        <h3 class="text-4xl font-bold text-gray-900 mb-2">Right now</h3>
        <p class="text-gray-600">Discover our latest news</p>
      </div>

      <!-- News Grid -->
      <div class="relative">
        <div class="news-carousel flex gap-6 overflow-x-hidden">
          <!-- News Item 1 -->
          <div class="flex-shrink-0 w-96 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative h-64">
              <img
                src="https://placeholder-image-service.onrender.com/image/400x250?prompt=Modern living room with beige sofa, wooden furniture, and contemporary interior design&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Contemporary living space featuring modern sofa and wooden furniture elements"
                class="w-full h-full object-cover">
              <div class="absolute bottom-4 left-4 text-white">
                <h4 class="text-xl font-bold mb-2">The sofa defines your living space.</h4>
                <p class="text-sm mb-2">Sofa is the heart of the home. Timeless design, European craftsmanship.
                  Oeko-Tex®
                  certified fabrics.</p>
                <button class="text-white underline hover:no-underline">Discover</button>
              </div>
            </div>
          </div>

          <!-- News Item 2 -->
          <div class="flex-shrink-0 w-96 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative h-64">
              <img
                src="https://placeholder-image-service.onrender.com/image/400x250?prompt=Modern dining chairs with woven cane back design and wooden frame&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Contemporary dining chairs featuring woven cane details and natural wood construction"
                class="w-full h-full object-cover">
              <div class="absolute bottom-4 left-4 text-white">
                <h4 class="text-xl font-bold">New arrivals - Chairs</h4>
              </div>
            </div>
          </div>

          <!-- News Item 3 -->
          <div class="flex-shrink-0 w-96 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative h-64">
              <img
                src="https://placeholder-image-service.onrender.com/image/400x250?prompt=Organized home office workspace with wooden desk, storage solutions, and modern decor&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Well-organized home office with wooden furniture and contemporary storage solutions"
                class="w-full h-full object-cover">
              <div class="absolute bottom-4 left-4 text-white">
                <h4 class="text-xl font-bold">Organised workspace, clear mind</h4>
              </div>
            </div>
          </div>

          <!-- News Item 4 -->
          <div class="flex-shrink-0 w-96 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative h-64">
              <img
                src="https://placeholder-image-service.onrender.com/image/400x250?prompt=Modern bedroom with wooden bed frame, neutral bedding, and minimalist decor&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Serene bedroom featuring wooden bed frame with clean lines and neutral color palette"
                class="w-full h-full object-cover">
              <div class="absolute bottom-4 left-4 text-white">
                <h4 class="text-xl font-bold">New arrivals - Bedroom</h4>
              </div>
            </div>
          </div>

          <!-- News Item 5 -->
          <div class="flex-shrink-0 w-96 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="relative h-64">
              <img
                src="https://placeholder-image-service.onrender.com/image/400x250?prompt=Warm interior with golden lighting, wooden elements, and cozy atmosphere&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
                alt="Interior space with warm golden lighting and wooden architectural elements"
                class="w-full h-full object-cover">
              <div class="absolute bottom-4 left-4 text-white">
                <h4 class="text-xl font-bold">Paris Design Week</h4>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <button
          class="news-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button
          class="news-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </section>

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

  <!-- Instagram Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center mb-8">
        <div class="flex-1">
          <div class="flex items-center mb-4">
            <i class="fab fa-instagram text-2xl mr-3"></i>
            <div>
              <h3 class="text-2xl font-bold text-gray-900">Get inspired by our Instagram community's</h3>
              <p class="text-gray-600">interiors!</p>
            </div>
          </div>
          <p class="text-gray-600">Share your photos with <span class="font-bold">#tikamoon</span></p>
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

      <!-- Instagram Grid -->
      <div class="relative">
        <div class="instagram-carousel flex gap-4 overflow-x-hidden">
          <div class="flex-shrink-0 w-64 h-64 rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/250x250?prompt=Cozy living room corner with armchair, side table, and warm home decor styling&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Cozy living room corner featuring comfortable seating and warm home styling"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
          </div>

          <div class="flex-shrink-0 w-64 h-64 rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/250x250?prompt=Modern fireplace area with comfortable seating and contemporary home decor&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Modern fireplace area with comfortable furniture and contemporary interior design"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
          </div>

          <div class="flex-shrink-0 w-64 h-64 rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/250x250?prompt=Elegant bedroom setup with neutral bedding, wooden furniture, and soft textures&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Elegant bedroom with neutral colors, wooden furniture, and comfortable bedding arrangement"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
          </div>

          <div class="flex-shrink-0 w-64 h-64 rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/250x250?prompt=Modern sideboard with decorative objects, books, and contemporary home styling&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Contemporary sideboard with decorative accessories and modern home decor styling"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
          </div>

          <div class="flex-shrink-0 w-64 h-64 rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/250x250?prompt=Stylish dining area with wooden table, modern chairs, and elegant table setting&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Stylish dining area featuring wooden table with contemporary chairs and elegant place settings"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
          </div>

          <div class="flex-shrink-0 w-64 h-64 rounded-lg overflow-hidden">
            <img
              src="https://placeholder-image-service.onrender.com/image/250x250?prompt=Modern living room with sectional sofa, coffee table, and contemporary lighting&id=b6a1e093-d7b6-45de-b73e-11a84be2f980&customer_id=cus_T5erY4giU34L4o"
              alt="Contemporary living room with sectional sofa and modern coffee table arrangement"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
