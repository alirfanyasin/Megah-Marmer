@extends('layouts.page')
@section('title', 'Production Process — End-to-End Stone Manufacturing')
@section('content')

  <!-- Hero -->
  <section class="relative h-[80vh] bg-cover bg-center flex items-center"
    style="background-image: linear-gradient(rgba(2,6,23,.7), rgba(2,6,23,.6)), url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1920&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/40 to-slate-900/60"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl text-white">
        <p class="uppercase tracking-widest text-white/80 mb-3">Operations</p>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-light leading-tight mb-6">
          Production Process
        </h1>
        <p class="text-lg sm:text-xl text-white/90">
          A controlled, data-driven workflow—from incoming slabs to finished, packaged stone—engineered for accuracy,
          speed, and repeatability.
        </p>
        <div class="mt-8 flex gap-3">
          <a href="#workflow" class="bg-white hover:grey-50 text-black px-6 py-3 rounded font-semibold">
            View Workflow
          </a>
          <a href="#kpi" class="border border-white/60 text-white px-6 py-3 rounded font-semibold hover:bg-white/10">
            See KPIs
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Overview -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900 mb-4">From Inspection to Dispatch</h2>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 leading-relaxed mb-4">
          Our production process standardizes every stage—quality checks, precision cutting, finishing, and packaging—so
          each order meets project specifications with minimal variation.
        </p>
        <ul class="space-y-2 text-stone-700">
          <li>• Digitized job cards with revision control.</li>
          <li>• Machine parameters mapped to stone hardness & thickness.</li>
          <li>• In-process QC gates reduce rework and scrap.</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- Workflow -->
  <section id="workflow" class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Standard Production Workflow</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">A step-by-step process designed for quality, throughput, and traceability.</p>
      </div>

      <div class="grid lg:grid-cols-3 gap-6">
        <!-- 1 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">1</div>
            <h3 class="font-medium text-stone-900">Incoming Inspection</h3>
          </div>
          <p class="text-stone-700 text-sm">Visual QC, thickness & size check, surface integrity, and documentation
            intake.</p>
        </div>
        <!-- 2 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">2</div>
            <h3 class="font-medium text-stone-900">Cut Planning</h3>
          </div>
          <p class="text-stone-700 text-sm">Nesting layout to maximize yield; select blade and feed/RPM by material
            profile.</p>
        </div>
        <!-- 3 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">3</div>
            <h3 class="font-medium text-stone-900">Bridge Saw Cutting</h3>
          </div>
          <p class="text-stone-700 text-sm">CNC alignment, dry run, active cutting with water cooling for clean edges.</p>
        </div>
        <!-- 4 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">4</div>
            <h3 class="font-medium text-stone-900">Reinforcement</h3>
          </div>
          <p class="text-stone-700 text-sm">Optional fiberglass mesh/backing for fragile stones and large format pieces.
          </p>
        </div>
        <!-- 5 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">5</div>
            <h3 class="font-medium text-stone-900">Edge Profiling</h3>
          </div>
          <p class="text-stone-700 text-sm">Mitre, bevel, bullnose, chamfer—profiles executed to drawing tolerances.</p>
        </div>
        <!-- 6 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">6</div>
            <h3 class="font-medium text-stone-900">Surface Finishing</h3>
          </div>
          <p class="text-stone-700 text-sm">Polish, honed (matte), brushed, flamed, or custom textures per specification.
          </p>
        </div>
        <!-- 7 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">7</div>
            <h3 class="font-medium text-stone-900">Quality Gate</h3>
          </div>
          <p class="text-stone-700 text-sm">Dimensional check, squareness, gloss/RA targets, visual grading &
            documentation.</p>
        </div>
        <!-- 8 -->
        <div class="bg-white p-6 border border-stone-200">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center">8</div>
            <h3 class="font-medium text-stone-900">Packaging & Dispatch</h3>
          </div>
          <p class="text-stone-700 text-sm">Protective film, foam separators, labeling, A-frame loading, and container
            stuffing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Visual Sections -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&q=80');"></div>
      </div>
      <div>
        <h3 class="text-3xl font-light text-stone-900 mb-4">Precision Cutting</h3>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 mb-4">CNC bridge saws ensure consistent mitres and straight cuts, minimizing edge
          chipping through calibrated RPM and water flow.</p>
        <ul class="grid sm:grid-cols-2 gap-3 text-stone-700">
          <li>• Digital angle readout to 0.1°</li>
          <li>• Feed control by stone hardness</li>
          <li>• Nesting to maximize yield</li>
          <li>• In-cut monitoring & logging</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h3 class="text-3xl font-light text-stone-900 mb-4">Finishing & Detailing</h3>
        <div class="w-16 h-1 bg-stone-900 mb-6"></div>
        <p class="text-stone-700 mb-4">Surface treatments align with project aesthetics and slip requirements—from
          high-gloss polish to textured anti-slip finishes.</p>
        <ul class="space-y-2 text-stone-700">
          <li>• Polished / Honed (Matte) / Brushed</li>
          <li>• Flamed / Acid-washed / Custom texture</li>
          <li>• Edge rounding, chamfering, and profiling</li>
          <li>• Sealers upon request for stain resistance</li>
        </ul>
      </div>
      <div class="rounded overflow-hidden shadow">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- Quality Control -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Quality Control Framework</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">QC gates embedded at critical transitions to prevent defects from moving
          downstream.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h4 class="font-medium text-stone-900 mb-1">Dimensional Accuracy</h4>
          <p class="text-stone-700 text-sm">±0.5–1.0 mm on critical edges; mitre angle within 0.2°.</p>
        </div>
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h4 class="font-medium text-stone-900 mb-1">Surface Grade</h4>
          <p class="text-stone-700 text-sm">Gloss/haze targets for polished; RA/RZ for textured finishes.</p>
        </div>
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h4 class="font-medium text-stone-900 mb-1">Visual Inspection</h4>
          <p class="text-stone-700 text-sm">Cracks, pits, resin fill quality, and color consistency check.</p>
        </div>
        <div class="p-6 bg-stone-50 border border-stone-200">
          <h4 class="font-medium text-stone-900 mb-1">Traceability</h4>
          <p class="text-stone-700 text-sm">Job labels, photos, and batch records stored with shipment docs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline -->
  <section class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Typical Lead Times</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
        <p class="text-stone-700 mt-6">Indicative for standard scopes—subject to volume and finishing complexity.</p>
      </div>

      <div class="bg-white shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="bg-stone-900 text-white">
                <th class="text-left px-6 py-4 font-semibold">Stage</th>
                <th class="text-left px-6 py-4 font-semibold">Lead Time</th>
                <th class="text-left px-6 py-4 font-semibold">Notes</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-stone-200">
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Inspection & Planning</td>
                <td class="px-6 py-4">0.5–1 day</td>
                <td class="px-6 py-4">QC intake + nesting layout</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Cutting & Profiling</td>
                <td class="px-6 py-4">1–2 days</td>
                <td class="px-6 py-4">Depends on thickness & edge profiles</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Finishing</td>
                <td class="px-6 py-4">1–3 days</td>
                <td class="px-6 py-4">Polish/honed/texture selections</td>
              </tr>
              <tr class="hover:bg-stone-50/70">
                <td class="px-6 py-4 font-medium text-stone-900">Final QC & Packaging</td>
                <td class="px-6 py-4">0.5–1 day</td>
                <td class="px-6 py-4">Labeling, photos, and documentation</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mt-6 p-6 bg-stone-100 border border-stone-200">
          <p class="text-sm text-stone-700">
            *Lead times are indicative and may change with custom specifications, approvals, or logistics schedules.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-10">
        <h2 class="text-3xl sm:text-4xl font-light text-stone-900">Production Gallery</h2>
        <div class="w-20 h-1 bg-stone-900 mx-auto mt-4"></div>
      </div>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1582582429416-88dbf2bf6b7e?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1628428779456-5d4f52a99e90?w=1200&q=80');">
        </div>
        <div class="aspect-[4/3] bg-cover bg-center"
          style="background-image: url('https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=1200&q=80');">
        </div>
      </div>
    </div>
  </section>

  <!-- KPIs -->
  <section id="kpi" class="py-16 sm:py-20 bg-stone-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">First-Pass Yield</p>
          <p class="text-3xl font-light text-stone-900 mt-2">≥ 97%</p>
          <p class="text-stone-600 mt-2 text-sm">Measured before rework/repair</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">Edge Chip Rate</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&lt; 0.7%</p>
          <p class="text-stone-600 mt-2 text-sm">Per inspection lot</p>
        </div>
        <div class="bg-white p-6 border border-stone-200">
          <p class="text-stone-600 text-sm uppercase tracking-wider">On-Time Dispatch</p>
          <p class="text-3xl font-light text-stone-900 mt-2">&gt; 98%</p>
          <p class="text-stone-600 mt-2 text-sm">Against confirmed plan</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-20 sm:py-24 bg-cover bg-center text-center"
    style="background-image: linear-gradient(rgba(18,18,18,.65), rgba(18,18,18,.65)), url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl sm:text-4xl font-light text-white mb-6">Need a Production Plan or QC Checklist?</h2>
      <p class="text-lg sm:text-xl text-white/90 max-w-2xl mx-auto mb-8">
        Send your drawings, tolerance requirements, and finishing preferences—our team will prepare a complete workflow,
        timing, and packaging proposal.
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
          class="inline-flex items-center gap-2 bg-transparent border border-white/70 text-white px-6 py-3 hover:bg-white/10 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
          </svg>
          Download Process Sheet (PDF)
        </a>
      </div>
    </div>
  </section>

@endsection
