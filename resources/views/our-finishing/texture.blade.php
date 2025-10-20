@extends('layouts.page')
@section('title', 'Textured Marble Finishing — Dimensional Beauty & Tactile Appeal')
@section('content')

  <!-- Hero -->
  <section class="relative h-[90vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(to bottom right, rgba(40,40,40,.75), rgba(0,0,0,.65)), url('https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=1600&q=80');">
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

  <!-- Gallery -->
  <section class="py-24 bg-stone-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-14">
        <h2 class="text-5xl font-extralight text-white mb-6">Texture Gallery</h2>
        <div class="w-24 h-1 bg-white mx-auto"></div>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="relative overflow-hidden rounded-xl">
          <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=1200&q=80"
            alt="CNC carved geometric marble texture"
            class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="relative overflow-hidden rounded-xl">
          <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1200&q=80"
            alt="Outdoor textured marble paving"
            class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="relative overflow-hidden rounded-xl">
          <img src="https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=1200&q=80"
            alt="Linear grooves detail on stone"
            class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="relative overflow-hidden rounded-xl">
          <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=1200&q=80"
            alt="Textured wall finish closeup"
            class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="relative overflow-hidden rounded-xl">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=80"
            alt="Relief pattern feature wall"
            class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="relative overflow-hidden rounded-xl">
          <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1200&q=80"
            alt="Sandblasted marble surface"
            class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-24 bg-cover bg-center text-white"
    style="background-image: linear-gradient(110deg, rgba(15,15,15,.7), rgba(20,20,20,.7)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/40"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl">
        <h2 class="text-4xl sm:text-5xl font-extralight mb-6">Ready to Specify a Texture?</h2>
        <p class="text-white/90 text-lg font-light mb-8">
          Share your drawings or mood board—our team will recommend patterns, depths, and sealing systems for your
          application.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="inline-flex items-center gap-2 bg-white text-stone-900 px-6 py-3 rounded-lg hover:bg-stone-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
            </svg>
            Talk to a Specialist
          </a>
          <a href="#"
            class="inline-flex items-center gap-2 border border-white/80 text-white px-6 py-3 rounded-lg hover:bg-white/10 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
            </svg>
            Download Texture Catalog (PDF)
          </a>
        </div>
      </div>
    </div>
  </section>


@endsection
