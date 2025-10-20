@extends('layouts.page')
@section('title', 'Polish Marble Finishing — Mirror-Like Elegance & Durability')
@section('content')

  <!-- Hero -->
  <section class="relative h-[85vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(135deg, rgba(0,0,0,.5), rgba(40,40,40,.6)), url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-tr from-black/50 via-transparent to-black/40"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="max-w-5xl mx-auto text-white">
        <p class="uppercase tracking-[0.3em] text-white/70 mb-4 text-sm">Premium Surface Treatment</p>
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-extralight leading-tight mb-6">
          Polish Marble<br />
          <span class="font-light">Finishing</span>
        </h1>
        <p class="text-xl sm:text-2xl text-white/90 font-light max-w-3xl mx-auto">
          Mirror-like brilliance achieved through multi-stage diamond abrasion—revealing depth,
          color intensity, and natural veining with lasting durability.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction Split -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-5 gap-12 items-center">
        <div class="lg:col-span-2">
          <div class="sticky top-24">
            <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">
              The Art of<br />
              <span class="font-light">Polishing</span>
            </h2>
            <div class="w-24 h-0.5 bg-stone-900 mb-8"></div>
            <p class="text-stone-600 leading-relaxed text-lg">
              Polished marble finishing transforms raw stone into a luminous surface that reflects light
              and enhances spatial elegance. Our systematic approach ensures consistent gloss levels,
              minimal surface defects, and long-lasting aesthetic appeal.
            </p>
          </div>
        </div>
        <div class="lg:col-span-3 grid grid-cols-2 gap-4">
          <div class="aspect-square bg-cover bg-center rounded-sm shadow-lg"
            style="background-image: url('https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=800&q=80');">
          </div>
          <div class="aspect-square bg-cover bg-center rounded-sm shadow-lg mt-8"
            style="background-image: url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80');">
          </div>
          <div class="aspect-square bg-cover bg-center rounded-sm shadow-lg -mt-8"
            style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=80');">
          </div>
          <div class="aspect-square bg-cover bg-center rounded-sm shadow-lg"
            style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80');">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="py-20 sm:py-24 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight">Multi-Stage Polishing Process</h2>
        <div class="w-24 h-0.5 bg-white/80 mx-auto mt-6 mb-8"></div>
        <p class="text-white/80 text-lg font-light">
          Each stage progressively refines the surface, removing scratches and unlocking the stone's natural brilliance.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Step 1 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-stone-600 to-stone-700 rounded blur opacity-25 group-hover:opacity-40 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">01</div>
            <h3 class="text-2xl font-light mb-3">Grinding</h3>
            <p class="text-white/70 leading-relaxed">
              Initial leveling with 50-100 grit diamond pads. Removes saw marks, lippage, and surface irregularities
              to create a flat plane.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-stone-600 to-stone-700 rounded blur opacity-25 group-hover:opacity-40 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">02</div>
            <h3 class="text-2xl font-light mb-3">Honing</h3>
            <p class="text-white/70 leading-relaxed">
              Progressive refinement through 200-800 grit stages. Removes grinding scratches and begins to
              develop a smooth, matte surface.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-stone-600 to-stone-700 rounded blur opacity-25 group-hover:opacity-40 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">03</div>
            <h3 class="text-2xl font-light mb-3">Fine Honing</h3>
            <p class="text-white/70 leading-relaxed">
              1500-3000 grit pads create a silky-smooth surface with minimal visible scratches.
              Stone color starts to deepen noticeably.
            </p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-stone-600 to-stone-700 rounded blur opacity-25 group-hover:opacity-40 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">04</div>
            <h3 class="text-2xl font-light mb-3">Pre-Polish</h3>
            <p class="text-white/70 leading-relaxed">
              5000-8000 grit creates a semi-gloss finish. Surface begins to reflect light uniformly,
              and veining patterns become vivid.
            </p>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-stone-600 to-stone-700 rounded blur opacity-25 group-hover:opacity-40 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">05</div>
            <h3 class="text-2xl font-light mb-3">Final Polish</h3>
            <p class="text-white/70 leading-relaxed">
              Compound or powder application with buffing pads achieves mirror-like gloss.
              Maximum light reflection and color depth realized.
            </p>
          </div>
        </div>

        <!-- Step 6 -->
        <div class="relative group">
          <div
            class="absolute -inset-1 bg-gradient-to-r from-stone-600 to-stone-700 rounded blur opacity-25 group-hover:opacity-40 transition">
          </div>
          <div class="relative bg-stone-800 p-8 rounded border border-stone-700">
            <div class="text-6xl font-extralight text-stone-600 mb-4">06</div>
            <h3 class="text-2xl font-light mb-3">Sealing & Protection</h3>
            <p class="text-white/70 leading-relaxed">
              Penetrating sealers applied to protect against staining and etching while preserving
              the polished surface's clarity.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Grid -->
  <section class="py-20 sm:py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Why Choose Polished Marble</h2>
        <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
        <p class="text-stone-600 text-lg font-light">
          Beyond aesthetics—polished marble offers practical advantages for high-end residential and commercial
          applications.
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-8 shadow-sm border border-stone-100 hover:shadow-md transition">
          <div class="w-12 h-12 bg-stone-900 rounded-full flex items-center justify-center mb-6">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-stone-900 mb-3">Reflective Brilliance</h3>
          <p class="text-stone-600 leading-relaxed">
            Mirror-like surface amplifies natural and artificial light, making spaces feel larger and more luxurious.
          </p>
        </div>

        <div class="bg-white p-8 shadow-sm border border-stone-100 hover:shadow-md transition">
          <div class="w-12 h-12 bg-stone-900 rounded-full flex items-center justify-center mb-6">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-stone-900 mb-3">Enhanced Durability</h3>
          <p class="text-stone-600 leading-relaxed">
            Polishing densifies the surface, making it more resistant to scratching, staining, and daily wear.
          </p>
        </div>

        <div class="bg-white p-8 shadow-sm border border-stone-100 hover:shadow-md transition">
          <div class="w-12 h-12 bg-stone-900 rounded-full flex items-center justify-center mb-6">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-stone-900 mb-3">Easy Maintenance</h3>
          <p class="text-stone-600 leading-relaxed">
            Smooth, non-porous surface resists dirt accumulation and simplifies cleaning with neutral pH solutions.
          </p>
        </div>

        <div class="bg-white p-8 shadow-sm border border-stone-100 hover:shadow-md transition">
          <div class="w-12 h-12 bg-stone-900 rounded-full flex items-center justify-center mb-6">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-stone-900 mb-3">Visual Depth</h3>
          <p class="text-stone-600 leading-relaxed">
            Reveals the stone's natural veining, color variations, and crystalline structure with stunning clarity.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Specifications -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Technical Excellence</h2>
          <div class="w-24 h-0.5 bg-stone-900 mb-8"></div>

          <div class="space-y-6">
            <div class="border-l-2 border-stone-900 pl-6">
              <h4 class="font-medium text-stone-900 mb-2">Gloss Level</h4>
              <p class="text-stone-600">85-95+ on gloss meter (60° angle). Consistent across entire surface with ±3
                variation.</p>
            </div>

            <div class="border-l-2 border-stone-300 pl-6">
              <h4 class="font-medium text-stone-900 mb-2">Surface Flatness</h4>
              <p class="text-stone-600">±0.5mm tolerance per m² after grinding. Verified with precision straightedge.</p>
            </div>

            <div class="border-l-2 border-stone-300 pl-6">
              <h4 class="font-medium text-stone-900 mb-2">Equipment Used</h4>
              <p class="text-stone-600">Variable-speed planetary grinders, weighted polishers, and resin-bond diamond
                tooling.</p>
            </div>

            <div class="border-l-2 border-stone-300 pl-6">
              <h4 class="font-medium text-stone-900 mb-2">Water Management</h4>
              <p class="text-stone-600">Continuous water feed during grinding/polishing to control heat and remove
                slurry.</p>
            </div>

            <div class="border-l-2 border-stone-300 pl-6">
              <h4 class="font-medium text-stone-900 mb-2">Quality Control</h4>
              <p class="text-stone-600">Visual inspection under calibrated lighting. Gloss meter readings documented per
                batch.</p>
            </div>
          </div>
        </div>

        <div class="relative">
          <div class="aspect-[3/4] bg-cover bg-center rounded shadow-2xl"
            style="background-image: url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1200&q=80');">
          </div>
          <div class="absolute -bottom-8 -left-8 w-48 h-48 bg-stone-900/5 rounded"></div>
          <div class="absolute -top-8 -right-8 w-32 h-32 bg-stone-900/5 rounded"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ideal Applications -->
  <section class="py-20 sm:py-24 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Ideal Applications</h2>
        <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
        <p class="text-stone-600 text-lg font-light">
          Polished marble elevates high-traffic and prestigious spaces with timeless sophistication.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="group relative overflow-hidden rounded shadow-lg">
          <div class="aspect-[4/5] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            style="background-image: url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80');">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-2xl font-light mb-2">Lobby Floors</h3>
            <p class="text-white/90 text-sm">Grand entrances in hotels, corporate offices, and luxury residences.</p>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded shadow-lg">
          <div class="aspect-[4/5] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80');">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-2xl font-light mb-2">Feature Walls</h3>
            <p class="text-white/90 text-sm">Statement pieces in living rooms, boardrooms, and reception areas.</p>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded shadow-lg">
          <div class="aspect-[4/5] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            style="background-image: url('https://images.unsplash.com/photo-1600566753051-f0ba87f71586?w=800&q=80');">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-2xl font-light mb-2">Countertops</h3>
            <p class="text-white/90 text-sm">Kitchen islands, vanities, and bar tops requiring refined aesthetics.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Care & Maintenance -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Maintenance Guidelines</h2>
          <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
          <p class="text-stone-600 text-lg font-light">
            Simple practices to preserve polish brilliance and structural integrity over decades.
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-x-12 gap-y-8">
          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-2">Regular Dusting</h4>
              <p class="text-stone-600 text-sm">Use microfiber mop or soft cloth to remove loose particles before wet
                cleaning.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-2">pH-Neutral Cleaners</h4>
              <p class="text-stone-600 text-sm">Stone-safe solutions only. Avoid acidic or alkaline products that etch
                polish.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-2">Immediate Spill Cleanup</h4>
              <p class="text-stone-600 text-sm">Blot liquids (wine, juice, oil) immediately to prevent absorption and
                staining.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-2">Periodic Resealing</h4>
              <p class="text-stone-600 text-sm">Reapply penetrating sealer every 1-3 years depending on traffic and
                exposure.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-2">Avoid Abrasives</h4>
              <p class="text-stone-600 text-sm">No scouring pads, powdered cleansers, or rough brushes—these scratch the
                polish.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="flex-shrink-0">
              <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-2">No Acidic Products</h4>
              <p class="text-stone-600 text-sm">Vinegar, lemon, bleach, and ammonia will dull and etch polished marble
                surfaces.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Before/After Showcase -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Transformation Gallery</h2>
        <div class="w-24 h-0.5 bg-stone-900 mx-auto mb-8"></div>
        <p class="text-stone-600 text-lg font-light">
          Witness the dramatic enhancement that professional polishing brings to natural stone.
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12">
        <div class="space-y-6">
          <div class="relative group overflow-hidden rounded-lg shadow-lg">
            <div class="aspect-[4/3] bg-cover bg-center"
              style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1200&q=80');">
            </div>
            <div
              class="absolute top-4 left-4 bg-stone-900/90 text-white px-4 py-2 text-sm font-medium uppercase tracking-wider">
              After Polishing
            </div>
          </div>
          <p class="text-stone-600 leading-relaxed">
            <span class="font-medium text-stone-900">Mirror-like brilliance:</span> Full depth of color revealed,
            sharp veining definition, and maximum light reflection achieved through systematic multi-stage polishing.
          </p>
        </div>

        <div class="space-y-6">
          <div class="relative group overflow-hidden rounded-lg shadow-lg">
            <div class="aspect-[4/3] bg-cover bg-center grayscale-[30%] brightness-90"
              style="background-image: url('https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=1200&q=80');">
            </div>
            <div
              class="absolute top-4 left-4 bg-white/90 text-stone-900 px-4 py-2 text-sm font-medium uppercase tracking-wider">
              Before Polishing
            </div>
          </div>
          <p class="text-stone-600 leading-relaxed">
            <span class="font-medium text-stone-900">Raw/honed state:</span> Dull surface, muted colors,
            less defined veining, and minimal reflectivity—functional but lacks the luxury appeal.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative py-24 sm:py-32 bg-cover bg-center"
    style="background-image: linear-gradient(135deg, rgba(0,0,0,.7), rgba(30,30,30,.75)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/40"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extralight mb-6">
          Ready for the<br />
          <span class="font-light">Perfect Finish?</span>
        </h2>
        <p class="text-xl text-white/90 font-light mb-10 max-w-2xl mx-auto">
          Request a polished sample, technical specifications, or schedule a consultation
          to discuss your project requirements.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="inline-flex items-center gap-3 bg-white text-stone-900 px-8 py-4 text-lg hover:bg-stone-100 transition-all hover:gap-4 group">
            <span class="font-medium">Request Sample</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
          <a href="#"
            class="inline-flex items-center gap-3 border-2 border-white/80 text-white px-8 py-4 text-lg hover:bg-white/10 transition-all hover:gap-4 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <span class="font-medium">Download Technical Guide</span>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
