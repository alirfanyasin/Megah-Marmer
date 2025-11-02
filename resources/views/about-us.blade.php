@extends('layouts.page')
@section('title', 'About Us')
@section('content')

  <!-- Hero Section -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(135deg, rgba(0,0,0,.7) 0%, rgba(0,0,0,.5) 100%), url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1600&q=80');">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl">
        <div class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full mb-6">
          <p class="uppercase tracking-[0.2em] text-white/90 text-sm">About Megah Marmer</p>
        </div>
        <h1 class="text-5xl md:text-6xl font-light leading-tight mb-6 text-white">
          Excellence in Every<br><span class="text-stone-300">Stone We Craft</span>
        </h1>
        <p class="text-xl text-white/90 leading-relaxed">
          Indonesia's premier marble manufacturer combining precision technology
          with masterful craftsmanship since day one.
        </p>
      </div>
    </div>
  </section>

  <!-- Our Story -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <span class="text-sm uppercase tracking-[0.2em] text-stone-500">Our Story</span>
          <h2 class="text-4xl font-light mt-4 mb-6 text-stone-900">Built on Passion, Driven by Excellence</h2>
          <p class="text-gray-700 text-lg leading-relaxed mb-6">
            Megah Marmer stands as Indonesia's premier marble manufacturing company, where traditional
            craftsmanship meets cutting-edge technology. Our state-of-the-art facility processes premium
            marble slabs with unmatched precision, serving clients across Indonesia and international markets.
          </p>
          <p class="text-gray-700 text-lg leading-relaxed">
            From architects and interior designers to contractors and homeowners, we've become the trusted
            partner for those who demand nothing but the finest marble solutions.
          </p>
        </div>
        <div class="relative">
          <img
            src="https://plus.unsplash.com/premium_photo-1663013601545-30e162fcfece?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="Marble Manufacturing" class="rounded-2xl shadow-2xl w-full h-full object-cover">
        </div>
      </div>
    </div>
  </section>

  <!-- Core Values -->
  <section class="py-20 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500">Our Commitments</span>
        <h2 class="text-4xl font-light mt-4 mb-6 text-stone-900">What Sets Us Apart</h2>
      </div>

      <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
          <div class="w-14 h-14 bg-stone-900 text-white rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">Quality Excellence</h3>
          <p class="text-gray-600">
            Every marble piece undergoes rigorous quality control, ensuring perfection in beauty,
            durability, and precision that exceeds industry standards.
          </p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
          <div class="w-14 h-14 bg-stone-900 text-white rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">Advanced Technology</h3>
          <p class="text-gray-600">
            State-of-the-art CNC machinery and precision tools enable exceptional finishes while
            maintaining consistent quality across all production volumes.
          </p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
          <div class="w-14 h-14 bg-stone-900 text-white rounded-xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">On-Time Delivery</h3>
          <p class="text-gray-600">
            Efficient production and logistics systems ensure your marble arrives exactly
            when you need it, every time, without compromise.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Production Facility -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500">Our Facility</span>
        <h2 class="text-4xl font-light mt-4 mb-6 text-stone-900">State-of-the-Art Manufacturing</h2>
      </div>

      <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div>
          <h3 class="text-3xl font-light text-stone-900 mb-6">End-to-End Production Excellence</h3>
          <p class="text-gray-700 text-lg leading-relaxed mb-8">
            Our comprehensive production workflow encompasses every aspect of marble processing,
            from incoming slab inspection to final dispatch. Each stage is meticulously controlled
            to maintain the highest standards of quality and precision.
          </p>
          <div class="grid grid-cols-2 gap-6">
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">10,000+</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">m² Monthly</p>
            </div>
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">&gt;95%</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">Uptime</p>
            </div>
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">≥97%</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">First-Pass</p>
            </div>
            <div class="bg-stone-50 p-6 rounded-xl">
              <div class="text-3xl font-light text-stone-900 mb-2">&lt;0.7%</div>
              <p class="text-sm text-gray-600 uppercase tracking-wider">Defect Rate</p>
            </div>
          </div>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-2xl">
          <img
            src="https://images.unsplash.com/photo-1727504172743-08f14448fab8?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="Factory" class="w-full h-full object-cover">
        </div>
      </div>

      <!-- Production Process -->
      <div class="grid md:grid-cols-4 gap-6 max-w-7xl mx-auto">
        <div class="bg-gradient-to-br from-stone-50 to-white p-6 rounded-xl border border-stone-100">
          <div class="text-stone-900 font-light text-4xl mb-4">01</div>
          <h4 class="font-medium text-stone-900 mb-2">Inspection</h4>
          <p class="text-gray-600 text-sm">Quality check & documentation</p>
        </div>
        <div class="bg-gradient-to-br from-stone-50 to-white p-6 rounded-xl border border-stone-100">
          <div class="text-stone-900 font-light text-4xl mb-4">02</div>
          <h4 class="font-medium text-stone-900 mb-2">Precision Cutting</h4>
          <p class="text-gray-600 text-sm">CNC-controlled sawing</p>
        </div>
        <div class="bg-gradient-to-br from-stone-50 to-white p-6 rounded-xl border border-stone-100">
          <div class="text-stone-900 font-light text-4xl mb-4">03</div>
          <h4 class="font-medium text-stone-900 mb-2">Surface Finishing</h4>
          <p class="text-gray-600 text-sm">Polish & custom textures</p>
        </div>
        <div class="bg-gradient-to-br from-stone-50 to-white p-6 rounded-xl border border-stone-100">
          <div class="text-stone-900 font-light text-4xl mb-4">04</div>
          <h4 class="font-medium text-stone-900 mb-2">Quality & Dispatch</h4>
          <p class="text-gray-600 text-sm">Final verification & packaging</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Packaging Solutions -->
  <section class="py-20 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500">Packaging</span>
        <h2 class="text-4xl font-light mt-4 mb-6 text-stone-900">Protection Solutions</h2>
      </div>

      <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-white p-8 rounded-xl shadow-lg">
          <div class="w-12 h-12 bg-stone-100 rounded-lg flex items-center justify-center mb-6">
            <span class="text-2xl">📦</span>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">Standard</h3>
          <p class="text-gray-600 mb-4">Secure strapping for domestic & regional shipments</p>
          <span class="text-sm px-3 py-1 bg-stone-100 rounded-full">Domestic</span>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-amber-200">
          <div class="w-12 h-12 bg-amber-50 rounded-lg flex items-center justify-center mb-6">
            <span class="text-2xl">🛡️</span>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">Moulded Foam</h3>
          <p class="text-gray-600 mb-4">Custom-contoured premium protection for delicate pieces</p>
          <span class="text-sm px-3 py-1 bg-amber-100 text-amber-700 rounded-full">Premium</span>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-lg">
          <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center mb-6">
            <span class="text-2xl">📐</span>
          </div>
          <h3 class="text-xl font-medium mb-3 text-stone-900">Wood Crates</h3>
          <p class="text-gray-600 mb-4">ISPM-15 certified for international shipping</p>
          <span class="text-sm px-3 py-1 bg-green-100 text-green-700 rounded-full">Export</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Quality Metrics -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500">Performance</span>
        <h2 class="text-4xl font-light mt-4 mb-6 text-stone-900">Our Quality Metrics</h2>
      </div>

      <div class="grid md:grid-cols-4 gap-8 max-w-5xl mx-auto">
        <div class="text-center">
          <div class="text-5xl font-light text-stone-900 mb-3">≥97%</div>
          <div class="w-16 h-1 bg-stone-900 mx-auto mb-3"></div>
          <p class="text-stone-600 text-sm uppercase tracking-wider">First-Pass Yield</p>
        </div>
        <div class="text-center">
          <div class="text-5xl font-light text-stone-900 mb-3">&lt;0.7%</div>
          <div class="w-16 h-1 bg-stone-900 mx-auto mb-3"></div>
          <p class="text-stone-600 text-sm uppercase tracking-wider">Chip Rate</p>
        </div>
        <div class="text-center">
          <div class="text-5xl font-light text-stone-900 mb-3">&gt;98%</div>
          <div class="w-16 h-1 bg-stone-900 mx-auto mb-3"></div>
          <p class="text-stone-600 text-sm uppercase tracking-wider">On-Time</p>
        </div>
        <div class="text-center">
          <div class="text-5xl font-light text-stone-900 mb-3">&lt;0.5%</div>
          <div class="w-16 h-1 bg-stone-900 mx-auto mb-3"></div>
          <p class="text-stone-600 text-sm uppercase tracking-wider">Damage Rate</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-24 overflow-hidden"
    style="background-image: linear-gradient(135deg, rgba(18,18,18,.75) 0%, rgba(18,18,18,.65) 100%), url('https://images.unsplash.com/photo-1496247749665-49cf5b1022e9?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1173'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4 text-center">
      <div class="max-w-3xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-light text-white mb-6">Ready to Experience Excellence?</h2>
        <p class="text-xl text-white/90 mb-10">
          Discover how Megah Marmer can elevate your project with premium marble solutions.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="inline-flex items-center gap-3 bg-white text-stone-900 px-8 py-4 text-lg font-medium hover:bg-stone-100 transition">
            <span>Contact Us Today</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>
          <a href="#"
            class="inline-flex items-center gap-3 border-2 border-white text-white px-8 py-4 text-lg font-medium hover:bg-white/10 transition">
            <span>View Products</span>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
