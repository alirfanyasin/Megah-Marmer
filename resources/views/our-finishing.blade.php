@extends('layouts.page')
@section('title', 'Our Finishing')
@section('content')

  <!-- Hero -->
  <section class="relative h-[85vh] bg-cover bg-center flex items-center" id="polish-marble"
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



  {{-- ============================== Doff or mate ============================== --}}
  <!-- Hero -->
  <section class="relative h-[85vh] bg-cover bg-center flex items-center" id="matte"
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



  {{-- ============================== Acid ============================== --}}
  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center" id="acid"
    style="background-image: linear-gradient(110deg, rgba(50,40,30,.7), rgba(20,20,20,.6)), url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-br from-black/50 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-[0.3em] text-amber-200/80 mb-4 text-sm">Specialty Surface Treatment</p>
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-extralight leading-tight mb-6">
          Acid Washing<br />
          <span class="font-light">Finish</span>
        </h1>
        <p class="text-xl sm:text-2xl text-white/90 font-light max-w-3xl">
          Chemical etching that creates an antiqued, weathered appearance with enhanced texture
          and unique character—ideal for rustic and Mediterranean aesthetics.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">
              What is<br />
              <span class="font-light">Acid Washing?</span>
            </h2>
            <div class="w-24 h-0.5 bg-amber-600 mb-8"></div>
            <p class="text-stone-700 leading-relaxed text-lg mb-4">
              Acid washing is a controlled chemical etching process that removes the smooth surface layer
              of marble, exposing the natural crystalline structure beneath. This creates a matte, slightly
              rough texture with an aged, weathered appearance.
            </p>
            <p class="text-stone-600 leading-relaxed mb-6">
              The process uses diluted acidic solutions (typically hydrochloric or sulfamic acid) applied
              evenly across the stone surface. The acid reacts with calcium carbonate in the marble,
              dissolving microscopic layers and revealing inherent texture variations.
            </p>
            <div class="bg-amber-50 border-l-4 border-amber-600 p-6">
              <p class="text-amber-900 font-medium mb-2">⚠️ Professional Application Only</p>
              <p class="text-amber-800 text-sm">
                Acid washing requires expert handling, proper safety equipment, and controlled application.
                Never attempt DIY acid treatments—incorrect use can permanently damage stone or cause injury.
              </p>
            </div>
          </div>
          <div class="relative">
            <div class="aspect-[3/4] bg-cover bg-center rounded shadow-2xl"
              style="background-image: url('https://images.unsplash.com/photo-1600566753051-f0ba87f71586?w=1200&q=80');">
            </div>
            <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-amber-600/10 rounded -z-10"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="py-20 sm:py-24 bg-gradient-to-b from-stone-50 to-stone-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900">Application Process</h2>
        <div class="w-24 h-0.5 bg-amber-600 mx-auto mt-6 mb-8"></div>
        <p class="text-stone-600 text-lg font-light">
          Systematic chemical treatment executed under strict safety protocols and environmental controls.
        </p>
      </div>

      <div class="max-w-5xl mx-auto">
        <div class="space-y-6">
          <!-- Step 1 -->
          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <div class="flex items-start gap-6">
              <div
                class="flex-shrink-0 w-16 h-16 bg-amber-600 text-white rounded-full flex items-center justify-center text-2xl font-light">
                01
              </div>
              <div>
                <h3 class="text-xl font-medium text-stone-900 mb-3">Surface Preparation</h3>
                <p class="text-stone-600 leading-relaxed mb-3">
                  Clean marble thoroughly to remove all dirt, oils, sealers, and coatings. Surface must be
                  completely bare for uniform acid reaction. Mask adjacent areas and protect surroundings
                  from acid splash.
                </p>
                <ul class="text-sm text-stone-600 space-y-1">
                  <li>• Deep clean with alkaline degreaser</li>
                  <li>• Rinse completely and allow to dry</li>
                  <li>• Test acid on small inconspicuous area first</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <div class="flex items-start gap-6">
              <div
                class="flex-shrink-0 w-16 h-16 bg-amber-600 text-white rounded-full flex items-center justify-center text-2xl font-light">
                02
              </div>
              <div>
                <h3 class="text-xl font-medium text-stone-900 mb-3">Acid Application</h3>
                <p class="text-stone-600 leading-relaxed mb-3">
                  Apply diluted acid solution (typically 10-15% concentration) evenly using acid-resistant
                  brushes or sprayers. Work in manageable sections. Allow chemical reaction for prescribed
                  dwell time (usually 30-90 seconds).
                </p>
                <ul class="text-sm text-stone-600 space-y-1">
                  <li>• Wear full PPE: gloves, goggles, respirator, protective clothing</li>
                  <li>• Ensure adequate ventilation</li>
                  <li>• Monitor reaction—effervescence indicates active etching</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <div class="flex items-start gap-6">
              <div
                class="flex-shrink-0 w-16 h-16 bg-amber-600 text-white rounded-full flex items-center justify-center text-2xl font-light">
                03
              </div>
              <div>
                <h3 class="text-xl font-medium text-stone-900 mb-3">Neutralization & Rinsing</h3>
                <p class="text-stone-600 leading-relaxed mb-3">
                  Immediately neutralize acid with alkaline solution (sodium bicarbonate/baking soda solution).
                  Flush thoroughly with abundant clean water. Continue rinsing until pH strips show neutral (7.0).
                  Remove all chemical residue.
                </p>
                <ul class="text-sm text-stone-600 space-y-1">
                  <li>• Use pressure washer or high-volume water for thorough rinsing</li>
                  <li>• Test pH before proceeding</li>
                  <li>• Extract standing water completely</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <div class="flex items-start gap-6">
              <div
                class="flex-shrink-0 w-16 h-16 bg-amber-600 text-white rounded-full flex items-center justify-center text-2xl font-light">
                04
              </div>
              <div>
                <h3 class="text-xl font-medium text-stone-900 mb-3">Drying & Sealing</h3>
                <p class="text-stone-600 leading-relaxed mb-3">
                  Allow surface to dry completely (24-48 hours minimum). Etched marble is highly porous and
                  requires enhanced sealer protection. Apply penetrating impregnator sealer—multiple coats
                  may be necessary due to increased porosity.
                </p>
                <ul class="text-sm text-stone-600 space-y-1">
                  <li>• Use high-quality penetrating sealer rated for high-porosity stone</li>
                  <li>• Apply 2-3 coats with appropriate drying time between applications</li>
                  <li>• Allow full cure (72 hours) before exposing to moisture or traffic</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Characteristics & Applications -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16">
          <!-- Characteristics -->
          <div>
            <h2 class="text-3xl sm:text-4xl font-extralight text-stone-900 mb-6">Surface Characteristics</h2>
            <div class="w-20 h-0.5 bg-amber-600 mb-8"></div>

            <div class="space-y-6">
              <div class="flex gap-4">
                <div class="flex-shrink-0 w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center">
                  <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-2">Textured Matte Finish</h4>
                  <p class="text-stone-600 text-sm">Slightly rough, non-reflective surface with zero gloss.
                    Tactile irregularities create authentic aged appearance.</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0 w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center">
                  <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-2">Color Lightening</h4>
                  <p class="text-stone-600 text-sm">Acid etching typically lightens stone color 1-2 shades,
                    creating softer, more muted tones with antique patina.</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0 w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center">
                  <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-2">Enhanced Slip Resistance</h4>
                  <p class="text-stone-600 text-sm">Roughened texture provides excellent traction—suitable
                    for pool decks, outdoor patios, and wet areas.</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0 w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center">
                  <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-stone-900 mb-2">Increased Porosity</h4>
                  <p class="text-stone-600 text-sm">Etched surface requires enhanced sealing. Unsealed
                    acid-washed marble is highly absorbent and stain-prone.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Applications -->
          <div>
            <h2 class="text-3xl sm:text-4xl font-extralight text-stone-900 mb-6">Ideal Applications</h2>
            <div class="w-20 h-0.5 bg-amber-600 mb-8"></div>

            <div class="grid sm:grid-cols-2 gap-6">
              <div class="group relative overflow-hidden rounded-lg shadow-lg h-64">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                  style="background-image: url('https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=800&q=80');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5 text-white">
                  <h3 class="text-lg font-medium mb-1">Outdoor Patios</h3>
                  <p class="text-white/90 text-xs">Rustic Mediterranean courtyards and terraces</p>
                </div>
              </div>

              <div class="group relative overflow-hidden rounded-lg shadow-lg h-64">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                  style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=80');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5 text-white">
                  <h3 class="text-lg font-medium mb-1">Pool Surrounds</h3>
                  <p class="text-white/90 text-xs">Non-slip surfaces with weathered aesthetic</p>
                </div>
              </div>

              <div class="group relative overflow-hidden rounded-lg shadow-lg h-64">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                  style="background-image: url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5 text-white">
                  <h3 class="text-lg font-medium mb-1">Rustic Interiors</h3>
                  <p class="text-white/90 text-xs">Farmhouse kitchens and vintage bathrooms</p>
                </div>
              </div>

              <div class="group relative overflow-hidden rounded-lg shadow-lg h-64">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                  style="background-image: url('https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=800&q=80');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5 text-white">
                  <h3 class="text-lg font-medium mb-1">Feature Walls</h3>
                  <p class="text-white/90 text-xs">Accent walls with artisanal, handcrafted look</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Safety & Maintenance -->
  <section class="py-20 sm:py-24 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12">
          <!-- Safety Protocols -->
          <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
              </div>
              <h3 class="text-2xl font-light">Critical Safety Protocols</h3>
            </div>

            <ul class="space-y-4 text-white/80">
              <li class="flex gap-3">
                <span class="text-red-400 flex-shrink-0">⚠️</span>
                <span><strong class="text-white">Full PPE Required:</strong> Chemical-resistant gloves, safety goggles,
                  respirator with acid gas cartridges, protective apron/suit, and boots.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-red-400 flex-shrink-0">⚠️</span>
                <span><strong class="text-white">Ventilation:</strong> Work outdoors or in well-ventilated areas.
                  Acid fumes are corrosive and hazardous to respiratory system.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-red-400 flex-shrink-0">⚠️</span>
                <span><strong class="text-white">Emergency Preparedness:</strong> Have eyewash station, neutralizing
                  solution, and emergency water supply readily accessible.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-red-400 flex-shrink-0">⚠️</span>
                <span><strong class="text-white">Waste Disposal:</strong> Neutralize all acid waste before disposal.
                  Follow local hazardous material regulations.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-red-400 flex-shrink-0">⚠️</span>
                <span><strong class="text-white">Professional Only:</strong> This is not a DIY procedure. Hire
                  certified stone restoration professionals with acid-handling experience.</span>
              </li>
            </ul>
          </div>

          <!-- Maintenance Guidelines -->
          <div class="bg-stone-800 p-8 rounded-lg border border-stone-700">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-12 h-12 bg-amber-600 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-2xl font-light">Maintenance Requirements</h3>
            </div>

            <ul class="space-y-4 text-white/80">
              <li class="flex gap-3">
                <span class="text-amber-400 flex-shrink-0">✓</span>
                <span><strong class="text-white">Frequent Resealing:</strong> Acid-washed marble requires sealing
                  every 6-12 months due to high porosity—more often in outdoor applications.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-amber-400 flex-shrink-0">✓</span>
                <span><strong class="text-white">pH-Neutral Cleaners Only:</strong> Never use acidic or alkaline
                  cleaners. Use stone-specific pH-neutral solutions.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-amber-400 flex-shrink-0">✓</span>
                <span><strong class="text-white">Immediate Spill Cleanup:</strong> Textured surface can trap liquids.
                  Blot spills immediately, especially oils and colored liquids.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-amber-400 flex-shrink-0">✓</span>
                <span><strong class="text-white">Gentle Cleaning Tools:</strong> Use soft brushes for textured areas.
                  Avoid pressure washers on high settings—can damage etched surface.</span>
              </li>
              <li class="flex gap-3">
                <span class="text-amber-400 flex-shrink-0">✓</span>
                <span><strong class="text-white">Outdoor Protection:</strong> In freezing climates, ensure complete
                  water drainage to prevent freeze-thaw damage in porous stone.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Considerations -->
  <section class="py-20 sm:py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Important Considerations</h2>
          <div class="w-24 h-0.5 bg-amber-600 mx-auto mb-8"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <h3 class="text-xl font-medium text-stone-900 mb-4">Irreversible Process</h3>
            <p class="text-stone-600 leading-relaxed">
              Acid washing permanently alters the stone surface. It cannot be reversed or removed. Always test
              on sample pieces or inconspicuous areas before treating entire surfaces. Consider whether the
              antiqued aesthetic aligns with long-term design goals.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <h3 class="text-xl font-medium text-stone-900 mb-4">Not Suitable for All Marbles</h3>
            <p class="text-stone-600 leading-relaxed">
              Very soft or heavily veined marbles may react unpredictably. Dense marbles (Carrara, Thassos)
              respond more uniformly than porous varieties. Consult stone specifications and conduct test patches
              to verify compatibility.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <h3 class="text-xl font-medium text-stone-900 mb-4">Variable Results</h3>
            <p class="text-stone-600 leading-relaxed">
              Acid reaction varies based on marble composition, acid concentration, dwell time, and environmental
              conditions. Expect slight color and texture variations—this is part of the rustic, artisanal appeal.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-amber-600">
            <h3 class="text-xl font-medium text-stone-900 mb-4">Higher Maintenance Commitment</h3>
            <p class="text-stone-600 leading-relaxed">
              Acid-washed marble requires more diligent care than polished or honed finishes. Factor in ongoing
              sealing costs and increased cleaning attention. Best suited for clients willing to maintain the surface.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



  {{-- ============================== Hammered ============================== --}}
  <!-- Hero -->
  <section class="relative h-[90vh] bg-cover bg-center flex items-center" id="hammered"
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



  {{-- ============================== Burning ============================== --}}
  <!-- Hero -->
  <section class="relative h-[85vh] bg-cover bg-center flex items-center" id="burning"
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13 10V3L4 14h7v7l9-11h-7z" />
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


  {{-- ============================== Texture ============================== --}}
  <!-- Hero -->
  <section class="relative h-[90vh] bg-cover bg-center flex items-center" id="textured"
    style="background-image: linear-gradient(to bottom right, rgba(40,40,40,.75), rgba(0,0,0,.65)), url('/assets/our-finishing/download.jpeg');">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto text-center text-white">
        <p class="uppercase tracking-[0.28em] text-white/70 mb-5 text-sm font-light">Dimensional Surface Treatment</p>
        <h1 class="text-6xl sm:text-7xl md:text-8xl font-light leading-none mb-8">
          Textured<br />
          <span class="font-light">Finishing</span>
        </h1>
        <p class="text-xl sm:text-2xl text-white/90 font-light max-w-3xl mx-auto leading-relaxed">
          Sculptural surface patterns that add depth, shadow play, and tactile interest—
          transforming flat stone into dimensional art with functional benefits.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction -->
  <section class="py-24 bg-gradient-to-b from-white to-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
          <div>
            <h2 class="text-5xl font-extralight text-stone-900 mb-8 leading-tight">
              Three-Dimensional<br />
              Surface Design
            </h2>
            <div class="w-24 h-1 bg-stone-900 mb-8"></div>
            <div class="space-y-6 text-stone-600 text-lg leading-relaxed">
              <p>
                Textured finishing encompasses a range of techniques that create raised or recessed
                patterns on marble surfaces. From subtle ripples to bold relief designs, these finishes
                add visual and tactile depth that polished surfaces cannot achieve.
              </p>
              <p>
                Beyond aesthetics, textured finishes offer practical advantages including enhanced
                slip resistance, reduced glare, and the ability to conceal minor surface imperfections.
                Each texture type serves specific functional and design objectives.
              </p>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
              <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=600&q=80"
                alt="Textured marble detail" class="w-full h-64 object-cover rounded-lg shadow-md">
              <img src="https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=600&q=80"
                alt="Marble texture pattern" class="w-full h-80 object-cover rounded-lg shadow-md">
            </div>
            <div class="space-y-4 mt-12">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80"
                alt="Dimensional marble finish" class="w-full h-80 object-cover rounded-lg shadow-md">
              <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&q=80"
                alt="Textured stone surface" class="w-full h-64 object-cover rounded-lg shadow-md">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Texture Types -->
  <section class="py-24 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-20">
        <h2 class="text-5xl font-extralight mb-6">Popular Texture Patterns</h2>
        <div class="w-24 h-1 bg-white mx-auto mb-8"></div>
        <p class="text-white/80 text-lg font-light">
          Each texture style creates unique visual and tactile characteristics suited to different applications.
        </p>
      </div>

      <div class="max-w-6xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Wave Pattern -->
        <div class="bg-stone-800 rounded-lg overflow-hidden border border-stone-700 hover:border-stone-600 transition">
          <div class="h-48 bg-gradient-to-br from-stone-700 to-stone-800 flex items-center justify-center">
            <svg class="w-24 h-24 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M3 12c0-3 1-5 3-5s3 2 3 5-1 5-3 5-3-2-3-5zm6 0c0-3 1-5 3-5s3 2 3 5-1 5-3 5-3-2-3-5zm6 0c0-3 1-5 3-5s3 2 3 5-1 5-3 5-3-2-3-5z" />
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-light mb-3">Wave / Ripple</h3>
            <p class="text-white/70 leading-relaxed mb-4">
              Flowing undulations resembling water ripples. Creates movement and organic rhythm
              across the surface.
            </p>
            <p class="text-white/50 text-sm">
              <strong>Ideal for:</strong> Feature walls, spa environments, contemporary interiors
            </p>
          </div>
        </div>

        <!-- Linear Groove -->
        <div class="bg-stone-800 rounded-lg overflow-hidden border border-stone-700 hover:border-stone-600 transition">
          <div class="h-48 bg-gradient-to-br from-stone-700 to-stone-800 flex items-center justify-center">
            <svg class="w-24 h-24 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-light mb-3">Linear Grooves</h3>
            <p class="text-white/70 leading-relaxed mb-4">
              Parallel channels cut into the surface at consistent depth and spacing.
              Adds directional emphasis and modern geometry.
            </p>
            <p class="text-white/50 text-sm">
              <strong>Ideal for:</strong> Facades, flooring transitions, minimalist design
            </p>
          </div>
        </div>

        <!-- Bush Hammered -->
        <div class="bg-stone-800 rounded-lg overflow-hidden border border-stone-700 hover:border-stone-600 transition">
          <div class="h-48 bg-gradient-to-br from-stone-700 to-stone-800 flex items-center justify-center">
            <svg class="w-24 h-24 text-stone-600" fill="currentColor" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="1.5" />
              <circle cx="12" cy="6" r="1.5" />
              <circle cx="18" cy="6" r="1.5" />
              <circle cx="6" cy="12" r="1.5" />
              <circle cx="12" cy="12" r="1.5" />
              <circle cx="18" cy="12" r="1.5" />
              <circle cx="6" cy="18" r="1.5" />
              <circle cx="12" cy="18" r="1.5" />
              <circle cx="18" cy="18" r="1.5" />
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-light mb-3">Bush Hammered</h3>
            <p class="text-white/70 leading-relaxed mb-4">
              Uniform dimpled texture created by multi-pointed hammer. Provides consistent
              grip and matte appearance.
            </p>
            <p class="text-white/50 text-sm">
              <strong>Ideal for:</strong> Outdoor paving, anti-slip surfaces, rustic projects
            </p>
          </div>
        </div>

        <!-- Split Face -->
        <div class="bg-stone-800 rounded-lg overflow-hidden border border-stone-700 hover:border-stone-600 transition">
          <div class="h-48 bg-gradient-to-br from-stone-700 to-stone-800 flex items-center justify-center">
            <svg class="w-24 h-24 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 3v18m0-18l-3 3m3-3l3 3m-3 15l-3-3m3 3l3-3" />
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-light mb-3">Split Face</h3>
            <p class="text-white/70 leading-relaxed mb-4">
              Natural fractured surface revealing raw stone character. Irregular peaks
              and valleys create dramatic shadow effects.
            </p>
            <p class="text-white/50 text-sm">
              <strong>Ideal for:</strong> Accent walls, fireplace surrounds, natural aesthetics
            </p>
          </div>
        </div>

        <!-- 3D Geometric -->
        <div class="bg-stone-800 rounded-lg overflow-hidden border border-stone-700 hover:border-stone-600 transition">
          <div class="h-48 bg-gradient-to-br from-stone-700 to-stone-800 flex items-center justify-center">
            <svg class="w-24 h-24 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-light mb-3">3D Geometric</h3>
            <p class="text-white/70 leading-relaxed mb-4">
              Precisely carved dimensional patterns—hexagons, triangles, or custom shapes.
              Creates bold architectural statements.
            </p>
            <p class="text-white/50 text-sm">
              <strong>Ideal for:</strong> Luxury interiors, focal walls, artistic installations
            </p>
          </div>
        </div>

        <!-- Sandblasted -->
        <div class="bg-stone-800 rounded-lg overflow-hidden border border-stone-700 hover:border-stone-600 transition">
          <div class="h-48 bg-gradient-to-br from-stone-700 to-stone-800 flex items-center justify-center">
            <svg class="w-24 h-24 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-light mb-3">Sandblasted</h3>
            <p class="text-white/70 leading-relaxed mb-4">
              Fine abrasive treatment creating uniform matte texture with slight roughness.
              Soft to touch yet slip-resistant.
            </p>
            <p class="text-white/50 text-sm">
              <strong>Ideal for:</strong> Bathroom floors, signage backgrounds, subtle texture needs
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Process Overview -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-20">
          <h2 class="text-5xl font-extralight text-stone-900 mb-6">Creation Process</h2>
          <div class="w-24 h-1 bg-stone-900 mx-auto mb-8"></div>
          <p class="text-stone-600 text-lg font-light max-w-3xl mx-auto">
            General workflow for achieving textured finishes through mechanical or manual techniques.
          </p>
        </div>

        <div class="space-y-12">

          <div class="flex gap-8 items-start">
            <div
              class="flex-shrink-0 w-16 h-16 bg-stone-900 text-white rounded-lg flex items-center justify-center text-2xl font-light">
              01
            </div>
            <div class="flex-1 pt-2">
              <h3 class="text-2xl font-medium text-stone-900 mb-4">Design & Planning</h3>
              <p class="text-stone-600 leading-relaxed mb-4">
                Pattern selection, depth specification, and layout planning. Digital templates or physical
                mockups created to visualize final appearance and ensure client approval.
              </p>
              <div class="bg-stone-50 p-4 rounded-lg border-l-4 border-stone-900">
                <p class="text-sm text-stone-700">
                  <strong>Key consideration:</strong> Pattern scale must match application size—
                  large areas can accommodate bolder relief designs.
                </p>
              </div>
            </div>
          </div>

          <div class="flex gap-8 items-start">
            <div
              class="flex-shrink-0 w-16 h-16 bg-stone-900 text-white rounded-lg flex items-center justify-center text-2xl font-light">
              02
            </div>
            <div class="flex-1 pt-2">
              <h3 class="text-2xl font-medium text-stone-900 mb-4">Surface Preparation</h3>
              <p class="text-stone-600 leading-relaxed">
                Marble is cut, dimensioned, and cleaned. Initial grinding ensures flatness before texture
                application. Surface must be free of cracks or weak points that could worsen during texturing.
              </p>
            </div>
          </div>

          <div class="flex gap-8 items-start">
            <div
              class="flex-shrink-0 w-16 h-16 bg-stone-900 text-white rounded-lg flex items-center justify-center text-2xl font-light">
              03
            </div>
            <div class="flex-1 pt-2">
              <h3 class="text-2xl font-medium text-stone-900 mb-4">Texture Application</h3>
              <p class="text-stone-600 leading-relaxed mb-4">
                Methods vary by pattern type—CNC milling for precise 3D designs, manual carving for
                organic patterns, bush hammering for uniform dimpling, or sandblasting for matte texture.
              </p>
              <div class="grid sm:grid-cols-2 gap-4">
                <div class="bg-stone-50 p-4 rounded-lg">
                  <h4 class="font-medium text-stone-900 mb-2">CNC Machining</h4>
                  <p class="text-sm text-stone-600">Computer-controlled precision for repeating geometric patterns</p>
                </div>
                <div class="bg-stone-50 p-4 rounded-lg">
                  <h4 class="font-medium text-stone-900 mb-2">Hand Carving</h4>
                  <p class="text-sm text-stone-600">Artisan work for custom organic designs and relief sculptures</p>
                </div>
              </div>
            </div>
          </div>

          <div class="flex gap-8 items-start">
            <div
              class="flex-shrink-0 w-16 h-16 bg-stone-900 text-white rounded-lg flex items-center justify-center text-2xl font-light">
              04
            </div>
            <div class="flex-1 pt-2">
              <h3 class="text-2xl font-medium text-stone-900 mb-4">Refinement & Finishing</h3>
              <p class="text-stone-600 leading-relaxed">
                Edges are smoothed, debris removed, and surface cleaned. Some textures receive secondary
                finishing—light honing on high points or contrast polishing for mixed-finish effects.
              </p>
            </div>
          </div>

          <div class="flex gap-8 items-start">
            <div
              class="flex-shrink-0 w-16 h-16 bg-stone-900 text-white rounded-lg flex items-center justify-center text-2xl font-light">
              05
            </div>
            <div class="flex-1 pt-2">
              <h3 class="text-2xl font-medium text-stone-900 mb-4">Sealing & Protection</h3>
              <p class="text-stone-600 leading-relaxed">
                Penetrating sealers applied to protect textured surfaces from staining. Increased surface
                area means more sealer absorption—application may require multiple coats for full protection.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Benefits -->
  <section class="py-24 bg-gradient-to-b from-stone-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-5xl font-extralight text-stone-900 mb-6">Textured Finish Benefits</h2>
          <div class="w-24 h-1 bg-stone-900 mx-auto mb-8"></div>
          <p class="text-stone-600 text-lg font-light">
            Functional and aesthetic advantages that go beyond surface-level appeal.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

          <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
            <div class="w-14 h-14 bg-stone-900 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Visual Depth</h3>
            <p class="text-stone-600 leading-relaxed">
              Three-dimensional patterns create shadow play and visual interest that changes with
              lighting angles throughout the day.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
            <div class="w-14 h-14 bg-stone-900 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Tactile Experience</h3>
            <p class="text-stone-600 leading-relaxed">
              Physical texture engages multiple senses, creating memorable spatial experiences
              and adding human-scale detail to architecture.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
            <div class="w-14 h-14 bg-stone-900 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Slip Resistance</h3>
            <p class="text-stone-600 leading-relaxed">
              Textured surfaces provide significantly better traction than polished finishes,
              especially important in wet environments and sloped areas.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
            <div class="w-14 h-14 bg-stone-900 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Glare Reduction</h3>
            <p class="text-stone-600 leading-relaxed">
              Matte and dimensional textures diffuse light rather than reflecting it, reducing
              eye strain and creating softer ambient lighting.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
            <div class="w-14 h-14 bg-stone-900 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Hides Imperfections</h3>
            <p class="text-stone-600 leading-relaxed">
              Minor scratches, wear marks, and natural stone variations become less visible
              within textured patterns compared to smooth polished surfaces.
            </p>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-sm border border-stone-200">
            <div class="w-14 h-14 bg-stone-900 rounded-full flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-stone-900 mb-3">Design Versatility</h3>
            <p class="text-stone-600 leading-relaxed">
              Endless pattern possibilities from traditional to contemporary, allowing precise
              alignment with any architectural style or brand identity.
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Applications & Maintenance -->
  <section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto grid lg:grid-cols-5 gap-16">

        <!-- Applications -->
        <div class="lg:col-span-3">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Where Texture Shines</h2>
          <div class="w-20 h-1 bg-stone-900 mb-8"></div>

          <div class="grid sm:grid-cols-2 gap-6">
            <div class="border-l-4 border-stone-900 pl-6 py-3">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Feature Walls</h4>
              <p class="text-stone-600 text-sm">
                Reception areas, hotel lobbies, and residential focal points that demand visual impact.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-3">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Spa & Wellness</h4>
              <p class="text-stone-600 text-sm">
                Bathroom walls, shower enclosures, and sauna rooms where tactile quality enhances relaxation.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-3">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Exterior Cladding</h4>
              <p class="text-stone-600 text-sm">
                Building facades and entrance features requiring weather resistance and architectural presence.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-3">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Flooring</h4>
              <p class="text-stone-600 text-sm">
                High-traffic commercial spaces, outdoor plazas, and areas requiring slip-resistant surfaces.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-3">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Retail & Hospitality</h4>
              <p class="text-stone-600 text-sm">
                Branded environments benefit from rich tactility—backdrops for visual merchandising and experiential
                spaces.
              </p>
            </div>

            <div class="border-l-4 border-stone-300 pl-6 py-3">
              <h4 class="text-lg font-medium text-stone-900 mb-2">Landscape Elements</h4>
              <p class="text-stone-600 text-sm">
                Benches, planters, garden paths, and water features where grip and texture elevate usability and design.
              </p>
            </div>
          </div>
        </div>

        <!-- Maintenance -->
        <div class="lg:col-span-2">
          <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900 mb-6">Care & Maintenance</h2>
          <div class="w-20 h-1 bg-stone-900 mb-8"></div>

          <div class="space-y-5">
            <div class="p-5 bg-stone-50 border border-stone-200 rounded-lg">
              <h4 class="font-medium text-stone-900 mb-1">Seal Properly</h4>
              <p class="text-stone-600 text-sm">
                Textured surfaces have more exposed area—apply multiple coats of penetrating sealer and re-seal every 6–12
                months (outdoor: more frequently).
              </p>
            </div>

            <div class="p-5 bg-stone-50 border border-stone-200 rounded-lg">
              <h4 class="font-medium text-stone-900 mb-1">Use pH-Neutral Cleaners</h4>
              <p class="text-stone-600 text-sm">
                Avoid acidic/alkaline products. For grooves and reliefs, agitate gently with soft brushes to lift trapped
                dirt.
              </p>
            </div>

            <div class="p-5 bg-stone-50 border border-stone-200 rounded-lg">
              <h4 class="font-medium text-stone-900 mb-1">Immediate Spill Response</h4>
              <p class="text-stone-600 text-sm">
                Blot (do not wipe) oils, wine, coffee, and dyes promptly to prevent penetration into recesses.
              </p>
            </div>

            <div class="p-5 bg-stone-50 border border-stone-200 rounded-lg">
              <h4 class="font-medium text-stone-900 mb-1">Outdoor Considerations</h4>
              <p class="text-stone-600 text-sm">
                Ensure drainage and periodic rinsing to minimize buildup. In freeze–thaw climates, keep surfaces sealed
                and dry before hard freezes.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  {{-- ============================== Groove ============================== --}}
  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-end" id="groove"
    style="background-image: linear-gradient(180deg, rgba(0,0,0,.3), rgba(0,0,0,.65)), url('https://images.unsplash.com/photo-1615874694520-474822394e73?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 pb-20">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-[0.25em] text-white/60 mb-3 text-xs">Textured Surface Treatment</p>
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-light leading-tight mb-5">
          Groove Finishing
        </h1>
        <p class="text-lg sm:text-xl text-white/90 font-light max-w-2xl">
          Precision-cut linear grooves creating tactile texture, enhanced grip, and contemporary aesthetics
          for architectural surfaces.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-6">
              What is Groove Finishing?
            </h2>
            <div class="space-y-4 text-stone-700 leading-relaxed">
              <p>
                Groove finishing involves machining parallel channels or grooves into marble surfaces using specialized
                cutting equipment. This technique creates uniform linear patterns that serve both functional and
                aesthetic purposes.
              </p>
              <p>
                The grooves typically range from 2-8mm in width and depth, spaced at regular intervals to create
                consistent texture. This method is particularly valued for outdoor applications, wet areas, and
                contemporary architectural designs.
              </p>
            </div>
          </div>
          <div class="aspect-[4/3] bg-cover bg-center rounded-sm shadow-xl"
            style="background-image: url('https://images.unsplash.com/photo-1603431221389-7910a486c5eb?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=902');">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Benefits -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 text-center mb-12">Primary Benefits</h2>

        <div class="grid sm:grid-cols-3 gap-8">
          <div class="text-center">
            <div class="w-16 h-16 bg-stone-900 rounded-sm mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-lg font-medium text-stone-900 mb-2">Anti-Slip Safety</h3>
            <p class="text-stone-600 text-sm">Grooves provide enhanced traction, reducing slip hazards in wet
              conditions.
            </p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-stone-900 rounded-sm mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
              </svg>
            </div>
            <h3 class="text-lg font-medium text-stone-900 mb-2">Modern Aesthetic</h3>
            <p class="text-stone-600 text-sm">Linear patterns create contemporary visual interest and depth.</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-stone-900 rounded-sm mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
              </svg>
            </div>
            <h3 class="text-lg font-medium text-stone-900 mb-2">Water Drainage</h3>
            <p class="text-stone-600 text-sm">Channels facilitate water runoff, ideal for outdoor installations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="py-16 sm:py-20 bg-stone-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-3xl sm:text-4xl font-light mb-4">Finishing Process</h2>
          <p class="text-white/70 max-w-2xl mx-auto">
            Step-by-step methodology for achieving precise, uniform groove patterns in marble surfaces.
          </p>
        </div>

        <div class="space-y-6">
          <!-- Step 1 -->
          <div class="bg-stone-800/50 border border-stone-700 p-6 rounded-sm hover:bg-stone-800 transition">
            <div class="flex items-start gap-6">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-700 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">1</span>
              </div>
              <div class="flex-1">
                <h3 class="text-xl font-medium mb-2">Surface Preparation</h3>
                <p class="text-white/80">
                  Clean and level the marble surface. Remove any existing coatings or contaminants.
                  Ensure flatness within tolerance (±1mm per m²) for consistent groove depth.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="bg-stone-800/50 border border-stone-700 p-6 rounded-sm hover:bg-stone-800 transition">
            <div class="flex items-start gap-6">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-700 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">2</span>
              </div>
              <div class="flex-1">
                <h3 class="text-xl font-medium mb-2">Layout & Marking</h3>
                <p class="text-white/80">
                  Mark groove positions using laser guides or chalk lines. Standard spacing: 10-20mm intervals.
                  Verify parallel alignment and consistent spacing across entire surface.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="bg-stone-800/50 border border-stone-700 p-6 rounded-sm hover:bg-stone-800 transition">
            <div class="flex items-start gap-6">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-700 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">3</span>
              </div>
              <div class="flex-1">
                <h3 class="text-xl font-medium mb-2">Groove Cutting</h3>
                <p class="text-white/80">
                  Use diamond-blade grooving machines with adjustable depth control. Cut grooves at consistent
                  depth (typically 3-5mm) and width (3-6mm). Maintain steady feed rate for uniform results.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="bg-stone-800/50 border border-stone-700 p-6 rounded-sm hover:bg-stone-800 transition">
            <div class="flex items-start gap-6">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-700 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">4</span>
              </div>
              <div class="flex-1">
                <h3 class="text-xl font-medium mb-2">Cleaning & Finishing</h3>
                <p class="text-white/80">
                  Remove cutting residue and slurry. Brush grooves to eliminate debris. Apply honed or
                  matte finish to flat areas between grooves if specified.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="bg-stone-800/50 border border-stone-700 p-6 rounded-sm hover:bg-stone-800 transition">
            <div class="flex items-start gap-6">
              <div class="flex-shrink-0 w-12 h-12 bg-stone-700 rounded-full flex items-center justify-center">
                <span class="text-xl font-light">5</span>
              </div>
              <div class="flex-1">
                <h3 class="text-xl font-medium mb-2">Quality Inspection & Sealing</h3>
                <p class="text-white/80">
                  Verify groove depth uniformity and spacing accuracy. Check for edge chips or irregularities.
                  Apply penetrating sealer to protect surface and grooves from staining.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Guidelines -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 text-center mb-12">Technical Guidelines</h2>

        <div class="grid md:grid-cols-2 gap-8">
          <div class="bg-stone-50 p-8 border border-stone-200">
            <h3 class="text-xl font-medium text-stone-900 mb-4">Standard Specifications</h3>
            <dl class="space-y-3 text-sm">
              <div class="flex justify-between border-b border-stone-200 pb-2">
                <dt class="text-stone-600">Groove Width:</dt>
                <dd class="font-medium text-stone-900">3-6 mm</dd>
              </div>
              <div class="flex justify-between border-b border-stone-200 pb-2">
                <dt class="text-stone-600">Groove Depth:</dt>
                <dd class="font-medium text-stone-900">3-5 mm</dd>
              </div>
              <div class="flex justify-between border-b border-stone-200 pb-2">
                <dt class="text-stone-600">Spacing Interval:</dt>
                <dd class="font-medium text-stone-900">10-20 mm</dd>
              </div>
              <div class="flex justify-between border-b border-stone-200 pb-2">
                <dt class="text-stone-600">Depth Tolerance:</dt>
                <dd class="font-medium text-stone-900">±0.5 mm</dd>
              </div>
              <div class="flex justify-between">
                <dt class="text-stone-600">Pattern:</dt>
                <dd class="font-medium text-stone-900">Parallel linear</dd>
              </div>
            </dl>
          </div>

          <div class="bg-stone-50 p-8 border border-stone-200">
            <h3 class="text-xl font-medium text-stone-900 mb-4">Equipment Required</h3>
            <ul class="space-y-3 text-sm">
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 bg-stone-900 rounded-full mt-2 flex-shrink-0"></span>
                <span class="text-stone-700">Diamond-blade grooving machine with depth adjustment</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 bg-stone-900 rounded-full mt-2 flex-shrink-0"></span>
                <span class="text-stone-700">Laser level or guide rail for straight alignment</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 bg-stone-900 rounded-full mt-2 flex-shrink-0"></span>
                <span class="text-stone-700">Water supply system for cooling and dust control</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 bg-stone-900 rounded-full mt-2 flex-shrink-0"></span>
                <span class="text-stone-700">Depth gauge for measurement verification</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 bg-stone-900 rounded-full mt-2 flex-shrink-0"></span>
                <span class="text-stone-700">Industrial vacuum for waste collection</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Applications -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 text-center mb-12">Recommended Applications</h2>

        <div class="grid md:grid-cols-4 gap-6">
          <div class="bg-white p-6 shadow-sm hover:shadow-md transition">
            <h3 class="font-medium text-stone-900 mb-2">Pool Decks</h3>
            <p class="text-stone-600 text-sm">Anti-slip surface for wet areas around swimming pools.</p>
          </div>

          <div class="bg-white p-6 shadow-sm hover:shadow-md transition">
            <h3 class="font-medium text-stone-900 mb-2">Walkways</h3>
            <p class="text-stone-600 text-sm">Outdoor paths requiring drainage and traction.</p>
          </div>

          <div class="bg-white p-6 shadow-sm hover:shadow-md transition">
            <h3 class="font-medium text-stone-900 mb-2">Shower Floors</h3>
            <p class="text-stone-600 text-sm">Bathroom surfaces needing slip resistance.</p>
          </div>

          <div class="bg-white p-6 shadow-sm hover:shadow-md transition">
            <h3 class="font-medium text-stone-900 mb-2">Feature Walls</h3>
            <p class="text-stone-600 text-sm">Architectural accents with textured interest.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Maintenance -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 text-center mb-12">Maintenance Tips</h2>

        <div class="space-y-4">
          <div class="flex gap-4 items-start p-4 bg-stone-50 rounded-sm">
            <div class="flex-shrink-0 w-8 h-8 bg-stone-900 rounded-full flex items-center justify-center">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-1">Regular Cleaning</h4>
              <p class="text-stone-600 text-sm">Sweep or vacuum grooves to remove debris. Use soft brush and pH-neutral
                cleaner.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start p-4 bg-stone-50 rounded-sm">
            <div class="flex-shrink-0 w-8 h-8 bg-stone-900 rounded-full flex items-center justify-center">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-1">Sealer Reapplication</h4>
              <p class="text-stone-600 text-sm">Reapply penetrating sealer annually for outdoor installations, every 2-3
                years indoors.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start p-4 bg-stone-50 rounded-sm">
            <div class="flex-shrink-0 w-8 h-8 bg-stone-900 rounded-full flex items-center justify-center">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-1">Pressure Washing</h4>
              <p class="text-stone-600 text-sm">For outdoor areas, use low-pressure washing (max 1500 PSI) to clean
                grooves thoroughly.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start p-4 bg-stone-50 rounded-sm">
            <div class="flex-shrink-0 w-8 h-8 bg-stone-900 rounded-full flex items-center justify-center">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-stone-900 mb-1">Avoid Abrasives</h4>
              <p class="text-stone-600 text-sm">Do not use wire brushes or harsh chemicals that can damage groove edges
                or marble surface.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- ============================== Stripe ============================== --}}
  <!-- Hero -->
  <section class="relative h-screen" id="stripe">
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

  <section>
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


  {{-- ============================== Combination ============================== --}}
  <!-- Hero -->
  <section class="relative min-h-screen flex items-center" id="combination">
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
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
@endsection
