@extends('layouts.page')
@section('title', 'Our Solid Stone')
@section('content')


  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">Premium Quality</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Our Solid Stone
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          Discover our exquisite collection of premium marble stones. Each piece is carefully selected and
          processed to bring timeless elegance and durability to your architectural projects. Available in
          five stunning colors to match your vision.
        </p>
      </div>
    </div>
  </section>

  {{-- Marble Stone Collection --}}
  <section class="bg-gradient-to-b from-gray-50 to-white min-h-screen" id="marble-collection">
    <div class="py-12 md:py-16 lg:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-8 md:mb-12">
          <h3 class="text-2xl sm:text-3xl text-center lg:text-4xl font-bold text-gray-900 mb-2">Marble Stone Collection
          </h3>
          <p class="text-sm sm:text-base text-center text-gray-600">Explore our premium marble collection through the
            seasons</p>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
          <!-- Black Marble - Winter -->
          <a href="{{ route('oss.marble') }}">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2024/08/26/14/33/bathroom-8999616_1280.jpg" alt="Black Marble"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Winter Collection</span>
                <h4 class="text-xl font-bold mb-1">Black Marble</h4>
                <p class="text-sm text-white/90">Deep, luxurious black with subtle white veining. Perfect for
                  sophisticated
                  interiors.</p>
              </div>
            </div>
          </a>

          <!-- Cream Marble - Spring -->
          <a href="{{ route('oss.marble') }}">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2015/01/23/17/29/horse-609251_960_720.jpg" alt="Cream Marble"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Spring Collection</span>
                <h4 class="text-xl font-bold mb-1">Cream Marble</h4>
                <p class="text-sm text-white/90">Warm, elegant cream tones that bring light and sophistication to any
                  space.
                </p>
              </div>
            </div>
          </a>

          <!-- Grey PG Marble - Summer -->
          <a href="{{ route('oss.marble') }}">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2014/06/30/16/08/interior-380432_960_720.jpg" alt="Grey PG Marble"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Summer Collection</span>
                <h4 class="text-xl font-bold mb-1">Grey PG</h4>
                <p class="text-sm text-white/90">Contemporary light grey marble with delicate patterns, ideal for modern
                  designs.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-4">
          <!-- Red Marble - Autumn -->
          <a href="{{ route('oss.marble') }}">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2020/10/21/08/20/bathroom-5672398_960_720.jpg" alt="Red Marble"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Autumn Collection</span>
                <h4 class="text-xl font-bold mb-1">Red Marble</h4>
                <p class="text-sm text-white/90">Bold reddish tones that add warmth and distinctive character to your
                  project.</p>
              </div>
            </div>
          </a>

          <!-- Cocoa Brown Marble - Year Round -->
          <a href="{{ route('oss.marble') }}">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2014/05/18/19/14/walkway-347313_960_720.jpg"
                alt="Cocoa Brown Marble" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Year-Round Collection</span>
                <h4 class="text-xl font-bold mb-1">Cocoa Brown</h4>
                <p class="text-sm text-white/90">Warm brown marble with rich chocolate hues, bringing natural elegance and
                  earthiness to interiors.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Onyx Collection --}}
  <section class="bg-gradient-to-t from-white to-gray-900 min-h-screen" id="onyx-collection">
    <div class="py-12 md:py-16 lg:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-8 md:mb-12 text-center">
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-2">Luxury Onyx Collection</h3>
          <p class="text-sm sm:text-base text-white">Translucent beauty meets architectural excellence</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Sunset Onyx -->
          <a href="{{ route('oss.onyx') }}">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img src="https://images.unsplash.com/photo-1618944847828-82e943c3bdb7?w=800&q=80" alt="Sunset Onyx"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(255,87,34,0.9), rgba(255,152,0,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Exclusive Series</span>
                <h4 class="text-2xl font-bold mb-2">Sunset Onyx</h4>
                <p class="text-sm text-white/95">Captivating amber and gold hues create a stunning backlit effect. Perfect
                  for feature walls and luxury interiors that demand attention.</p>
              </div>
            </div>
          </a>

          <!-- Ivory Onyx -->
          <a href="{{ route('oss.onyx') }}">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img src="https://cdn.pixabay.com/photo/2014/07/21/19/20/lobby-398845_960_720.jpg" alt="Ivory Onyx"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(139,69,19,0.9), rgba(210,180,140,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Premium Series</span>
                <h4 class="text-2xl font-bold mb-2">Ivory Onyx</h4>
                <p class="text-sm text-white/95">Soft, creamy tones with delicate veining. Brings warmth and elegance with
                  exceptional translucency for illuminated applications.</p>
              </div>
            </div>
          </a>

          <!-- Onyx BW (Black & White) -->
          <a href="{{ route('oss.onyx') }}">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80" alt="Onyx BW"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.95), rgba(64,64,64,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Signature Series</span>
                <h4 class="text-2xl font-bold mb-2">Onyx BW</h4>
                <p class="text-sm text-white/95">Dramatic contrast of black and white creates bold, contemporary
                  statements.
                  Ideal for modern spaces seeking timeless sophistication.</p>
              </div>
            </div>
          </a>

          <!-- Onyx PCT -->
          <a href="{{ route('oss.onyx') }}">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=80" alt="Onyx PCT"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(101,67,33,0.9), rgba(160,120,90,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Designer Series</span>
                <h4 class="text-2xl font-bold mb-2">Onyx PCT</h4>
                <p class="text-sm text-white/95">Rich patterns with captivating color transitions. A masterpiece for
                  those
                  seeking unique, artistic natural stone expressions.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Terrazzo Collection --}}
  <section class="bg-gradient-to-b from-gray-50 to-white min-h-screen" id="terrazzo-collection">
    <div class="py-12 md:py-16 lg:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-8 md:mb-12 text-center">
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Modern Terrazzo Collection</h3>
          <p class="text-sm sm:text-base text-gray-600">Contemporary elegance meets timeless craftsmanship</p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Concrete Terrazzo -->
          <a href="{{ route('oss.terazzo') }}">
            <div
              class="overflow-hidden rounded-2xl w-full h-[500px] relative group hover:cursor-pointer shadow-xl hover:shadow-2xl transition-all duration-500">
              <img src="https://images.unsplash.com/photo-1615971677499-5467cbab01c0?w=1000&q=80"
                alt="Concrete Terrazzo" class="h-full w-full object-cover transition-all duration-700">
              <div
                class="absolute p-8 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-400"
                style="background: linear-gradient(to top, rgba(44,62,80,0.95), rgba(52,73,94,0.5), transparent);">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-400">
                  <span
                    class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-3">Industrial
                    Collection</span>
                  <h4 class="text-3xl font-bold mb-3">Concrete Terrazzo</h4>
                  <p class="text-base text-white/95 leading-relaxed mb-4">
                    Minimalist beauty with industrial strength. Features subtle aggregates embedded in smooth concrete
                    matrix,
                    perfect for contemporary spaces that embrace raw, authentic aesthetics.
                  </p>
                  <div class="flex gap-4 text-sm">
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      High Durability
                    </span>
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Easy Maintenance
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="{{ route('oss.terazzo') }}">
            <!-- Pattern Terrazzo -->
            <div
              class="overflow-hidden rounded-2xl w-full h-[500px] relative group hover:cursor-pointer shadow-xl hover:shadow-2xl transition-all duration-500">
              <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?w=1000&q=80" alt="Pattern Terrazzo"
                class="h-full w-full object-cover transition-all duration-700">
              <div
                class="absolute p-8 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-400"
                style="background: linear-gradient(to top, rgba(142,68,173,0.95), rgba(155,89,182,0.5), transparent);">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-400">
                  <span
                    class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-3">Artistic
                    Collection</span>
                  <h4 class="text-3xl font-bold mb-3">Pattern Terrazzo</h4>
                  <p class="text-base text-white/95 leading-relaxed mb-4">
                    Vibrant mosaic of colors and textures. Bold aggregates create stunning visual patterns that
                    transform
                    floors and walls into artistic statements, bringing life and character to any interior.
                  </p>
                  <div class="flex gap-4 text-sm">
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Custom Patterns
                    </span>
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Versatile Design
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Natural Stone Collection --}}
  <section class="bg-gradient-to-b from-white to-gray-50 py-12 md:py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <header class="mb-8 md:mb-12 text-center">
        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Natural Stone Collection</h3>
        <p class="text-sm sm:text-base text-gray-600">Authentic Indonesian stones for timeless architectural beauty</p>
      </header>

      <div class="space-y-8">
        <!-- Granite Local -->
        <div class="relative h-64 md:h-80 lg:h-96 rounded-3xl overflow-hidden shadow-lg group" id="granite-local">
          <img
            src="https://images.unsplash.com/photo-1688030178694-dcb26d6204ed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1632"
            alt="Granite Local"
            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/70 to-transparent"></div>
          <div class="relative h-full flex items-center">
            <div class="w-full md:w-1/2 lg:w-7/12 px-8 md:px-12 lg:px-16">
              <span
                class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-2">Local
                Craftsmanship</span>
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3">
                Granite Local
              </h2>
              <p class="text-base md:text-lg text-white/90">
                Celebrate Indonesian craftsmanship with our locally sourced granite. Combining natural strength with
                stunning aesthetics, each slab showcases unique patterns perfect for countertops, flooring, and facades.
              </p>
            </div>
          </div>
        </div>

        <!-- Petrified Wood -->
        <div class="relative h-64 md:h-80 lg:h-96 rounded-3xl overflow-hidden shadow-lg group" id="petrified-wood">
          <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=1600&q=80" alt="Petrified Wood"
            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-l from-amber-900 via-amber-900/70 to-transparent"></div>
          <div class="relative h-full flex items-center justify-end">
            <div class="w-full md:w-1/2 lg:w-7/12 px-8 md:px-12 lg:px-16 text-right">
              <span
                class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-2">Ancient
                Beauty</span>
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3">
                Petrified Wood
              </h2>
              <p class="text-base md:text-lg text-white/90">
                Nature's masterpiece millions of years in the making. Each piece tells a unique story with intricate wood
                grain patterns preserved in stone, adding organic warmth and timeless character to modern interiors.
              </p>
            </div>
          </div>
        </div>

        <!-- River Stone -->
        <div class="relative h-64 md:h-80 lg:h-96 rounded-3xl overflow-hidden shadow-lg group" id="river-stone">
          <img
            src="https://images.unsplash.com/photo-1455577380025-4321f1e1dca7?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470"
            alt="River Stone"
            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/70 to-transparent"></div>
          <div class="relative h-full flex items-center">
            <div class="w-full md:w-1/2 lg:w-7/12 px-8 md:px-12 lg:px-16">
              <span
                class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-2">Natural
                Elegance</span>
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3">
                River Stone
              </h2>
              <p class="text-base md:text-lg text-white/90">
                Smooth, naturally polished stones shaped by flowing water over centuries. Perfect for creating spa-like
                bathrooms, garden pathways, and accent walls with authentic organic texture and calming earth tones.
              </p>
            </div>
          </div>
        </div>

        <!-- Lava Stone -->
        <div class="relative h-64 md:h-80 lg:h-96 rounded-3xl overflow-hidden shadow-lg group" id="lava-stone">
          <img
            src="https://images.unsplash.com/photo-1643302415140-659cb70b0d23?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1476"
            alt="Lava Stone"
            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-l from-red-950 via-red-950/70 to-transparent"></div>
          <div class="relative h-full flex items-center justify-end">
            <div class="w-full md:w-1/2 lg:w-7/12 px-8 md:px-12 lg:px-16 text-right">
              <span
                class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-2">Volcanic
                Power</span>
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3">
                Lava Stone
              </h2>
              <p class="text-base md:text-lg text-white/90">
                Born from volcanic fire, this porous stone brings raw, dramatic texture to any space. Heat-resistant and
                incredibly durable, ideal for outdoor applications, BBQ areas, and bold architectural statements.
              </p>
            </div>
          </div>
        </div>

        <!-- Lime Stone -->
        <div class="relative h-64 md:h-80 lg:h-96 rounded-3xl overflow-hidden shadow-lg group" id="lime-stone">
          <img
            src="https://images.unsplash.com/photo-1632226705528-14afa4dcdc0f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1603"
            alt="Lime Stone"
            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-r from-stone-900 via-stone-900/70 to-transparent"></div>
          <div class="relative h-full flex items-center">
            <div class="w-full md:w-1/2 lg:w-7/12 px-8 md:px-12 lg:px-16">
              <span
                class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-2">Classic
                Beauty</span>
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3">
                Lime Stone
              </h2>
              <p class="text-base md:text-lg text-white/90">
                Soft, elegant sedimentary stone with gentle color variations. Its subtle beauty and versatility make it
                perfect for both interior walls and exterior facades, offering timeless Mediterranean-inspired aesthetics.
              </p>
            </div>
          </div>
        </div>

        <!-- Zeolite Stone -->
        <div class="relative h-64 md:h-80 lg:h-96 rounded-3xl overflow-hidden shadow-lg group" id="zeolite-stone">
          <img
            src="https://images.unsplash.com/photo-1752424505273-6d02bee9d967?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1373"
            alt="Zeolite Stone"
            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-l from-emerald-950 via-emerald-950/70 to-transparent"></div>
          <div class="relative h-full flex items-center justify-end">
            <div class="w-full md:w-1/2 lg:w-7/12 px-8 md:px-12 lg:px-16 text-right">
              <span
                class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-2">Eco-Functional</span>
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3">
                Zeolite Stone
              </h2>
              <p class="text-base md:text-lg text-white/90">
                Naturally porous volcanic mineral with exceptional filtration properties. Beyond aesthetics, zeolite
                purifies air and water, making it an intelligent choice for health-conscious, sustainable architecture.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
