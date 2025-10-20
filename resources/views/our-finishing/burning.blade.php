@extends('layouts.page')
@section('title', 'Burning Marble Finishing — Aged Texture & Natural Weathering')
@section('content')

  <!-- Hero -->
  <section class="relative h-[85vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(to right, rgba(0,0,0,.7), rgba(60,60,60,.6)), url('https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-[0.35em] text-white/60 mb-4 text-sm">Thermal Surface Treatment</p>
        <h1 class="text-6xl sm:text-7xl md:text-8xl font-extralight leading-none mb-6">
          Burning<br />
          <span class="font-light">Finishing</span>
        </h1>
        <p class="text-xl sm:text-2xl text-white/90 font-light max-w-3xl leading-relaxed">
          High-temperature flame treatment that creates naturally weathered aesthetics—
          exposing crystalline structure with enhanced grip and timeless character.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div class="order-2 lg:order-1">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1000&q=80"
              alt="Burned marble surface" class="w-full h-[550px] object-cover shadow-xl">
          </div>
          <div class="order-1 lg:order-2">
            <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">
              Flame-Textured<br />
              <span class="font-light">Elegance</span>
            </h2>
            <div class="w-20 h-0.5 bg-stone-900 mb-8"></div>
            <div class="space-y-5 text-stone-600 text-lg leading-relaxed">
              <p>
                Burning finishing, also known as thermal or flame finishing, applies intense heat
                to marble surfaces causing differential expansion of mineral crystals. This controlled
                thermal shock creates a rough, naturally weathered texture.
              </p>
              <p>
                The result is a slip-resistant surface with pronounced texture variation, ideal for
                outdoor applications where aesthetics meet functionality. The finish reveals the stone's
                internal structure in an organic, unrepeatable pattern.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="py-20 sm:py-24 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight">Thermal Finishing Process</h2>
        <div class="w-24 h-0.5 bg-white/80 mx-auto mt-6 mb-8"></div>
        <p class="text-white/80 text-lg font-light">
          Controlled application of extreme heat to achieve desired surface characteristics.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <!-- Step 1 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">01</div>
            <h3 class="text-2xl font-light mb-3">Surface Preparation</h3>
            <p class="text-white/70 leading-relaxed">
              Marble slabs are cut to size and cleaned thoroughly. Surface must be dry to prevent
              cracking during thermal treatment. Initial grinding may be applied for flatness.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">02</div>
            <h3 class="text-2xl font-light mb-3">Flame Application</h3>
            <p class="text-white/70 leading-relaxed">
              High-intensity oxy-acetylene or propane torch (1,800-2,000°C) is moved across the
              surface at controlled speed. Heat causes mineral crystals to expand and fracture.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">03</div>
            <h3 class="text-2xl font-light mb-3">Rapid Cooling</h3>
            <p class="text-white/70 leading-relaxed">
              Immediate cooling with water or air causes thermal shock. Differential contraction
              between minerals creates the characteristic rough, flaked texture.
            </p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">04</div>
            <h3 class="text-2xl font-light mb-3">Debris Removal</h3>
            <p class="text-white/70 leading-relaxed">
              Loose mineral fragments and flakes are brushed away using stiff brushes or compressed
              air. Surface is cleaned to remove residual particles.
            </p>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">05</div>
            <h3 class="text-2xl font-light mb-3">Quality Check</h3>
            <p class="text-white/70 leading-relaxed">
              Inspection for uniform texture depth and coverage. Areas with insufficient burning
              may receive additional flame passes for consistency.
            </p>
          </div>
        </div>

        <!-- Step 6 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded blur opacity-20 group-hover:opacity-30 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">06</div>
            <h3 class="text-2xl font-light mb-3">Optional Sealing</h3>
            <p class="text-white/70 leading-relaxed">
              Penetrating sealers may be applied for stain resistance. The textured surface requires
              more sealer due to increased porosity and surface area.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Characteristics -->
  <section class="py-20 sm:py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Distinctive Features</h2>
          <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
          <p class="text-stone-600 text-lg font-light">
            What makes burning finishing unique among marble surface treatments.
          </p>
        </div>

        <div class="grid sm:grid-cols-2 gap-8">
          <div class="bg-white p-8 border border-stone-200 shadow-sm">
            <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Heat-Induced Texture</h3>
            <p class="text-stone-600 leading-relaxed">
              Thermal shock creates organic, irregular surface relief that cannot be replicated
              through mechanical means. Each piece is truly unique.
            </p>
          </div>

          <div class="bg-white p-8 border border-stone-200 shadow-sm">
            <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Superior Slip Resistance</h3>
            <p class="text-stone-600 leading-relaxed">
              Rough, fractured surface provides excellent traction in wet conditions, exceeding
              most standard anti-slip finishes for outdoor safety.
            </p>
          </div>

          <div class="bg-white p-8 border border-stone-200 shadow-sm">
            <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Weather Durability</h3>
            <p class="text-stone-600 leading-relaxed">
              Textured surface allows water drainage and reduces ice formation. Excellent freeze-thaw
              resistance for harsh climates and exterior installations.
            </p>
          </div>

          <div class="bg-white p-8 border border-stone-200 shadow-sm">
            <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Natural Aging Look</h3>
            <p class="text-stone-600 leading-relaxed">
              Resembles centuries of natural weathering, ideal for rustic, Mediterranean, or historic
              architectural styles requiring authentic patina appearance.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Applications & Maintenance -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16">

        <!-- Applications -->
        <div>
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Ideal Applications</h2>
          <div class="w-20 h-0.5 bg-stone-900 mb-8"></div>

          <div class="space-y-6">
            <div class="border-l-4 border-orange-600 pl-6 py-2">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Outdoor Paving</h4>
              <p class="text-stone-600">
                Driveways, walkways, plazas, and pool decks requiring maximum slip resistance
                combined with aesthetic appeal.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-2">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Facade Cladding</h4>
              <p class="text-stone-600">
                Exterior building walls and architectural features where weathered, rustic
                appearance is desired for character.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-2">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Landscape Features</h4>
              <p class="text-stone-600">
                Garden paths, retaining walls, steps, and outdoor furniture where natural
                integration with surroundings is important.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-2">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Public Spaces</h4>
              <p class="text-stone-600">
                Municipal plazas, park pathways, and pedestrian zones requiring durability
                and safety in high-traffic conditions.
              </p>
            </div>
          </div>
        </div>

        <!-- Maintenance -->
        <div>
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Maintenance Care</h2>
          <div class="w-20 h-0.5 bg-stone-900 mb-8"></div>

          <div class="space-y-5">
            <div class="flex gap-4 items-start">
              <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-1">Regular Sweeping</h4>
                <p class="text-stone-600 text-sm">
                  Remove debris with stiff-bristled broom to prevent buildup in textured crevices.
                </p>
              </div>
            </div>

            <div class="flex gap-4 items-start">
              <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-1">Pressure Washing</h4>
                <p class="text-stone-600 text-sm">
                  Safe for exterior burned surfaces at 1500-2500 PSI. Effectively removes organic growth and grime.
                </p>
              </div>
            </div>

            <div class="flex gap-4 items-start">
              <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-1">Periodic Sealing</h4>
                <p class="text-stone-600 text-sm">
                  Reapply penetrating sealer every 2-3 years to maintain stain resistance in porous textured surface.
                </p>
              </div>
            </div>

            <div class="flex gap-4 items-start">
              <div class="flex-shrink-0 w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-1">Avoid Harsh Chemicals</h4>
                <p class="text-stone-600 text-sm">
                  No acidic cleaners or strong solvents that can etch or discolor the thermally-treated surface.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative py-24 sm:py-32 bg-cover bg-center"
    style="background-image: linear-gradient(135deg, rgba(20,20,20,.85), rgba(0,0,0,.75)), url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extralight mb-6">
          Discover Thermal<br />
          <span class="font-light">Finishing Options</span>
        </h2>
        <p class="text-xl text-white/90 font-light mb-10 max-w-2xl mx-auto">
          Request burned marble samples or discuss how this distinctive finish
          can enhance your outdoor project's durability and character.
        </p>
        <a href="{{ route('contact-us') ?? '#' }}"
          class="inline-flex items-center gap-3 bg-white text-stone-900 px-10 py-4 text-lg hover:bg-stone-100 transition-all hover:gap-4 group">
          <span class="font-medium">Get in Touch</span>
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </section>

@endsection
