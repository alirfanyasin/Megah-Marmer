@extends('layouts.page')
@section('title', 'Stone Storage — Safe & Organized Slab Warehousing')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">Operations</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Stone Storage
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          Controlled, traceable, and space-efficient warehousing for marble and natural stone slabs—
          minimizing risk while maximizing accessibility and inventory accuracy.
        </p>
      </div>
    </div>
  </section>

  <!-- Overview -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Purpose of Stone Storage</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 leading-relaxed mb-4">
          Our storage area safeguards slab quality before fabrication or shipment. We implement
          zoning, environmental controls, and handling SOPs to prevent warping, scratches, and mix-ups.
        </p>
        <ul class="space-y-2 text-stone-700">
          <li>• FIFO/FEFO by project or batch to keep flows predictable.</li>
          <li>• Clear labeling and digital inventory for fast retrieval.</li>
          <li>• Safe forklift lanes and pedestrian routes to reduce incidents.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1529078155058-5d716f45d604?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- Storage Methods -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Storage Methods</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">Choose the setup that best fits slab size, finish, and turnover rate.</p>
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

  <!-- Environment & Care -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
        </div>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Environment & Care</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-3 text-stone-700">
          <li>• Keep dry, shaded, and well-ventilated; avoid standing water and direct sun on polished surfaces.</li>
          <li>• Use plastic sheeting and silica gel packs for sensitive stones in humid seasons.</li>
          <li>• Separate finishes (polished/honed/flamed) and colors to prevent cross-staining.</li>
          <li>• Protect edges with foam; never place stone directly on bare concrete—use timber/ rubber strips.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Storage SOP -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Storage SOP</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>

      <div class="grid lg:grid-cols-2 gap-10 items-start">
        <div>
          <ol class="space-y-4 text-stone-700">
            <li><span class="font-medium text-stone-900">1. Receiving & Check-in:</span> visual QC, count, measure;
              photograph any damage.</li>
            <li><span class="font-medium text-stone-900">2. Label & Tag:</span> project/batch ID, thickness, finish,
              location code (rack/slot).</li>
            <li><span class="font-medium text-stone-900">3. Placement:</span> store vertically on A-frames or racks with
              foam separators.</li>
            <li><span class="font-medium text-stone-900">4. Stacking Rules:</span> heavy/thick slabs at the back; maintain
              safe lean angle.</li>
            <li><span class="font-medium text-stone-900">5. Periodic Inspection:</span> weekly check for moisture,
              corrosion on bands, or movement.</li>
            <li><span class="font-medium text-stone-900">6. Inventory Update:</span> scan or log moves; enforce FIFO/FEFO
              per job timeline.</li>
          </ol>
        </div>
        <div class="p-6 bg-white border border-stone-200">
          <h3 class="text-xl font-medium text-stone-900 mb-3">Do & Don’t</h3>
          <ul class="space-y-2 text-stone-700">
            <li>✔ Use fork extensions and certified lifting clamps.</li>
            <li>✔ Keep aisles clear ≥ 2.5 m for turning radius.</li>
            <li>✖ Don’t lift multiple loose slabs at once.</li>
            <li>✖ Don’t store directly on uneven floors.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Safety -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Safety</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-2 text-stone-700">
          <li>• Mandatory PPE: helmet, safety shoes, reflective vest, gloves.</li>
          <li>• Forklift one-way aisles; horn at intersections and blind spots.</li>
          <li>• Rated A-frames/racks with periodic torque/anchor checks.</li>
          <li>• Pedestrian markings and barrier chains around picking zones.</li>
          <li>• Spill control, first-aid kits, and incident drills in place.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');"></div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-10">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Storage Gallery</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1628428779456-5d4f52a99e90?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1529078155058-5d716f45d604?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- KPIs -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-3 gap-6">
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Picking Accuracy</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&gt; 99.5%</p>
          <p class="text-stone-600 mt-2 text-sm">Correct slab per pick ticket.</p>
        </div>
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Damage Rate in Storage</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&lt; 0.3%</p>
          <p class="text-stone-600 mt-2 text-sm">Edge chips, scratches, stains.</p>
        </div>
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Cycle Count Compliance</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&ge; 95%</p>
          <p class="text-stone-600 mt-2 text-sm">Weekly spot checks completed.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
      <div class="text-center mb-8">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Stone Storage FAQ</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>

      <div class="divide-y divide-stone-200">
        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">Vertical vs. horizontal storage?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Vertical (A-frames/racks) is safer for handling and saves space. Horizontal stacks are only for crated or
            bundled units with proper separators.
          </div>
        </details>

        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">How do you prevent staining?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Use clean foam separators, keep area dry, avoid rusty bands, and segregate porous stones. Add moisture barrier
            during rainy seasons.
          </div>
        </details>

        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">What labels are required?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Project/batch ID, stone name, finish, thickness, quantity, and rack/slot. For export, add HS code and handling
            marks.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-20 sm:py-24 bg-cover bg-center text-center"
    style="background-image: linear-gradient(rgba(18,18,18,.6), rgba(18,18,18,.6)), url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-light text-white mb-4">Need a Storage Layout or SOP PDF?</h2>
      <p class="text-white/90 max-w-2xl mx-auto mb-8">We can provide rack numbering schemes, lane planning, and
        inspection checklists.</p>
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
