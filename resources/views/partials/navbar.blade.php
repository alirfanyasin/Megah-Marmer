<header class="bg-white border-b border-gray-200 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- ========= Helpers ========= --}}
    @php
      use Illuminate\Support\Str;

      $currentRoute = Route::currentRouteName();

      // Kelompok route untuk "Our Finishing"
      $finishingRoutes = [
          'polish',
          'doff-or-matte',
          'acid',
          'hammered',
          'burning',
          'texture',
          'groove',
          'stripe',
          'combination',
      ];

      // Kelompok route untuk "Our Solid Stone"
      $ossRoutes = [
          'oss.black-marble',
          'oss.cream-marble',
          'oss.grey-pg-marble',
          'oss.grey-dk-marble',
          'oss.grey-dr-marble',
          'oss.light-grey-marble',
          'oss.red-marble',
          'oss.cocoa-brown-marble',
          'oss.traventine-marble',
          'oss.sunset-onyx',
          'oss.ivory-onyx',
          'oss.bw-onyx',
          'oss.pct-onyx',
          'oss.granite-local',
          'oss.petrified-wood',
          'oss.river-stone',
          'oss.lava-stone',
          'oss.lime-stone',
          'oss.ziolit-stone',
          'oss.terrazzo',
      ];

      // Kelompok route untuk "About Us"
      $aboutRoutes = [
          'about.our-story.index',
          'about.our-commitments.index',
          'about.our-team.index',
          'stone-storage',
          'our-factory',
          'warehouse',
          'sawing-machine',
          'production-process',
          'packaging',
          'suffing-area',
          'contact-us',
      ];

      $socialMedias = \App\Models\SocialMedia::all();
      $categoriesMenu = \App\Models\Category::all();
    @endphp

    <!-- Top Navigation -->
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="{{ url('/') }}">
          <img src="{{ asset('img/logo-main.jpg') }}" alt="Logo" class="h-10 w-auto">
        </a>
      </div>

      <!-- Search Bar - Desktop -->
      <form action="{{ route('products.all') }}" method="GET" class="hidden md:flex flex-1 max-w-lg mx-8">
        <div class="relative w-full">
          <input type="text" name="search" value="{{ request('search') }}"
            placeholder="Search for a product or service..."
            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-search text-gray-400"></i>
          </div>
        </div>
      </form>

      <!-- Right Navigation -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="{{ url('/our-locations') }}"
          class="flex items-center text-sm text-gray-600 hover:text-amber-600 transition-colors">
          <i class="fas fa-map-marker-alt mr-1"></i>
          Our locations
        </a>

        <div class="flex items-center space-x-2">
          @foreach ($socialMedias as $socialMedia)
            <a href="{{ $socialMedia->link }}" target="_blank" aria-label="Social">
              <iconify-icon icon="{{ $socialMedia->icon }}" width="24" height="24"
                class="text-gray-600 cursor-pointer hover:text-amber-600 transition-colors"></iconify-icon>
            </a>
          @endforeach
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button type="button" onclick="toggleMobileMenu()"
          class="text-gray-600 hover:text-orange-500 transition-colors p-2">
          <i id="hamburger" class="fas fa-bars text-xl"></i>
          <i id="close-btn" class="fas fa-times text-xl hidden"></i>
        </button>
      </div>
    </div>

    <!-- Main Navigation with Dropdown -->
    <nav class="hidden md:block">
      <div class="flex items-center justify-between text-sm space-x-4 py-4 font-medium border-t border-gray-100">

        {{-- ======= Dynamic Categories (Top-level active by id) ======= --}}
        @foreach ($categoriesMenu as $categoryMenu)
          @php
            $isCatActive =
                request()->routeIs('category.products') &&
                (int) request()->route('id_category') === (int) $categoryMenu->id;
          @endphp

          <div class="nav-item relative">
            <a href="#"
              class="nav-link {{ $isCatActive ? 'is-active' : 'text-gray-900 hover:text-orange-500' }} transition-colors py-2">
              {{ $categoryMenu->name }}
            </a>

            <div class="dropdown-menu fixed left-0 right-0">
              <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
                <div class="grid grid-cols-3 gap-8">
                  <div class="col-span-2">
                    <ul class="space-y-2 text-sm">
                      @foreach ($categoryMenu->categorySub as $categorySubMenu)
                        @php
                          $isSubActive =
                              request()->routeIs('category.products') &&
                              (int) request()->route('id_category') === (int) $categoryMenu->id &&
                              (int) request()->route('id_sub_category') === (int) $categorySubMenu->id;
                        @endphp
                        <li class="submenu-item"
                          onmouseenter="showImage('category-{{ $categoryMenu->id }}', 'sub-{{ $categorySubMenu->id }}')">
                          <a href="{{ route('category.products', ['id_category' => $categoryMenu->id, 'id_sub_category' => $categorySubMenu->id]) }}"
                            class="submenu-link {{ $isSubActive ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">
                            {{ $categorySubMenu->name }}
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </div>

                  <div class="relative">
                    <div class="rounded-lg overflow-hidden h-56">
                      @foreach ($categoryMenu->categorySub as $index => $categorySubMenuImage)
                        @php
                          $imgId = "category-{$categoryMenu->id}-sub-{$categorySubMenuImage->id}";
                          $imgSrc =
                              $categorySubMenuImage->image &&
                              file_exists(public_path('storage/' . $categorySubMenuImage->image))
                                  ? asset('storage/' . $categorySubMenuImage->image)
                                  : $categorySubMenuImage->image;
                        @endphp
                        <img id="{{ $imgId }}" src="{{ $imgSrc }}"
                          alt="{{ $categorySubMenuImage->name }}"
                          class="submenu-image {{ $index === 0 ? 'active' : 'absolute top-0 left-0' }} w-full h-full object-cover">
                      @endforeach
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        @endforeach

        {{-- ======= Our Solid Stone ======= --}}
        @php $isOssActive = in_array($currentRoute, $ossRoutes, true); @endphp
        <div class="nav-item relative">
          <a href="#"
            class="nav-link {{ $isOssActive ? 'is-active' : 'text-gray-900 hover:text-orange-500' }} transition-colors py-2">
            Our Solid Stone
          </a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-5 gap-8">
                <div class="col-span-4">
                  <div class="grid grid-cols-3 gap-6">

                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3">Marble</h4>
                      <ul class="space-y-1 text-xs">
                        <li class="submenu-item" onmouseenter="showImage('marble', 'black')">
                          <a href="{{ route('oss.black-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.black-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Black</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'cream')">
                          <a href="{{ route('oss.cream-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.cream-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Cream</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'grey-pg')">
                          <a href="{{ route('oss.grey-pg-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.grey-pg-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Grey
                            PG</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'grey-dk')">
                          <a href="{{ route('oss.grey-dk-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.grey-dk-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Grey
                            DK</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'grey-dr')">
                          <a href="{{ route('oss.grey-dr-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.grey-dr-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Grey
                            DR</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'light-grey')">
                          <a href="{{ route('oss.light-grey-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.light-grey-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Light
                            Grey</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'red')">
                          <a href="{{ route('oss.red-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.red-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Red</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'cocoa-brown')">
                          <a href="{{ route('oss.cocoa-brown-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.cocoa-brown-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Cocoa
                            Brown</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('marble', 'traventine')">
                          <a href="{{ route('oss.traventine-marble') }}"
                            class="submenu-link {{ request()->routeIs('oss.traventine-marble') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Traventine</a>
                        </li>
                      </ul>
                    </div>

                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3">Onyx</h4>
                      <ul class="space-y-1 text-xs">
                        <li class="submenu-item" onmouseenter="showImage('onyx', 'sunset')">
                          <a href="{{ route('oss.sunset-onyx') }}"
                            class="submenu-link {{ request()->routeIs('oss.sunset-onyx') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Sunset
                            Onyx</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('onyx', 'ivory')">
                          <a href="{{ route('oss.ivory-onyx') }}"
                            class="submenu-link {{ request()->routeIs('oss.ivory-onyx') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Ivory</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('onyx', 'bw')">
                          <a href="{{ route('oss.bw-onyx') }}"
                            class="submenu-link {{ request()->routeIs('oss.bw-onyx') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Onyx
                            BW</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('onyx', 'pct')">
                          <a href="{{ route('oss.pct-onyx') }}"
                            class="submenu-link {{ request()->routeIs('oss.pct-onyx') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Onyx
                            PCT</a>
                        </li>
                      </ul>
                    </div>

                    <div>
                      <ul class="space-y-2 text-sm">
                        <li class="submenu-item" onmouseenter="showImage('stone', 'granite')">
                          <a href="{{ route('oss.granite-local') }}"
                            class="submenu-link {{ request()->routeIs('oss.granite-local') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Granite
                            Local</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'petrified-wood')">
                          <a href="{{ route('oss.petrified-wood') }}"
                            class="submenu-link {{ request()->routeIs('oss.petrified-wood') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Petrified
                            Wood</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'river-stone')">
                          <a href="{{ route('oss.river-stone') }}"
                            class="submenu-link {{ request()->routeIs('oss.river-stone') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">River
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'lava-stone')">
                          <a href="{{ route('oss.lava-stone') }}"
                            class="submenu-link {{ request()->routeIs('oss.lava-stone') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Lava
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'lime-stone')">
                          <a href="{{ route('oss.lime-stone') }}"
                            class="submenu-link {{ request()->routeIs('oss.lime-stone') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Lime
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'ziolit')">
                          <a href="{{ route('oss.ziolit-stone') }}"
                            class="submenu-link {{ request()->routeIs('oss.ziolit-stone') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Ziolit
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'terrazzo')">
                          <a href="{{ route('oss.terrazzo') }}"
                            class="submenu-link {{ request()->routeIs('oss.terrazzo') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Terrazzo</a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>

                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-72">
                    <img id="marble-black"
                      src="https://images.unsplash.com/photo-1550053808-52a75a05955d?auto=format&fit=crop&q=80&w=1974"
                      alt="Black Marble" class="submenu-image active w-full h-full object-cover">
                    <img id="marble-cream"
                      src="https://images.unsplash.com/photo-1603369425250-b276f2006ec0?auto=format&fit=crop&q=80&w=735"
                      alt="Cream" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="marble-grey-pg"
                      src="https://images.unsplash.com/photo-1668533677422-1e759410847f?auto=format&fit=crop&q=80&w=627"
                      alt="Grey PG" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="marble-grey-dk"
                      src="https://images.unsplash.com/photo-1668533677422-1e759410847f?auto=format&fit=crop&q=80&w=627"
                      alt="Grey DK" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="marble-grey-dr"
                      src="https://images.unsplash.com/photo-1651614226064-05901fd4ec52?auto=format&fit=crop&q=80&w=688"
                      alt="Grey DR" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="marble-light-grey"
                      src="https://images.unsplash.com/photo-1605445070333-17f65bc95256?auto=format&fit=crop&q=80&w=687"
                      alt="Light Grey" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="marble-red"
                      src="https://images.unsplash.com/photo-1613643972261-8ba146738586?auto=format&fit=crop&q=80&w=687"
                      alt="Red" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="marble-cocoa-brown"
                      src="https://images.unsplash.com/photo-1623593394520-121b0b51d776?auto=format&fit=crop&q=80&w=687"
                      alt="Cocoa Brown" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="marble-traventine"
                      src="https://images.unsplash.com/photo-1572468730674-e05a74d8dc99?auto=format&fit=crop&q=60&w=600"
                      alt="Traventine" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        {{-- ======= Our Finishing ======= --}}
        @php $isFinishingActive = in_array($currentRoute, $finishingRoutes, true); @endphp
        <div class="nav-item relative">
          <a href="#"
            class="nav-link {{ $isFinishingActive ? 'is-active' : 'text-gray-900 hover:text-orange-500' }} transition-colors py-2">
            Our Finishing
          </a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2">
                  <ul class="space-y-2 text-sm">
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'polish')">
                      <a href="{{ route('polish') }}"
                        class="submenu-link {{ request()->routeIs('polish') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Polish</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'doff')">
                      <a href="{{ route('doff-or-matte') }}"
                        class="submenu-link {{ request()->routeIs('doff-or-matte') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Doff
                        Or Matte</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'acid')">
                      <a href="{{ route('acid') }}"
                        class="submenu-link {{ request()->routeIs('acid') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Acid</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'hammered')">
                      <a href="{{ route('hammered') }}"
                        class="submenu-link {{ request()->routeIs('hammered') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Hammered</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'burning')">
                      <a href="{{ route('burning') }}"
                        class="submenu-link {{ request()->routeIs('burning') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Burning</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'texture')">
                      <a href="{{ route('texture') }}"
                        class="submenu-link {{ request()->routeIs('texture') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Texture</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'groove')">
                      <a href="{{ route('groove') }}"
                        class="submenu-link {{ request()->routeIs('groove') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Groove</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'stripe')">
                      <a href="{{ route('stripe') }}"
                        class="submenu-link {{ request()->routeIs('stripe') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Stripe</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'combination')">
                      <a href="{{ route('combination') }}"
                        class="submenu-link {{ request()->routeIs('combination') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Combination</a>
                    </li>
                  </ul>
                </div>

                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-72">
                    <img id="finishing-polish"
                      src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=800&q=80" alt="Polish"
                      class="submenu-image active w-full h-full object-cover">
                    <img id="finishing-doff"
                      src="https://images.unsplash.com/photo-1615529328331-f8917597711f?w=800&q=80" alt="Doff Matte"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-acid"
                      src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=80" alt="Acid"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-hammered"
                      src="https://images.unsplash.com/photo-1599629954294-1c8a98e2c8c6?w=800&q=80" alt="Hammered"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-burning"
                      src="https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?w=800&q=80" alt="Burning"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-texture"
                      src="https://images.unsplash.com/photo-1615529182904-14819c35db37?w=800&q=80" alt="Texture"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-groove"
                      src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=800&q=80" alt="Groove"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-stripe"
                      src="https://images.unsplash.com/photo-1621856726086-19cbd7e39c1e?w=800&q=80" alt="Stripe"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-combination"
                      src="https://images.unsplash.com/photo-1615876234886-fd9a39fda97f?w=800&q=80" alt="Combination"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        {{-- ======= About Us ======= --}}
        @php $isAboutActive = in_array($currentRoute, $aboutRoutes, true); @endphp
        <div class="nav-item relative">
          <a href="#"
            class="nav-link {{ $isAboutActive ? 'is-active' : 'text-gray-900 hover:text-orange-500' }} transition-colors py-2">
            About Us
          </a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-5 gap-8">
                <div class="col-span-4">
                  <div class="grid grid-cols-4 gap-6">
                    <div>
                      <ul class="space-y-2 text-sm">
                        <li class="submenu-item" onmouseenter="showImage('about', 'story')">
                          <a href="{{ route('about.our-story.index') }}"
                            class="submenu-link {{ request()->routeIs('about.our-story.index') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Our
                            Story</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'commitments')">
                          <a href="{{ route('about.our-commitments.index') }}"
                            class="submenu-link {{ request()->routeIs('about.our-commitments.index') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Our
                            Commitments</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'team')">
                          <a href="{{ route('about.our-team.index') }}"
                            class="submenu-link {{ request()->routeIs('about.our-team.index') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Our
                            Team</a>
                        </li>
                      </ul>
                    </div>

                    <div>
                      <ul class="space-y-2 text-sm">
                        <li class="submenu-item" onmouseenter="showImage('about', 'storage')">
                          <a href="{{ route('stone-storage') }}"
                            class="submenu-link {{ request()->routeIs('stone-storage') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Stone
                            Storage</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'factory')">
                          <a href="{{ route('our-factory') }}"
                            class="submenu-link {{ request()->routeIs('our-factory') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Our
                            Factory</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'warehouse')">
                          <a href="{{ route('warehouse') }}"
                            class="submenu-link {{ request()->routeIs('warehouse') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Warehouse</a>
                        </li>
                      </ul>
                    </div>

                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3 text-sm">Our Production</h4>
                      <ul class="space-y-2 text-sm pl-4">
                        <li class="submenu-item" onmouseenter="showImage('about', 'sawing')">
                          <a href="{{ route('sawing-machine') }}"
                            class="submenu-link {{ request()->routeIs('sawing-machine') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Sawing
                            Machine</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'production')">
                          <a href="{{ route('production-process') }}"
                            class="submenu-link {{ request()->routeIs('production-process') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Production
                            Process</a>
                        </li>
                      </ul>
                    </div>

                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3 text-sm">Packaging</h4>
                      <ul class="space-y-2 text-sm pl-4">
                        <li class="submenu-item" onmouseenter="showImage('about', 'standard-packaging')">
                          <a href="{{ route('packaging') }}"
                            class="submenu-link {{ request()->routeIs('packaging') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Packaging</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'wood-packaging')">
                          <a href="{{ route('suffing-area') }}"
                            class="submenu-link {{ request()->routeIs('suffing-area') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Stuffing
                            Area</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'foam-packaging')">
                          <a href="{{ route('contact-us') }}"
                            class="submenu-link {{ request()->routeIs('contact-us') ? 'is-active' : 'text-gray-600 hover:text-orange-500' }} font-light text-lg">Contact
                            Us</a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>

                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-80">
                    <img id="about-story"
                      src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Our Story"
                      class="submenu-image active w-full h-full object-cover">
                    <img id="about-commitments"
                      src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=800&q=80" alt="Commitments"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-team" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80"
                      alt="Our Team" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-storage"
                      src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=80" alt="Storage"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-factory"
                      src="https://images.unsplash.com/photo-1565611736921-d785c8c84990?w=800&q=80" alt="Factory"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-warehouse"
                      src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&q=80" alt="Warehouse"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-sawing"
                      src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800&q=80" alt="Sawing"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-production"
                      src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=800&q=80" alt="Production"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-standard-packaging"
                      src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=800&q=80" alt="Packaging"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-foam-packaging"
                      src="https://images.unsplash.com/photo-1609743522471-83c84ce23e32?w=800&q=80"
                      alt="Foam Packaging" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-wood-packaging"
                      src="https://images.unsplash.com/photo-1586864387634-97201f4677d8?w=800&q=80"
                      alt="Wood Packaging" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-plywood-packaging"
                      src="https://images.unsplash.com/photo-1565608346961-47cb00297e72?w=800&q=80"
                      alt="Plywood Packaging" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-stuffing"
                      src="https://images.unsplash.com/photo-1586528116493-a029325540fa?w=800&q=80"
                      alt="Stuffing Area" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-contact"
                      src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=800&q=80" alt="Contact Us"
                      class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </nav>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="md:hidden hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 border-t border-gray-200 max-h-[calc(100vh-80px)] overflow-y-auto">

        <!-- Search Bar Mobile -->
        <form action="{{ route('products.all') }}" method="GET" class="relative mb-4">
          <input type="text" name="search" value="{{ request('search') }}"
            placeholder="Search for a product or service..."
            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
            <i class="fas fa-search text-gray-400"></i>
          </div>
        </form>

        <!-- Dynamic Mobile Menu -->
        @foreach ($categoriesMenu as $categoryMenu)
          @php
            $isCatActive =
                request()->routeIs('category.products') &&
                (int) request()->route('id_category') === (int) $categoryMenu->id;
          @endphp

          <div class="mobile-nav-item">
            <button type="button" onclick="toggleMobileDropdown('category-{{ $categoryMenu->id }}')"
              class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
              <span class="{{ $isCatActive ? 'text-amber-600 font-medium' : '' }}">{{ $categoryMenu->name }}</span>
              <i id="category-{{ $categoryMenu->id }}-icon"
                class="fas fa-chevron-down text-sm transition-transform duration-200 {{ $isCatActive ? 'rotate-180' : '' }}"></i>
            </button>
            <div id="category-{{ $categoryMenu->id }}-dropdown"
              class="mobile-dropdown pl-6 bg-gray-50 {{ $isCatActive ? 'active' : '' }}">
              @foreach ($categoryMenu->categorySub as $categorySubMenu)
                @php
                  $isSubActive =
                      request()->routeIs('category.products') &&
                      (int) request()->route('id_category') === (int) $categoryMenu->id &&
                      (int) request()->route('id_sub_category') === (int) $categorySubMenu->id;
                @endphp
                <a href="{{ route('category.products', ['id_category' => $categoryMenu->id, 'id_sub_category' => $categorySubMenu->id]) }}"
                  class="block px-3 py-2 text-sm rounded transition-colors
                          {{ $isSubActive ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">
                  {{ $categorySubMenu->name }}
                </a>
              @endforeach
            </div>
          </div>
        @endforeach

        <!-- Our Solid Stone Mobile -->
        @php $isOssActive = in_array($currentRoute, $ossRoutes, true); @endphp
        <div class="mobile-nav-item">
          <button type="button" onclick="toggleMobileDropdown('solid-stone')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
            <span class="{{ $isOssActive ? 'text-amber-600 font-medium' : '' }}">Our Solid Stone</span>
            <i id="solid-stone-icon"
              class="fas fa-chevron-down text-sm transition-transform duration-200 {{ $isOssActive ? 'rotate-180' : '' }}"></i>
          </button>
          <div id="solid-stone-dropdown" class="mobile-dropdown pl-6 bg-gray-50 {{ $isOssActive ? 'active' : '' }}">
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Marble</h4>
              <a href="{{ route('oss.black-marble') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('oss.black-marble') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Black</a>
              <a href="{{ route('oss.cream-marble') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('oss.cream-marble') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Cream</a>
              <!-- tambahkan item lain seperti di desktop -->
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Onyx</h4>
              <a href="{{ route('oss.sunset-onyx') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('oss.sunset-onyx') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Sunset
                Onyx</a>
              <!-- dst -->
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Other Stones</h4>
              <a href="{{ route('oss.granite-local') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('oss.granite-local') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Granite
                Local</a>
              <!-- dst -->
            </div>
          </div>
        </div>

        <!-- Our Finishing Mobile -->
        @php $isFinishingActive = in_array($currentRoute, $finishingRoutes, true); @endphp
        <div class="mobile-nav-item">
          <button type="button" onclick="toggleMobileDropdown('finishing')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
            <span class="{{ $isFinishingActive ? 'text-amber-600 font-medium' : '' }}">Our Finishing</span>
            <i id="finishing-icon"
              class="fas fa-chevron-down text-sm transition-transform duration-200 {{ $isFinishingActive ? 'rotate-180' : '' }}"></i>
          </button>
          <div id="finishing-dropdown"
            class="mobile-dropdown pl-6 bg-gray-50 {{ $isFinishingActive ? 'active' : '' }}">
            <a href="{{ route('polish') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('polish') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Polish</a>
            <a href="{{ route('doff-or-matte') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('doff-or-matte') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Doff
              Or Matte</a>
            <a href="{{ route('acid') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('acid') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Acid</a>
            <a href="{{ route('hammered') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('hammered') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Hammered</a>
            <a href="{{ route('burning') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('burning') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Burning</a>
            <a href="{{ route('texture') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('texture') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Texture</a>
            <a href="{{ route('groove') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('groove') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Groove</a>
            <a href="{{ route('stripe') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('stripe') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Stripe</a>
            <a href="{{ route('combination') }}"
              class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('combination') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Combination</a>
          </div>
        </div>

        <!-- About Us Mobile -->
        @php $isAboutActive = in_array($currentRoute, $aboutRoutes, true); @endphp
        <div class="mobile-nav-item">
          <button type="button" onclick="toggleMobileDropdown('about-us')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
            <span class="{{ $isAboutActive ? 'text-amber-600 font-medium' : '' }}">About Us</span>
            <i id="about-us-icon"
              class="fas fa-chevron-down text-sm transition-transform duration-200 {{ $isAboutActive ? 'rotate-180' : '' }}"></i>
          </button>
          <div id="about-us-dropdown" class="mobile-dropdown pl-6 bg-gray-50 {{ $isAboutActive ? 'active' : '' }}">
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Company</h4>
              <a href="{{ route('about.our-story.index') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('about.our-story.index') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Our
                Story</a>
              <a href="{{ route('about.our-commitments.index') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('about.our-commitments.index') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Our
                Commitments</a>
              <a href="{{ route('about.our-team.index') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('about.our-team.index') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Our
                Team</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Facilities</h4>
              <a href="{{ route('stone-storage') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('stone-storage') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Stone
                Storage</a>
              <a href="{{ route('our-factory') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('our-factory') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Our
                Factory</a>
              <a href="{{ route('warehouse') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('warehouse') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Warehouse</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Production</h4>
              <a href="{{ route('sawing-machine') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('sawing-machine') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Sawing
                Machine</a>
              <a href="{{ route('production-process') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('production-process') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Production
                Process</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Packaging</h4>
              <a href="{{ route('packaging') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('packaging') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Standard</a>
              <a href="{{ route('suffing-area') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('suffing-area') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Stuffing
                Area</a>
              <a href="{{ route('contact-us') }}"
                class="block px-3 py-2 text-sm rounded transition-colors {{ request()->routeIs('contact-us') ? 'text-amber-600 font-medium bg-white' : 'text-gray-600 hover:text-orange-500 hover:bg-white' }}">Contact
                Us</a>
            </div>
          </div>
        </div>

        <!-- Location & Social Media - Mobile footer -->
        <div class="border-t border-gray-200 pt-4 mt-4">
          <a href="{{ url('/our-locations') }}"
            class="flex items-center px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-gray-50 rounded-lg transition-colors">
            <i class="fas fa-map-marker-alt mr-2"></i>
            Our Locations
          </a>
          <div class="flex items-center space-x-4 px-3 py-3">
            <span class="text-xs text-gray-500">Follow us:</span>
            @foreach ($socialMedias as $socialMedia)
              <a href="{{ $socialMedia->link }}" target="_blank" aria-label="Social">
                <iconify-icon icon="{{ $socialMedia->icon }}" width="20" height="20"
                  class="text-gray-600 hover:text-orange-500 transition-colors"></iconify-icon>
              </a>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </div>
</header>

<style>
  .dropdown-menu {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    left: 0;
    right: 0;
  }

  .nav-item:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .dropdown-content {
    background: white;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, .1), 0 10px 10px -5px rgba(0, 0, 0, .04);
  }

  .nav-link {
    position: relative;
  }

  .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -8px;
    left: 50%;
    background-color: #f97316;
    transition: all .3s ease;
  }

  .nav-link:hover::after {
    width: 100%;
    left: 0;
  }

  /* ACTIVE STATES */
  .nav-link.is-active {
    color: #f97316;
  }

  .nav-link.is-active::after {
    width: 100%;
    left: 0;
    background-color: #f97316;
  }

  .submenu-link.is-active {
    color: #f97316;
    font-weight: 500;
  }

  .submenu-item {
    position: relative;
  }

  .submenu-image {
    opacity: 0;
    transition: opacity .3s ease;
  }

  .submenu-image.active {
    opacity: 1;
  }

  @media (max-width: 768px) {
    .mobile-dropdown {
      max-height: 0;
      overflow: hidden;
      transition: max-height .3s ease-in-out;
    }

    .mobile-dropdown.active {
      max-height: 1000px;
    }

    #hamburger,
    #close-btn {
      display: block;
    }

    #hamburger.hidden,
    #close-btn.hidden {
      display: none;
    }
  }
</style>

<script>
  function showImage(category, item) {
    const categoryImages = document.querySelectorAll(`[id^="${category}-"]`);
    categoryImages.forEach(img => img.classList.remove('active'));
    const selectedImage = document.getElementById(`${category}-${item}`);
    if (selectedImage) selectedImage.classList.add('active');
  }

  function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburger = document.getElementById('hamburger');
    const closeBtn = document.getElementById('close-btn');
    mobileMenu.classList.toggle('hidden');
    hamburger.classList.toggle('hidden');
    closeBtn.classList.toggle('hidden');
  }

  function toggleMobileDropdown(menuId) {
    const dropdown = document.getElementById(menuId + '-dropdown');
    const icon = document.getElementById(menuId + '-icon');
    if (dropdown && icon) {
      dropdown.classList.toggle('active');
      icon.classList.toggle('rotate-180');
    }
  }

  // Close mobile menu when clicking outside
  document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuButton = event.target.closest('button[onclick="toggleMobileMenu()"]');
    const clickInsideMenu = mobileMenu && mobileMenu.contains(event.target);
    if (!clickInsideMenu && !menuButton && mobileMenu && !mobileMenu.classList.contains('hidden')) {
      mobileMenu.classList.add('hidden');
      document.getElementById('hamburger').classList.remove('hidden');
      document.getElementById('close-btn').classList.add('hidden');
    }
  });

  // Prevent menu close when clicking inside dropdowns
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu) {
      mobileMenu.addEventListener('click', function(event) {
        if (event.target.tagName === 'A') return;
        event.stopPropagation();
      });
    }
  });
</script>
