@extends('layouts.page')
@section('title', 'About Us')
@section('content')

  <!-- Hero Section -->
  <section class="relative h-[85vh] bg-cover bg-center flex items-center overflow-hidden"
    style="background-image: linear-gradient(135deg, rgba(0,0,0,.65) 0%, rgba(0,0,0,.45) 100%), url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/70"></div>
    <div class="absolute inset-0 opacity-30">
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(255,255,255,0.1),transparent_50%)]"></div>
    </div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl">
        <div class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full mb-6">
          <p class="uppercase tracking-[0.2em] text-white/90 text-sm font-medium">About Megah Marmer</p>
        </div>
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-light leading-[1.1] mb-8 text-white">
          Crafting Excellence<br>
          <span class="text-stone-300">Since Day One</span>
        </h1>
        <p class="text-xl sm:text-2xl text-white/90 leading-relaxed max-w-3xl">
          Leading Indonesia's marble industry with precision manufacturing, innovative technology,
          and unwavering commitment to quality. From raw stone to finished masterpieces.
        </p>
      </div>
    </div>
  </section>

  <!-- Our Story -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div>
            <div class="inline-block mb-6">
              <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Our Story</span>
              <div class="w-full h-[2px] bg-gradient-to-r from-stone-900 to-transparent mt-2"></div>
            </div>
            <h2 class="text-4xl md:text-5xl font-light mb-6 text-stone-900 leading-tight">
              Built on Passion,<br>Driven by Excellence
            </h2>
            <div class="space-y-4 text-gray-700 leading-relaxed text-lg">
              <p>
                Megah Marmer stands as Indonesia's premier marble manufacturing company, where traditional
                craftsmanship meets cutting-edge technology. Our journey began with a simple vision: to transform
                the way marble is processed and delivered to the world.
              </p>
              <p>
                Today, our state-of-the-art facility processes premium marble slabs with unmatched precision,
                serving clients across Indonesia and international markets. Every piece that leaves our factory
                carries our commitment to excellence and our passion for perfection.
              </p>
              <p>
                From architects and interior designers to contractors and homeowners, we've become the trusted
                partner for those who demand nothing but the finest marble solutions.
              </p>
            </div>
          </div>
          <div class="relative">
            <div class="aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl">
              <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1200&q=80"
                alt="Marble Manufacturing" class="w-full h-full object-cover hover:scale-105 transition duration-700">
            </div>
            <div class="absolute -bottom-8 -left-8 w-64 h-64 bg-stone-900/5 rounded-2xl -z-10"></div>
            <div class="absolute -top-8 -right-8 w-48 h-48 bg-stone-900/5 rounded-2xl -z-10"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Commitments -->
  <section class="py-20 md:py-28 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Our Commitments</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">What Sets Us Apart</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Our unwavering dedication to quality, innovation, and customer satisfaction drives everything we do.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <!-- Commitment 1 -->
        <div
          class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-stone-100">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div
              class="w-16 h-16 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-medium mb-4 text-stone-900">Quality Excellence</h3>
            <p class="text-gray-600 leading-relaxed">
              Every marble piece undergoes rigorous quality control processes, ensuring perfection in beauty,
              durability, and precision. Our standards exceed industry benchmarks.
            </p>
          </div>
        </div>

        <!-- Commitment 2 -->
        <div
          class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-stone-100">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div
              class="w-16 h-16 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-2xl font-medium mb-4 text-stone-900">Advanced Technology</h3>
            <p class="text-gray-600 leading-relaxed">
              State-of-the-art CNC machinery and precision tools enable exceptional finishes while maintaining
              consistent quality across all products and production volumes.
            </p>
          </div>
        </div>

        <!-- Commitment 3 -->
        <div
          class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-stone-100">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div
              class="w-16 h-16 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-medium mb-4 text-stone-900">Global Reach</h3>
            <p class="text-gray-600 leading-relaxed">
              Serving customers worldwide with reliable supply chains, comprehensive packaging solutions,
              and exceptional customer service that goes beyond expectations.
            </p>
          </div>
        </div>

        <!-- Commitment 4 -->
        <div
          class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-stone-100">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div
              class="w-16 h-16 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-medium mb-4 text-stone-900">On-Time Delivery</h3>
            <p class="text-gray-600 leading-relaxed">
              We understand the importance of timelines. Our efficient production and logistics systems
              ensure your marble arrives exactly when you need it, every time.
            </p>
          </div>
        </div>

        <!-- Commitment 5 -->
        <div
          class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-stone-100">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div
              class="w-16 h-16 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-medium mb-4 text-stone-900">Customer First</h3>
            <p class="text-gray-600 leading-relaxed">
              Your satisfaction is our priority. From initial consultation to after-sales support,
              we're committed to providing personalized service and expert guidance.
            </p>
          </div>
        </div>

        <!-- Commitment 6 -->
        <div
          class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-stone-100">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div
              class="w-16 h-16 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
              </svg>
            </div>
            <h3 class="text-2xl font-medium mb-4 text-stone-900">Sustainability</h3>
            <p class="text-gray-600 leading-relaxed">
              We're committed to responsible sourcing and sustainable practices, minimizing waste
              and environmental impact while maximizing the beauty of natural stone.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Our Team</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">The People Behind Excellence</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Our success is built on the expertise, dedication, and passion of our talented team members
          who bring their best to work every single day.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
        <!-- Team 1 -->
        <div
          class="group relative bg-gradient-to-b from-stone-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
          <div class="relative h-96 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600" alt="Production Team"
              class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
              <h3 class="text-2xl font-medium mb-2">Production Excellence</h3>
              <p class="text-sm text-white/80 uppercase tracking-wider">Manufacturing Team</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 leading-relaxed">
              Our skilled production team combines decades of craftsmanship with cutting-edge technology
              to deliver exceptional marble products that exceed expectations.
            </p>
          </div>
        </div>

        <!-- Team 2 -->
        <div
          class="group relative bg-gradient-to-b from-stone-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
          <div class="relative h-96 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600" alt="Quality Team"
              class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
              <h3 class="text-2xl font-medium mb-2">Quality Assurance</h3>
              <p class="text-sm text-white/80 uppercase tracking-wider">QC Specialists</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 leading-relaxed">
              Our quality control specialists ensure every marble piece meets rigorous standards through
              comprehensive inspection protocols and meticulous attention to detail.
            </p>
          </div>
        </div>

        <!-- Team 3 -->
        <div
          class="group relative bg-gradient-to-b from-stone-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
          <div class="relative h-96 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600" alt="Operations Team"
              class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
              <h3 class="text-2xl font-medium mb-2">Operations Management</h3>
              <p class="text-sm text-white/80 uppercase tracking-wider">Logistics & Operations</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 leading-relaxed">
              Our operations team orchestrates seamless coordination of production, logistics, and customer
              service to ensure flawless delivery of premium marble solutions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stone Storage -->
  <section class="py-20 md:py-28 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div class="order-2 lg:order-1">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
              <img src="https://images.unsplash.com/photo-1529078155058-5d716f45d604?w=1200&q=80" alt="Stone Storage"
                class="w-full h-full object-cover hover:scale-105 transition duration-700">
            </div>
          </div>
          <div class="order-1 lg:order-2">
            <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Stone Storage</span>
            <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Intelligent Storage Solutions</h2>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
              Our advanced storage facility is engineered for optimal preservation and efficient retrieval
              of premium marble slabs, ensuring every piece maintains its pristine condition.
            </p>
            <div class="space-y-4">
              <div class="flex items-start gap-4 bg-white p-5 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-stone-900 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">FIFO/FEFO Management</h4>
                  <p class="text-gray-600 text-sm">Systematic inventory rotation by project or batch for predictable
                    material flows and quality assurance.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 bg-white p-5 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-stone-900 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Digital Traceability</h4>
                  <p class="text-gray-600 text-sm">Real-time tracking system with clear labeling for instant retrieval
                    and complete inventory visibility.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 bg-white p-5 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-stone-900 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Climate Control</h4>
                  <p class="text-gray-600 text-sm">Environmental controls to prevent warping, moisture damage, and
                    maintain optimal stone conditions.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 bg-white p-5 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-stone-900 text-white rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Safety Standards</h4>
                  <p class="text-gray-600 text-sm">Designated forklift lanes and pedestrian routes with comprehensive
                    safety protocols to minimize incidents.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Factory -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Our Factory</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">State-of-the-Art Manufacturing</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Our modern facility combines advanced machinery, skilled craftsmanship, and systematic processes
          to deliver consistent excellence in every marble piece we produce.
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
        <div>
          <h3 class="text-3xl font-light text-stone-900 mb-6">End-to-End Production Excellence</h3>
          <p class="text-gray-700 text-lg leading-relaxed mb-8">
            Our comprehensive production workflow encompasses every aspect of marble processing,
            from incoming slab inspection to final dispatch. Each stage is meticulously controlled
            to maintain the highest standards of quality and precision.
          </p>
          <div class="grid sm:grid-cols-2 gap-6">
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">10,000+</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">m² Monthly Capacity</p>
            </div>
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">&gt;95%</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">Machine Uptime</p>
            </div>
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">≥97%</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">First-Pass Yield</p>
            </div>
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">&lt;0.7%</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">Defect Rate</p>
            </div>
          </div>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-2xl">
          <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1200&q=80" alt="Factory"
            class="w-full h-full object-cover hover:scale-105 transition duration-700">
        </div>
      </div>

      <!-- Factory Features -->
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gradient-to-br from-stone-50 to-white p-8 rounded-2xl shadow-lg">
          <div class="w-14 h-14 bg-stone-900 text-white rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">Optimized Parameters</h3>
          <p class="text-gray-600 leading-relaxed">
            Machine settings precisely calibrated for stone hardness, thickness, and characteristics to ensure optimal
            cutting and finishing.
          </p>
        </div>

        <div class="bg-gradient-to-br from-stone-50 to-white p-8 rounded-2xl shadow-lg">
          <div class="w-14 h-14 bg-stone-900 text-white rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">Quality Gates</h3>
          <p class="text-gray-600 leading-relaxed">
            In-process quality control checkpoints at every stage to minimize rework, reduce waste, and ensure consistent
            excellence.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Warehouse -->
  <section class="py-20 md:py-28 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div>
            <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Warehouse</span>
            <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Strategic Warehousing</h2>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
              Our modern warehouse facility ensures efficient storage, rapid order fulfillment,
              and seamless coordination between production and delivery operations.
            </p>

            <div class="space-y-6">
              <div class="bg-white p-6 rounded-xl shadow-sm border border-stone-100">
                <div class="flex items-start gap-4">
                  <div
                    class="w-12 h-12 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                  </div>
                  <div class="flex-1">
                    <h4 class="font-medium text-stone-900 mb-2 text-lg">Organized Storage Zones</h4>
                    <p class="text-gray-600">Dedicated areas for finished products, work-in-progress, and raw materials
                      with clear labeling and accessibility.</p>
                  </div>
                </div>
              </div>

              <div class="bg-white p-6 rounded-xl shadow-sm border border-stone-100">
                <div class="flex items-start gap-4">
                  <div
                    class="w-12 h-12 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                  </div>
                  <div class="flex-1">
                    <h4 class="font-medium text-stone-900 mb-2 text-lg">Real-Time Inventory</h4>
                    <p class="text-gray-600">Digital inventory management system providing instant visibility of stock
                      levels and order status.</p>
                  </div>
                </div>
              </div>

              <div class="bg-white p-6 rounded-xl shadow-sm border border-stone-100">
                <div class="flex items-start gap-4">
                  <div
                    class="w-12 h-12 bg-gradient-to-br from-stone-900 to-stone-700 text-white rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                  </div>
                  <div class="flex-1">
                    <h4 class="font-medium text-stone-900 mb-2 text-lg">Safety & Security</h4>
                    <p class="text-gray-600">Comprehensive safety protocols, secure storage, and controlled access to
                      protect valuable inventory.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="rounded-2xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80" alt="Warehouse"
              class="w-full h-full object-cover hover:scale-105 transition duration-700">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Production -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Our Production</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Precision Manufacturing Process</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          From raw slabs to finished masterpieces, our systematic production workflow ensures
          consistent quality and exceptional results at every stage.
        </p>
      </div>

      <!-- Sawing Machine -->
      <div class="mb-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-12">
          <div class="rounded-2xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80" alt="Sawing Machine"
              class="w-full h-full object-cover hover:scale-105 transition duration-700">
          </div>
          <div>
            <div
              class="inline-block px-4 py-2 bg-stone-900 text-white text-xs uppercase tracking-wider rounded-full mb-4">
              Advanced Equipment
            </div>
            <h3 class="text-3xl md:text-4xl font-light text-stone-900 mb-6">Precision Sawing Technology</h3>
            <p class="text-gray-700 text-lg leading-relaxed mb-8">
              Our state-of-the-art bridge saw operations deliver consistent, high-precision cuts for marble
              and natural stone. Equipped with CNC controls, calibrated guides, water-assisted cooling,
              and rigid frames, our sawing machines achieve exceptional accuracy while minimizing chipping.
            </p>

            <div class="grid sm:grid-cols-2 gap-4">
              <div class="bg-gradient-to-br from-stone-50 to-white p-5 rounded-xl border border-stone-100">
                <div class="text-2xl font-light text-stone-900 mb-1">±0.5–1.0 mm</div>
                <p class="text-sm text-gray-600 font-medium">Cutting Accuracy</p>
                <p class="text-xs text-gray-500 mt-1">Dimensional tolerance</p>
              </div>
              <div class="bg-gradient-to-br from-stone-50 to-white p-5 rounded-xl border border-stone-100">
                <div class="text-2xl font-light text-stone-900 mb-1">&lt;0.7%</div>
                <p class="text-sm text-gray-600 font-medium">Edge Quality</p>
                <p class="text-xs text-gray-500 mt-1">Chip rate per inspection</p>
              </div>
              <div class="bg-gradient-to-br from-stone-50 to-white p-5 rounded-xl border border-stone-100">
                <div class="text-2xl font-light text-stone-900 mb-1">&gt;95%</div>
                <p class="text-sm text-gray-600 font-medium">Machine Uptime</p>
                <p class="text-xs text-gray-500 mt-1">Planned availability</p>
              </div>
              <div class="bg-gradient-to-br from-stone-50 to-white p-5 rounded-xl border border-stone-100">
                <div class="text-2xl font-light text-stone-900 mb-1">0–45°</div>
                <p class="text-sm text-gray-600 font-medium">Mitre Capability</p>
                <p class="text-xs text-gray-500 mt-1">Consistent bevels</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Production Process -->
      <div>
        <div class="text-center mb-12">
          <h3 class="text-3xl md:text-4xl font-light text-stone-900 mb-4">Production Process</h3>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Our systematic 8-step workflow ensures consistent quality from incoming inspection to final dispatch.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Step 1 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              01</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Incoming Inspection</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Visual quality check, thickness & size verification, surface integrity assessment, and documentation
                intake.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              02</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Cut Planning</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Nesting layout optimization to maximize yield; blade and feed/RPM selection by material profile.
              </p>
            </div>
          </div>

          <!-- Step 3 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              03</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Precision Cutting</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                CNC alignment, dry run verification, active cutting with water cooling for clean, accurate edges.
              </p>
            </div>
          </div>

          <!-- Step 4 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              04</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Surface Finishing</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Polish, honed, brushed, flamed, or custom textures per specification requirements.
              </p>
            </div>
          </div>

          <!-- Step 5 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              05</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Quality Control</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Dimensional verification, squareness check, gloss/RA targets, visual grading & documentation.
              </p>
            </div>
          </div>

          <!-- Step 6 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              06</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Packaging</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Protective film, foam separators, labeling, A-frame loading, and container preparation.
              </p>
            </div>
          </div>

          <!-- Step 7 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              07</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Final Inspection</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Comprehensive quality check, photo documentation, and shipment preparation review.
              </p>
            </div>
          </div>

          <!-- Step 8 -->
          <div
            class="group relative bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-stone-100">
            <div class="absolute top-6 right-6 text-6xl font-light text-stone-100 group-hover:text-stone-200 transition">
              08</div>
            <div class="relative">
              <div
                class="w-14 h-14 rounded-xl bg-gradient-to-br from-stone-900 to-stone-700 text-white flex items-center justify-center mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
              </div>
              <h4 class="font-medium text-stone-900 mb-3 text-lg">Dispatch</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Container stuffing, documentation handover, and coordinated shipment to destination.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Packaging Solutions -->
  <section class="py-20 md:py-28 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Packaging</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Advanced Protection Solutions</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Engineered packaging systems ensuring your marble arrives in pristine condition,
          regardless of destination or transport conditions.
        </p>
      </div>

      <!-- Standard Packaging -->
      <div class="mb-16">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <div
              class="inline-block px-4 py-2 bg-white border border-stone-200 text-xs uppercase tracking-wider rounded-full mb-4 text-stone-700">
              Standard Solution
            </div>
            <h3 class="text-3xl md:text-4xl font-light text-stone-900 mb-6">Standard Packaging</h3>
            <p class="text-gray-700 text-lg leading-relaxed mb-8">
              Our standard packaging solution provides reliable protection for domestic and regional shipments.
              This cost-effective approach balances protection with efficiency, perfect for regular orders
              and standard marble products.
            </p>

            <div class="space-y-4">
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-stone-900 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Secure Strapping</h4>
                  <p class="text-gray-600 text-sm">Heavy-duty straps keep bundles secure during transit and handling.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="rounded-2xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80" alt="Standard Packaging"
              class="w-full h-full object-cover hover:scale-105 transition duration-700">
          </div>
        </div>
      </div>

      <!-- Special Packaging - Moulded Foam -->
      <div class="mb-16">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div class="order-2 lg:order-1 rounded-2xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=1200&q=80"
              alt="Moulded Foam Packaging" class="w-full h-full object-cover hover:scale-105 transition duration-700">
          </div>
          <div class="order-1 lg:order-2">
            <div
              class="inline-block px-4 py-2 bg-amber-50 border border-amber-200 text-xs uppercase tracking-wider rounded-full mb-4 text-amber-700">
              Premium Protection
            </div>
            <h3 class="text-3xl md:text-4xl font-light text-stone-900 mb-6">Special Packaging - Moulded Foam</h3>
            <p class="text-gray-700 text-lg leading-relaxed mb-8">
              For premium marble products and irregular shapes, our custom-contoured moulded foam packaging
              provides superior protection. Each foam insert is precisely crafted to match the exact
              dimensions and contours of your marble pieces.
            </p>

            <div class="space-y-4">
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-amber-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Custom Contoured Design</h4>
                  <p class="text-gray-600 text-sm">Foam precisely shaped to fit each marble piece's unique dimensions and
                    edges.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-amber-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Superior Impact Absorption</h4>
                  <p class="text-gray-600 text-sm">High-performance foam material absorbs shocks and vibrations during
                    transport.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-amber-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Edge & Corner Protection</h4>
                  <p class="text-gray-600 text-sm">Extra cushioning at vulnerable points prevents chipping and breakage.
                  </p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-amber-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Ideal for Complex Shapes</h4>
                  <p class="text-gray-600 text-sm">Perfect for countertops, custom cuts, and irregularly shaped marble
                    pieces.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Wood Packaging -->
      <div class="mb-16">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <div
              class="inline-block px-4 py-2 bg-green-50 border border-green-200 text-xs uppercase tracking-wider rounded-full mb-4 text-green-700">
              Heavy-Duty Protection
            </div>
            <h3 class="text-3xl md:text-4xl font-light text-stone-900 mb-6">Wood Packaging</h3>
            <p class="text-gray-700 text-lg leading-relaxed mb-8">
              Our heavy-duty wooden crates provide maximum protection for international shipments and oversized
              marble slabs. ISPM-15 compliant, these crates meet all international phytosanitary standards
              for cross-border shipping.
            </p>

            <div class="space-y-4">
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-green-700 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">ISPM-15 Certified</h4>
                  <p class="text-gray-600 text-sm">Heat-treated wood meeting international standards for export
                    shipments.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-green-700 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Robust Construction</h4>
                  <p class="text-gray-600 text-sm">Heavy-duty timber frame designed to withstand rough handling and
                    stacking.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-green-700 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Internal Cushioning</h4>
                  <p class="text-gray-600 text-sm">Foam separators and protective layers between marble pieces inside
                    crate.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-green-700 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Oversized Capability</h4>
                  <p class="text-gray-600 text-sm">Custom crate sizes available for large format slabs and special
                    orders.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="rounded-2xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1586528116493-a029325540fa?w=1200&q=80" alt="Wood Packaging"
              class="w-full h-full object-cover hover:scale-105 transition duration-700">
          </div>
        </div>
      </div>

      <!-- Plywood Packaging -->
      <div>
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div class="order-2 lg:order-1 rounded-2xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1590759668628-05b0fc34593c?w=1200&q=80" alt="Plywood Packaging"
              class="w-full h-full object-cover hover:scale-105 transition duration-700">
          </div>
          <div class="order-1 lg:order-2">
            <div
              class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 text-xs uppercase tracking-wider rounded-full mb-4 text-blue-700">
              Versatile Solution
            </div>
            <h3 class="text-3xl md:text-4xl font-light text-stone-900 mb-6">Plywood Packaging</h3>
            <p class="text-gray-700 text-lg leading-relaxed mb-8">
              Plywood packaging offers an excellent balance of strength, weight, and cost-effectiveness.
              Perfect for medium-sized orders and regional exports, this versatile solution provides
              reliable protection while keeping shipping costs manageable.
            </p>

            <div class="space-y-4">
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Lightweight Yet Strong</h4>
                  <p class="text-gray-600 text-sm">Marine-grade plywood provides excellent strength-to-weight ratio for
                    cost-effective shipping.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Moisture Resistant</h4>
                  <p class="text-gray-600 text-sm">Treated plywood resists moisture and humidity during sea transport.
                  </p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Quick Assembly</h4>
                  <p class="text-gray-600 text-sm">Efficient construction and disassembly for faster turnaround times.
                  </p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div
                  class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-1">Cost-Effective Export</h4>
                  <p class="text-gray-600 text-sm">Ideal for international shipments where weight reduction saves on
                    freight costs.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Packaging Comparison -->
      <div class="mt-20">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
          <h3 class="text-3xl font-light text-stone-900 mb-8 text-center">Choosing the Right Packaging</h3>
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="border-b-2 border-stone-200">
                  <th class="text-left py-4 px-4 text-stone-900 font-medium">Package Type</th>
                  <th class="text-left py-4 px-4 text-stone-900 font-medium">Best For</th>
                  <th class="text-left py-4 px-4 text-stone-900 font-medium">Protection Level</th>
                  <th class="text-left py-4 px-4 text-stone-900 font-medium">Shipping Distance</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-stone-100">
                <tr class="hover:bg-stone-50 transition">
                  <td class="py-4 px-4 font-medium text-stone-900">Standard</td>
                  <td class="py-4 px-4 text-gray-600">Regular orders, standard products</td>
                  <td class="py-4 px-4"><span class="px-3 py-1 bg-stone-100 rounded-full text-sm">Good</span></td>
                  <td class="py-4 px-4 text-gray-600">Domestic & Regional</td>
                </tr>
                <tr class="hover:bg-stone-50 transition">
                  <td class="py-4 px-4 font-medium text-stone-900">Moulded Foam</td>
                  <td class="py-4 px-4 text-gray-600">Premium marble, custom shapes</td>
                  <td class="py-4 px-4"><span
                      class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm">Excellent</span></td>
                  <td class="py-4 px-4 text-gray-600">All Distances</td>
                </tr>
                <tr class="hover:bg-stone-50 transition">
                  <td class="py-4 px-4 font-medium text-stone-900">Wood Crates</td>
                  <td class="py-4 px-4 text-gray-600">International, oversized slabs</td>
                  <td class="py-4 px-4"><span
                      class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">Maximum</span></td>
                  <td class="py-4 px-4 text-gray-600">International</td>
                </tr>
                <tr class="hover:bg-stone-50 transition">
                  <td class="py-4 px-4 font-medium text-stone-900">Plywood</td>
                  <td class="py-4 px-4 text-gray-600">Medium orders, export shipments</td>
                  <td class="py-4 px-4"><span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">Very
                      Good</span></td>
                  <td class="py-4 px-4 text-gray-600">Regional & Export</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quality Metrics -->
  <section class="py-20 md:py-28 bg-gradient-to-b from-white to-stone-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Performance Excellence</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Our Quality Metrics</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Consistent performance across all quality indicators reflects our commitment to excellence.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <div
          class="relative bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div class="text-5xl font-light text-stone-900 mb-3">≥97%</div>
            <div class="w-16 h-1 bg-stone-900 mx-auto mb-4"></div>
            <p class="text-stone-600 text-sm uppercase tracking-wider font-medium mb-2">First-Pass Yield</p>
            <p class="text-gray-500 text-sm">Measured before rework/repair</p>
          </div>
        </div>

        <div
          class="relative bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div class="text-5xl font-light text-stone-900 mb-3">&lt;0.7%</div>
            <div class="w-16 h-1 bg-stone-900 mx-auto mb-4"></div>
            <p class="text-stone-600 text-sm uppercase tracking-wider font-medium mb-2">Edge Chip Rate</p>
            <p class="text-gray-500 text-sm">Per inspection lot</p>
          </div>
        </div>

        <div
          class="relative bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div class="text-5xl font-light text-stone-900 mb-3">&gt;98%</div>
            <div class="w-16 h-1 bg-stone-900 mx-auto mb-4"></div>
            <p class="text-stone-600 text-sm uppercase tracking-wider font-medium mb-2">On-Time Dispatch</p>
            <p class="text-gray-500 text-sm">Against confirmed plan</p>
          </div>
        </div>

        <div
          class="relative bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300">
          <div
            class="absolute inset-0 bg-gradient-to-br from-stone-900/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
          </div>
          <div class="relative">
            <div class="text-5xl font-light text-stone-900 mb-3">&lt;0.5%</div>
            <div class="w-16 h-1 bg-stone-900 mx-auto mb-4"></div>
            <p class="text-stone-600 text-sm uppercase tracking-wider font-medium mb-2">Damage Rate</p>
            <p class="text-gray-500 text-sm">During transit & delivery</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="relative py-24 md:py-32 overflow-hidden"
    style="background-image: linear-gradient(135deg, rgba(18,18,18,.75) 0%, rgba(18,18,18,.65) 100%), url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1600&q=80'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="absolute inset-0 opacity-20">
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_50%)]"></div>
    </div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-light text-white mb-6 leading-tight">
          Ready to Experience<br>Excellence?
        </h2>
        <p class="text-xl sm:text-2xl text-white/90 mb-10 leading-relaxed">
          Discover how Megah Marmer can elevate your project with our comprehensive marble solutions,
          advanced technology, and unwavering commitment to quality.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="group inline-flex items-center gap-3 bg-white text-stone-900 px-8 py-4 text-lg font-medium hover:bg-stone-100 transition-all duration-300 shadow-xl hover:shadow-2xl">
            <span>Contact Us Today</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>
          <a href="#"
            class="group inline-flex items-center gap-3 border-2 border-white/80 text-white px-8 py-4 text-lg font-medium hover:bg-white/10 hover:border-white transition-all duration-300">
            <span>View Our Products</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
