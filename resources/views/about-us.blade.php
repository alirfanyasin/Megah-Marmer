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


  <!-- Storage Methods -->
  <section class="py-16 sm:py-20 bg-stone-50" id="stone-storage">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Stone Storage</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">Professional Storage Solutions</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Advanced storage methods designed to preserve marble quality and ensure safe handling throughout the supply
          chain
        </p>
      </div>
    </div>

    <section class="bg-gradient-to-b from-gray-50 to-white min-h-screen" id="marble-collection">
      <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

          <!-- Top 2 Storage Methods -->
          <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-4 mb-4">

            <!-- A-Frame Vertical Storage -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1574903841563-4722dd62b9cb?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1411"
                  alt="A-Frame Vertical Storage" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Method 1</span>
                  <h4 class="text-xl font-bold mb-1">A-Frame Vertical Storage</h4>
                  <p class="text-sm text-white/90">Space-efficient vertical storage with foam separators and corner
                    guards, minimizing surface contact and maximizing warehouse capacity.</p>
                </div>
              </div>
            </a>

            <!-- Vertical Rack System -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1678664527011-c70b1b7f757e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1631"
                  alt="Vertical Rack System" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Method 2</span>
                  <h4 class="text-xl font-bold mb-1">Vertical Rack System</h4>
                  <p class="text-sm text-white/90">Numbered slot organization for clear traceability, perfect for mixed
                    slab sizes and enabling quick, frequent access to inventory.</p>
                </div>
              </div>
            </a>

          </div>

          <!-- Bottom 3 Storage Methods -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Crated & Palletized Storage -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=800&q=80" alt="Crated Storage"
                  class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Method 3</span>
                  <h4 class="text-xl font-bold mb-1">Crated & Palletized</h4>
                  <p class="text-sm text-white/90">Export-ready packaging with ISPM-15 certified pallets, securely banded
                    and labeled for international shipping and long-term storage.</p>
                </div>
              </div>
            </a>

            <!-- Climate Controlled Storage -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1720036236632-fdb6211cf317?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470"
                  alt="Climate Controlled Storage" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Method 4</span>
                  <h4 class="text-xl font-bold mb-1">Climate Controlled Storage</h4>
                  <p class="text-sm text-white/90">Temperature and humidity-regulated facilities to prevent moisture
                    damage and maintain optimal stone condition year-round.</p>
                </div>
              </div>
            </a>

            <!-- Outdoor Covered Storage -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1670874457182-862dfede5362?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1394"
                  alt="Outdoor Covered Storage" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Method 5</span>
                  <h4 class="text-xl font-bold mb-1">Outdoor Covered Storage</h4>
                  <p class="text-sm text-white/90">Weather-protected open-air storage for bulk inventory, providing
                    cost-effective space while shielding slabs from direct elements.</p>
                </div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>
  </section>


  <!-- Our Factory -->
  <section class="py-16 sm:py-20 bg-stone-50" id="our-factory">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="text-sm uppercase tracking-[0.2em] text-stone-500 font-medium">Our Factory</span>
        <h2 class="text-4xl md:text-5xl font-light mt-4 mb-6 text-stone-900">State-of-the-Art Facilities</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Equipped with cutting-edge technology and managed by experienced craftsmen to deliver the finest marble products
        </p>
      </div>
    </div>

    <section class="bg-gradient-to-b from-gray-50 to-white min-h-screen" id="marble-collection">
      <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

          <!-- Top 2 Factory Facilities -->
          <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-4 mb-4">

            <!-- Production Floor -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2015/10/03/18/46/industry-970146_1280.jpg"
                  alt="Production Floor" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Facility 1</span>
                  <h4 class="text-xl font-bold mb-1">Advanced Production Floor</h4>
                  <p class="text-sm text-white/90">Our main production area features automated cutting systems and
                    precision machinery, ensuring consistent quality across all marble slabs.</p>
                </div>
              </div>
            </a>

            <!-- Quality Control Lab -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2025/07/03/10/52/worker-9694117_1280.jpg"
                  alt="Quality Control Lab" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Facility 2</span>
                  <h4 class="text-xl font-bold mb-1">Quality Control Laboratory</h4>
                  <p class="text-sm text-white/90">Dedicated inspection zone where every slab undergoes rigorous testing
                    for thickness, color matching, and structural integrity.</p>
                </div>
              </div>
            </a>

          </div>

          <!-- Bottom 3 Factory Areas -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Polishing Department -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2016/01/14/20/55/factory-1140760_1280.jpg"
                  alt="Polishing Department" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Facility 3</span>
                  <h4 class="text-xl font-bold mb-1">Polishing Department</h4>
                  <p class="text-sm text-white/90">High-precision polishing machines operated by skilled technicians
                    create mirror-like finishes that enhance marble's natural beauty.</p>
                </div>
              </div>
            </a>

            <!-- Storage Warehouse -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2020/11/23/16/47/stock-5770315_1280.jpg" alt="Storage Warehouse"
                  class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Facility 4</span>
                  <h4 class="text-xl font-bold mb-1">Climate-Controlled Warehouse</h4>
                  <p class="text-sm text-white/90">Spacious storage facility with organized vertical racks maintaining
                    optimal conditions to preserve marble quality before delivery.</p>
                </div>
              </div>
            </a>

            <!-- Packaging Station -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2016/01/13/14/17/factory-1137995_960_720.jpg"
                  alt="Packaging Station" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Facility 5</span>
                  <h4 class="text-xl font-bold mb-1">Export Packaging Station</h4>
                  <p class="text-sm text-white/90">Professional packaging area where slabs are carefully wrapped, crated,
                    and prepared for safe international shipping.</p>
                </div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>
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
          Marble Warehouse & Storage
        </h2>
        <p class="text-stone-600 text-lg">
          Modern storage infrastructure designed specifically for marble preservation with climate control and organized
          inventory management
        </p>
      </div>

      <!-- Main Content Grid -->
      <div class="mb-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

          <!-- Vertical Slab Storage -->
          <a href="#" onclick="return false;">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2016/11/05/21/48/lost-places-1801660_1280.jpg"
                alt="Vertical Slab Storage" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Storage Area 1</span>
                <h4 class="text-xl font-bold mb-1">Vertical Slab Racks</h4>
                <p class="text-sm text-white/90">A-frame vertical storage system with padded separators ensuring minimal
                  surface contact and maximum space efficiency for large marble slabs.</p>
              </div>
            </div>
          </a>

          <!-- Organized Inventory System -->
          <a href="#" onclick="return false;">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2020/10/01/17/11/store-5619201_1280.jpg"
                alt="Organized Inventory System" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Storage Area 2</span>
                <h4 class="text-xl font-bold mb-1">Organized Inventory System</h4>
                <p class="text-sm text-white/90">Numbered slot system with digital tracking allows quick location and
                  retrieval of specific marble types and sizes for immediate dispatch.</p>
              </div>
            </div>
          </a>

          <!-- Climate-Controlled Zone -->
          <a href="#" onclick="return false;">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=800&q=80"
                alt="Climate-Controlled Zone" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Storage Area 3</span>
                <h4 class="text-xl font-bold mb-1">Climate-Controlled Zone</h4>
                <p class="text-sm text-white/90">Temperature and humidity-regulated warehouse maintaining optimal
                  conditions to prevent moisture damage and preserve natural marble characteristics.</p>
              </div>
            </div>
          </a>

          <!-- Export Preparation Area -->
          <a href="#" onclick="return false;">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=800&q=80"
                alt="Export Preparation Area" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Storage Area 4</span>
                <h4 class="text-xl font-bold mb-1">Export Preparation Area</h4>
                <p class="text-sm text-white/90">Dedicated section for crating and palletizing marble slabs with ISPM-15
                  compliant materials ready for international container loading.</p>
              </div>
            </div>
          </a>

          <!-- Bulk Storage Yard -->
          <a href="#" onclick="return false;">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=800&q=80" alt="Bulk Storage Yard"
                class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Storage Area 5</span>
                <h4 class="text-xl font-bold mb-1">Bulk Storage Yard</h4>
                <p class="text-sm text-white/90">Outdoor covered storage for large marble blocks and high-volume
                  inventory with weather protection and easy forklift access.</p>
              </div>
            </div>
          </a>

          <!-- Quality Inspection Zone -->
          <a href="#" onclick="return false;">
            <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
              <img src="https://cdn.pixabay.com/photo/2016/09/02/18/38/factory-1639990_1280.jpg"
                alt="Quality Inspection Zone" class="h-full w-full object-cover transition-all duration-500">
              <div
                class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Storage Area 6</span>
                <h4 class="text-xl font-bold mb-1">Quality Inspection Zone</h4>
                <p class="text-sm text-white/90">Pre-shipping inspection area where every marble slab undergoes final
                  quality checks for color matching, surface finish, and dimensions.</p>
              </div>
            </div>
          </a>

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
        </div>
      </div>
    </div>

    <div class="container mx-auto max-w-7xl mt-10">
      <div
        class="group relative bg-gradient-to-b from-stone-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
        <div class="relative h-96 overflow-hidden">
          <img src="/img/team.jpg" alt="Operations Team"
            class="w-full h-full object-cover object-top group-hover:scale-110 transition duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-center text-white">
            <h3 class="text-2xl font-medium mb-2">Driven by a Strong Team</h3>
            <p class="text-sm text-white/80 uppercase tracking-wider">Excellence Through Collaboration</p>
          </div>
        </div>
      </div>
    </div>
  </section>




  {{-- Our Production --}}
  <section class="bg-gradient-to-b from-gray-50 to-white min-h-screen" id="production">
    <div class="py-12 md:py-16 lg:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        <div class="">

          <header class="mb-8 md:mb-12 text-center">
            <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Sawing Machine</h3>
            <p class="text-sm sm:text-base text-gray-600">Precision cutting technology for flawless marble slabs</p>
          </header>

          <!-- Sawing Machine -->
          <div class="mb-5 block w-full" id="sawing-machine">
            <div
              class="overflow-hidden rounded-md w-full h-[500px] relative group hover:cursor-pointer shadow-xl hover:shadow-2xl transition-all duration-500">
              <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=1000&q=80"
                alt="Industrial Sawing Machine cutting marble blocks"
                class="h-full w-full object-cover transition-all duration-700 group-hover:scale-105">

              <div
                class="absolute p-8 flex flex-col justify-end text-white bottom-0 right-0 left-0 h-full opacity-0 group-hover:opacity-100 transition-opacity duration-400"
                style="background: linear-gradient(to top, rgba(30,58,138,0.95), rgba(59,130,246,0.5), transparent);">
                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-400">
                  <span
                    class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs uppercase tracking-widest text-white mb-3">
                    Advanced Equipment
                  </span>

                  <h4 class="text-3xl font-bold mb-3">Multi-Blade Sawing Machine</h4>

                  <p class="text-base text-white/95 leading-relaxed mb-4">
                    Our industrial multi-blade sawing machines deliver unparalleled precision in transforming massive
                    marble blocks into perfectly dimensioned slabs. Equipped with diamond-tipped blades and computerized
                    controls, we achieve consistent thickness and mirror-smooth edges on every cut.
                  </p>

                  <div class="flex flex-wrap gap-4 text-sm">
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      ±0.5mm Accuracy
                    </span>
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Diamond Blade Technology
                    </span>
                    <span class="flex items-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                      </svg>
                      Auto-Tensioning System
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-4 mb-20">

            <!-- A-Frame Vertical Storage -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1574903841563-4722dd62b9cb?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1411"
                  alt="A-Frame Vertical Storage" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Method 1</span>
                  <h4 class="text-xl font-bold mb-1">A-Frame Vertical Storage</h4>
                  <p class="text-sm text-white/90">Space-efficient vertical storage with foam separators and corner
                    guards, minimizing surface contact and maximizing warehouse capacity.</p>
                </div>
              </div>
            </a>

            <!-- Vertical Rack System -->
            <a href="#" onclick="return false;">
              <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1678664527011-c70b1b7f757e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1631"
                  alt="Vertical Rack System" class="h-full w-full object-cover transition-all duration-500">
                <div
                  class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                  <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Method 2</span>
                  <h4 class="text-xl font-bold mb-1">Vertical Rack System</h4>
                  <p class="text-sm text-white/90">Numbered slot organization for clear traceability, perfect for mixed
                    slab sizes and enabling quick, frequent access to inventory.</p>
                </div>
              </div>
            </a>

          </div>

          <header class="mb-8 md:mb-12 text-center">
            <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Our Production Marble</h3>
            <p class="text-sm sm:text-base text-gray-600">Advanced technology meets precision craftsmanship</p>
          </header>
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

          <section class="bg-gradient-to-b from-gray-50 to-white min-h-screen" id="marble-collection">
            <div class="py-10">
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">

                  <!-- Quarry Extraction -->
                  <a href="#" onclick="return false;">
                    <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=800&q=80"
                        alt="Quarry Extraction" class="h-full w-full object-cover transition-all duration-500">
                      <div
                        class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Stage 1</span>
                        <h4 class="text-xl font-bold mb-1">Quarry Extraction</h4>
                        <p class="text-sm text-white/90">Marble blocks are extracted from the quarry using controlled
                          drilling and cutting.</p>
                      </div>
                    </div>
                  </a>

                  <!-- Block Cutting -->
                  <a href="#" onclick="return false;">
                    <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?w=800&q=80"
                        alt="Block Cutting" class="h-full w-full object-cover transition-all duration-500">
                      <div
                        class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Stage 2</span>
                        <h4 class="text-xl font-bold mb-1">Block Cutting</h4>
                        <p class="text-sm text-white/90">Heavy-duty saws slice marble blocks into precise, uniform slabs.
                        </p>
                      </div>
                    </div>
                  </a>

                  <!-- Slab Polishing -->
                  <a href="#" onclick="return false;">
                    <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1615971677499-5467cbab01c0?w=800&q=80"
                        alt="Slab Polishing" class="h-full w-full object-cover transition-all duration-500">
                      <div
                        class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Stage 3</span>
                        <h4 class="text-xl font-bold mb-1">Slab Polishing</h4>
                        <p class="text-sm text-white/90">Polishing machines refine each slab to achieve a premium glossy
                          surface.</p>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-4">

                  <!-- Quality Inspection -->
                  <a href="#" onclick="return false;">
                    <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=800&q=80"
                        alt="Quality Inspection" class="h-full w-full object-cover transition-all duration-500">
                      <div
                        class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Stage 4</span>
                        <h4 class="text-xl font-bold mb-1">Quality Inspection</h4>
                        <p class="text-sm text-white/90">Slabs are inspected for color consistency, veins, surface
                          defects, and thickness.</p>
                      </div>
                    </div>
                  </a>

                  <!-- Finishing & Packaging -->
                  <a href="#" onclick="return false;">
                    <div class="overflow-hidden rounded w-full h-80 relative group hover:cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1565688534245-05d6b5be184a?w=800&q=80"
                        alt="Final Finishing" class="h-full w-full object-cover transition-all duration-500">
                      <div
                        class="absolute p-4 flex flex-col justify-end text-white bottom-0 right-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <span class="text-xs uppercase tracking-wider text-white/70 mb-1">Stage 5</span>
                        <h4 class="text-xl font-bold mb-1">Finishing & Packaging</h4>
                        <p class="text-sm text-white/90">Edges are refined and slabs are packaged securely for worldwide
                          delivery.</p>
                      </div>
                    </div>
                  </a>

                </div>

              </div>
            </div>
          </section>






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
          <a href="{{ route('our-packaging') }}">
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
          <a href="{{ route('our-packaging') }}#special-packaging">
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
          <a href="{{ route('our-packaging') }}#wood-packaging">
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
          <a href="{{ route('our-packaging') }}#polywood-packaging">
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


  <!-- CTA Section with Motto -->
  <section class="relative py-24 overflow-hidden"
    style="background-image: linear-gradient(135deg, rgba(15,23,42,.85) 0%, rgba(30,41,59,.75) 100%), url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1600&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">

    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-10 left-10 w-32 h-32 border-2 border-white rounded-full"></div>
      <div class="absolute bottom-10 right-10 w-24 h-24 border-2 border-white rounded-full"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
      <div class="max-w-4xl mx-auto">
        <!-- Motto Badge -->
        <div
          class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-6 py-2 rounded-full mb-6 border border-white/20">
          <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <span class="text-white text-sm font-medium tracking-wide">Our Commitment</span>
        </div>

        <!-- Main Motto -->
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
          Customer Satisfaction
        </h2>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-amber-400 mb-8 leading-tight">
          is Our Future
        </h2>

        <!-- Supporting Text -->
        <p class="text-lg md:text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed">
          We believe that every satisfied customer is a step towards our continued excellence. Your trust drives our
          innovation, and your satisfaction shapes our tomorrow.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
          <a href="{{ route('contact-us') }}"
            class="group inline-flex items-center gap-3 bg-white text-slate-900 px-8 py-4 text-base md:text-lg font-semibold hover:bg-amber-400 hover:text-slate-900 transition-all duration-300 rounded-lg shadow-xl hover:shadow-2xl hover:scale-105 w-full sm:w-auto justify-center">
            <span>Start Your Project</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>

          <a href="/products/all"
            class="group inline-flex items-center gap-3 border-2 border-white text-white px-8 py-4 text-base md:text-lg font-semibold hover:bg-white hover:text-slate-900 transition-all duration-300 rounded-lg hover:scale-105 w-full sm:w-auto justify-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            <span>Explore Products</span>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
