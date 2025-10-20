@extends('layouts.page')
@section('title', 'Terrazzo Marble — Speckled Elegance & Modern Craft')
@section('content')

  <!-- Hero Section -->
  <section class="relative h-screen bg-cover bg-center"
    style="background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)), url('https://images.unsplash.com/photo-1582581184904-1f8b9f2f2b43?w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-r from-stone-900/40 to-rose-900/30"></div>
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
      <div class="max-w-3xl text-white">
        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-light mb-6 leading-tight">
          Terrazzo Marble: Speckled Elegance for Contemporary Spaces
        </h1>
        <p class="text-base sm:text-lg md:text-xl font-light leading-relaxed max-w-2xl">
          Terrazzo memadukan serpihan marmer, kuarsa, atau granit di dalam matriks semen atau resin
          sehingga menghasilkan permukaan bertabur (speckled) yang ikonik. Tahan lama, mudah dirawat,
          dan fleksibel secara estetika—Terrazzo menghadirkan karakter modern dengan sentuhan artisan
          untuk lantai, dinding, countertop, hingga instalasi dekoratif.
        </p>
      </div>
    </div>
  </section>

  <!-- Introduction Section -->
  <section class="py-16 sm:py-20 md:py-24 lg:py-32 bg-stone-50/40">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <p class="text-base sm:text-lg md:text-xl text-gray-700 leading-relaxed text-center">
          Terrazzo dikenal sejak era Renaissance di Italia dan berkembang menjadi material premium
          yang menyatukan kerajinan tradisional dan teknologi modern. Dengan variasi agregat, ukuran
          chip, serta pilihan binder (cement-based atau epoxy), Terrazzo menawarkan kebebasan desain
          yang luas—mulai dari palet netral yang menenangkan sampai kombinasi warna yang berani.
          Daya tahan tinggi, kemampuan custom pattern, dan perawatan yang rendah menjadikannya favorit
          untuk hotel, butik, residensial mewah, fasilitas publik, hingga ruang komersial modern.
        </p>
      </div>
    </div>
  </section>

  <!-- Aesthetic Section -->
  <section class="py-16 sm:py-20 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-8 md:gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
        <!-- Text Content -->
        <div class="order-2 md:order-1">
          <div class="flex items-center gap-3 mb-6">
            <svg class="w-10 h-10 sm:w-12 sm:h-12 text-stone-700" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Speckled Aesthetics</h2>
          </div>

          <p class="text-gray-700 leading-relaxed mb-6">
            Daya tarik Terrazzo terletak pada pola taburan (terrazzi) yang unik: chip marmer/kuarsa/granit
            berukuran mikro hingga makro membentuk ritme visual yang kaya tekstur. Variasi ukuran chip,
            densitas taburan, dan pilihan warna memungkinkan ekspresi—dari minimalis monokrom hingga
            komposisi eklektik yang statement.
          </p>

          <p class="text-gray-700 leading-relaxed">
            Setiap lembar Terrazzo memiliki karakter alami yang berbeda—perbedaan distribusi chip,
            nuansa warna, dan pola menjadi keindahan khas yang autentik dan tak berulang.
          </p>
        </div>

        <!-- Image -->
        <div class="order-1 md:order-2">
          <div class="relative overflow-hidden rounded-lg shadow-2xl">
            <img src="https://images.unsplash.com/photo-1616137466211-f939a420be84?w=1170&q=80"
              alt="Terrazzo Surface Close-up" class="w-full h-auto object-cover">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Craft & Composition Section -->
  <section class="py-16 sm:py-20 md:py-24 bg-stone-50/40">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-8 md:gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
        <!-- Image -->
        <div class="order-1">
          <div class="relative overflow-hidden rounded-lg shadow-2xl">
            <img src="https://images.unsplash.com/photo-1598300183928-5a6c3a1f5d7e?w=1170&q=80"
              alt="Terrazzo Craft & Composition" class="w-full h-auto object-cover">
          </div>
        </div>

        <!-- Text Content -->
        <div class="order-2">
          <div class="flex items-center gap-3 mb-6">
            <svg class="w-10 h-10 sm:w-12 sm:h-12 text-stone-700" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Craft & Composition</h2>
          </div>

          <p class="text-gray-700 leading-relaxed mb-6">
            Terrazzo dibuat dari campuran agregat (marmer, kuarsa, granit, kaca daur ulang) dengan binder
            berbasis semen atau epoxy. Setelah curing, permukaan digiling dan dipoles hingga halus dan
            reflektif. Pilihan binder memengaruhi ketahanan noda, ketebalan, dan fleksibilitas desain:
            <span class="font-medium">Cement Terrazzo</span> untuk tampilan klasik bernapas alami, sedangkan
            <span class="font-medium">Epoxy Terrazzo</span> unggul pada warna solid, ketebalan tipis, dan
            perawatan yang mudah.
          </p>

          <p class="text-gray-700 leading-relaxed">
            Hasilnya adalah material yang memadukan tradisi pengerjaan dengan performa modern—kuat,
            rata, dan siap menampung pola inlay, garis brass divider, hingga tipografi lantai untuk
            wayfinding maupun brand identity.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Quote Section -->
  <section class="relative py-24 sm:py-32 md:py-40 bg-cover bg-center"
    style="background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('https://images.unsplash.com/photo-1545324418-06b5222e02f2?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-white leading-relaxed">
          “Fragments of stone, crafted into a seamless surface—Terrazzo turns composition into timeless design.”
        </p>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="py-16 sm:py-20 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-8 md:gap-12 lg:gap-16 max-w-7xl mx-auto">
        <!-- Performance & Maintenance -->
        <div class="bg-stone-50/50 p-8 sm:p-10 md:p-12 rounded-lg shadow-sm border border-stone-200">
          <div class="flex items-center gap-3 mb-6">
            <svg class="w-10 h-10 sm:w-12 sm:h-12 text-stone-700" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Performance & Maintenance</h2>
          </div>

          <p class="text-gray-700 leading-relaxed mb-4">
            Terrazzo tahan aus, cocok untuk area traffic tinggi, dan memiliki sambungan minimal sehingga
            tampak rapi. Dengan sealing yang tepat, perawatan hariannya sederhana: sapu, pel lembap,
            dan pembersih pH netral. Cocok untuk lobby, koridor, retail, F&B, hingga hunian modern.
          </p>

          <ul class="text-gray-700 leading-relaxed list-disc pl-5 space-y-2">
            <li>Daya tahan tinggi & umur pakai panjang</li>
            <li>Permukaan mulus & higienis (minim nat)</li>
            <li>Kustomisasi warna, ukuran chip, dan pola</li>
          </ul>
        </div>

        <!-- Sustainability & Identity -->
        <div class="bg-stone-50/50 p-8 sm:p-10 md:p-12 rounded-lg shadow-sm border border-stone-200">
          <div class="flex items-center gap-3 mb-6">
            <svg class="w-10 h-10 sm:w-12 sm:h-12 text-stone-700" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900">Sustainability & Identity</h2>
          </div>

          <p class="text-gray-700 leading-relaxed">
            Memanfaatkan agregat batu alam dan opsi kaca daur ulang, Terrazzo mendukung praktik desain
            berkelanjutan sekaligus membuka peluang brand identity melalui pola inlay, garis pembatas
            (brass/aluminium), dan bentuk custom. Setiap instalasi menjadi karya yang khas dan berkarakter.
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection
