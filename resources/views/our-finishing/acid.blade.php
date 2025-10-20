@extends('layouts.page')
@section('title', 'Acid Washing Finish — Textured Antiqued Marble')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
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

  <!-- CTA -->
  <section class="relative py-20 sm:py-24 bg-cover bg-center"
    style="background-image: linear-gradient(110deg, rgba(50,40,30,.8), rgba(20,20,20,.75)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/40"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="text-4xl sm:text-5xl font-extralight mb-6">
          Considering Acid Washing<br />
          <span class="font-light">for Your Project?</span>
        </h2>
        <p class="text-xl text-white/90 font-light mb-10 max-w-2xl mx-auto">
          Consult with our finishing specialists to evaluate marble suitability, target texture, slip-resistance needs,
          and a long-term care plan tailored to your project.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="inline-flex items-center gap-2 bg-white text-stone-900 px-6 py-3 rounded-lg hover:bg-stone-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
            </svg>
            Contact a Specialist
          </a>
          <a href="#"
            class="inline-flex items-center gap-2 border border-white/80 text-white px-6 py-3 rounded-lg hover:bg-white/10 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
            </svg>
            Download Care Guide (PDF)
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Finishes -->
  <section class="py-20 sm:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-4xl sm:text-5xl font-extralight text-stone-900">Explore Related Finishes</h2>
        <div class="w-24 h-0.5 bg-amber-600 mx-auto mt-6"></div>
        <p class="text-stone-600 mt-6">Compare textures and performance to choose the best finish for your application.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">
        <!-- Polish -->
        <a href="{{ route('polish') }}"
          class="group block rounded-xl overflow-hidden border border-stone-200 hover:shadow-lg transition">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=800&q=80');">
          </div>
          <div class="p-4">
            <h3 class="text-stone-900 font-medium group-hover:text-amber-700">Polish</h3>
            <p class="text-sm text-stone-600">High-gloss reflective surface</p>
          </div>
        </a>

        <!-- Doff / Matte -->
        <a href="{{ route('doff-or-matte') }}"
          class="group block rounded-xl overflow-hidden border border-stone-200 hover:shadow-lg transition">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1615529328331-f8917597711f?w=800&q=80');">
          </div>
          <div class="p-4">
            <h3 class="text-stone-900 font-medium group-hover:text-amber-700">Doff / Matte</h3>
            <p class="text-sm text-stone-600">Soft sheen, low reflectivity</p>
          </div>
        </a>

        <!-- Brushed / Texture -->
        <a href="{{ route('texture') }}"
          class="group block rounded-xl overflow-hidden border border-stone-200 hover:shadow-lg transition">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=800&q=80');">
          </div>
          <div class="p-4">
            <h3 class="text-stone-900 font-medium group-hover:text-amber-700">Brushed / Texture</h3>
            <p class="text-sm text-stone-600">Subtle tactile feel</p>
          </div>
        </a>

        <!--  Burning -->
        <a href="{{ route('burning') }}"
          class="group block rounded-xl overflow-hidden border border-stone-200 hover:shadow-lg transition">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?w=800&q=80');">
          </div>
          <div class="p-4">
            <h3 class="text-stone-900 font-medium group-hover:text-amber-700">Burning</h3>
            <p class="text-sm text-stone-600">Rough, high-traction exterior</p>
          </div>
        </a>

        <!-- Combination -->
        <a href="{{ route('combination') }}"
          class="group block rounded-xl overflow-hidden border border-stone-200 hover:shadow-lg transition">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1615876234886-fd9a39fda97f?w=800&q=80');">
          </div>
          <div class="p-4">
            <h3 class="text-stone-900 font-medium group-hover:text-amber-700">Combination</h3>
            <p class="text-sm text-stone-600">Tailored multi-step textures</p>
          </div>
        </a>
      </div>
    </div>
  </section>

@endsection
