@extends('layouts.page')
@section('title', 'Sawing Machine — Precision Cutting for Stone')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">Manufacturing</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Sawing Machine
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          High-precision bridge saw operations for marble and natural stone—stable, repeatable, and safe.
        </p>
      </div>
    </div>
  </section>

  <!-- Overview -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Purpose & Benefits</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 leading-relaxed mb-4">
          Our sawing machines deliver consistent cuts for slabs and custom pieces. Calibrated guides,
          water-assisted cooling, and rigid frames minimize chipping while maintaining tight tolerances.
        </p>
        <ul class="space-y-2 text-stone-700">
          <li>• Accurate straight and mitre cuts with repeatable settings.</li>
          <li>• Reduced dust and heat through controlled water flow.</li>
          <li>• Optimized nesting to reduce off-cuts and waste.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');"></div>
      </div>
    </div>
  </section>

  <!-- Machine Specifications -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Machine Specifications</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">Key parameters for stable, clean, and efficient cutting.</p>
      </div>

      <div class="bg-white shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="bg-stone-900 text-white">
                <th class="text-left px-6 py-4 font-semibold">Parameter</th>
                <th class="text-left px-6 py-4 font-semibold">Typical Value</th>
                <th class="text-left px-6 py-4 font-semibold">Notes</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-stone-200">
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Blade Diameter</td>
                <td class="px-6 py-4">350–625 mm</td>
                <td class="px-6 py-4">Chosen per thickness & stone hardness</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Max Cut Thickness</td>
                <td class="px-6 py-4">20–80 mm</td>
                <td class="px-6 py-4">Depends on blade and motor power</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Table Size</td>
                <td class="px-6 py-4">3200 × 2000 mm</td>
                <td class="px-6 py-4">Rotating/tilting for mitre cuts</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Cutting Tolerance</td>
                <td class="px-6 py-4">±0.5–1.0 mm</td>
                <td class="px-6 py-4">With proper calibration & feed rate</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Water Flow</td>
                <td class="px-6 py-4">Adjustable</td>
                <td class="px-6 py-4">Cooling & dust suppression</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Mitre Capability</td>
                <td class="px-6 py-4">0–45°</td>
                <td class="px-6 py-4">Consistent bevels for edge joining</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mt-6 p-6 bg-stone-100 border border-stone-200">
          <p class="text-sm text-stone-700">
            *Values are indicative and may vary by model and blade selection.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Capabilities -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Core Capabilities</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">Versatile cutting programs for multiple stone types and formats.</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Straight Cutting</h3>
          <p class="text-stone-700">Dimensional cuts for tiles, steps, and countertops.</p>
        </div>
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Mitre/Bevel</h3>
          <p class="text-stone-700">Clean 45° edges for seamless joinery.</p>
        </div>
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Slotting & Grooves</h3>
          <p class="text-stone-700">Back kerfs and functional channels.</p>
        </div>
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h3 class="font-medium text-stone-900 mb-2">Nesting Optimization</h3>
          <p class="text-stone-700">Layout planning to reduce off-cuts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Cutting Process (SOP) -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1628428779456-5d4f52a99e90?w=1200&q=80');">
        </div>
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Cutting Process (Brief SOP)</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ol class="space-y-4 text-stone-700">
          <li><span class="font-medium text-stone-900">1. Pre-check:</span> verify job card, dimensions, blade type,
            coolant supply.</li>
          <li><span class="font-medium text-stone-900">2. Setup:</span> place slab on table with supports; align fence and
            clamps.</li>
          <li><span class="font-medium text-stone-900">3. Dry Run:</span> simulate path; check clearance and feed
            direction.</li>
          <li><span class="font-medium text-stone-900">4. Cut:</span> engage water; control feed rate to avoid
            chatter/chips.</li>
          <li><span class="font-medium text-stone-900">5. Inspect:</span> verify size, edge quality, and squareness;
            rework if needed.</li>
          <li><span class="font-medium text-stone-900">6. Clean & Tag:</span> rinse, dry edges, apply labels, move to
            finishing.</li>
        </ol>
        <div class="mt-6 p-4 bg-white border border-stone-200 text-sm text-stone-700">
          Note: keep consistent RPM/feed pairing per stone hardness and thickness.
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
          <li>• Mandatory PPE: face shield/goggles, hearing protection, gloves, safety shoes.</li>
          <li>• Guarding in place; never bypass interlocks or sensors.</li>
          <li>• Keep hands clear; use push bars and clamps to secure workpieces.</li>
          <li>• Manage slurry—avoid slippery floors; use drainage and mops.</li>
          <li>• Lockout/tagout for blade change and maintenance tasks.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- Preventive Maintenance -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-start">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">Preventive Maintenance</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <ul class="space-y-3 text-stone-700">
          <li>• Daily: table cleaning, coolant check, blade visual inspection.</li>
          <li>• Weekly: guide lubrication, alignment checks, hose/leak inspection.</li>
          <li>• Monthly: spindle bearing noise check, belt tension, electrical panel dusting.</li>
          <li>• Per Blade: dressing/trueing schedule based on cut quality trend.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
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
          <p class="text-stone-600 text-sm uppercase tracking-wider">Cut Accuracy</p>
          <p class="text-3xl font-light text-stone-900 mt-2">±0.5–1.0 mm</p>
          <p class="text-stone-600 mt-2 text-sm">Dimensional tolerance achieved.</p>
        </div>
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Edge Chip Rate</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&lt; 0.7%</p>
          <p class="text-stone-600 mt-2 text-sm">Per inspection lot.</p>
        </div>
        <div class="bg-stone-50 p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Uptime</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&gt; 95%</p>
          <p class="text-stone-600 mt-2 text-sm">Planned vs. available hours.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-10">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Sawing in Action</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');"></div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-20 sm:py-24 bg-cover bg-center text-center"
    style="background-image: linear-gradient(rgba(18,18,18,.6), rgba(18,18,18,.6)), url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-light text-white mb-4">Need a Cutting Plan or SOP?</h2>
      <p class="text-white/90 max-w-2xl mx-auto mb-8">Request blade selection guides, feed/RPM charts, and layout
        templates.</p>
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
