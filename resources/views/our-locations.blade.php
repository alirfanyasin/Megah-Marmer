@extends('layouts.page')
@section('content')
  <section class="py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="breadcrumb text-gray-600 text-sm">
        Home > Our Locations
      </div>

      <h1 class="text-3xl font-bold text-gray-900 mb-4 mt-5">Our Locations</h1>
    </div>
  </section>
  <section>
    <div class="relative">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.154151208942!2d112.70055358715821!3d-7.293224999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbe79285391f%3A0x799c1404f8b77519!2sIKEA%20Ciputra%20World%20Surabaya!5e0!3m2!1sid!2sid!4v1759720215184!5m2!1sid!2sid"
        class="w-full" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

      <div class="absolute top-2.5 left-2.5 bg-white p-4 rounded-lg shadow w-3/12 h-[580px] overflow-auto">
        <div class="place-card mb-3">
          <div class="grid grid-cols-2 gap-1 mb-4">
            <div class="overflow-hidden rounded-l-md h-32">
              <img src="{{ asset('/img/bg-hero.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden rounded-r-md h-32">
              <img src="{{ asset('/img/bg-hero.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
          </div>
          <div class="mb-3">
            <h2 class="text-lg font-semibold">IKEA Ciputra World Surabaya</h2>
            <p class="text-sm text-gray-700">Jl. Mayjen Sungkono No.89, Gn. Sari, Kec. Dukuhpakis, Surabaya, Jawa Timur
              60224 </p>
          </div>
          <div class="flex gap-2">
            <a href="" class="bg-black text-white w-full h-12 flex items-center justify-center rounded-md">Product
              in
              store</a>
            <a href="" class="bg-gray-200 text-gray-700 p-3 flex items-center justify-center rounded-md">
              <iconify-icon icon="mdi-light:phone" width="24" height="24"></iconify-icon>
            </a>
          </div>
        </div>

        <div class="place-card mb-3">
          <div class="grid grid-cols-2 gap-1 mb-4">
            <div class="overflow-hidden rounded-l-md h-32">
              <img src="{{ asset('/img/bg-hero.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden rounded-r-md h-32">
              <img src="{{ asset('/img/bg-hero.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
          </div>
          <div class="mb-3">
            <h2 class="text-lg font-semibold">IKEA Ciputra World Surabaya</h2>
            <p class="text-sm text-gray-700">Jl. Mayjen Sungkono No.89, Gn. Sari, Kec. Dukuhpakis, Surabaya, Jawa Timur
              60224 </p>
          </div>
          <div class="flex gap-2">
            <a href="" class="bg-black text-white w-full h-12 flex items-center justify-center rounded-md">Product
              in
              store</a>
            <a href="" class="bg-gray-200 text-gray-700 p-3 flex items-center justify-center rounded-md">
              <iconify-icon icon="mdi-light:phone" width="24" height="24"></iconify-icon>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
