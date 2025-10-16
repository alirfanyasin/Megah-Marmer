@extends('layouts.page')
@section('title', 'Black Marble - Timeless Elegance')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center" 
         style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1615873968403-89e068629265?w=1600');">
  <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/30"></div>
  <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
    <div class="max-w-3xl text-white">
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-light mb-6 leading-tight">
        Black marble: timeless elegance and sophistication
      </h1>
      <p class="text-base sm:text-lg md:text-xl font-light leading-relaxed max-w-2xl">
        Revered for centuries, black marble has adorned palaces and elite structures, a testament to the quality and prestige it brings to any space. Its deep, lustrous surface and striking white veining create a visual masterpiece that captures the essence of luxury and refinement.
      </p>
    </div>
  </div>
</section>

<!-- Introduction Section -->
<section class="py-16 sm:py-20 md:py-24 lg:py-32 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
      <p class="text-base sm:text-lg md:text-xl text-gray-700 leading-relaxed text-center">
        Highly regarded in the stone industry, black marble is often compared to granite, with which it shares many qualities, including the natural ability to resist scratches, stains, heat, and the elements. It is practically non-porous and naturally resistant to moisture and weathering, and its firm, fine texture does not warp with time. This makes it a very popular choice for luxury countertops, statement walls, and elegant flooring - as well as for premium bathroom fittings and decorative elements that require meticulous craftsmanship. The density, rigidity, and durability of black marble make it a truly exceptional material.
      </p>
    </div>
  </div>
</section>

<!-- Aesthetic Section -->
<section class="py-16 sm:py-20 md:py-24 bg-gray-50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-8 md:gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
      <!-- Text Content -->
      <div class="order-2 md:order-1">
        <div class="flex items-center gap-3 mb-6">
          <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
          </svg>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Aesthetic</h2>
        </div>
        
        <p class="text-gray-700 leading-relaxed mb-6">
          Black marble is a luxurious stone with dramatic white veining that ranges from bold, lightning-like patterns to delicate, flowing lines. The unique appearance of its natural veining makes it an elegant material full of character. Its deep, rich black color and striking contrast create a sophisticated ambiance, perfect for modern interiors and contemporary designs displayed in upscale homes, boutique hotels, or premium commercial spaces.
        </p>
        
        <p class="text-gray-700 leading-relaxed">
          As with all natural stone surfaces, i.e. flooring material, each and every piece of black marble is unique and presents slight variations in veining and color, and that's exactly what we love here at Tikamoon!
        </p>
      </div>
      
      <!-- Image -->
      <div class="order-1 md:order-2">
        <div class="relative overflow-hidden rounded-lg shadow-2xl">
          <img src="https://images.unsplash.com/photo-1615874694520-474822394e73?w=800" 
               alt="Black Marble Aesthetic" 
               class="w-full h-auto object-cover">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Resistant Section -->
<section class="py-16 sm:py-20 md:py-24 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-8 md:gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
      <!-- Image -->
      <div class="order-1">
        <div class="relative overflow-hidden rounded-lg shadow-2xl">
          <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800" 
               alt="Black Marble Resistance" 
               class="w-full h-auto object-cover">
        </div>
      </div>
      
      <!-- Text Content -->
      <div class="order-2">
        <div class="flex items-center gap-3 mb-6">
          <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Resistant</h2>
        </div>
        
        <p class="text-gray-700 leading-relaxed mb-6">
          Extremely durable, black marble like Nero Marquina is a very hard, dense, non-porous stone, resistant to impact, heat, and moisture. Whether it's a statement wall in a luxury hotel, a countertop in an upscale home, a bathroom vanity, or a decorative element in a commercial space, it is not prone to damage from insects, fungi, or humidity, which makes it perfect for high-traffic areas and premium bathroom fittings.
        </p>
        
        <p class="text-gray-700 leading-relaxed">
          Black marble is a naturally rot-proof material, recognized for its suitability for both interior luxury applications and exterior cladding.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Featured Quote Section -->
<section class="relative py-24 sm:py-32 md:py-40 bg-cover bg-center" 
         style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1620116370617-fd5e34135a50?w=1600');">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-white leading-relaxed">
        The unique appearance of its striking veining makes it an elegant material full of character.
      </p>
    </div>
  </div>
</section>

<!-- Sustainable Section -->
<section class="py-16 sm:py-20 md:py-24 bg-gray-50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-8 md:gap-12 lg:gap-16 max-w-7xl mx-auto">
      <!-- Sustainable -->
      <div class="bg-white p-8 sm:p-10 md:p-12 rounded-lg shadow-sm">
        <div class="flex items-center gap-3 mb-6">
          <svg class="w-10 h-10 sm:w-12 sm:h-12 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
          </svg>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Sustainable</h2>
        </div>
        
        <p class="text-gray-700 leading-relaxed mb-4">
          Black marble has a low environmental impact. As it is naturally extracted from quarries, it is a completely natural product that does not require harmful manufacturing processes. It does not emit volatile organic compounds (VOCs), is safe for indoor use, and is part of an effort to minimize the impact of modern construction on the environment.
        </p>
        
        <p class="text-gray-700 leading-relaxed">
          Premium black marble supports sustainability by helping to enhance and maintain elegant spaces that last for generations.
        </p>
      </div>
      
      <!-- Chic -->
      <div class="bg-white p-8 sm:p-10 md:p-12 rounded-lg shadow-sm">
        <div class="flex items-center gap-3 mb-6">
          <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
          </svg>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Chic</h2>
        </div>
        
        <p class="text-gray-700 leading-relaxed">
          Whether you are considering creating a striking accent wall or a luxury look that exudes sophistication, black marble is often crafted into minimal designs, as the unique character of its visible veining is enough to make the stone exude elegance and personality.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Category Links Section -->
<section class="py-16 sm:py-20 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto">
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4">
        <a href="#" class="text-center py-3 sm:py-4 px-3 sm:px-4 border border-gray-300 rounded-lg hover:border-gray-900 hover:shadow-md transition-all duration-300 text-sm sm:text-base text-gray-700 hover:text-gray-900">
          Living room in black marble
        </a>
        <a href="#" class="text-center py-3 sm:py-4 px-3 sm:px-4 border border-gray-300 rounded-lg hover:border-gray-900 hover:shadow-md transition-all duration-300 text-sm sm:text-base text-gray-700 hover:text-gray-900">
          Dining room in black marble
        </a>
        <a href="#" class="text-center py-3 sm:py-4 px-3 sm:px-4 border border-gray-300 rounded-lg hover:border-gray-900 hover:shadow-md transition-all duration-300 text-sm sm:text-base text-gray-700 hover:text-gray-900">
          Bathroom in black marble
        </a>
        <a href="#" class="text-center py-3 sm:py-4 px-3 sm:px-4 border border-gray-300 rounded-lg hover:border-gray-900 hover:shadow-md transition-all duration-300 text-sm sm:text-base text-gray-700 hover:text-gray-900">
          Bedroom in black marble
        </a>
        <a href="#" class="text-center py-3 sm:py-4 px-3 sm:px-4 border border-gray-300 rounded-lg hover:border-gray-900 hover:shadow-md transition-all duration-300 text-sm sm:text-base text-gray-700 hover:text-gray-900">
          Garden in black marble
        </a>
      </div>
    </div>
  </div>
</section>

@endsection