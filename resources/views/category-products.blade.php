@extends('layouts.page')
@section('title', 'Category Products')
@section('content')
  <div>
    <section id="category-desc" class="max-w-5xl mx-auto my-10 space-y-4 px-4 text-center">
      <h2 class="text-2xl font-semibold">TV Stands</h2>
      <p class="text-base">Ideal for organising multimedia storage, your Designer TV stand is perfect for supporting a
        television, hi-fi,
        home cinema, etc. With its very designer look, this type of solid wood furniture is available oiled, natural or
        varnished, suspended or on legs, which means it fits in perfectly with any living room or dining room. Whatever
        the design style of the house - contemporary, Scandinavian, vintage, modern or more classic – Tikamoon TV units
        add a chic touch to your interior...</p>
    </section>
    <section class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        @for ($i = 0; $i < 12; $i++)
          <div class="overflow-hidden transition-shadow duration-300 group">
            <a href="/product/detail" class="block">
              <div class="relative overflow-hidden bg-gray-100">
                <!-- Badge Sale -->
                <div class="absolute top-4 left-4 bg-red-900 text-white px-3 py-1 rounded-md text-sm font-semibold z-10">
                  Sale -20%
                </div>

                <!-- Product Image -->
                <img src="https://images.unsplash.com/photo-1533090481720-856c6e3c1fdc?w=400&h=400&fit=crop"
                  alt="Product Image"
                  class="w-full h-80 object-cover transition-transform duration-300 group-hover:scale-105">

                <!-- Icon Buttons (Love & Eye) - Muncul saat hover -->
                <div
                  class="absolute bottom-4 right-4 flex flex-col gap-2 z-10 opacity-0 translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">

                  <!-- Eye Button -->
                  <button
                    class="bg-black cursor-pointer hover:bg-gray-800 text-white rounded-full p-3 transition-colors duration-300">
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

              <!-- Product Info -->
              <div class="p-4">
                <h3 class="text-xl font-bold text-gray-900 mb-1">Adam</h3>
                <p class="text-gray-600 text-sm mb-3">TV unit in solid teak, 120 cm</p>
                <div class="flex items-center gap-2">
                  <p class="text-red-900 font-bold text-lg">£399</p>
                  <p class="text-gray-400 line-through text-sm">£499</p>
                </div>
              </div>
            </a>
          </div>
        @endfor

      </div>
    </section>

  </div>
@endsection
