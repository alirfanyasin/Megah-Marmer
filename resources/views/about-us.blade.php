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
  <section class="py-20 bg-white" id="our-story">
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
  <section class="py-20 bg-stone-50" id="our-commitments">
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
  {{-- <section class="py-20 bg-stone-50">
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
  </section> --}}

  <!-- Quality Metrics -->
  {{-- <section class="py-20 bg-white" id="our-storage">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500">Performance Storage</span>
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
  </section> --}}



  <!-- Storage Methods -->
  <section class="py-16 sm:py-20 bg-stone-50" id="stone-storage">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Stone Storage</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Storage Methods</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Choose the setup that best fits slab size, finish, and turnover rate
        </p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">A-Frame Vertical</h3>
          <p class="text-stone-700">Space-efficient, easy picking, minimal contact surfaces. Use foam separators and
            corner guards.</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Vertical Racks</h3>
          <p class="text-stone-700">Numbered slots for clear traceability; ideal for mixed sizes and frequent access.</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Crated/Palletized</h3>
          <p class="text-stone-700">For export or long storage. ISPM-15 pallets/dunnage, banded and labeled for quick
            dispatch.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Factory -->
  <section class="py-16 sm:py-20 bg-white" id="factory">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <div class="text-center mb-16">
          <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Factory</span>
          <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Efficient Storage Systems</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Designed for maximum efficiency and safety — tailored to various slab sizes, finishes, and turnover rates.
          </p>
        </div>

        <p class="text-stone-700 leading-relaxed mb-4">
          Our integrated facility manages the entire stone lifecycle — from initial slab inspection and calibration
          to precision cutting, finishing, packaging, and export handling. Every workflow is optimized to reduce
          manual handling, enhance safety, and maintain full material traceability.
        </p>

        <ul class="space-y-2 text-stone-700">
          <li>• Clearly defined forklift and pedestrian lanes for seamless logistics.</li>
          <li>• Smart barcode labeling and digital tracking for every production batch.</li>
          <li>• Dedicated sections for fabrication, storage, packaging, and container loading.</li>
        </ul>
      </div>

      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');"></div>
      </div>
    </div>
  </section>


  {{-- Warehouse Section --}}
  <section class="py-16 sm:py-20 bg-gradient-to-b from-stone-50 to-white" id="warehouse">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Header -->
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="inline-block px-3 py-1 bg-stone-900 text-white text-xs uppercase tracking-widest rounded-full mb-4">
          Our Facility
        </span>
        <h2 class="text-3xl sm:text-4xl font-bold text-stone-900 mb-4">
          Marble Warehouse
        </h2>
        <p class="text-stone-600 text-lg">
          State-of-the-art storage facility ensuring quality preservation and efficient logistics
        </p>
      </div>

      <!-- Main Content Grid -->
      <div class="grid lg:grid-cols-2 gap-8 mb-12">
        <!-- Warehouse Image -->
        <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
          <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80" alt="Marble Warehouse"
            class="w-full h-full object-cover aspect-[4/3] group-hover:scale-105 transition-transform duration-700">
          <div
            class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <div class="absolute bottom-0 left-0 right-0 p-6">
              <p class="text-white font-semibold text-lg">5,000m² Climate-Controlled Facility</p>
            </div>
          </div>
        </div>

        <!-- Warehouse Zones -->
        <div class="grid grid-cols-2 gap-4">
          @php
            $zones = [
                [
                    'title' => 'Receiving Area',
                    'desc' => 'Quality inspection & documentation',
                    'icon' =>
                        'M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4',
                ],
                [
                    'title' => 'Storage Racks',
                    'desc' => 'Organized inventory system',
                    'icon' =>
                        'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                ],
                [
                    'title' => 'Packing Station',
                    'desc' => 'Professional packaging prep',
                    'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                ],
                [
                    'title' => 'Loading Dock',
                    'desc' => 'Efficient dispatch operations',
                    'icon' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                ],
            ];
          @endphp

          @foreach ($zones as $z)
            <div
              class="bg-white rounded-xl p-5 border border-stone-200 hover:shadow-lg hover:border-stone-300 transition-all duration-300 group">
              <div
                class="w-12 h-12 bg-stone-900 rounded-lg flex items-center justify-center mb-3 group-hover:bg-stone-700 transition-colors">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $z['icon'] }}"></path>
                </svg>
              </div>
              <h4 class="font-bold text-stone-900 mb-1 text-sm">{{ $z['title'] }}</h4>
              <p class="text-stone-600 text-xs leading-relaxed">{{ $z['desc'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <!-- Features Bottom -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
        <div class="text-center">
          <div class="text-3xl font-bold text-stone-900 mb-1">5,000m²</div>
          <div class="text-stone-600 text-sm">Total Capacity</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-stone-900 mb-1">24/7</div>
          <div class="text-stone-600 text-sm">Security System</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-stone-900 mb-1">Climate</div>
          <div class="text-stone-600 text-sm">Controlled Storage</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-stone-900 mb-1">Real-Time</div>
          <div class="text-stone-600 text-sm">Inventory Tracking</div>
        </div>
      </div>
    </div>
  </section>



  <!-- Stuffing SOP -->
  <section class="py-16 sm:py-20 bg-white" id="stuffing-area">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
        </div>
      </div>
      <div>
        <div class="text-center mb-16">
          <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Stuffing Area</span>
          <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Stuffing SOP (Brief)</h2>
        </div>
        <ol class="space-y-4 text-stone-700">
          <li><span class="font-medium text-stone-900">1. Receiving & QC:</span> physical check, photos, measure; record
            any nonconformities.</li>
          <li><span class="font-medium text-stone-900">2. Final Packing:</span> protective film → foam → inter-slab
            separators → banding.</li>
          <li><span class="font-medium text-stone-900">3. Labeling & Documents:</span> HS codes, handling marks,
            shock/tilt indicators, packing list.</li>
          <li><span class="font-medium text-stone-900">4. Container Arrangement:</span> A-frame/vertical racks; lock with
            dunnage and stoppers.</li>
          <li><span class="font-medium text-stone-900">5. Photos & Seal:</span> layout documentation; apply container
            seal
            and record seal number.</li>
          <li><span class="font-medium text-stone-900">6. Handover:</span> deliver documents to forwarder; update system
            status.</li>
        </ol>
        <div class="mt-6 p-4 bg-stone-50 border border-stone-200 text-sm text-stone-700">
          Note: use one-way forklift lanes and sound the horn when entering blind spots.
        </div>
      </div>
    </div>
  </section>



  <!-- Our Team -->
  <section class="py-20 md:py-28 bg-white" id="our-team">
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
              Our operations team orchestrates seamless coordination of production,** logistics, and customer
              service to ensure flawless delivery of premium marble solutions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>




  {{-- Our Production --}}
  <section class="bg-gradient-to-b from-gray-50 to-white min-h-screen" id="production">
    <div class="py-12 md:py-16 lg:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-8 md:mb-12 text-center">
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Our Production Marble</h3>
          <p class="text-sm sm:text-base text-gray-600">Advanced technology meets precision craftsmanship</p>
        </header>

        <div class="">
          <!-- Production Process -->
          <a href="" class="mb-10 block w-full" id="production-process">
            <div
              class="overflow-hidden rounded-2xl w-full h-[500px] relative group hover:cursor-pointer shadow-xl hover:shadow-2xl transition-all duration-500">
              <iframe class="w-full h-full"
                src="https://www.youtube.com/embed/0dO9k5b3Q-I?autoplay=1&mute=1&loop=1&playlist=0dO9k5b3Q-I&controls=0&modestbranding=1&rel=0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
              </iframe>

              {{-- <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=1000&q=80"
                alt="Production Process" class="h-full w-full object-cover transition-all duration-700"> --}}
              <div
                class="absolute p-8 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-400"
                style="background: linear-gradient(to top, rgba(17,94,89,0.95), rgba(20,184,166,0.5), transparent);">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-400">
                  <span
                    class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-3">Manufacturing
                    Excellence</span>
                  <h4 class="text-3xl font-bold mb-3">Production Process</h4>
                  <p class="text-base text-white/95 leading-relaxed mb-4">
                    From raw block to finished product, our comprehensive production process includes cutting, polishing,
                    quality control, and finishing. Every step is carefully monitored to ensure premium quality.
                  </p>
                  <div class="flex gap-4 text-sm">
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Quality Assured
                    </span>
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Expert Team
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>

          <!-- Sawing Machine -->
          <a href="" class="mb-10 block w-full" id="sawing-machine">
            <div
              class="overflow-hidden rounded-2xl w-full h-[500px] relative group hover:cursor-pointer shadow-xl hover:shadow-2xl transition-all duration-500">
              <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1000&q=80" alt="Sawing Machine"
                class="h-full w-full object-cover transition-all duration-700">
              <div
                class="absolute p-8 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-400"
                style="background: linear-gradient(to top, rgba(30,58,138,0.95), rgba(59,130,246,0.5), transparent);">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-400">
                  <span
                    class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-3">Advanced
                    Equipment</span>
                  <h4 class="text-3xl font-bold mb-3">Sawing Machine</h4>
                  <p class="text-base text-white/95 leading-relaxed mb-4">
                    State-of-the-art cutting technology ensures precise dimensions and smooth edges. Our industrial-grade
                    sawing machines handle large marble blocks with exceptional accuracy and efficiency.
                  </p>
                  <div class="flex gap-4 text-sm">
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Precision Cutting
                    </span>
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      High Capacity
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


  {{-- Our Packaging --}}
  <section class="bg-gradient-to-b from-white to-gray-50 min-h-screen" id="packaging">
    <div class="py-12 md:py-16 lg:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-8 md:mb-12 text-center">
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Our Packaging</h3>
          <p class="text-sm sm:text-base text-gray-600">Secure protection for safe delivery worldwide</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Standard Packaging -->
          <a href="">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=80"
                alt="Standard Packaging" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(71,85,105,0.9), rgba(100,116,139,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Essential Protection</span>
                <h4 class="text-2xl font-bold mb-2">Standard Packaging</h4>
                <p class="text-sm text-white/95">Reliable cardboard and foam protection for regular shipments.
                  Cost-effective
                  solution that ensures your marble arrives safely for domestic and international delivery.</p>
              </div>
            </div>
          </a>

          <!-- Special Packaging (Moulded Foam) -->
          <a href="">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=800&q=80"
                alt="Moulded Foam Packaging" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(124,58,237,0.9), rgba(167,139,250,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Premium Protection</span>
                <h4 class="text-2xl font-bold mb-2">Special Packaging (Moulded Foam)</h4>
                <p class="text-sm text-white/95">Custom-molded foam cradles provide maximum protection for delicate
                  pieces.
                  Perfect for high-value marble with intricate details and special finishes.</p>
              </div>
            </div>
          </a>

          <!-- Wood Packaging -->
          <a href="">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img
                src="https://images.unsplash.com/photo-1564691848938-d0fc26235733?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
                alt="Wood Packaging" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(120,53,15,0.9), rgba(161,98,7,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Heavy-Duty Protection</span>
                <h4 class="text-2xl font-bold mb-2">Wood Packaging</h4>
                <p class="text-sm text-white/95">Robust wooden crates for maximum durability during long-distance
                  shipping.
                  Industry-standard solution for bulk orders and large marble slabs.</p>
              </div>
            </div>
          </a>

          <!-- Polywood Packaging -->
          <a href="">
            <div
              class="overflow-hidden rounded-lg w-full h-96 relative group hover:cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
              <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=800&q=80"
                alt="Polywood Packaging" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-6 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(5,150,105,0.9), rgba(16,185,129,0.4), transparent);">
                <span class="text-xs uppercase tracking-widest text-white/90 mb-2">Eco-Friendly Excellence</span>
                <h4 class="text-2xl font-bold mb-2">Polywood Packaging</h4>
                <p class="text-sm text-white/95">Sustainable polywood combines strength with environmental
                  responsibility.
                  Weather-resistant and reusable, ideal for eco-conscious clients and export shipments.</p>
              </div>
            </div>
          </a>
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
          <a href="{{ route('contact-us') }}"
            class="inline-flex items-center gap-3 bg-white text-stone-900 px-8 py-4 text-lg font-medium hover:bg-stone-100 transition">
            <span>Contact Us Today</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>
          <a href="/products/all"
            class="inline-flex items-center gap-3 border-2 border-white text-white px-8 py-4 text-lg font-medium hover:bg-white/10 transition">
            <span>View Products</span>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
