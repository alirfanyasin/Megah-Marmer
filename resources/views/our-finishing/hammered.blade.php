@extends('layouts.page')
@section('title', 'Hammered Marble Finishing — Rustic Texture & Authentic Character')
@section('content')

  <!-- Hero -->
  <section class="relative h-[90vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(to bottom, rgba(0,0,0,.65), rgba(20,20,20,.7)), url('https://images.unsplash.com/photo-1615971677499-5467cbab01c0?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-[0.25em] text-white/60 mb-5 text-sm font-light">Artisan Surface Treatment</p>
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-extralight leading-tight mb-6">
          Hammered<br />
          <span class="font-light">Finishing</span>
        </h1>
        <p class="text-xl sm:text-2xl text-white/85 font-light max-w-2xl leading-relaxed">
          Hand-crafted texture that celebrates marble's raw beauty through controlled percussion—
          creating surfaces with authentic character and timeless appeal.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction -->
  <section class="py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div>
            <h2 class="text-5xl font-light text-stone-900 mb-8">
              The Craft of<br />Hammered Texture
            </h2>
            <div class="space-y-6 text-stone-600 text-lg leading-relaxed">
              <p>
                Hammered finishing is an ancient stone masonry technique that transforms smooth marble
                surfaces into textured works of art. Using specialized chisels and hammers, artisans
                create deliberate indentations that catch light and shadow uniquely.
              </p>
              <p>
                This finish offers exceptional slip resistance, hides minor imperfections naturally,
                and adds dimensional depth that machine-polished surfaces cannot achieve. Perfect for
                both rustic and contemporary design aesthetics.
              </p>
            </div>
          </div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80"
              alt="Hammered marble texture" class="w-full h-[500px] object-cover rounded-lg shadow-2xl">
            <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-stone-900/10 rounded-lg -z-10"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-20">
        <h2 class="text-5xl font-light text-stone-900 mb-6">Hammering Process</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-stone-600 text-lg">
          A methodical approach combining traditional craftsmanship with modern precision.
        </p>
      </div>

      <div class="max-w-4xl mx-auto space-y-16">
        <!-- Step 1 -->
        <div class="flex gap-8 items-start">
          <div class="flex-shrink-0">
            <div
              class="w-20 h-20 bg-stone-900 text-white rounded-full flex items-center justify-center text-2xl font-light">
              01
            </div>
          </div>
          <div class="flex-1 pt-2">
            <h3 class="text-2xl font-medium text-stone-900 mb-4">Surface Preparation</h3>
            <p class="text-stone-600 leading-relaxed mb-4">
              The marble is first cut and dimensioned to final size. Surface must be relatively flat
              with any major irregularities removed through initial grinding.
            </p>
            <div class="bg-stone-50 p-4 rounded border-l-4 border-stone-900">
              <p class="text-sm text-stone-700">
                <strong>Key requirement:</strong> Surface flatness within ±2mm to ensure uniform hammering depth.
              </p>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="flex gap-8 items-start">
          <div class="flex-shrink-0">
            <div
              class="w-20 h-20 bg-stone-900 text-white rounded-full flex items-center justify-center text-2xl font-light">
              02
            </div>
          </div>
          <div class="flex-1 pt-2">
            <h3 class="text-2xl font-medium text-stone-900 mb-4">Tool Selection</h3>
            <p class="text-stone-600 leading-relaxed mb-4">
              Specialized bush hammers or point chisels are selected based on desired texture depth
              and pattern. Pneumatic tools offer consistency for large areas, while hand tools provide
              artisan control.
            </p>
            <div class="grid sm:grid-cols-2 gap-4 mt-4">
              <div class="bg-stone-50 p-4 rounded">
                <h4 class="font-medium text-stone-900 mb-2">Bush Hammer</h4>
                <p class="text-sm text-stone-600">Multiple pyramidal points create uniform dimpled texture</p>
              </div>
              <div class="bg-stone-50 p-4 rounded">
                <h4 class="font-medium text-stone-900 mb-2">Point Chisel</h4>
                <p class="text-sm text-stone-600">Single point for deeper, more irregular marks</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="flex gap-8 items-start">
          <div class="flex-shrink-0">
            <div
              class="w-20 h-20 bg-stone-900 text-white rounded-full flex items-center justify-center text-2xl font-light">
              03
            </div>
          </div>
          <div class="flex-1 pt-2">
            <h3 class="text-2xl font-medium text-stone-900 mb-4">Striking Technique</h3>
            <p class="text-stone-600 leading-relaxed mb-4">
              The hammer is struck at consistent angles (typically 60-90°) with controlled force.
              Overlapping strikes create the characteristic rough texture. Spacing determines final
              appearance—closer strikes yield finer texture.
            </p>
            <div class="bg-amber-50 p-4 rounded border-l-4 border-amber-600">
              <p class="text-sm text-amber-900">
                <strong>Craftsman skill critical:</strong> Rhythm and force must remain consistent
                to avoid uneven appearance.
              </p>
            </div>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="flex gap-8 items-start">
          <div class="flex-shrink-0">
            <div
              class="w-20 h-20 bg-stone-900 text-white rounded-full flex items-center justify-center text-2xl font-light">
              04
            </div>
          </div>
          <div class="flex-1 pt-2">
            <h3 class="text-2xl font-medium text-stone-900 mb-4">Quality Inspection</h3>
            <p class="text-stone-600 leading-relaxed mb-4">
              Surface is examined for consistent texture depth, no missed areas, and structural integrity.
              Any loose fragments are brushed away. Edges may be lightly chamfered to prevent chipping.
            </p>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="flex gap-8 items-start">
          <div class="flex-shrink-0">
            <div
              class="w-20 h-20 bg-stone-900 text-white rounded-full flex items-center justify-center text-2xl font-light">
              05
            </div>
          </div>
          <div class="flex-1 pt-2">
            <h3 class="text-2xl font-medium text-stone-900 mb-4">Sealing (Optional)</h3>
            <p class="text-stone-600 leading-relaxed mb-4">
              Due to increased surface area, hammered marble may be treated with penetrating sealers
              to enhance stain resistance. Unlike polished finishes, the texture remains visible and tactile.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Characteristics Grid -->
  <section class="py-24 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h2 class="text-5xl font-light mb-6">Distinctive Characteristics</h2>
        <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
        <p class="text-white/80 text-lg">
          What makes hammered finishing unique among stone surface treatments.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
          <div class="text-5xl mb-4">🔨</div>
          <h3 class="text-xl font-medium mb-3">Handcrafted Appeal</h3>
          <p class="text-white/70 leading-relaxed">
            Each surface is unique with subtle variations that reflect the artisan's hand and technique.
          </p>
        </div>

        <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
          <div class="text-5xl mb-4">👟</div>
          <h3 class="text-xl font-medium mb-3">Superior Grip</h3>
          <p class="text-white/70 leading-relaxed">
            Rough texture provides excellent slip resistance, ideal for wet areas and outdoor applications.
          </p>
        </div>

        <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
          <div class="text-5xl mb-4">🌄</div>
          <h3 class="text-xl font-medium mb-3">Light & Shadow Play</h3>
          <p class="text-white/70 leading-relaxed">
            Textured surface creates dynamic visual effects as light angles change throughout the day.
          </p>
        </div>

        <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
          <div class="text-5xl mb-4">🛡️</div>
          <h3 class="text-xl font-medium mb-3">Hides Wear</h3>
          <p class="text-white/70 leading-relaxed">
            Minor scratches and scuffs blend naturally into the texture, reducing visible aging.
          </p>
        </div>

        <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
          <div class="text-5xl mb-4">🏛️</div>
          <h3 class="text-xl font-medium mb-3">Timeless Aesthetic</h3>
          <p class="text-white/70 leading-relaxed">
            Evokes ancient architecture and traditional masonry with authentic rustic character.
          </p>
        </div>

        <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
          <div class="text-5xl mb-4">🌡️</div>
          <h3 class="text-xl font-medium mb-3">Weather Resistant</h3>
          <p class="text-white/70 leading-relaxed">
            Texture allows water drainage and reduces freeze-thaw damage in exterior installations.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Applications -->
  <section class="py-24 bg-gradient-to-b from-white to-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h2 class="text-5xl font-light text-stone-900 mb-6">Perfect Applications</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-stone-600 text-lg">
          Where hammered finishing excels in both function and design.
        </p>
      </div>

      <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
          <h3 class="text-2xl font-medium text-stone-900 mb-4">Exterior Paving</h3>
          <p class="text-stone-600 leading-relaxed mb-4">
            Walkways, patios, and pool decks benefit from enhanced slip resistance and weather durability.
          </p>
          <ul class="space-y-2 text-stone-600">
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Driveways and entrance paths</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Terrace and courtyard flooring</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Pool surrounds and wet zones</span>
            </li>
          </ul>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
          <h3 class="text-2xl font-medium text-stone-900 mb-4">Feature Walls</h3>
          <p class="text-stone-600 leading-relaxed mb-4">
            Interior and exterior accent walls gain dramatic texture and visual interest.
          </p>
          <ul class="space-y-2 text-stone-600">
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Restaurant and hotel lobbies</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Fireplace surrounds</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Exterior building facades</span>
            </li>
          </ul>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
          <h3 class="text-2xl font-medium text-stone-900 mb-4">Rustic Interiors</h3>
          <p class="text-stone-600 leading-relaxed mb-4">
            Farmhouse, Mediterranean, and industrial design schemes embrace the authentic texture.
          </p>
          <ul class="space-y-2 text-stone-600">
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Kitchen backsplashes</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Bathroom shower walls</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Wine cellar flooring</span>
            </li>
          </ul>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
          <h3 class="text-2xl font-medium text-stone-900 mb-4">Stair Treads</h3>
          <p class="text-stone-600 leading-relaxed mb-4">
            Safety and aesthetics combine in both residential and commercial stairways.
          </p>
          <ul class="space-y-2 text-stone-600">
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Outdoor stone staircases</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Historic building restorations</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-stone-900 mt-1">•</span>
              <span>Public plaza steps</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Maintenance -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-5xl font-light text-stone-900 mb-6">Care Guidelines</h2>
          <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
          <p class="text-stone-600 text-lg">
            Simple maintenance practices to preserve texture and integrity.
          </p>
        </div>

        <div class="space-y-6">
          <div class="flex gap-6 p-6 bg-stone-50 rounded-lg border border-stone-200">
            <div
              class="flex-shrink-0 w-12 h-12 bg-stone-900 text-white rounded-full flex items-center justify-center font-medium">
              ✓
            </div>
            <div>
              <h4 class="text-lg font-medium text-stone-900 mb-2">Regular Sweeping/Brushing</h4>
              <p class="text-stone-600">
                Use stiff brush to remove debris from textured crevices. Avoid letting dirt accumulate in deeper marks.
              </p>
            </div>
          </div>

          <div class="flex gap-6 p-6 bg-stone-50 rounded-lg border border-stone-200">
            <div
              class="flex-shrink-0 w-12 h-12 bg-stone-900 text-white rounded-full flex items-center justify-center font-medium">
              ✓
            </div>
            <div>
              <h4 class="text-lg font-medium text-stone-900 mb-2">Pressure Washing (Outdoor)</h4>
              <p class="text-stone-600">
                Low-to-medium pressure (1500-2000 PSI) effectively cleans exterior hammered surfaces without damage.
              </p>
            </div>
          </div>

          <div class="flex gap-6 p-6 bg-stone-50 rounded-lg border border-stone-200">
            <div
              class="flex-shrink-0 w-12 h-12 bg-stone-900 text-white rounded-full flex items-center justify-center font-medium">
              ✓
            </div>
            <div>
              <h4 class="text-lg font-medium text-stone-900 mb-2">Neutral pH Cleaners</h4>
              <p class="text-stone-600">
                Stone-safe solutions for routine cleaning. Apply with brush or mop, rinse thoroughly with clean water.
              </p>
            </div>
          </div>

          <div class="flex gap-6 p-6 bg-red-50 rounded-lg border border-red-200">
            <div
              class="flex-shrink-0 w-12 h-12 bg-red-600 text-white rounded-full flex items-center justify-center font-medium">
              ✗
            </div>
            <div>
              <h4 class="text-lg font-medium text-red-900 mb-2">Avoid Acids</h4>
              <p class="text-red-700">
                Vinegar, citrus cleaners, and harsh chemicals will etch marble even through textured finish.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-32 bg-cover bg-center"
    style="background-image: linear-gradient(to right, rgba(0,0,0,.8), rgba(0,0,0,.6)), url('https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl text-white">
        <h2 class="text-5xl sm:text-6xl font-light mb-8">
          Explore Hammered<br />
          <span class="font-normal">Texture Options</span>
        </h2>
        <p class="text-xl text-white/90 mb-10 leading-relaxed">
          Request samples, discuss custom texture patterns, or schedule a site visit
          to see our artisan finishing capabilities.
        </p>
        <a href="{{ route('contact-us') ?? '#' }}"
          class="inline-flex items-center gap-3 bg-white text-stone-900 px-10 py-5 text-lg font-medium hover:bg-stone-100 transition-all group">
          <span>Contact Our Team</span>
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </section>

@endsection
