@extends('layouts.page')
@section('title', 'Warehouse — Efficient, Safe, and Traceable Operations')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">Operations</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Warehouse
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          Streamlined receiving, storage, and dispatch—engineered for safety, accuracy, and fast turnaround.
        </p>
      </div>
    </div>
  </section>

  <!-- Overview -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Purpose of the Warehouse</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 leading-relaxed mb-4">
          Our warehouse is the control center for inbound materials, storage, and outbound fulfillment.
          We combine one-way traffic flows, clear zoning, and digital traceability to keep goods protected
          and orders moving.
        </p>
        <ul class="space-y-2 text-stone-700">
          <li>• FIFO/FEFO principles and batch-level traceability.</li>
          <li>• Real-time inventory visibility with location codes.</li>
          <li>• Safe material handling with defined pedestrian routes.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1529078155058-5d716f45d604?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- Layout & Zones -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Layout & Zones</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">
          Clear zoning and one-way forklift lanes improve safety and reduce congestion.
        </p>
      </div>

      @php
        $zones = [
            ['title' => 'Inbound Receiving', 'desc' => 'Unload, count, and visual QC with photo records.'],
            ['title' => 'QA Hold', 'desc' => 'Quarantine area for items pending inspection or rework.'],
            ['title' => 'Primary Storage', 'desc' => 'A-frames and vertical racks—numbered slots for fast picking.'],
            ['title' => 'Packing Prep', 'desc' => 'Foam, film, corner guards, and banding preparation.'],
            ['title' => 'Outbound Staging', 'desc' => 'Order consolidation and final verification before loading.'],
            ['title' => 'Dispatch Dock', 'desc' => 'Loading bay for trucks/containers with lane markings.'],
        ];
      @endphp

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($zones as $z)
          <div class="bg-white p-6 border border-stone-200">
            <h3 class="font-medium text-stone-900 mb-2">{{ $z['title'] }}</h3>
            <p class="text-stone-700">{{ $z['desc'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Inbound & Outbound Processes -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');"></div>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Inbound Process</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ol class="space-y-4 text-stone-700">
          <li><span class="font-medium text-stone-900">1. Unload & Check-in:</span> count, visual QC, photograph issues.
          </li>
          <li><span class="font-medium text-stone-900">2. Labeling:</span> apply batch/project IDs, thickness/finish, and
            location code.</li>
          <li><span class="font-medium text-stone-900">3. Put-away:</span> store on A-frames/racks with foam separators
            and edge protection.</li>
        </ol>
        <div class="mt-8">
          <h3 class="text-2xl font-light text-stone-900 mb-3">Outbound Process</h3>
          <ol class="space-y-4 text-stone-700">
            <li><span class="font-medium text-stone-900">1. Pick & Verify:</span> scan/location match, surface check,
              photograph.</li>
            <li><span class="font-medium text-stone-900">2. Pack & Seal:</span> film → foam → separators → banding; apply
              documents/labels.</li>
            <li><span class="font-medium text-stone-900">3. Stage & Load:</span> consolidate at staging; load per plan,
              record seal numbers.</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Inventory Control -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Inventory Control</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-3 text-stone-700">
          <li>• Rack/slot coding for each slab; barcode/QR on labels.</li>
          <li>• Cycle counts (weekly spot checks) and variance investigation.</li>
          <li>• FIFO/FEFO by project deadlines and stone porosity/finish.</li>
          <li>• Exception logs for damages, rework, or substitutions.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1628428779456-5d4f52a99e90?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- Equipment & Safety -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Equipment</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="grid sm:grid-cols-2 gap-3 text-stone-700">
          <li>• 2–3.5T forklifts (fork extensions & clamps)</li>
          <li>• A-frames / vertical racks</li>
          <li>• ISPM-15 pallets & dunnage</li>
          <li>• Strapping tools (PP/PET/steel)</li>
          <li>• Foam, corner guards, film</li>
          <li>• Shock & tilt indicators</li>
        </ul>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Safety</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-2 text-stone-700">
          <li>• Mandatory PPE: helmet, safety shoes, reflective vest, gloves.</li>
          <li>• One-way forklift lanes; horn at intersections/blind spots.</li>
          <li>• Pedestrian markings and portable barricades near racks.</li>
          <li>• 5S housekeeping; keep aisles dry, clean, and obstruction-free.</li>
          <li>• First-aid kits, spill kits, and incident drills ready.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- KPIs -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Receiving Lead Time</p>
          <p class="text-3xl font-light text-stone-900 mt-2">≤ 24 hours</p>
          <p class="text-stone-600 mt-2 text-sm">From dock to location assignment.</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Picking Accuracy</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&gt; 99.5%</p>
          <p class="text-stone-600 mt-2 text-sm">Right slab, right order, first time.</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Damage Rate</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&lt; 0.5%</p>
          <p class="text-stone-600 mt-2 text-sm">In handling and storage.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-10">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Warehouse Gallery</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
      <div class="text-center mb-8">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Warehouse FAQ</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>

      <div class="divide-y divide-stone-200">
        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">How do you allocate storage locations?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            By rack/slot codes based on size, finish, and pick frequency—high movers near staging, heavy slabs on
            reinforced racks.
          </div>
        </details>

        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">What’s included in outbound verification?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Item code, finish, dimensions, quantity, and condition—plus photo, labels, and paperwork check before loading.
          </div>
        </details>

        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">Do you support export documentation?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Yes—HS code labels, packing lists, handling marks, and container seal records, with photos for
            chain-of-custody.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-20 sm:py-24 bg-cover bg-center text-center"
    style="background-image: linear-gradient(rgba(18,18,18,.6), rgba(18,18,18,.6)), url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-light text-white mb-4">Need a Warehouse Layout or SOP?</h2>
      <p class="text-white/90 max-w-2xl mx-auto mb-8">Request detailed rack numbering, aisle planning, and cycle count
        checklists.</p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="{{ route('contact-us') ?? '#' }}"
          class="inline-flex items-center gap-2 bg-white text-stone-900 px-6 py-3 hover:bg-stone-100 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
          </svg>
          Contact Us
        </a>
        <a href="#"
          class="inline-flex items-center gap-2 border border-white/80 text-white px-6 py-3 hover:bg-white/10 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
          </svg>
          Download SOP (PDF)
        </a>
      </div>
    </div>
  </section>

@endsection
