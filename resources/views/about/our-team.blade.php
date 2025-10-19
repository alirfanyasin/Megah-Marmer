@extends('layouts.page')
@section('title', 'Our Team')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1600');">
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
    <div class="max-w-2xl text-white">
      <h1 class="text-5xl md:text-6xl lg:text-7xl font-light mb-6 leading-tight">Meet the people behind Tikamoon</h1>
      <p class="text-base md:text-lg font-light leading-relaxed max-w-xl">
        We're a diverse team of passionate individuals committed to creating furniture that lasts generations. Our strength lies in our shared values and dedication to sustainability.
      </p>
    </div>
  </div>
</section>

<!-- Team Introduction -->
<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">Our team, our strength</h2>
      <p class="text-gray-700 text-sm md:text-base max-w-3xl mx-auto leading-relaxed">
        United by a common vision to transform the furniture industry through sustainable practices and timeless design.
      </p>
    </div>

    <p class="text-center text-gray-600 text-sm md:text-base max-w-4xl mx-auto mb-12 leading-relaxed">
      From designers to craftsmen, from sustainability experts to customer service specialists, every member of our team plays a vital role in bringing you furniture that matters. We believe in collaboration, innovation, and the power of doing things right.
    </p>
  </div>
</section>

<!-- Leadership Team -->
<section class="py-16 md:py-24 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">Leadership team</h2>
      <p class="text-gray-600 text-sm md:text-base max-w-3xl mx-auto">
        Experienced leaders guiding our mission to create lasting, sustainable furniture.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <!-- Team Member 1 -->
      <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
        <div class="relative h-80 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600" alt="CEO" class="w-full h-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-medium mb-1">Jean-Marc Dubois</h3>
          <p class="text-sm text-gray-500 mb-3">Founder & CEO</p>
          <p class="text-sm text-gray-600 leading-relaxed">
            With over 20 years in sustainable furniture, Jean-Marc founded Tikamoon with a vision of creating timeless pieces that honor both craft and nature.
          </p>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
        <div class="relative h-80 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600" alt="COO" class="w-full h-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-medium mb-1">Sophie Laurent</h3>
          <p class="text-sm text-gray-500 mb-3">Chief Operating Officer</p>
          <p class="text-sm text-gray-600 leading-relaxed">
            Sophie ensures our operations run smoothly while maintaining our commitment to sustainability and ethical practices across the supply chain.
          </p>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
        <div class="relative h-80 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600" alt="Design Director" class="w-full h-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-medium mb-1">Thomas Anderson</h3>
          <p class="text-sm text-gray-500 mb-3">Design Director</p>
          <p class="text-sm text-gray-600 leading-relaxed">
            Thomas leads our design team, creating furniture that balances aesthetic appeal with functionality and environmental responsibility.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Teams Section -->
<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">Our core teams</h2>
      <p class="text-gray-600 text-sm md:text-base max-w-3xl mx-auto">
        Dedicated specialists working together to deliver excellence in every aspect.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
      <!-- Design Team Card -->
      <div class="relative h-96 md:h-[28rem] rounded-lg overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800" alt="Design Team" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
          <h3 class="text-2xl md:text-3xl font-light mb-3">Design Team</h3>
          <p class="text-sm mb-4 leading-relaxed">
            Our designers blend creativity with sustainability, crafting furniture that stands the test of time both in style and durability.
          </p>
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            <span>12 Members</span>
          </div>
        </div>
      </div>

      <!-- Production Team Card -->
      <div class="relative h-96 md:h-[28rem] rounded-lg overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800" alt="Production Team" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
          <h3 class="text-2xl md:text-3xl font-light mb-3">Production Team</h3>
          <p class="text-sm mb-4 leading-relaxed">
            Skilled craftsmen and production specialists ensuring every piece meets our exacting standards of quality and sustainability.
          </p>
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            <span>28 Members</span>
          </div>
        </div>
      </div>

      <!-- Sustainability Team Card -->
      <div class="relative h-96 md:h-[28rem] rounded-lg overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800" alt="Sustainability Team" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
          <h3 class="text-2xl md:text-3xl font-light mb-3">Sustainability Team</h3>
          <p class="text-sm mb-4 leading-relaxed">
            Environmental experts dedicated to minimizing our impact and pioneering sustainable practices across our entire operation.
          </p>
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            <span>8 Members</span>
          </div>
        </div>
      </div>

      <!-- Customer Experience Team Card -->
      <div class="relative h-96 md:h-[28rem] rounded-lg overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800" alt="Customer Team" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
          <h3 class="text-2xl md:text-3xl font-light mb-3">Customer Experience</h3>
          <p class="text-sm mb-4 leading-relaxed">
            Our customer team ensures your journey with Tikamoon is exceptional, from initial inquiry to decades of ownership.
          </p>
          <div class="flex items-center text-sm">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            <span>15 Members</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Team Values Section -->
<section class="py-16 md:py-24 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">What unites us</h2>
      <p class="text-gray-600 text-sm md:text-base max-w-3xl mx-auto">
        Shared values that guide everything we do.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Value 1 -->
      <div class="bg-white rounded-lg p-8 shadow-sm">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h3 class="text-xl font-medium mb-3">Sustainability First</h3>
        <p class="text-sm text-gray-600 leading-relaxed">
          We prioritize environmental responsibility in every decision, from sourcing materials to final delivery.
        </p>
      </div>

      <!-- Value 2 -->
      <div class="bg-white rounded-lg p-8 shadow-sm">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h3 class="text-xl font-medium mb-3">Quality Excellence</h3>
        <p class="text-sm text-gray-600 leading-relaxed">
          Our commitment to craftsmanship ensures every piece meets the highest standards and lasts for generations.
        </p>
      </div>

      <!-- Value 3 -->
      <div class="bg-white rounded-lg p-8 shadow-sm">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <h3 class="text-xl font-medium mb-3">Collaboration</h3>
        <p class="text-sm text-gray-600 leading-relaxed">
          We believe in the power of working together, respecting diverse perspectives and fostering innovation.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Join Us Section -->
<section class="relative py-20 md:py-32 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1600');">
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40"></div>
  <div class="relative z-10 container mx-auto px-4">
    <div class="max-w-3xl">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light text-white mb-6">Join our team</h2>
      <p class="text-white text-base md:text-lg leading-relaxed mb-8">
        We're always looking for talented individuals who share our passion for sustainable furniture and want to make a positive impact. If you believe in creating products that matter and want to be part of a mission-driven company, we'd love to hear from you.
      </p>
      <button class="bg-white text-black px-8 py-3 rounded text-sm hover:bg-gray-100 transition">
        View Open Positions
      </button>
    </div>
  </div>
</section>

<!-- Team Stats Section -->
<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-light mb-2">63</div>
        <p class="text-sm text-gray-600">Team Members</p>
      </div>
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-light mb-2">12</div>
        <p class="text-sm text-gray-600">Countries</p>
      </div>
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-light mb-2">20+</div>
        <p class="text-sm text-gray-600">Years Experience</p>
      </div>
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-light mb-2">100%</div>
        <p class="text-sm text-gray-600">Committed</p>
      </div>
    </div>
  </div>
</section>

@endsection