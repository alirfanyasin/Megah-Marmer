@extends('layouts.page')
@section('title', 'Matte Finishing — Understated Elegance & Natural Touch')
@section('content')

  <!-- Hero -->
  <section class="relative h-[85vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(120deg, rgba(30,30,30,.6), rgba(0,0,0,.5)), url('https://images.unsplash.com/photo-1615971677499-5467cbab01c0?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-bl from-black/40 via-transparent to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="max-w-5xl mx-auto text-white">
        <p class="uppercase tracking-[0.3em] text-white/70 mb-4 text-sm">Refined Surface Treatment</p>
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-extralight leading-tight mb-6">
          Matte Finishing<br />
          <span class="font-light">(Honed Surface)</span>
        </h1>
        <p class="text-xl sm:text-2xl text-white/90 font-light max-w-3xl mx-auto">
          Smooth, velvety texture with a subtle sheen—delivering contemporary aesthetics,
          enhanced slip resistance, and forgiving maintenance characteristics.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction Split -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-5 gap-12 items-center">
        <div class="lg:col-span-3 grid grid-cols-2 gap-4">
          <div class="aspect-square bg-cover bg-center rounded shadow-lg"
            style="background-image: url('https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=800&q=80');">
          </div>
          <div class="aspect-square bg-cover bg-center rounded shadow-lg mt-8"
            style="background-image: url('https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=800&q=80');">
          </div>
          <div class="aspect-square bg-cover bg-center rounded shadow-lg -mt-8"
            style="background-image: url('https://images.unsplash.com/photo-1615971677499-5467cbab01c0?w=800&q=80');">
          </div>
          <div class="aspect-square bg-cover bg-center rounded shadow-lg"
            style="background-image: url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80');">
          </div>
        </div>
        <div class="lg:col-span-2">
          <div class="sticky top-24">
            <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">
              The Beauty of<br />
              <span class="font-light">Matte Stone</span>
            </h2>
            <div class="w-24 h-0.5 bg-stone-900 mb-8"></div>
            <p class="text-stone-600 leading-relaxed text-lg mb-6">
              Matte finishing creates a soft, non-reflective surface that emphasizes natural stone texture
              while offering practical benefits for high-traffic areas and moisture-prone environments.
            </p>
            <p class="text-stone-600 leading-relaxed">
              Also known as honed finish, this treatment delivers a sophisticated, modern aesthetic that
              complements both contemporary and traditional design schemes.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="py-20 sm:py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900">Matte Finishing Process</h2>
        <div class="w-24 h-0.5 bg-stone-900 mx-auto mt-6 mb-8"></div>
        <p class="text-stone-600 text-lg font-light">
          Systematic abrasion creates a smooth, flat surface without the high-gloss polish—revealing natural
          stone character with enhanced practicality.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Step 1 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-br from-stone-300 to-stone-400 rounded-lg blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-white p-8 rounded-lg shadow-md border border-stone-200">
            <div class="text-6xl font-extralight text-stone-300 mb-4">01</div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Initial Grinding</h3>
            <p class="text-stone-600 leading-relaxed text-sm">
              Remove saw marks and surface irregularities using 50-120 grit diamond pads. Establish flat plane
              and eliminate lippage between tiles or slabs.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-br from-stone-300 to-stone-400 rounded-lg blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-white p-8 rounded-lg shadow-md border border-stone-200">
            <div class="text-6xl font-extralight text-stone-300 mb-4">02</div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Medium Honing</h3>
            <p class="text-stone-600 leading-relaxed text-sm">
              Progress through 200-400 grit stages to refine surface smoothness. Removes coarse grinding
              scratches while maintaining matte appearance.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-br from-stone-300 to-stone-400 rounded-lg blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-white p-8 rounded-lg shadow-md border border-stone-200">
            <div class="text-6xl font-extralight text-stone-300 mb-4">03</div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Fine Honing</h3>
            <p class="text-stone-600 leading-relaxed text-sm">
              Final passes with 600-800 grit create silky-smooth tactile feel. Surface achieves subtle sheen
              (10-30 gloss units) without mirror reflection.
            </p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-br from-stone-300 to-stone-400 rounded-lg blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-white p-8 rounded-lg shadow-md border border-stone-200">
            <div class="text-6xl font-extralight text-stone-300 mb-4">04</div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Sealing & Protection</h3>
            <p class="text-stone-600 leading-relaxed text-sm">
              Apply penetrating sealers to fill micro-pores. Enhances stain resistance without altering surface
              appearance or texture.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Characteristics -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Why Choose Matte Finish</h2>
          <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
          <p class="text-stone-600 text-lg font-light max-w-3xl mx-auto">
            Matte finishing offers distinct advantages for modern interiors and high-performance applications
            where functionality meets refined aesthetics.
          </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Benefit 1 -->
          <div class="relative p-8 bg-stone-50 border border-stone-200 hover:border-stone-300 transition">
            <div class="flex items-start gap-4 mb-4">
              <div class="w-10 h-10 bg-stone-900 rounded flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-medium text-stone-900 mb-2">Enhanced Slip Resistance</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                  Non-glossy surface provides better traction, especially when wet—ideal for bathrooms,
                  kitchens, and pool decks.
                </p>
              </div>
            </div>
          </div>

          <!-- Benefit 2 -->
          <div class="relative p-8 bg-stone-50 border border-stone-200 hover:border-stone-300 transition">
            <div class="flex items-start gap-4 mb-4">
              <div class="w-10 h-10 bg-stone-900 rounded flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-medium text-stone-900 mb-2">Hides Wear & Etching</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                  Scratches and etching from acidic substances are far less visible compared to polished surfaces—
                  more forgiving maintenance.
                </p>
              </div>
            </div>
          </div>

          <!-- Benefit 3 -->
          <div class="relative p-8 bg-stone-50 border border-stone-200 hover:border-stone-300 transition">
            <div class="flex items-start gap-4 mb-4">
              <div class="w-10 h-10 bg-stone-900 rounded flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-medium text-stone-900 mb-2">Contemporary Aesthetic</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                  Soft, understated elegance suits modern minimalist and transitional designs—no distracting
                  reflections or glare.
                </p>
              </div>
            </div>
          </div>

          <!-- Benefit 4 -->
          <div class="relative p-8 bg-stone-50 border border-stone-200 hover:border-stone-300 transition">
            <div class="flex items-start gap-4 mb-4">
              <div class="w-10 h-10 bg-stone-900 rounded flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-medium text-stone-900 mb-2">Lower Maintenance</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                  Water spots, fingerprints, and dust are less noticeable—requires less frequent cleaning
                  than polished finishes.
                </p>
              </div>
            </div>
          </div>

          <!-- Benefit 5 -->
          <div class="relative p-8 bg-stone-50 border border-stone-200 hover:border-stone-300 transition">
            <div class="flex items-start gap-4 mb-4">
              <div class="w-10 h-10 bg-stone-900 rounded flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-medium text-stone-900 mb-2">Natural Texture Emphasis</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                  Reveals authentic stone character—subtle color variations and grain patterns visible
                  without overwhelming gloss.
                </p>
              </div>
            </div>
          </div>

          <!-- Benefit 6 -->
          <div class="relative p-8 bg-stone-50 border border-stone-200 hover:border-stone-300 transition">
            <div class="flex items-start gap-4 mb-4">
              <div class="w-10 h-10 bg-stone-900 rounded flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-medium text-stone-900 mb-2">High-Traffic Friendly</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                  Durable surface withstands foot traffic in commercial lobbies, corridors, and retail spaces
                  with minimal wear appearance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Details -->
  <section class="py-20 sm:py-24 bg-gradient-to-b from-stone-50 to-stone-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="relative order-2 lg:order-1">
          <div class="aspect-[3/4] bg-cover bg-center rounded-lg shadow-2xl"
            style="background-image: url('https://images.unsplash.com/photo-1748075820744-d558255b6776?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fG1hcmJsZSUyMHJvb218ZW58MHwxfDB8fHwy&auto=format&fit=crop&q=60&w=600');">
          </div>
          <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-stone-900/10 rounded-lg -z-10"></div>
          <div class="absolute -top-6 -left-6 w-32 h-32 bg-stone-900/10 rounded-lg -z-10"></div>
        </div>

        <div class="order-1 lg:order-2">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Technical Specifications</h2>
          <div class="w-24 h-0.5 bg-stone-900 mb-8"></div>

          <div class="space-y-6">
            <div class="flex gap-4 pb-6 border-b border-stone-300">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-200 rounded-full flex items-center justify-center">
                <span class="text-stone-900 font-medium">01</span>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Gloss Level Range</h4>
                <p class="text-stone-600 text-sm">10-30 units on 60° gloss meter. Visible subtle sheen but no mirror
                  reflection—consistent matte appearance.</p>
              </div>
            </div>

            <div class="flex gap-4 pb-6 border-b border-stone-300">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-200 rounded-full flex items-center justify-center">
                <span class="text-stone-900 font-medium">02</span>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Surface Roughness</h4>
                <p class="text-stone-600 text-sm">Ra value: 0.8-2.5 μm. Smooth to touch with enhanced friction compared
                  to polished. Ideal for wet areas.</p>
              </div>
            </div>

            <div class="flex gap-4 pb-6 border-b border-stone-300">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-200 rounded-full flex items-center justify-center">
                <span class="text-stone-900 font-medium">03</span>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Abrasion Process</h4>
                <p class="text-stone-600 text-sm">Sequential diamond pad progression (50→800 grit). Water-assisted
                  grinding with controlled pressure and speed.</p>
              </div>
            </div>

            <div class="flex gap-4 pb-6 border-b border-stone-300">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-200 rounded-full flex items-center justify-center">
                <span class="text-stone-900 font-medium">04</span>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Flatness Tolerance</h4>
                <p class="text-stone-600 text-sm">±0.5mm per linear meter after final honing. Verified using precision
                  straightedge and feeler gauges.</p>
              </div>
            </div>

            <div class="flex gap-4">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-200 rounded-full flex items-center justify-center">
                <span class="text-stone-900 font-medium">05</span>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Sealer Application</h4>
                <p class="text-stone-600 text-sm">Impregnating sealers penetrate 2-4mm depth. Applied after final honing,
                  cured 24-48 hours before use.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ideal Applications -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Perfect Applications</h2>
        <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
        <p class="text-stone-600 text-lg font-light">
          Matte finish excels in environments requiring durability, safety, and refined modern aesthetics.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="group relative overflow-hidden rounded-lg shadow-lg h-80">
          <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
            style="background-image: url('https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=800&q=80');">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-xl font-light mb-2">Bathroom Floors</h3>
            <p class="text-white/90 text-sm">Slip-resistant surface ideal for wet environments and spa areas.</p>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg h-80">
          <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
            style="background-image: url('https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?w=800&q=80');">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-xl font-light mb-2">Kitchen Counters</h3>
            <p class="text-white/90 text-sm">Hides etching from acidic foods; easier to maintain than polished.</p>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg h-80">
          <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
            style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80');">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-xl font-light mb-2">Office Lobbies</h3>
            <p class="text-white/90 text-sm">Professional look with high-traffic durability and low maintenance.</p>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg h-80">
          <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
            style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=80');">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-xl font-light mb-2">Feature Walls</h3>
            <p class="text-white/90 text-sm">Contemporary statement pieces without distracting reflections.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Maintenance Guide -->
  <section class="py-20 sm:py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Care & Maintenance</h2>
          <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
          <p class="text-stone-600 text-lg font-light">
            Simple practices ensure your matte stone surfaces remain beautiful and functional for decades.
          </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
          <!-- Do's Section -->
          <div class="bg-white p-8 rounded-lg shadow-md border border-green-200">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <h3 class="text-2xl font-light text-stone-900">Recommended Practices</h3>
            </div>

            <ul class="space-y-4">
              <li class="flex gap-3">
                <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">pH-Neutral Stone Cleaner</p>
                  <p class="text-stone-600 text-sm">Use dedicated stone soap diluted in warm water for routine cleaning.
                  </p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Immediate Spill Cleanup</p>
                  <p class="text-stone-600 text-sm">Blot (don't wipe) liquids quickly to prevent penetration and
                    staining.</p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Regular Resealing</p>
                  <p class="text-stone-600 text-sm">Reapply penetrating sealer every 1-2 years based on traffic and
                    exposure.</p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Soft Cloths or Mops</p>
                  <p class="text-stone-600 text-sm">Use non-abrasive cleaning tools to preserve surface integrity.</p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Protective Pads Under Furniture</p>
                  <p class="text-stone-600 text-sm">Use felt pads on chair/table legs to prevent scratching.</p>
                </div>
              </li>
            </ul>
          </div>

          <!-- Don'ts Section -->
          <div class="bg-white p-8 rounded-lg shadow-md border border-red-200">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <h3 class="text-2xl font-light text-stone-900">Avoid These Mistakes</h3>
            </div>

            <ul class="space-y-4">
              <li class="flex gap-3">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Acidic or Alkaline Cleaners</p>
                  <p class="text-stone-600 text-sm">No vinegar, lemon juice, bleach, or ammonia—these etch and dull the
                    surface.</p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Abrasive Scrubbing Pads</p>
                  <p class="text-stone-600 text-sm">Steel wool, scouring pads, or stiff brushes will scratch and damage
                    finish.</p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Wax-Based Polishes</p>
                  <p class="text-stone-600 text-sm">Avoid furniture polish or wax—creates buildup and attracts dirt.</p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Excess Water Pooling</p>
                  <p class="text-stone-600 text-sm">Don't leave standing water—can seep into pores and cause staining.
                  </p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Dragging Heavy Objects</p>
                  <p class="text-stone-600 text-sm">Lift furniture instead of dragging to prevent surface scratches.</p>
                </div>
              </li>

              <li class="flex gap-3">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div>
                  <p class="font-medium text-stone-900">Generic All-Purpose Cleaners</p>
                  <p class="text-stone-600 text-sm">Many contain harsh chemicals unsuitable for natural stone.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Visual Comparison -->
  <section class="py-20 sm:py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Surface Character</h2>
        <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
        <p class="text-stone-600 text-lg font-light">
          See the distinctive texture and appearance of matte-finished marble—subtle, sophisticated, and practical.
        </p>
      </div>

      <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="space-y-4">
          <div class="relative group overflow-hidden rounded-lg shadow-lg">
            <div class="aspect-square bg-cover bg-center"
              style="background-image: url('https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=800&q=80');">
            </div>
            <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-sm px-4 py-3 rounded">
              <p class="text-stone-900 font-medium text-sm">Smooth Texture</p>
              <p class="text-stone-600 text-xs">Velvety feel without mirror gloss</p>
            </div>
          </div>
        </div>

        <div class="space-y-4">
          <div class="relative group overflow-hidden rounded-lg shadow-lg">
            <div class="aspect-square bg-cover bg-center"
              style="background-image: url('https://images.unsplash.com/photo-1615971677499-5467cbab01c0?w=800&q=80');">
            </div>
            <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-sm px-4 py-3 rounded">
              <p class="text-stone-900 font-medium text-sm">Natural Veining</p>
              <p class="text-stone-600 text-xs">Visible patterns without overwhelming sheen</p>
            </div>
          </div>
        </div>

        <div class="space-y-4">
          <div class="relative group overflow-hidden rounded-lg shadow-lg">
            <div class="aspect-square bg-cover bg-center"
              style="background-image: url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80');">
            </div>
            <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-sm px-4 py-3 rounded">
              <p class="text-stone-900 font-medium text-sm">Soft Glow</p>
              <p class="text-stone-600 text-xs">Gentle light diffusion, no harsh reflections</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Common Questions</h2>
          <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
        </div>

        <div class="space-y-6">
          <div class="border border-stone-200 rounded-lg p-6 hover:border-stone-300 transition">
            <h3 class="text-lg font-medium text-stone-900 mb-3">Can matte marble be re-polished later?</h3>
            <p class="text-stone-600 leading-relaxed">
              Yes. Matte surfaces can be ground and polished to a high-gloss finish if desired. However, going from
              polished back to matte requires aggressive grinding, which removes more material.
            </p>
          </div>

          <div class="border border-stone-200 rounded-lg p-6 hover:border-stone-300 transition">
            <h3 class="text-lg font-medium text-stone-900 mb-3">Is matte finish suitable for outdoor use?</h3>
            <p class="text-stone-600 leading-relaxed">
              Yes, matte finishes work well outdoors. The non-glossy surface reduces slipperiness in rain and hides
              weathering better than polished. Ensure proper sealing for freeze-thaw climates.
            </p>
          </div>

          <div class="border border-stone-200 rounded-lg p-6 hover:border-stone-300 transition">
            <h3 class="text-lg font-medium text-stone-900 mb-3">Does matte finish stain more easily than polished?</h3>
            <p class="text-stone-600 leading-relaxed">
              Not necessarily. Both require sealing. Matte surfaces may absorb liquids slightly faster if unsealed,
              but properly sealed matte marble resists staining comparably to polished surfaces.
            </p>
          </div>

          <div class="border border-stone-200 rounded-lg p-6 hover:border-stone-300 transition">
            <h3 class="text-lg font-medium text-stone-900 mb-3">How often should matte marble be sealed?</h3>
            <p class="text-stone-600 leading-relaxed">
              Typically every 1-2 years for floors and counters, less frequently for walls. Perform a water droplet
              test: if water absorbs within 10 minutes, it's time to reseal.
            </p>
          </div>

          <div class="border border-stone-200 rounded-lg p-6 hover:border-stone-300 transition">
            <h3 class="text-lg font-medium text-stone-900 mb-3">Can I use steam cleaners on matte marble?</h3>
            <p class="text-stone-600 leading-relaxed">
              Yes, but with caution. Use low-pressure steam and avoid prolonged exposure. Excessive heat and moisture
              can degrade sealers over time. Always dry surfaces afterward.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative py-24 sm:py-32 bg-cover bg-center"
    style="background-image: linear-gradient(120deg, rgba(40,40,40,.75), rgba(0,0,0,.7)), url('https://images.unsplash.com/photo-1615971677499-5467cbab01c0?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/30"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extralight mb-6">
          Discover Matte<br />
          <span class="font-light">Elegance</span>
        </h2>
        <p class="text-xl text-white/90 font-light mb-10 max-w-2xl mx-auto">
          Request matte-finished samples, detailed specifications, or consult with our finishing experts
          to find the perfect solution for your project.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="inline-flex items-center gap-3 bg-white text-stone-900 px-8 py-4 text-lg font-medium hover:bg-stone-100 transition-all hover:gap-4 group">
            <span>Request Matte Samples</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
          <a href="#"
            class="inline-flex items-center gap-3 border-2 border-white/80 text-white px-8 py-4 text-lg font-medium hover:bg-white/10 transition-all hover:gap-4 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            <span>Consult Our Experts</span>
          </a>
        </div>
        <div class="mt-12 pt-8 border-t border-white/20">
          <p class="text-white/70 text-sm uppercase tracking-widest mb-4">Other Available Finishes</p>
          <div class="flex flex-wrap items-center justify-center gap-6 text-white/90">
            <a href="#" class="hover:text-white transition">Polished</a>
            <span class="text-white/40">•</span>
            <span class="font-medium">Matte/Honed</span>
            <span class="text-white/40">•</span>
            <a href="#" class="hover:text-white transition">Brushed</a>
            <span class="text-white/40">•</span>
            <a href="#" class="hover:text-white transition">Leathered</a>
            <span class="text-white/40">•</span>
            <a href="#" class="hover:text-white transition">Flamed</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
