@extends('layouts.page')
@section('title', 'Groove Finishing Marble — Textured Elegance & Anti-Slip Surface')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-end"
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
            <p class="text-stone-600 text-sm">Grooves provide enhanced traction, reducing slip hazards in wet conditions.
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

  <!-- CTA -->
  <section class="relative py-20 bg-stone-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center text-white">
        <h2 class="text-3xl sm:text-4xl font-light mb-6">
          Request Groove Finishing
        </h2>
        <p class="text-white/80 mb-8 text-lg">
          Get a customized quote for your project with detailed specifications and timeline.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ route('contact-us') ?? '#' }}"
            class="inline-flex items-center gap-2 bg-white text-stone-900 px-8 py-3 hover:bg-stone-100 transition">
            <span class="font-medium">Contact Us</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
