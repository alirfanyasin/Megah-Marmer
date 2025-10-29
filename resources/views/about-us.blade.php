@extends('layouts.page')
@section('title', 'About Us - Megah Marmer')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)), url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">About Megah Marmer</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Excellence in Marble Manufacturing
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          Leading the industry with precision manufacturing, innovative technology, and unwavering commitment to quality.
          From raw stone to finished products, we deliver exceptional marble solutions worldwide.
        </p>
      </div>
    </div>
  </section>

  <!-- Company Overview -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">Our Story</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-gray-700 text-lg md:text-xl max-w-4xl mx-auto leading-relaxed">
          Megah Marmer stands as a premier marble manufacturing company, combining traditional craftsmanship
          with cutting-edge technology. Our state-of-the-art facility processes premium marble slabs with
          precision and care, ensuring every product meets the highest standards of quality and beauty.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
        <!-- Quality Commitment -->
        <div class="bg-stone-50 rounded-lg p-8 text-center">
          <div class="w-16 h-16 bg-stone-900 text-white rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-4">Quality Excellence</h3>
          <p class="text-gray-600">
            Rigorous quality control processes ensure every marble piece meets our exacting standards
            for beauty, durability, and precision.
          </p>
        </div>

        <!-- Innovation -->
        <div class="bg-stone-50 rounded-lg p-8 text-center">
          <div class="w-16 h-16 bg-stone-900 text-white rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-4">Advanced Technology</h3>
          <p class="text-gray-600">
            State-of-the-art machinery and precision tools enable us to achieve exceptional finishes
            and maintain consistent quality across all products.
          </p>
        </div>

        <!-- Global Reach -->
        <div class="bg-stone-50 rounded-lg p-8 text-center">
          <div class="w-16 h-16 bg-stone-900 text-white rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium mb-4">Global Excellence</h3>
          <p class="text-gray-600">
            Serving customers worldwide with reliable supply chains, comprehensive packaging solutions,
            and exceptional customer service.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Manufacturing Process Overview -->
  <section class="py-16 md:py-24 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">Our Manufacturing Excellence</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto">
          From precision cutting to final packaging, our integrated manufacturing process ensures
          consistent quality and exceptional results at every stage.
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div>
          <h3 class="text-2xl md:text-3xl font-light text-stone-900 mb-6">End-to-End Production</h3>
          <p class="text-gray-700 leading-relaxed mb-6">
            Our comprehensive production workflow encompasses every aspect of marble processing,
            from incoming slab inspection to final dispatch. Each stage is carefully controlled
            to maintain the highest standards of quality and precision.
          </p>
          <ul class="space-y-3 text-gray-700">
            <li class="flex items-start">
              <svg class="w-5 h-5 text-stone-900 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Digitized job cards with revision control and traceability</span>
            </li>
            <li class="flex items-start">
              <svg class="w-5 h-5 text-stone-900 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Machine parameters optimized for stone hardness and thickness</span>
            </li>
            <li class="flex items-start">
              <svg class="w-5 h-5 text-stone-900 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>In-process quality control gates to minimize rework and waste</span>
            </li>
          </ul>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1200&q=80');">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Precision Sawing Technology -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div class="rounded overflow-hidden shadow-lg">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80');">
          </div>
        </div>
        <div>
          <h3 class="text-2xl md:text-3xl font-light text-stone-900 mb-6">Precision Sawing Technology</h3>
          <p class="text-gray-700 leading-relaxed mb-6">
            Our advanced bridge saw operations deliver consistent, high-precision cuts for marble and natural stone.
            Equipped with calibrated guides, water-assisted cooling, and rigid frames, our sawing machines
            minimize chipping while maintaining tight tolerances.
          </p>
          <div class="grid sm:grid-cols-2 gap-4 mb-6">
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Cutting Accuracy</h4>
              <p class="text-sm text-gray-600">±0.5–1.0 mm dimensional tolerance</p>
            </div>
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Edge Quality</h4>
              <p class="text-sm text-gray-600">&lt; 0.7% chip rate per inspection</p>
            </div>
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Machine Uptime</h4>
              <p class="text-sm text-gray-600">&gt; 95% planned availability</p>
            </div>
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Mitre Capability</h4>
              <p class="text-sm text-gray-600">0–45° consistent bevels</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Production Workflow -->
  <section class="py-16 md:py-24 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-light text-stone-900 mb-4">Production Workflow</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto">
          Our systematic approach ensures consistent quality and efficient production from start to finish.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Step 1 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">1</div>
            <h3 class="font-medium text-stone-900">Incoming Inspection</h3>
          </div>
          <p class="text-gray-600 text-sm">Visual QC, thickness & size verification, surface integrity assessment, and
            documentation intake.</p>
        </div>

        <!-- Step 2 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">2</div>
            <h3 class="font-medium text-stone-900">Cut Planning</h3>
          </div>
          <p class="text-gray-600 text-sm">Nesting layout optimization to maximize yield; blade and feed/RPM selection by
            material profile.</p>
        </div>

        <!-- Step 3 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">3</div>
            <h3 class="font-medium text-stone-900">Precision Cutting</h3>
          </div>
          <p class="text-gray-600 text-sm">CNC alignment, dry run verification, active cutting with water cooling for
            clean edges.</p>
        </div>

        <!-- Step 4 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">4</div>
            <h3 class="font-medium text-stone-900">Surface Finishing</h3>
          </div>
          <p class="text-gray-600 text-sm">Polish, honed, brushed, flamed, or custom textures per specification
            requirements.</p>
        </div>

        <!-- Step 5 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">5</div>
            <h3 class="font-medium text-stone-900">Quality Control</h3>
          </div>
          <p class="text-gray-600 text-sm">Dimensional verification, squareness check, gloss/RA targets, visual grading &
            documentation.</p>
        </div>

        <!-- Step 6 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">6</div>
            <h3 class="font-medium text-stone-900">Packaging</h3>
          </div>
          <p class="text-gray-600 text-sm">Protective film, foam separators, labeling, A-frame loading, and container
            preparation.</p>
        </div>

        <!-- Step 7 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">7</div>
            <h3 class="font-medium text-stone-900">Final Inspection</h3>
          </div>
          <p class="text-gray-600 text-sm">Comprehensive quality check, photo documentation, and shipment preparation.
          </p>
        </div>

        <!-- Step 8 -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-stone-900 text-white flex items-center justify-center">8</div>
            <h3 class="font-medium text-stone-900">Dispatch</h3>
          </div>
          <p class="text-gray-600 text-sm">Container stuffing, documentation handover, and shipment coordination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Advanced Packaging Solutions -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-light text-stone-900 mb-4">Advanced Packaging Solutions</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto">
          Engineered protection systems ensuring your marble arrives in pristine condition,
          regardless of destination or transport conditions.
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div>
          <h3 class="text-2xl md:text-3xl font-light text-stone-900 mb-6">Comprehensive Protection</h3>
          <p class="text-gray-700 leading-relaxed mb-6">
            Our packaging solutions are carefully selected based on marble type, dimensions, destination,
            and transport conditions. From standard protective wrapping to custom moulded foam and
            heavy-duty wooden crates, we ensure maximum protection with optimal efficiency.
          </p>
          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div
                class="w-6 h-6 bg-stone-900 text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-1">Standard Packaging</h4>
                <p class="text-gray-600 text-sm">Protective film, foam padding, cardboard wrapping, and secure strapping
                  for domestic shipments.</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div
                class="w-6 h-6 bg-stone-900 text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-1">Moulded Foam</h4>
                <p class="text-gray-600 text-sm">Custom-contoured protection with impact absorption for premium marble
                  and irregular shapes.</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div
                class="w-6 h-6 bg-stone-900 text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-stone-900 mb-1">Wood Crates</h4>
                <p class="text-gray-600 text-sm">Heavy-duty construction with ISPM-15 compliance for international
                  shipping and oversized slabs.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80');">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Storage & Logistics -->
  <section class="py-16 md:py-24 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div class="rounded overflow-hidden shadow-lg">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1529078155058-5d716f45d604?w=1200&q=80');">
          </div>
        </div>
        <div>
          <h3 class="text-2xl md:text-3xl font-light text-stone-900 mb-6">Intelligent Storage & Logistics</h3>
          <p class="text-gray-700 leading-relaxed mb-6">
            Our storage facilities are designed with precision and efficiency in mind. We implement
            FIFO/FEFO principles, clear zoning, and digital traceability to maintain optimal conditions
            and ensure fast, accurate retrieval of materials.
          </p>
          <ul class="space-y-3 text-gray-700">
            <li class="flex items-start">
              <svg class="w-5 h-5 text-stone-900 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>FIFO/FEFO by project or batch for predictable material flows</span>
            </li>
            <li class="flex items-start">
              <svg class="w-5 h-5 text-stone-900 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Clear labeling and digital inventory for fast retrieval</span>
            </li>
            <li class="flex items-start">
              <svg class="w-5 h-5 text-stone-900 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Safe forklift lanes and pedestrian routes to reduce incidents</span>
            </li>
            <li class="flex items-start">
              <svg class="w-5 h-5 text-stone-900 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Environmental controls to prevent warping and surface damage</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Stuffing Area Excellence -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-light text-stone-900 mb-4">Final Dispatch Excellence</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto">
          Our stuffing area serves as the final checkpoint before shipment, ensuring every order
          meets our exacting standards for quality, documentation, and safe transport.
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div>
          <h3 class="text-2xl md:text-3xl font-light text-stone-900 mb-6">Comprehensive Final Processing</h3>
          <p class="text-gray-700 leading-relaxed mb-6">
            The stuffing area handles the critical final stages of our production process: receiving from warehouse,
            quality inspection, measuring and weighing, final packing, labeling & documentation, and loading into
            containers or trucks with meticulous attention to detail.
          </p>
          <div class="grid sm:grid-cols-2 gap-4">
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Quality Verification</h4>
              <p class="text-sm text-gray-600">Physical inspection, photos, measurements, and documentation</p>
            </div>
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Final Packaging</h4>
              <p class="text-sm text-gray-600">Protective film, foam, separators, and secure banding</p>
            </div>
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Documentation</h4>
              <p class="text-sm text-gray-600">HS codes, handling marks, shock indicators, packing lists</p>
            </div>
            <div class="bg-stone-50 p-4 rounded">
              <h4 class="font-medium text-stone-900 mb-2">Safe Loading</h4>
              <p class="text-sm text-gray-600">A-frame arrangement, dunnage locking, container sealing</p>
            </div>
          </div>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
          <div class="aspect-[4/3] bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80');">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quality Metrics -->
  <section class="py-16 md:py-24 bg-stone-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-light text-stone-900 mb-4">Quality Performance Metrics</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto">
          Our commitment to excellence is reflected in our consistent performance across all quality indicators.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
          <p class="text-stone-600 text-sm uppercase tracking-wider mb-2">First-Pass Yield</p>
          <p class="text-3xl font-light text-stone-900 mb-2">≥ 97%</p>
          <p class="text-stone-600 text-sm">Measured before rework/repair</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
          <p class="text-stone-600 text-sm uppercase tracking-wider mb-2">Edge Chip Rate</p>
          <p class="text-3xl font-light text-stone-900 mb-2">&lt; 0.7%</p>
          <p class="text-stone-600 text-sm">Per inspection lot</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
          <p class="text-stone-600 text-sm uppercase tracking-wider mb-2">On-Time Dispatch</p>
          <p class="text-3xl font-light text-stone-900 mb-2">&gt; 98%</p>
          <p class="text-stone-600 text-sm">Against confirmed plan</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
          <p class="text-stone-600 text-sm uppercase tracking-wider mb-2">Damage Rate</p>
          <p class="text-3xl font-light text-stone-900 mb-2">&lt; 0.5%</p>
          <p class="text-stone-600 text-sm">Target damage during transit</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Excellence -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-light text-stone-900 mb-4">Our Team, Our Strength</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mb-6"></div>
        <p class="text-gray-700 text-lg max-w-3xl mx-auto">
          United by a common vision to transform the marble industry through sustainable practices,
          innovative technology, and uncompromising quality standards.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-stone-50 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
          <div class="relative h-80 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600" alt="Production Manager"
              class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-medium mb-1">Production Excellence</h3>
            <p class="text-sm text-gray-500 mb-3">Manufacturing Team</p>
            <p class="text-sm text-gray-600 leading-relaxed">
              Our skilled production team combines traditional craftsmanship with modern technology
              to deliver exceptional marble products that exceed customer expectations.
            </p>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-stone-50 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
          <div class="relative h-80 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600" alt="Quality Manager"
              class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-medium mb-1">Quality Assurance</h3>
            <p class="text-sm text-gray-500 mb-3">Quality Control Team</p>
            <p class="text-sm text-gray-600 leading-relaxed">
              Our quality control specialists ensure every marble piece meets our rigorous standards
              through comprehensive inspection and testing protocols.
            </p>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="bg-stone-50 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
          <div class="relative h-80 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600" alt="Operations Manager"
              class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-medium mb-1">Operations Management</h3>
            <p class="text-sm text-gray-500 mb-3">Operations Team</p>
            <p class="text-sm text-gray-600 leading-relaxed">
              Our operations team coordinates every aspect of production, logistics, and customer service
              to ensure seamless delivery of premium marble solutions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="relative py-20 sm:py-24 bg-cover bg-center text-center"
    style="background-image: linear-gradient(rgba(18,18,18,.6), rgba(18,18,18,.6)), url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-light text-white mb-6">Ready to Experience Excellence?</h2>
      <p class="text-lg sm:text-xl text-white/90 max-w-2xl mx-auto mb-8">
        Discover how Megah Marmer can meet your marble manufacturing needs with our comprehensive
        solutions, advanced technology, and unwavering commitment to quality.
      </p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="{{ route('contact-us') ?? '#' }}"
          class="inline-flex items-center gap-2 bg-white text-stone-900 px-6 py-3 hover:bg-stone-100 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
          </svg>
          Contact Us
        </a>
        <a href="#"
          class="inline-flex items-center gap-2 border border-white/80 text-white px-6 py-3 hover:bg-white/10 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
          </svg>
          View Our Products
        </a>
      </div>
    </div>
  </section>

@endsection
