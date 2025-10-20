@extends('layouts.page')
@section('title', 'Combination Finishing Marble — Multi-Texture Surface Design')
@section('content')

  <!-- Hero -->
  <section class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-gradient-to-br from-stone-900 via-stone-800 to-stone-900"></div>
      <div class="absolute inset-0 opacity-20"
        style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1600&q=80'); background-size: cover; background-position: center;">
      </div>
    </div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="text-white">
          <div class="mb-8">
            <div class="w-16 h-px bg-white/40 mb-6"></div>
            <span class="text-white/60 uppercase tracking-[0.25em] text-xs">Multi-Surface Treatment</span>
          </div>
          <h1 class="text-5xl sm:text-6xl md:text-7xl font-extralight mb-8 leading-none">
            Combination<br />
            <span class="font-light">Finishing</span>
          </h1>
          <p class="text-xl text-white/90 font-light leading-relaxed mb-8 max-w-lg">
            Integrate multiple finish techniques within a single surface to achieve unique aesthetic effects,
            functional zoning, and dimensional depth in marble installations.
          </p>
          <div class="flex flex-wrap gap-6">
            <div>
              <div class="text-3xl font-light mb-1">3-5</div>
              <div class="text-sm text-white/70">Finish Types</div>
            </div>
            <div class="w-px bg-white/20"></div>
            <div>
              <div class="text-3xl font-light mb-1">∞</div>
              <div class="text-sm text-white/70">Design Possibilities</div>
            </div>
            <div class="w-px bg-white/20"></div>
            <div>
              <div class="text-3xl font-light mb-1">Custom</div>
              <div class="text-sm text-white/70">Pattern Layout</div>
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="grid grid-cols-2 gap-4">
            <div
              class="aspect-square bg-cover bg-center rounded-sm shadow-2xl transform hover:scale-105 transition-transform duration-500"
              style="background-image: url('https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=800&q=80');">
            </div>
            <div
              class="aspect-square bg-cover bg-center rounded-sm shadow-2xl transform hover:scale-105 transition-transform duration-500 mt-8"
              style="background-image: url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80');">
            </div>
            <div
              class="aspect-square bg-cover bg-center rounded-sm shadow-2xl transform hover:scale-105 transition-transform duration-500 -mt-8"
              style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80');">
            </div>
            <div
              class="aspect-square bg-cover bg-center rounded-sm shadow-2xl transform hover:scale-105 transition-transform duration-500"
              style="background-image: url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=800&q=80');">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Concept Overview -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center mb-16">
        <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-6">The Concept</h2>
        <div class="w-20 h-px bg-stone-900 mx-auto mb-8"></div>
        <p class="text-stone-700 text-lg leading-relaxed">
          Combination finishing merges different surface treatments—polished, honed, flamed, bush-hammered, grooved,
          or striped—into unified compositions. This approach allows designers to create contrast, define zones,
          and achieve visual complexity impossible with single-finish applications.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div class="text-center p-8 bg-stone-50 rounded-sm">
          <div class="w-16 h-16 bg-stone-900 rounded-full mx-auto mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-stone-900 mb-3">Aesthetic Diversity</h3>
          <p class="text-stone-600 text-sm">
            Create visual interest through textural contrast and varied light reflection properties.
          </p>
        </div>

        <div class="text-center p-8 bg-stone-50 rounded-sm">
          <div class="w-16 h-16 bg-stone-900 rounded-full mx-auto mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-stone-900 mb-3">Functional Zoning</h3>
          <p class="text-stone-600 text-sm">
            Designate areas by function—textured zones for traction, polished for elegance, honed for subtlety.
          </p>
        </div>

        <div class="text-center p-8 bg-stone-50 rounded-sm">
          <div class="w-16 h-16 bg-stone-900 rounded-full mx-auto mb-6 flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-stone-900 mb-3">Spatial Definition</h3>
          <p class="text-stone-600 text-sm">
            Use finish transitions to delineate spaces, pathways, or architectural features without physical barriers.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Combinations -->
  <section class="py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <span class="text-stone-500 uppercase tracking-[0.2em] text-xs mb-4 block">Proven Pairings</span>
          <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-6">Popular Combination Patterns</h2>
        </div>

        <div class="space-y-12">
          <!-- Combination 1 -->
          <div
            class="grid lg:grid-cols-5 gap-8 items-center bg-white p-8 rounded-sm shadow-sm hover:shadow-lg transition-shadow">
            <div class="lg:col-span-2">
              <div class="aspect-[4/3] bg-cover bg-center rounded-sm"
                style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1200&q=80');">
              </div>
            </div>
            <div class="lg:col-span-3">
              <div class="inline-block bg-stone-900 text-white px-4 py-1 text-xs uppercase tracking-wider mb-4">
                Classic Pairing
              </div>
              <h3 class="text-2xl font-light text-stone-900 mb-4">Polished Center + Honed Border</h3>
              <p class="text-stone-700 leading-relaxed mb-6">
                High-gloss polished fields surrounded by honed perimeter bands. Creates elegant framing effect while
                reducing slip risk at edges. Ideal for lobby floors, feature walls, and reception areas where
                sophistication meets practicality.
              </p>
              <div class="flex flex-wrap gap-3">
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Lobbies</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Ballrooms</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Feature Walls</span>
              </div>
            </div>
          </div>

          <!-- Combination 2 -->
          <div
            class="grid lg:grid-cols-5 gap-8 items-center bg-white p-8 rounded-sm shadow-sm hover:shadow-lg transition-shadow">
            <div class="lg:col-span-3 order-2 lg:order-1">
              <div class="inline-block bg-stone-900 text-white px-4 py-1 text-xs uppercase tracking-wider mb-4">
                Outdoor Ready
              </div>
              <h3 class="text-2xl font-light text-stone-900 mb-4">Flamed Pathways + Polished Accents</h3>
              <p class="text-stone-700 leading-relaxed mb-6">
                Heavily textured flamed finish for main walkways with polished inserts or borders. Combines safety
                (slip resistance) with visual refinement. Perfect for outdoor plazas, pool decks, and commercial
                entrances requiring all-weather traction.
              </p>
              <div class="flex flex-wrap gap-3">
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Pool Decks</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Plazas</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Pathways</span>
              </div>
            </div>
            <div class="lg:col-span-2 order-1 lg:order-2">
              <div class="aspect-[4/3] bg-cover bg-center rounded-sm"
                style="background-image: url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=1200&q=80');">
              </div>
            </div>
          </div>

          <!-- Combination 3 -->
          <div
            class="grid lg:grid-cols-5 gap-8 items-center bg-white p-8 rounded-sm shadow-sm hover:shadow-lg transition-shadow">
            <div class="lg:col-span-2">
              <div class="aspect-[4/3] bg-cover bg-center rounded-sm"
                style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=80');">
              </div>
            </div>
            <div class="lg:col-span-3">
              <div class="inline-block bg-stone-900 text-white px-4 py-1 text-xs uppercase tracking-wider mb-4">
                Contemporary Bold
              </div>
              <h3 class="text-2xl font-light text-stone-900 mb-4">Bush-Hammered Panels + Smooth Dividers</h3>
              <p class="text-stone-700 leading-relaxed mb-6">
                Large bush-hammered sections separated by narrow polished or honed strips. Creates strong geometric
                patterns with dramatic texture contrast. Suited for modern architectural statements, feature facades,
                and design-forward interiors.
              </p>
              <div class="flex flex-wrap gap-3">
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Facades</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Modern Interiors</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Art Galleries</span>
              </div>
            </div>
          </div>

          <!-- Combination 4 -->
          <div
            class="grid lg:grid-cols-5 gap-8 items-center bg-white p-8 rounded-sm shadow-sm hover:shadow-lg transition-shadow">
            <div class="lg:col-span-3 order-2 lg:order-1">
              <div class="inline-block bg-stone-900 text-white px-4 py-1 text-xs uppercase tracking-wider mb-4">
                Intricate Design
              </div>
              <h3 class="text-2xl font-light text-stone-900 mb-4">Grooved Grid + Polished Insets</h3>
              <p class="text-stone-700 leading-relaxed mb-6">
                Linear grooved patterns forming grid layouts with polished squares or rectangles within each cell.
                Offers dimensional depth and tactile interest while maintaining cleanable smooth areas. Excellent for
                high-end retail, hospitality, and residential luxury spaces.
              </p>
              <div class="flex flex-wrap gap-3">
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Retail Stores</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Hotels</span>
                <span class="text-xs bg-stone-100 text-stone-700 px-3 py-1 rounded-full">Residences</span>
              </div>
            </div>
            <div class="lg:col-span-2 order-1 lg:order-2">
              <div class="aspect-[4/3] bg-cover bg-center rounded-sm"
                style="background-image: url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1200&q=80');">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Design Process -->
  <section class="py-24 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-light mb-6">Design & Execution Process</h2>
          <p class="text-white/70 text-lg max-w-2xl mx-auto">
            Successful combination finishing requires careful planning, precise execution, and strategic integration
            of multiple techniques.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">01</div>
            <h3 class="text-lg font-medium mb-3">Conceptualization</h3>
            <p class="text-white/70 text-sm">
              Define design intent, functional requirements, and aesthetic goals. Sketch pattern layouts and finish
              combinations.
            </p>
          </div>

          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">02</div>
            <h3 class="text-lg font-medium mb-3">Material Selection</h3>
            <p class="text-white/70 text-sm">
              Choose marble types compatible with all planned finishes. Consider color consistency across different
              treatments.
            </p>
          </div>

          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">03</div>
            <h3 class="text-lg font-medium mb-3">Layout Mapping</h3>
            <p class="text-white/70 text-sm">
              Create detailed drawings showing finish boundaries, dimensions, and transition zones. Mark precisely on
              surface.
            </p>
          </div>

          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">04</div>
            <h3 class="text-lg font-medium mb-3">Masking & Protection</h3>
            <p class="text-white/70 text-sm">
              Apply masking tape along boundaries. Protect completed sections during subsequent finishing operations.
            </p>
          </div>

          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">05</div>
            <h3 class="text-lg font-medium mb-3">Sequential Finishing</h3>
            <p class="text-white/70 text-sm">
              Execute finishes in logical order—typically least aggressive to most. Allow curing time between stages.
            </p>
          </div>

          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">06</div>
            <h3 class="text-lg font-medium mb-3">Edge Refinement</h3>
            <p class="text-white/70 text-sm">
              Clean and refine transition lines between finishes. Remove any overlapping material or imperfections.
            </p>
          </div>

          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">07</div>
            <h3 class="text-lg font-medium mb-3">Quality Inspection</h3>
            <p class="text-white/70 text-sm">
              Verify finish consistency within each zone. Check boundary sharpness and alignment accuracy.
            </p>
          </div>

          <div class="bg-stone-800/50 p-6 border border-stone-700 rounded-sm">
            <div class="text-4xl font-extralight text-white/40 mb-4">08</div>
            <h3 class="text-lg font-medium mb-3">Protection & Sealing</h3>
            <p class="text-white/70 text-sm">
              Apply appropriate sealers for each finish type. Ensure compatibility and consistent appearance across
              surface.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Considerations -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16">
          <div>
            <h2 class="text-4xl font-light text-stone-900 mb-8">Technical Considerations</h2>
            <div class="space-y-6">
              <div class="pb-6 border-b border-stone-200">
                <h4 class="font-medium text-stone-900 mb-3 flex items-center gap-3">
                  <span class="w-2 h-2 bg-stone-900 rounded-full"></span>
                  Finish Compatibility
                </h4>
                <p class="text-stone-600 text-sm leading-relaxed pl-5">
                  Not all marble types accept all finishes equally. Softer stones may not hold bush-hammered texture
                  well. Dense marbles are ideal for polishing but challenging to flame. Conduct material testing before
                  committing to complex combinations.
                </p>
              </div>

              <div class="pb-6 border-b border-stone-200">
                <h4 class="font-medium text-stone-900 mb-3 flex items-center gap-3">
                  <span class="w-2 h-2 bg-stone-900 rounded-full"></span>
                  Transition Planning
                </h4>
                <p class="text-stone-600 text-sm leading-relaxed pl-5">
                  Sharp boundaries require precise masking and careful tool control. Gradual transitions demand
                  progressive grit changes. Consider 5-10mm neutral zones between contrasting finishes to accommodate
                  minor execution variations.
                </p>
              </div>

              <div class="pb-6 border-b border-stone-200">
                <h4 class="font-medium text-stone-900 mb-3 flex items-center gap-3">
                  <span class="w-2 h-2 bg-stone-900 rounded-full"></span>
                  Maintenance Variance
                </h4>
                <p class="text-stone-600 text-sm leading-relaxed pl-5">
                  Different finishes require different cleaning methods. Polished areas need gentle pH-neutral cleaners,
                  while textured zones may need brushing or pressure washing. Develop comprehensive maintenance protocols
                  covering all finish types.
                </p>
              </div>

              <div class="pb-6 border-b border-stone-200">
                <h4 class="font-medium text-stone-900 mb-3 flex items-center gap-3">
                  <span class="w-2 h-2 bg-stone-900 rounded-full"></span>
                  Cost Implications
                </h4>
                <p class="text-stone-600 text-sm leading-relaxed pl-5">
                  Combination finishing typically costs 30-50% more than single-finish applications due to additional
                  labor, masking materials, and extended installation time. Complex patterns with 3+ finishes can double
                  costs compared to uniform treatments.
                </p>
              </div>

              <div>
                <h4 class="font-medium text-stone-900 mb-3 flex items-center gap-3">
                  <span class="w-2 h-2 bg-stone-900 rounded-full"></span>
                  Long-Term Wear Patterns
                </h4>
                <p class="text-stone-600 text-sm leading-relaxed pl-5">
                  High-traffic areas may show differential wear. Polished zones can develop dull paths while textured
                  areas retain appearance longer. Plan finish placement considering traffic patterns and expected wear
                  rates.
                </p>
              </div>
            </div>
          </div>

          <div class="space-y-6">
            <div class="aspect-[3/4] bg-cover bg-center rounded-sm shadow-xl"
              style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200&q=80');">
            </div>
            <div class="bg-stone-50 p-8 rounded-sm">
              <h4 class="font-medium text-stone-900 mb-4">Pro Tip</h4>
              <p class="text-stone-700 text-sm leading-relaxed">
                Always create a full-scale mockup (minimum 1m²) showing all finish combinations and transitions before
                committing to large installations. This reveals practical challenges, visual balance issues, and
                maintenance requirements that drawings cannot convey.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Applications Gallery -->
  <section class="py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <span class="text-stone-500 uppercase tracking-[0.2em] text-xs mb-4 block">
            Where Excellence Meets Creativity
          </span>
          <h2 class="text-4xl sm:text-5xl font-light text-stone-900">
            Featured Applications
          </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Application 1 -->
          <div class="group relative overflow-hidden rounded-sm shadow-lg aspect-[4/3]">
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
              style="background-image: url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1600&q=80');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
              <h3 class="text-2xl font-light mb-2">Museum Exhibition Hall</h3>
              <p class="text-white/90 text-sm">
                Alternating polished and honed marble stripes guide visitor movement and add elegant rhythm to the space.
              </p>
            </div>
          </div>

          <!-- Application 2 -->
          <div class="group relative overflow-hidden rounded-sm shadow-lg aspect-[4/3]">
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
              style="background-image: url('https://images.unsplash.com/photo-1600585154084-9a6dbd8f9f3c?w=1600&q=80');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
              <h3 class="text-2xl font-light mb-2">Luxury Hotel Lobby</h3>
              <p class="text-white/90 text-sm">
                Stripe finishing integrates seamlessly with ambient lighting and reflective ceilings, enhancing spatial
                depth.
              </p>
            </div>
          </div>

          <!-- Application 3 -->
          <div class="group relative overflow-hidden rounded-sm shadow-lg aspect-[4/3]">
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
              style="background-image: url('https://images.unsplash.com/photo-1621856726086-19cbd7e39c1e?w=1600&q=80');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
              <h3 class="text-2xl font-light mb-2">Corporate Entrance Hall</h3>
              <p class="text-white/90 text-sm">
                Linear marble patterns reinforce architectural geometry and guide foot traffic with precision and style.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Best Practices -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-6">Best Practices</h2>
          <p class="text-stone-600 text-lg max-w-2xl mx-auto">
            Professional guidelines for achieving flawless combination finishing results
          </p>
        </div>

        <div class="grid sm:grid-cols-2 gap-6">
          <div class="bg-gradient-to-br from-green-50 to-green-100/30 p-6 rounded-sm border border-green-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Start with Detailed CAD Drawings</h4>
                <p class="text-stone-700 text-sm">
                  Create precise technical drawings showing all finish types, boundaries, dimensions, and transition
                  details before cutting any stone.
                </p>
              </div>
            </div>
          </div>

          <div class="bg-gradient-to-br from-green-50 to-green-100/30 p-6 rounded-sm border border-green-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Test on Sample Pieces First</h4>
                <p class="text-stone-700 text-sm">
                  Execute full combination sequence on sample slabs from the same batch to verify color consistency and
                  finish compatibility.
                </p>
              </div>
            </div>
          </div>

          <div class="bg-gradient-to-br from-green-50 to-green-100/30 p-6 rounded-sm border border-green-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Use High-Quality Masking Materials</h4>
                <p class="text-stone-700 text-sm">
                  Invest in professional-grade masking tape with strong adhesion and clean removal. Poor tape leads to
                  ragged edges and finish overlap.
                </p>
              </div>
            </div>
          </div>

          <div class="bg-gradient-to-br from-green-50 to-green-100/30 p-6 rounded-sm border border-green-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Sequence Finishes Logically</h4>
                <p class="text-stone-700 text-sm">
                  Apply less aggressive finishes first (polishing, honing) before textured treatments (flaming,
                  bush-hammering) to minimize cross-contamination.
                </p>
              </div>
            </div>
          </div>

          <div class="bg-gradient-to-br from-red-50 to-red-100/30 p-6 rounded-sm border border-red-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Avoid Excessive Complexity</h4>
                <p class="text-stone-700 text-sm">
                  Limit to 2-3 finish types per installation. More than 3 finishes creates maintenance challenges and
                  can appear visually chaotic.
                </p>
              </div>
            </div>
          </div>

          <div class="bg-gradient-to-br from-red-50 to-red-100/30 p-6 rounded-sm border border-red-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Don't Ignore Drainage Requirements</h4>
                <p class="text-stone-700 text-sm">
                  Textured finishes may trap water. Ensure proper slope and drainage especially when combining with
                  polished areas in outdoor applications.
                </p>
              </div>
            </div>
          </div>

          <div class="bg-gradient-to-br from-red-50 to-red-100/30 p-6 rounded-sm border border-red-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Skip Incompatible Marble Types</h4>
                <p class="text-stone-700 text-sm">
                  Heavily veined or fractured marbles may not support all finishes. Consult material data sheets and
                  conduct tests before specifying.
                </p>
              </div>
            </div>
          </div>

          <div class="bg-gradient-to-br from-red-50 to-red-100/30 p-6 rounded-sm border border-red-200">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-2">Never Rush the Process</h4>
                <p class="text-stone-700 text-sm">
                  Combination finishing takes 2-3x longer than uniform finishing. Rushing leads to poor boundaries,
                  inconsistent results, and costly corrections.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Maintenance Guidelines -->
  <section class="py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl sm:text-5xl font-light text-stone-900 mb-6">Maintenance Strategy</h2>
          <p class="text-stone-600 text-lg">
            Tailored care approaches for multi-finish surfaces
          </p>
        </div>

        <div class="bg-white rounded-sm shadow-lg p-8 md:p-12">
          <div class="space-y-8">
            <div>
              <h3 class="text-xl font-medium text-stone-900 mb-4">Daily Care</h3>
              <ul class="space-y-3">
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Dust mop or vacuum to remove loose particles from all finish types</span>
                </li>
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Spot clean spills immediately with appropriate cleaner for affected finish</span>
                </li>
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Use walk-off mats at entrances to reduce abrasive dirt on polished areas</span>
                </li>
              </ul>
            </div>

            <div class="h-px bg-stone-200"></div>

            <div>
              <h3 class="text-xl font-medium text-stone-900 mb-4">Weekly Cleaning</h3>
              <ul class="space-y-3">
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Damp mop polished and honed areas with pH-neutral stone cleaner</span>
                </li>
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Brush textured areas (flamed, bush-hammered) with soft bristle brush and cleaner</span>
                </li>
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Clean grooves with narrow brush or high-pressure water (outdoor applications)</span>
                </li>
              </ul>
            </div>

            <div class="h-px bg-stone-200"></div>

            <div>
              <h3 class="text-xl font-medium text-stone-900 mb-4">Periodic Maintenance</h3>
              <ul class="space-y-3">
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Reseal all finishes every 1-2 years with appropriate sealer for each type</span>
                </li>
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Re-polish high-traffic polished zones if dullness develops (every 3-5 years)</span>
                </li>
                <li class="flex gap-3 text-stone-700">
                  <span class="text-stone-400 mt-1">•</span>
                  <span>Professional inspection of transition edges for chips or separation</span>
                </li>
              </ul>
            </div>

            <div class="bg-amber-50 border border-amber-200 rounded-sm p-6 mt-8">
              <div class="flex gap-3">
                <svg class="w-6 h-6 text-amber-600 flex-shrink-0" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <div>
                  <h4 class="font-medium text-stone-900 mb-2">Important Note</h4>
                  <p class="text-stone-700 text-sm">
                    Never use acidic cleaners (vinegar, lemon) on any marble finish. Avoid abrasive pads on polished
                    surfaces. Test all cleaning products on inconspicuous areas first, especially when multiple finishes
                    are present.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-stone-900"></div>
    <div class="absolute inset-0 opacity-10"
      style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1600&q=80'); background-size: cover; background-position: center;">
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-stone-900/95 to-stone-900/80"></div>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center text-white">
        <div class="inline-block mb-8">
          <div class="h-px w-20 bg-white/40 mx-auto mb-6"></div>
          <span class="text-white/60 uppercase tracking-[0.25em] text-xs">Ready to Create Something Unique?</span>
        </div>

        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extralight mb-8 leading-tight">
          Let's Design Your<br />
          <span class="font-light">Custom Combination</span>
        </h2>

        <p class="text-xl text-white/90 font-light mb-12 max-w-2xl mx-auto leading-relaxed">
          Our design team will help you select finish combinations, create layout drawings,
          and execute flawless installation for your unique vision.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="group inline-flex items-center gap-3 bg-white text-stone-900 px-10 py-5 text-lg font-medium hover:bg-stone-100 transition-all">
            <span>Start Your Project</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>

          <a href="#"
            class="inline-flex items-center gap-3 border-2 border-white/80 text-white px-10 py-5 text-lg font-medium hover:bg-white/10 transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span>Book Consultation</span>
          </a>
        </div>

        <div class="mt-16 pt-12 border-t border-white/20">
          <div class="grid sm:grid-cols-3 gap-8 text-center">
            <div>
              <div class="text-2xl font-light mb-2">100+</div>
              <div class="text-sm text-white/70">Combination Projects</div>
            </div>
            <div>
              <div class="text-2xl font-light mb-2">15+</div>
              <div class="text-sm text-white/70">Years Experience</div>
            </div>
            <div>
              <div class="text-2xl font-light mb-2">98%</div>
              <div class="text-sm text-white/70">Client Satisfaction</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
