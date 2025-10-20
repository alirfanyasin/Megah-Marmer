@extends('layouts.page')
@section('title', 'Stripe Finishing Marble — Linear Patterns & Directional Design')
@section('content')
  <!-- Hero -->
  <section class="relative h-screen">
    <div class="absolute inset-0 bg-cover bg-center"
      style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1600&q=80');">
    </div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
    <div class="relative z-10 h-full flex items-center justify-center">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto text-white">
          <div class="inline-block border border-white/30 px-6 py-2 mb-6">
            <span class="uppercase tracking-[0.3em] text-xs text-white/80">Directional Surface Design</span>
          </div>
          <h1 class="text-6xl sm:text-7xl md:text-8xl font-extralight leading-none mb-8">
            Stripe<br />Finishing
          </h1>
          <p class="text-xl sm:text-2xl text-white/90 font-light max-w-3xl mx-auto leading-relaxed">
            Alternating bands of contrasting finishes create dynamic linear patterns,
            guiding movement and adding visual rhythm to architectural surfaces.
          </p>
        </div>
      </div>
    </div>
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
      <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
      </svg>
    </div>
  </section>

  <!-- Overview Split -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <div class="inline-block border border-stone-300 px-6 py-2 mb-8 rounded-sm">
          <span class="uppercase tracking-[0.3em] text-xs text-stone-600">Start Your Project</span>
        </div>

        <h2 class="text-4xl sm:text-5xl md:text-6xl font-light text-stone-900 mb-8 leading-tight">
          Design Your Custom<br />Stripe Pattern
        </h2>

        <p class="text-xl text-stone-700 font-light mb-12 max-w-2xl mx-auto">
          Consult with our specialists to select finish combinations, determine stripe dimensions,
          and plan installation timeline for your project.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="group inline-flex items-center gap-3 bg-stone-900 text-white px-8 sm:px-10 py-4 sm:py-5 text-lg font-medium rounded-sm hover:bg-stone-800 transition-all">
            <span>Schedule Consultation</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>

          <a href="#"
            class="inline-flex items-center gap-3 border-2 border-stone-900 text-stone-900 px-8 sm:px-10 py-4 sm:py-5 text-lg font-medium rounded-sm hover:bg-stone-900/5 transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span>View Pattern Gallery</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class="grid lg:grid-cols-2 gap-16 items-center">
    <div class="order-2 lg:order-1">
      <div class="aspect-[3/4] bg-cover bg-center shadow-2xl rounded-sm"
        style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=80');">
      </div>
    </div>
    <div class="order-1 lg:order-2">
      <span class="text-stone-500 uppercase tracking-[0.2em] text-xs mb-4 block">About The Technique</span>
      <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-8 leading-tight">
        Creating Visual<br />Direction
      </h2>
      <div class="space-y-6 text-stone-700 leading-relaxed">
        <p>
          Stripe finishing combines multiple surface treatments in alternating parallel bands across marble surfaces.
          This technique creates distinctive linear patterns that can be oriented to guide foot traffic, elongate
          spaces, or serve as wayfinding elements.
        </p>
        <p>
          Common combinations include polished/honed stripes, polished/flamed, or bush-hammered/smooth patterns.
          Each stripe typically measures 50-200mm in width, precisely machined to maintain consistent dimensions
          and crisp boundaries.
        </p>
      </div>
      <div class="mt-8 pt-8 border-t border-stone-200">
        <div class="grid grid-cols-3 gap-6 text-center">
          <div>
            <div class="text-3xl font-light text-stone-900 mb-1">50-200mm</div>
            <div class="text-sm text-stone-600">Stripe Width</div>
          </div>
          <div>
            <div class="text-3xl font-light text-stone-900 mb-1">2-3</div>
            <div class="text-sm text-stone-600">Finish Types</div>
          </div>
          <div>
            <div class="text-3xl font-light text-stone-900 mb-1">±1mm</div>
            <div class="text-sm text-stone-600">Precision</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>

  <!-- Common Patterns -->
  <section class="py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <span class="text-stone-500 uppercase tracking-[0.2em] text-xs mb-4 block">Popular Combinations</span>
          <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-6">Stripe Pattern Options</h2>
          <p class="text-stone-600 text-lg max-w-2xl mx-auto">
            Select from proven finish combinations that balance aesthetics with functionality.
          </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Pattern 1 -->
          <div class="bg-white rounded-sm shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <div class="aspect-square bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
              style="background-image: url('https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=800&q=80');">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-medium text-stone-900 mb-3">Polished + Honed</h3>
              <p class="text-stone-600 text-sm mb-4">
                Glossy strips alternate with matte bands for subtle contrast. Ideal for indoor flooring with moderate
                visual interest.
              </p>
              <div class="text-xs text-stone-500">
                <span class="font-medium">Best for:</span> Lobbies, corridors
              </div>
            </div>
          </div>

          <!-- Pattern 2 -->
          <div class="bg-white rounded-sm shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <div class="aspect-square bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
              style="background-image: url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80');">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-medium text-stone-900 mb-3">Polished + Flamed</h3>
              <p class="text-stone-600 text-sm mb-4">
                Smooth glossy stripes paired with textured flamed bands. Provides slip resistance while maintaining
                elegance.
              </p>
              <div class="text-xs text-stone-500">
                <span class="font-medium">Best for:</span> Pool areas, ramps
              </div>
            </div>
          </div>

          <!-- Pattern 3 -->
          <div class="bg-white rounded-sm shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <div class="aspect-square bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
              style="background-image: url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=800&q=80');">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-medium text-stone-900 mb-3">Bush-Hammered + Smooth</h3>
              <p class="text-stone-600 text-sm mb-4">
                Heavily textured stripes contrast with smooth polished sections. Maximum tactile and visual impact for
                bold designs.
              </p>
              <div class="text-xs text-stone-500">
                <span class="font-medium">Best for:</span> Feature floors, plazas
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Timeline -->
  <section class="py-24 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
          <span class="text-white/50 uppercase tracking-[0.2em] text-xs mb-4 block">Step by Step</span>
          <h2 class="text-4xl sm:text-5xl font-light mb-6">Installation Process</h2>
          <p class="text-white/70 max-w-2xl mx-auto">
            Precise execution ensures consistent stripe widths and clean transitions between finish types.
          </p>
        </div>

        <div class="relative">
          <!-- Timeline Line -->
          <div class="absolute left-8 top-0 bottom-0 w-px bg-white/20 hidden md:block"></div>

          <div class="space-y-12">
            <!-- Step 1 -->
            <div class="relative pl-0 md:pl-20">
              <div
                class="absolute left-0 md:left-[26px] w-16 h-16 bg-stone-800 border-2 border-white/30 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">1</span>
              </div>
              <div class="bg-stone-800/50 p-8 rounded-sm border border-stone-700 ml-20 md:ml-0">
                <h3 class="text-2xl font-light mb-3">Surface Planning</h3>
                <p class="text-white/80 leading-relaxed mb-4">
                  Mark stripe layout using laser guides and measuring tape. Determine stripe widths (typically 80-150mm)
                  and orientation. Ensure alignment with architectural features and traffic flow patterns.
                </p>
                <div class="text-sm text-white/60">Duration: 2-4 hours</div>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="relative pl-0 md:pl-20">
              <div
                class="absolute left-0 md:left-[26px] w-16 h-16 bg-stone-800 border-2 border-white/30 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">2</span>
              </div>
              <div class="bg-stone-800/50 p-8 rounded-sm border border-stone-700 ml-20 md:ml-0">
                <h3 class="text-2xl font-light mb-3">Masking & Protection</h3>
                <p class="text-white/80 leading-relaxed mb-4">
                  Apply precision masking tape along stripe boundaries. Protect adjacent areas during finishing
                  operations. Use high-adhesion tape suitable for wet grinding processes.
                </p>
                <div class="text-sm text-white/60">Duration: 3-5 hours</div>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="relative pl-0 md:pl-20">
              <div
                class="absolute left-0 md:left-[26px] w-16 h-16 bg-stone-800 border-2 border-white/30 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">3</span>
              </div>
              <div class="bg-stone-800/50 p-8 rounded-sm border border-stone-700 ml-20 md:ml-0">
                <h3 class="text-2xl font-light mb-3">First Finish Application</h3>
                <p class="text-white/80 leading-relaxed mb-4">
                  Apply primary finish (e.g., polishing) to designated stripes. Progress through grit sequences as per
                  finish specifications. Maintain consistent technique across all matching stripes.
                </p>
                <div class="text-sm text-white/60">Duration: 1-2 days</div>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="relative pl-0 md:pl-20">
              <div
                class="absolute left-0 md:left-[26px] w-16 h-16 bg-stone-800 border-2 border-white/30 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">4</span>
              </div>
              <div class="bg-stone-800/50 p-8 rounded-sm border border-stone-700 ml-20 md:ml-0">
                <h3 class="text-2xl font-light mb-3">Alternate Finish Application</h3>
                <p class="text-white/80 leading-relaxed mb-4">
                  Remove masking and reposition for alternate stripes. Apply contrasting finish (e.g., honing, flaming,
                  bush-hammering). Ensure clean edges and uniform appearance.
                </p>
                <div class="text-sm text-white/60">Duration: 1-2 days</div>
              </div>
            </div>

            <!-- Step 5 -->
            <div class="relative pl-0 md:pl-20">
              <div
                class="absolute left-0 md:left-[26px] w-16 h-16 bg-stone-800 border-2 border-white/30 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">5</span>
              </div>
              <div class="bg-stone-800/50 p-8 rounded-sm border border-stone-700 ml-20 md:ml-0">
                <h3 class="text-2xl font-light mb-3">Finishing & Sealing</h3>
                <p class="text-white/80 leading-relaxed mb-4">
                  Clean all surfaces thoroughly. Inspect stripe edges for chips or irregularities. Apply appropriate
                  sealer to both finish types, ensuring complete coverage and protection.
                </p>
                <div class="text-sm text-white/60">Duration: 4-6 hours</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Design Considerations -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
          <div>
            <span class="text-stone-500 uppercase tracking-[0.2em] text-xs mb-4 block">Planning Guidelines</span>
            <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-8">Design Considerations</h2>
            <p class="text-stone-700 leading-relaxed mb-8">
              Successful stripe finishing requires thoughtful planning of pattern orientation, finish selection,
              and integration with overall architectural design.
            </p>

            <div class="space-y-6">
              <div class="border-l-4 border-stone-900 pl-6">
                <h4 class="font-medium text-stone-900 mb-2 text-lg">Orientation Direction</h4>
                <p class="text-stone-600 text-sm">
                  Align stripes with primary traffic flow to guide movement. Perpendicular orientation can visually
                  widen narrow spaces. Consider sight lines from main entrances.
                </p>
              </div>

              <div class="border-l-4 border-stone-300 pl-6">
                <h4 class="font-medium text-stone-900 mb-2 text-lg">Stripe Width Balance</h4>
                <p class="text-stone-600 text-sm">
                  Maintain proportional relationship between stripe widths and space dimensions. Larger areas can
                  accommodate wider stripes (150-200mm). Smaller spaces benefit from narrower bands (50-100mm).
                </p>
              </div>

              <div class="border-l-4 border-stone-300 pl-6">
                <h4 class="font-medium text-stone-900 mb-2 text-lg">Finish Contrast Level</h4>
                <p class="text-stone-600 text-sm">
                  High contrast (polished/bush-hammered) creates bold statements. Subtle variations (polished/honed)
                  offer refined sophistication. Consider maintenance requirements of each finish type.
                </p>
              </div>

              <div class="border-l-4 border-stone-300 pl-6">
                <h4 class="font-medium text-stone-900 mb-2 text-lg">Color Coordination</h4>
                <p class="text-stone-600 text-sm">
                  Different finishes affect perceived color intensity. Polished areas appear darker and more saturated.
                  Test samples with actual lighting conditions before full installation.
                </p>
              </div>
            </div>
          </div>

          <div class="space-y-6">
            <div class="aspect-[4/3] bg-cover bg-center rounded-sm shadow-lg"
              style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200&q=80');">
            </div>
            <div class="aspect-[4/3] bg-cover bg-center rounded-sm shadow-lg"
              style="background-image: url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&q=80');">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Advantages -->
  <section class="py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-6">Key Advantages</h2>
          <div class="w-20 h-px bg-stone-900 mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-x-12 gap-y-8">
          <div class="flex gap-5">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-stone-900 rounded-sm flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
            </div>
            <div>
              <h3 class="text-lg font-medium text-stone-900 mb-2">Visual Dynamism</h3>
              <p class="text-stone-600 text-sm leading-relaxed">
                Creates movement and rhythm in static surfaces. Breaks monotony of uniform finishes while maintaining
                cohesive design language.
              </p>
            </div>
          </div>

          <div class="flex gap-5">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-stone-900 rounded-sm flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
              </div>
            </div>
            <div>
              <h3 class="text-lg font-medium text-stone-900 mb-2">Wayfinding Function</h3>
              <p class="text-stone-600 text-sm leading-relaxed">
                Directional stripes naturally guide foot traffic and create intuitive navigation cues in large spaces
                without signage.
              </p>
            </div>
          </div>

          <div class="flex gap-5">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-stone-900 rounded-sm flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
              </div>
            </div>
            <div>
              <h3 class="text-lg font-medium text-stone-900 mb-2">Functional Zoning</h3>
              <p class="text-stone-600 text-sm leading-relaxed">
                Combine slip-resistant and smooth finishes strategically. Textured stripes provide traction where
                needed while polished areas ease maintenance.
              </p>
            </div>
          </div>

          <div class="flex gap-5">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-stone-900 rounded-sm flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
              </div>
            </div>
            <div>
              <h3 class="text-lg font-medium text-stone-900 mb-2">Architectural Integration</h3>
              <p class="text-stone-600 text-sm leading-relaxed">
                Aligns with building's linear elements (columns, ceiling beams). Reinforces geometric design themes and
                enhances spatial proportions.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Applications Showcase -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <span class="text-stone-500 uppercase tracking-[0.2em] text-xs mb-4 block">Where It Works Best</span>
          <h2 class="text-4xl sm:text-5xl font-light text-stone-900">Ideal Applications</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
          <div class="relative group overflow-hidden rounded-sm shadow-lg">
            <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
              style="background-image: url('https://images.unsplash.com/photo-1600566753051-f0ba87f71586?w=1200&q=80');">
            </div>
            <div
              class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div
              class="absolute bottom-0 left-0 right-0 p-8 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
              <h3 class="text-2xl font-light mb-3">Airport & Transit Terminals</h3>
              <p
                class="text-white/90 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                Directional floor patterns guide passengers through large terminal spaces naturally and intuitively.
              </p>
            </div>
          </div>

          <div class="relative group overflow-hidden rounded-sm shadow-lg">
            <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
              style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&q=80');">
            </div>
            <div
              class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div
              class="absolute bottom-0 left-0 right-0 p-8 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
              <h3 class="text-2xl font-light mb-3">Corporate Lobbies</h3>
              <p
                class="text-white/90 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                Sophisticated linear patterns create impressive first impressions while directing visitors to reception
                areas.
              </p>
            </div>
          </div>

          <div class="relative group overflow-hidden rounded-sm shadow-lg">
            <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
              style="background-image: url('https://images.unsplash.com/photo-1582719508461-905c673771fd?w=1200&q=80');">
            </div>
            <div
              class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div
              class="absolute bottom-0 left-0 right-0 p-8 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
              <h3 class="text-2xl font-light mb-3">Shopping Mall Corridors</h3>
              <p
                class="text-white/90 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                Long corridors benefit from visual breaks and directional guidance that stripe patterns provide.
              </p>
            </div>
          </div>

          <div class="relative group overflow-hidden rounded-sm shadow-lg">
            <div class="aspect-[16/10] bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
              style="background-image: url('https://images.unsplash.com/photo-1519167758481-83f29da8c6bf?w=1200&q=80');">
            </div>
            <div
              class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div
              class="absolute bottom-0 left-0 right-0 p-8 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
              <h3 class="text-2xl font-light mb-3">Luxury Residential Entries</h3>
              <p
                class="text-white/90 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                Elegant stripe patterns add contemporary sophistication to condominium lobbies and private driveways.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-32 bg-cover bg-center"
    style="background-image: linear-gradient(135deg, rgba(0,0,0,.8), rgba(0,0,0,.6)), url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="text-4xl sm:text-5xl font-light mb-6">Ready to Create Directional Impact?</h2>
        <p class="text-white/90 text-lg font-light mb-10">
          Share your drawings and site photos—our team will propose stripe layouts, finish pairings, and a clear
          installation plan.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="inline-flex items-center gap-2 bg-white text-stone-900 px-8 py-4 rounded-sm font-medium hover:bg-stone-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
            Talk to a Specialist
          </a>

          <a href="#"
            class="inline-flex items-center gap-2 border border-white/80 text-white px-8 py-4 rounded-sm font-medium hover:bg-white/10 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
            </svg>
            Download Stripe Guide (PDF)
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
