@extends('layouts.page')
@section('title', 'Our Locations')
@section('content')
  <section class="py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="breadcrumb text-gray-600 text-sm">
        Home > Our Locations
      </div>

      <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 mt-5">Our Locations</h1>
    </div>
  </section>

  <!-- Mobile & Tablet: List with padding -->
  <section class="pb-6 lg:hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="bg-white rounded-lg shadow-sm mb-4 max-h-[400px] overflow-y-auto">
        @foreach ($locationData as $location)
          <div class="border-b last:border-b-0 p-4">
            <div class="mb-3">
              <div class="overflow-hidden rounded-lg h-40 sm:h-48">
                <img src="{{ asset('storage/' . $location->image) }}" alt="{{ $location->name }}"
                  class="w-full h-full object-cover">
              </div>
            </div>

            <div class="mb-3">
              <h2 class="text-lg font-semibold">{{ $location->name }}</h2>
              <p class="text-sm text-gray-700">{{ $location->address }}</p>
            </div>

            <div class="flex gap-2">
              <button onclick="changeMap('{{ $location->google_map }}')"
                class="bg-black text-white flex-1 h-12 flex hover:cursor-pointer items-center justify-center rounded-md hover:bg-gray-800 transition">
                <span class="text-sm sm:text-base">Product in store</span>
              </button>
              @if ($location->phone)
                <a href="https://wa.me/{{ $location->phone }}?text=Halo%20" target="_blank"
                  class="bg-gray-200 text-gray-700 p-3 flex hover:cursor-pointer items-center justify-center rounded-md hover:bg-gray-300 transition">
                  <iconify-icon icon="mdi-light:phone" width="24" height="24"></iconify-icon>
                </a>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Map Full Width (All devices) -->
  <section class="relative">
    <!-- Mobile/Tablet Map -->
    <iframe id="map-iframe"
      src="{{ $locationData->first()->google_map ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.154151208942!2d112.70055358715821!3d-7.293224999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbe79285391f%3A0x799c1404f8b77519!2sIKEA%20Ciputra%20World%20Surabaya!5e0!3m2!1sid!2sid!4v1759720215184!5m2!1sid!2sid' }}"
      class="w-full h-64 sm:h-80 lg:hidden" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Desktop Map -->
    <iframe id="map-iframe-desktop"
      src="{{ $locationData->first()->google_map ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.154151208942!2d112.70055358715821!3d-7.293224999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbe79285391f%3A0x799c1404f8b77519!2sIKEA%20Ciputra%20World%20Surabaya!5e0!3m2!1sid!2sid!4v1759720215184!5m2!1sid!2sid' }}"
      class="hidden lg:block w-full" height="600" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Desktop Sidebar -->
    <div
      class="hidden lg:block absolute top-4 left-4 bg-white p-4 rounded-lg shadow-lg w-80 xl:w-96 max-h-[580px] overflow-y-auto">
      @foreach ($locationData as $location)
        <div class="place-card mb-4 pb-4 border-b last:border-b-0 last:mb-0 last:pb-0">
          <div class="mb-3">
            <div class="overflow-hidden rounded-lg h-32">
              <img src="{{ asset('storage/' . $location->image) }}" alt="{{ $location->name }}"
                class="w-full h-full object-cover">
            </div>
          </div>

          <div class="mb-3">
            <h2 class="text-lg font-semibold">{{ $location->name }}</h2>
            <p class="text-sm text-gray-700">{{ $location->address }}</p>
          </div>

          <div class="flex gap-2">
            <button onclick="changeMapDesktop('{{ $location->google_map }}')"
              class="bg-black text-white flex-1 h-12 flex hover:cursor-pointer items-center justify-center rounded-md hover:bg-gray-800 transition">
              <span class="text-sm">Product in store</span>
            </button>
            @if ($location->phone)
              <a href="https://wa.me/{{ $location->phone }}?text=Halo%20" target="_blank"
                class="bg-gray-200 text-gray-700 p-3 flex hover:cursor-pointer items-center justify-center rounded-md hover:bg-gray-300 transition">
                <iconify-icon icon="mdi-light:phone" width="24" height="24"></iconify-icon>
              </a>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection

<script>
  // Function for mobile/tablet map
  function changeMap(mapUrl) {
    const iframe = document.getElementById('map-iframe');
    if (iframe) {
      iframe.src = mapUrl;
      // Scroll to map on mobile
      iframe.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  }

  // Function for desktop map
  function changeMapDesktop(mapUrl) {
    const iframe = document.getElementById('map-iframe-desktop');
    if (iframe) {
      iframe.src = mapUrl;
    }
  }
</script>
