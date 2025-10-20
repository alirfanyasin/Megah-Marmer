@extends('layouts.page')
@section('title', 'Our Factory — Precision, Quality, Reliability')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">Manufacturing</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Our Factory
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          Where premium stone materials meet engineering discipline—controlled processes, reliable capacity,
          and meticulous quality at every step.
        </p>
      </div>
    </div>
  </section>

  <!-- About the Facility -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Built for Precision & Throughput</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 leading-relaxed mb-4">
          Our integrated facility handles end-to-end stone processing—from incoming slab inspection,
          calibration, and cutting to finishing, packaging, and export loading. Layout and flows are
          designed to minimize handling risk while ensuring traceability.
        </p>
        <ul class="space-y-2 text-stone-700">
          <li>• One-way forklift lanes and clearly marked pedestrian routes.</li>
          <li>• Digital traveler cards and barcode labeling for every batch.</li>
          <li>• Dedicated zones for fabrication, storage, packing, and stuffing.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');"></div>
      </div>
    </div>
  </section>

  <!-- Capabilities -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Core Capabilities</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">From raw slab to export-ready crates—seamless, safe, and consistent.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 bg-white border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Slab Cutting</h3>
          <p class="text-stone-700">Bridge saw & water-assisted cutting with calibrated tolerances.</p>
        </div>
        <div class="p-6 bg-white border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Edge Finishing</h3>
          <p class="text-stone-700">Polished, honed, beveled profiles; chip-free edges with jigs.</p>
        </div>
        <div class="p-6 bg-white border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Surface Treatment</h3>
          <p class="text-stone-700">Sealing, anti-stain application, and final inspection lighting.</p>
        </div>
        <div class="p-6 bg-white border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Packaging & Stuffing</h3>
          <p class="text-stone-700">Custom foam, plywood/crates (ISPM-15), and A-frame container loading.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Production Flow -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80');">
        </div>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Production Flow</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ol class="space-y-4 text-stone-700">
          <li><span class="font-medium text-stone-900">1. Incoming QC:</span> visual check, measurements, and
            documentation photos.</li>
          <li><span class="font-medium text-stone-900">2. Cutting & Shaping:</span> bridge saw & templates; maintain safe
            lean angles on racks.</li>
          <li><span class="font-medium text-stone-900">3. Finishing & Sealing:</span> polish/hone; apply protective
            sealants as specified.</li>
          <li><span class="font-medium text-stone-900">4. Final QC:</span> edge integrity, surface inspection, dimensional
            verification.</li>
          <li><span class="font-medium text-stone-900">5. Packing & Labeling:</span> foam separators, corner protectors,
            barcodes, HS code marks.</li>
          <li><span class="font-medium text-stone-900">6. Stuffing & Dispatch:</span> A-frame layout, dunnage locking,
            container sealing.</li>
        </ol>
      </div>
    </div>
  </section>

  <!-- Quality & Compliance -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Quality Assurance</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-3 text-stone-700">
          <li>• Lot-based traveler cards with checkpoints at each station.</li>
          <li>• Controlled lighting for surface defect detection.</li>
          <li>• Gauge calibration schedule for measuring tools.</li>
          <li>• Photo records before packing and before container sealing.</li>
        </ul>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Compliance & Sustainability</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-3 text-stone-700">
          <li>• ISPM-15 compliant wood for export crates and pallets.</li>
          <li>• Material declarations/MSDS available upon project request.</li>
          <li>• Waste segregation, water usage control, and reusable packaging options.</li>
          <li>• Volumetric optimization to reduce logistics emissions.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Safety Culture & Capacity -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-3 gap-6">
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Safety Culture</p>
          <p class="text-stone-900 mt-2">Mandatory PPE, one-way forklift aisles, and toolbox talks—near-miss reporting
            encouraged.</p>
        </div>
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Daily Capacity (Indicative)</p>
          <p class="text-3xl font-light text-stone-900 mt-2">Up to 300 m²</p>
          <p class="text-stone-600 mt-2 text-sm">Varies with mix, finish, and complexity.</p>
        </div>
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">On-Time Dispatch</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&gt; 98%</p>
          <p class="text-stone-600 mt-2 text-sm">Planned vs. actual loading schedule.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-10">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Inside the Factory</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1529078155058-5d716f45d604?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1628428779456-5d4f52a99e90?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-20 sm:py-24 bg-cover bg-center text-center"
    style="background-image: linear-gradient(rgba(18,18,18,.6), rgba(18,18,18,.6)), url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-light text-white mb-4">Want to See Our Operations?</h2>
      <p class="text-white/90 max-w-2xl mx-auto mb-8">Book a factory tour or request our detailed capability profile and
        SOPs.</p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="{{ route('contact-us') ?? '#' }}"
          class="inline-flex items-center gap-2 bg-white text-stone-900 px-6 py-3 hover:bg-stone-100 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
          </svg>
          Book a Tour
        </a>
        <a href="#"
          class="inline-flex items-center gap-2 border border-white/80 text-white px-6 py-3 hover:bg-white/10 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
          </svg>
          Download Profile (PDF)
        </a>
      </div>
    </div>
  </section>

@endsection
