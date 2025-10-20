@extends('layouts.page')
@section('title', 'Stuffing Area — Safe Packing & Container Loading')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">Operations</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Stuffing Area
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          A dedicated zone for consolidation, final packing, and loading marble slabs into containers/trucks
          with strong standards for safety, traceability, and quality.
        </p>
      </div>
    </div>
  </section>

  <!-- Overview & Purpose -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Stuffing Area Functions</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 leading-relaxed mb-4">
          The stuffing area is the final checkpoint before shipment. Core activities include: receiving
          from the warehouse, quality inspection, measuring/weighing, final packing, labeling & documents,
          and loading into containers/trucks (stuffing).
        </p>
        <ul class="space-y-2 text-stone-700">
          <li>• Minimizes risk of cracks/scratches during transit.</li>
          <li>• Ensures quantity, dimensions, and export documentation are accurate.</li>
          <li>• Maintains workplace safety and clean, one-way forklift traffic flow.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1529078155058-5d716f45d604?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- Zoning & Layout -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Zoning & Layout</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">
          One-way material flow to reduce handling congestion and improve safety.
        </p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
          $zones = [
              ['title' => 'Receiving Bay', 'desc' => 'Drop-off from warehouse; verify PO and packaging condition.'],
              [
                  'title' => 'QC & Measurement',
                  'desc' => 'Visual check, photos, measure dimensions/weight, and finish completeness.',
              ],
              ['title' => 'Pre-Pack Staging', 'desc' => 'Staging area for foam/film/separators before final packing.'],
              [
                  'title' => 'Packing Line',
                  'desc' => 'Apply protective film, foam, corner guards, and banding/strapping.',
              ],
              [
                  'title' => 'Documentation Desk',
                  'desc' => 'Print labels, HS codes, shock/tilt indicators, and export papers.',
              ],
              ['title' => 'Loading Dock', 'desc' => 'Forklift ramp to truck/container; arrange on A-frames.'],
          ];
        @endphp
        @foreach ($zones as $z)
          <div class="bg-white p-6 border border-stone-200">
            <h3 class="font-medium text-stone-900 mb-2">{{ $z['title'] }}</h3>
            <p class="text-stone-700">{{ $z['desc'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Stuffing SOP -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
        </div>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Stuffing SOP (Brief)</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ol class="space-y-4 text-stone-700">
          <li><span class="font-medium text-stone-900">1. Receiving & QC:</span> physical check, photos, measure; record
            any nonconformities.</li>
          <li><span class="font-medium text-stone-900">2. Final Packing:</span> protective film → foam → inter-slab
            separators → banding.</li>
          <li><span class="font-medium text-stone-900">3. Labeling & Documents:</span> HS codes, handling marks,
            shock/tilt indicators, packing list.</li>
          <li><span class="font-medium text-stone-900">4. Container Arrangement:</span> A-frame/vertical racks; lock with
            dunnage and stoppers.</li>
          <li><span class="font-medium text-stone-900">5. Photos & Seal:</span> layout documentation; apply container seal
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

  <!-- Equipment & Safety -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Equipment</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="grid sm:grid-cols-2 gap-3 text-stone-700">
          <li>• 2–3.5T forklifts (fork extensions)</li>
          <li>• A-frames / vertical racks</li>
          <li>• ISPM-15 pallets & dunnage</li>
          <li>• Strapping tools (PP/PET/steel)</li>
          <li>• Foam, corner guards, film</li>
          <li>• Shock & tilt indicators</li>
          <li>• Scales & laser measure</li>
          <li>• Documentation camera</li>
        </ul>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Safety</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-2 text-stone-700">
          <li>• Mandatory PPE: helmet, safety shoes, reflective vest, gloves.</li>
          <li>• Forklift speed limits and no passengers allowed.</li>
          <li>• Marked pedestrian zones with portable barricades.</li>
          <li>• 5S housekeeping, spill-free and clear lanes.</li>
          <li>• Spill/incident drills and first-aid kits available.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-10">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Area Gallery</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80');">
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

  <!-- Operational KPIs -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Stuffing Lead Time</p>
          <p class="text-3xl font-light text-stone-900 mt-2">3–6 hours</p>
          <p class="text-stone-600 mt-2 text-sm">Depending on volume and packing complexity.</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Damage Rate</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&lt; 0.5%</p>
          <p class="text-stone-600 mt-2 text-sm">Target damage during transit.</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">On-Time Dispatch</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&gt; 98%</p>
          <p class="text-stone-600 mt-2 text-sm">Timely handover to forwarder.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
      <div class="text-center mb-8">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Stuffing FAQ</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>

      <div class="divide-y divide-stone-200">
        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">What’s the difference between staging and stuffing?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Staging is preparation (QC, packing, documents); stuffing is the act of loading into the container/truck.
          </div>
        </details>

        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">How are slabs arranged inside the container?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Typically vertically on A-frames with foam separators; lock with dunnage and straps to prevent shifting.
          </div>
        </details>

        <details class="py-5 group">
          <summary class="flex items-center justify-between cursor-pointer">
            <span class="text-lg font-medium text-stone-900">Which documents are prepared?</span>
            <span class="ml-4 group-open:rotate-180 transition">
              <svg class="w-5 h-5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-stone-700">
            Packing list, invoice, HS code/handling mark labels, layout photos, seal number, and MSDS/material declaration
            if needed.
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
      <h2 class="text-3xl sm:text-4xl font-light text-white mb-4">Need a Stuffing Schedule or QC Checklist?</h2>
      <p class="text-white/90 max-w-2xl mx-auto mb-8">Contact us for checklist templates, A-frame layouts, and a complete
        SOP.</p>
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
          Download Checklist (PDF)
        </a>
      </div>
    </div>
  </section>

@endsection
