@extends('layouts.page')
@section('title', 'Packaging Solutions — Premium Protection for Your Marble')
@section('content')

  <!-- Hero Section -->
  <section class="relative h-screen flex items-center justify-center bg-cover bg-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-stone-900/30 via-transparent to-stone-900/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="max-w-4xl mx-auto">
        <div class="w-24 h-1 bg-white/70 mx-auto mb-8"></div>
        <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-light text-white mb-8 leading-tight">
          Packaging Solutions
        </h1>
        <p class="text-xl sm:text-2xl md:text-3xl font-light text-white/90 leading-relaxed max-w-3xl mx-auto">
          Engineered protection systems ensuring your marble arrives in pristine condition
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction Section -->
  <section class="py-24 sm:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-gray-900 mb-8">
          Protection Meets Precision
        </h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-10"></div>
        <p class="text-lg sm:text-xl text-gray-700 leading-relaxed mb-6">
          Premium marble demands premium protection. Our comprehensive packaging solutions are designed
          to safeguard your investment throughout transit, from warehouse to installation site.
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
          Each packaging method is carefully selected based on marble type, dimensions, destination,
          and transport conditions—ensuring maximum protection with optimal efficiency.
        </p>
      </div>
    </div>
  </section>

  <!-- Standard Packaging Section -->
  <section class="py-20 sm:py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Image -->
          <div class="order-2 lg:order-1">
            <div class="relative overflow-hidden">
              <div class="aspect-[4/3] bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');">
              </div>
              <div class="absolute top-8 right-8 bg-white/95 backdrop-blur-sm px-6 py-3">
                <p class="text-sm font-medium text-stone-900 uppercase tracking-wider">Standard</p>
              </div>
            </div>
          </div>

          <!-- Content -->
          <div class="order-1 lg:order-2">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
              </div>
              <h2 class="text-3xl sm:text-4xl font-light text-gray-900">Standard Packaging</h2>
            </div>

            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              Our standard packaging solution provides essential protection for domestic shipments and
              short-distance transport. This economical option utilizes multiple protective layers to
              prevent scratches, chips, and surface damage during handling.
            </p>

            <div class="space-y-4 mb-8">
              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Protective Film Layer</h3>
                  <p class="text-gray-600">Adhesive plastic film applied directly to marble surface</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Foam Padding</h3>
                  <p class="text-gray-600">EPE foam sheets for edge and corner protection</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Cardboard Wrapping</h3>
                  <p class="text-gray-600">Heavy-duty corrugated cardboard exterior protection</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Strapping & Banding</h3>
                  <p class="text-gray-600">Secure plastic strapping for bundle stability</p>
                </div>
              </div>
            </div>

            <div class="bg-stone-100 border-l-4 border-stone-900 p-6">
              <p class="text-sm font-medium text-stone-900 mb-2 uppercase tracking-wider">Best For</p>
              <p class="text-gray-700">Local deliveries, warehouse storage, and cost-effective regional transport</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Moulded Foam Packaging Section -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Content -->
          <div>
            <div class="flex items-center gap-4 mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </div>
              <h2 class="text-3xl sm:text-4xl font-light text-gray-900">Moulded Foam Packaging</h2>
            </div>

            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              Advanced foam packaging technology that conforms precisely to each marble slab's dimensions
              and contours. This custom-fit solution offers superior shock absorption and protection for
              valuable or delicate marble pieces during long-distance transportation.
            </p>

            <div class="space-y-4 mb-8">
              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Custom-Contoured Protection</h3>
                  <p class="text-gray-600">Foam moulded to exact slab dimensions and profiles</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Impact Absorption</h3>
                  <p class="text-gray-600">High-density polyethylene foam absorbs shocks and vibrations</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Edge Reinforcement</h3>
                  <p class="text-gray-600">Extra padding at vulnerable corners and edges</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Moisture Resistance</h3>
                  <p class="text-gray-600">Closed-cell foam prevents water absorption</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Reusable Design</h3>
                  <p class="text-gray-600">Durable foam inserts can be reused for return shipments</p>
                </div>
              </div>
            </div>

            <div class="bg-stone-100 border-l-4 border-stone-900 p-6">
              <p class="text-sm font-medium text-stone-900 mb-2 uppercase tracking-wider">Best For</p>
              <p class="text-gray-700">Premium marble, irregular shapes, international shipping, and high-value projects
              </p>
            </div>
          </div>

          <!-- Image -->
          <div>
            <div class="relative overflow-hidden">
              <div class="aspect-[4/3] bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
              </div>
              <div class="absolute top-8 left-8 bg-white/95 backdrop-blur-sm px-6 py-3">
                <p class="text-sm font-medium text-stone-900 uppercase tracking-wider">Moulded Foam</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wood Crate Packaging Section -->
  <section class="py-20 sm:py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Image -->
          <div class="order-2 lg:order-1">
            <div class="relative overflow-hidden">
              <div class="aspect-[4/3] bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1739204618173-3e89def7140f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=687');">
              </div>
              <div class="absolute top-8 right-8 bg-white/95 backdrop-blur-sm px-6 py-3">
                <p class="text-sm font-medium text-stone-900 uppercase tracking-wider">Wood Crate</p>
              </div>
            </div>
          </div>

          <!-- Content -->
          <div class="order-1 lg:order-2">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
              </div>
              <h2 class="text-3xl sm:text-4xl font-light text-gray-900">Wood Crate Packaging</h2>
            </div>

            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              Heavy-duty wooden crates engineered for maximum protection during international shipping
              and rough handling conditions. These robust structures provide structural integrity and
              comprehensive protection for even the largest marble slabs.
            </p>

            <div class="space-y-4 mb-8">
              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Solid Wood Construction</h3>
                  <p class="text-gray-600">Kiln-dried lumber for structural strength and stability</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Internal Foam Padding</h3>
                  <p class="text-gray-600">Thick foam lining prevents direct contact with wood</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Fumigation Certified</h3>
                  <p class="text-gray-600">ISPM-15 compliant for international export requirements</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Reinforced Corners</h3>
                  <p class="text-gray-600">Metal brackets and corner protectors for added strength</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Forklift-Ready Design</h3>
                  <p class="text-gray-600">Base structure allows easy handling and loading</p>
                </div>
              </div>
            </div>

            <div class="bg-stone-100 border-l-4 border-stone-900 p-6">
              <p class="text-sm font-medium text-stone-900 mb-2 uppercase tracking-wider">Best For</p>
              <p class="text-gray-700">International exports, oversized slabs, sea freight, and extreme protection needs
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Plywood Packaging Section -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Content -->
          <div>
            <div class="flex items-center gap-4 mb-6">
              <div class="w-12 h-12 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
              </div>
              <h2 class="text-3xl sm:text-4xl font-light text-gray-900">Plywood Packaging</h2>
            </div>

            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              Versatile and cost-effective plywood packaging that balances protection with affordability.
              This solution offers excellent structural support and is ideal for medium-distance transport
              and projects requiring economical yet reliable packaging.
            </p>

            <div class="space-y-4 mb-8">
              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Marine-Grade Plywood</h3>
                  <p class="text-gray-600">Water-resistant plywood panels for outdoor storage</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">A-Frame Configuration</h3>
                  <p class="text-gray-600">Slabs stored vertically in secure A-frame bundles</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Foam Separators</h3>
                  <p class="text-gray-600">Individual foam sheets between each marble slab</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Steel Banding</h3>
                  <p class="text-gray-600">Heavy-duty steel straps secure bundles during transport</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Space Efficient</h3>
                  <p class="text-gray-600">Compact design maximizes container loading capacity</p>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <div class="w-5 h-5 mt-1 flex-shrink-0">
                  <svg class="w-full h-full text-stone-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-medium text-gray-900 mb-1">Weather Protection</h3>
                  <p class="text-gray-600">Optional plastic wrapping for additional moisture barrier</p>
                </div>
              </div>
            </div>

            <div class="bg-stone-100 border-l-4 border-stone-900 p-6">
              <p class="text-sm font-medium text-stone-900 mb-2 uppercase tracking-wider">Best For</p>
              <p class="text-gray-700">Container shipping, bulk orders, standard slabs, and budget-conscious projects</p>
            </div>
          </div>

          <!-- Image -->
          <div>
            <div class="relative overflow-hidden">
              <div class="aspect-[4/3] bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1704167674713-649193461719?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170');">
              </div>
              <div class="absolute top-8 left-8 bg-white/95 backdrop-blur-sm px-6 py-3">
                <p class="text-sm font-medium text-stone-900 uppercase tracking-wider">Plywood</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comparison Table Section -->
  <section class="py-24 sm:py-32 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-gray-900 mb-4">
            Packaging Comparison
          </h2>
          <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
          <p class="text-lg text-gray-600">
            Select the optimal packaging solution for your specific needs
          </p>
        </div>

        <div class="bg-white shadow-lg overflow-hidden">
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="bg-stone-900 text-white">
                  <th class="text-left px-6 py-4 font-semibold">Option</th>
                  <th class="text-left px-6 py-4 font-semibold">Protection Level</th>
                  <th class="text-left px-6 py-4 font-semibold">Cost</th>
                  <th class="text-left px-6 py-4 font-semibold">Weight / Volume</th>
                  <th class="text-left px-6 py-4 font-semibold">Reusability</th>
                  <th class="text-left px-6 py-4 font-semibold">Compliance</th>
                  <th class="text-left px-6 py-4 font-semibold">Typical Use</th>
                  <th class="text-left px-6 py-4 font-semibold">Lead Time</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-stone-200">
                <!-- Standard -->
                <tr class="hover:bg-stone-50/70">
                  <td class="px-6 py-4 font-medium text-stone-900">Standard</td>
                  <td class="px-6 py-4">Good</td>
                  <td class="px-6 py-4">$$</td>
                  <td class="px-6 py-4">Low</td>
                  <td class="px-6 py-4">Limited</td>
                  <td class="px-6 py-4">Domestic</td>
                  <td class="px-6 py-4">Local / Regional</td>
                  <td class="px-6 py-4">1–3 days</td>
                </tr>
                <!-- Moulded Foam -->
                <tr class="hover:bg-stone-50/70">
                  <td class="px-6 py-4 font-medium text-stone-900">Moulded Foam</td>
                  <td class="px-6 py-4">Very High</td>
                  <td class="px-6 py-4">$$$$</td>
                  <td class="px-6 py-4">Medium</td>
                  <td class="px-6 py-4">High</td>
                  <td class="px-6 py-4">Export-ready</td>
                  <td class="px-6 py-4">Premium / Irregular</td>
                  <td class="px-6 py-4">4–7 days</td>
                </tr>
                <!-- Wood Crate -->
                <tr class="hover:bg-stone-50/70">
                  <td class="px-6 py-4 font-medium text-stone-900">Wood Crate</td>
                  <td class="px-6 py-4">Extreme</td>
                  <td class="px-6 py-4">$$$$$</td>
                  <td class="px-6 py-4">High</td>
                  <td class="px-6 py-4">Medium</td>
                  <td class="px-6 py-4">ISPM-15</td>
                  <td class="px-6 py-4">Oversized / Sea Freight</td>
                  <td class="px-6 py-4">5–10 days</td>
                </tr>
                <!-- Plywood -->
                <tr class="hover:bg-stone-50/70">
                  <td class="px-6 py-4 font-medium text-stone-900">Plywood</td>
                  <td class="px-6 py-4">High</td>
                  <td class="px-6 py-4">$$$</td>
                  <td class="px-6 py-4">Medium</td>
                  <td class="px-6 py-4">Medium</td>
                  <td class="px-6 py-4">Export-ready</td>
                  <td class="px-6 py-4">Bulk / Containers</td>
                  <td class="px-6 py-4">3–5 days</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="mt-6 p-6 bg-stone-100 border border-stone-200">
            <p class="text-sm text-stone-700">
              *Lead times are indicative and may vary depending on volume, custom specifications, and shipping schedules.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Add-ons & Accessories -->
  <section class="py-20 sm:py-24 bg-white" id="add-ons">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-gray-900 mb-4">Add-ons & Accessories</h2>
          <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
          <p class="text-lg text-gray-600">Enhance safety and traceability during transit.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Moisture Barrier -->
          <div class="p-6 bg-stone-50 border border-stone-200">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z" />
                </svg>
              </div>
              <h3 class="font-medium text-stone-900">Moisture Barrier</h3>
            </div>
            <p class="text-stone-700">Poly liner + silica gel to control condensation and humidity.</p>
          </div>

          <!-- Corner Protectors -->
          <div class="p-6 bg-stone-50 border border-stone-200">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 4h7a1 1 0 011 1v7H5a1 1 0 01-1-1V4zM12 12h7a1 1 0 011 1v7h-7a1 1 0 01-1-1v-7z" />
                </svg>
              </div>
              <h3 class="font-medium text-stone-900">Corner Protectors</h3>
            </div>
            <p class="text-stone-700">Plastic/foam corner guards to mitigate vertical impact risk.</p>
          </div>

          <!-- Shock/Tip Indicators -->
          <div class="p-6 bg-stone-50 border border-stone-200">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                </svg>
              </div>
              <h3 class="font-medium text-stone-900">Shock / Tip Indicators</h3>
            </div>
            <p class="text-stone-700">Shock and tilt indicator labels for chain-of-custody.</p>
          </div>

          <!-- Vacuum Sealing -->
          <div class="p-6 bg-stone-50 border border-stone-200">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                </svg>
              </div>
              <h3 class="font-medium text-stone-900">Vacuum Sealing</h3>
            </div>
            <p class="text-stone-700">Vacuum sealing for extra protection against dust and moisture.</p>
          </div>

          <!-- Pallet Dunnage -->
          <div class="p-6 bg-stone-50 border border-stone-200">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16v4H4zM4 14h16v4H4z" />
                </svg>
              </div>
              <h3 class="font-medium text-stone-900">Pallet & Dunnage</h3>
            </div>
            <p class="text-stone-700">ISPM-15 pallets plus locking dunnage for load stability.</p>
          </div>

          <!-- Documentation Pouch -->
          <div class="p-6 bg-stone-50 border border-stone-200">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 flex items-center justify-center bg-stone-900 text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 16h8M8 12h8m-6 8h4m-1-16H7a2 2 0 00-2 2v12a2 2 0 002 2h10" />
                </svg>
              </div>
              <h3 class="font-medium text-stone-900">Docs & Labeling</h3>
            </div>
            <p class="text-stone-700">Document pouch, HS code labeling, and standard handling marks.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Timeline -->
  <section class="py-24 sm:py-32 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-gray-900 mb-4">From Order to Delivery</h2>
          <div class="w-20 h-1 bg-stone-900 mx-auto"></div>
        </div>

        <div class="space-y-8">
          <!-- Step -->
          <div class="flex gap-6">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">1</div>
            </div>
            <div>
              <h3 class="text-xl font-medium text-stone-900">Assessment & Spec</h3>
              <p class="text-stone-700">Slab dimensions, finish, shipping route, and target budget.</p>
            </div>
          </div>

          <div class="flex gap-6">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">2</div>
            </div>
            <div>
              <h3 class="text-xl font-medium text-stone-900">Design & Quotation</h3>
              <p class="text-stone-700">Technical drawings/packaging layup and formal quotation.</p>
            </div>
          </div>

          <div class="flex gap-6">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">3</div>
            </div>
            <div>
              <h3 class="text-xl font-medium text-stone-900">Fabrication</h3>
              <p class="text-stone-700">Production of foam, crates, or plywood to specification.</p>
            </div>
          </div>

          <div class="flex gap-6">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">4</div>
            </div>
            <div>
              <h3 class="text-xl font-medium text-stone-900">Packing & QC</h3>
              <p class="text-stone-700">Film application, padding, banding, labeling, and photo documentation.</p>
            </div>
          </div>

          <div class="flex gap-6">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">5</div>
            </div>
            <div>
              <h3 class="text-xl font-medium text-stone-900">Dispatch</h3>
              <p class="text-stone-700">Forwarder coordination, container booking, and handover SOP.</p>
            </div>
          </div>
        </div>

        <div class="mt-10 p-6 bg-white border border-stone-200">
          <p class="text-sm text-stone-700">
            Note: Include any special requests (fragile, stack limit, humidity control) with your order so we can
            incorporate them into the final design and shipping documents.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Compliance & Sustainability -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12">
        <div>
          <h3 class="text-2xl sm:text-3xl font-light text-stone-900 mb-4">Compliance</h3>
          <div class="w-16 h-1 bg-stone-900 mb-6"></div>
          <ul class="space-y-3 text-stone-700">
            <li>• ISPM-15 heat treatment for wood components used in export shipments.</li>
            <li>• HS code labeling and handling marks aligned with INCOTERMS.</li>
            <li>• MSDS and material declarations (upon project request).</li>
          </ul>
        </div>
        <div>
          <h3 class="text-2xl sm:text-3xl font-light text-stone-900 mb-4">Sustainability</h3>
          <div class="w-16 h-1 bg-stone-900 mb-6"></div>
          <ul class="space-y-3 text-stone-700">
            <li>• Certified plywood options and legally sourced timber.</li>
            <li>• Modular designs to maximize reusability.</li>
            <li>• Volumetric optimization to reduce logistics emissions.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-24 sm:py-32 bg-cover bg-center"
    style="background-image: linear-gradient(rgba(18,18,18,.6), rgba(18,18,18,.6)), url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-white mb-6">Need a Packaging Proposal?</h2>
      <p class="text-lg sm:text-xl text-white/90 max-w-2xl mx-auto mb-8">
        Send slab dimensions, quantities, destination, and preferred method—we’ll prepare a complete recommendation.
      </p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="{{ route('contact-us') ?? '#' }}"
          class="inline-flex items-center gap-2 bg-white text-stone-900 px-6 py-3 hover:bg-stone-100 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
          </svg>
          Request Proposal
        </a>
        <a href="#"
          class="inline-flex items-center gap-2 bg-transparent border border-white/70 text-white px-6 py-3 hover:bg-white/10 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
          </svg>
          Download Spec Sheet (PDF)
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-10">
          <h2 class="text-3xl sm:text-4xl font-light text-stone-900">FAQ</h2>
          <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        </div>

        <div class="divide-y divide-stone-200">
          <details class="py-5 group">
            <summary class="flex items-center justify-between cursor-pointer">
              <span class="text-lg font-medium text-stone-900">What is the best option for international shipping?</span>
              <span class="ml-4 group-open:rotate-180 transition">
                <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-stone-700">
              Wood Crate (ISPM-15) or Plywood with moisture-barrier add-ons. Choose according to dimensions and mode
              (sea/air).
            </div>
          </details>

          <details class="py-5 group">
            <summary class="flex items-center justify-between cursor-pointer">
              <span class="text-lg font-medium text-stone-900">When should I choose moulded foam?</span>
              <span class="ml-4 group-open:rotate-180 transition">
                <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-stone-700">
              When slab value is high, shapes are irregular, or the route has high vibration risk (long-haul trucking/air
              freight).
            </div>
          </details>

          <details class="py-5 group">
            <summary class="flex items-center justify-between cursor-pointer">
              <span class="text-lg font-medium text-stone-900">Can the packaging be reused?</span>
              <span class="ml-4 group-open:rotate-180 transition">
                <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-stone-700">
              Moulded foam and plywood are generally reusable depending on received condition; wood crates can be
              partially reused.
            </div>
          </details>

          <details class="py-5 group">
            <summary class="flex items-center justify-between cursor-pointer">
              <span class="text-lg font-medium text-stone-900">Are there eco-friendly options?</span>
              <span class="ml-4 group-open:rotate-180 transition">
                <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-stone-700">
              Yes—certified plywood, modular designs for reuse, and load optimization to reduce emissions.
            </div>
          </details>
        </div>
      </div>
    </div>
  </section>

@endsection
