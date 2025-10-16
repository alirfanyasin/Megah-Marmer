<header class="bg-white border-b border-gray-200 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Top Navigation -->
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="/">
          <img src="{{ asset('img/logo-main.jpg') }}" alt="" class="h-10 w-auto">
        </a>
      </div>

      <!-- Search Bar - Desktop -->
      <div class="hidden md:flex flex-1 max-w-lg mx-8">
        <div class="relative w-full">
          <input type="text" placeholder="Search for a product or service..."
            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
            <i class="fas fa-search text-gray-400"></i>
          </div>
        </div>
      </div>


      {{-- <div x-data="liveSearch()" class="relative w-full">
        <input type="text" x-model="q" @input.debounce.300ms="fetchResults" @keydown.arrow-down.prevent="move(1)"
          @keydown.arrow-up.prevent="move(-1)" @keydown.enter.prevent="go()" @focus="open = true"
          @click.outside="open = false" placeholder="Search for a product or service..."
          class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200" />

        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
          <i class="fas fa-search text-gray-400"></i>
        </div>

        <!-- Dropdown Results -->
        <template x-if="open && results.length">
          <ul class="absolute z-50 mt-2 w-full bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
            <template x-for="(item, i) in results" :key="item.id">
              <li>
                <a :href="item.url" @mouseenter="highlight(i)" :class="i === index ? 'bg-orange-50' : 'bg-white'"
                  class="block px-4 py-2 hover:bg-orange-50">
                  <div class="font-medium" x-text="item.name"></div>
                  <div class="text-xs text-gray-500" x-text="item.address"></div>
                </a>
              </li>
            </template>
            <li class="px-4 py-2 text-xs text-gray-500 border-t">Press ↑/↓ to navigate • Enter to open</li>
          </ul>
        </template>
      </div> --}}

      <!-- Right Navigation -->
      <div class="hidden md:flex items-center space-x-6">
        <div class="flex items-center text-sm text-gray-600 hover:text-amber-600 transition-colors cursor-pointer">
          <a href="/our-locations">
            <i class="fas fa-map-marker-alt mr-1"></i>
            Our locations
          </a>
        </div>

        @php
          $socialMedias = \App\Models\SocialMedia::all();
        @endphp
        <div class="flex items-center space-x-2">
          @foreach ($socialMedias as $socialMedia)
            <a href="{{ $socialMedia->link }}" target="_blank">
              <iconify-icon icon="{{ $socialMedia->icon }}" width="24" height="24"
                class="text-gray-600 cursor-pointer hover:text-amber-600 transition-colors"></iconify-icon>
            </a>
          @endforeach
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button onclick="toggleMobileMenu()" class="text-gray-600 hover:text-orange-500 transition-colors p-2">
          <i id="hamburger" class="fas fa-bars text-xl"></i>
          <i id="close-btn" class="fas fa-times text-xl hidden"></i>
        </button>
      </div>
    </div>

    <!-- Main Navigation with Dropdown -->
    @php
      $categoriesMenu = \App\Models\Category::all();
    @endphp
    <nav class="hidden md:block">
      <div class="flex items-center justify-between text-sm space-x-4 py-4 font-medium border-t border-gray-100">

        @foreach ($categoriesMenu as $categoryMenu)
          <div class="nav-item relative">
            <a href="#"
              class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">{{ $categoryMenu->name }}</a>
            <div class="dropdown-menu fixed left-0 right-0">
              <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
                <div class="grid grid-cols-3 gap-8">
                  <div class="col-span-2">
                    <ul class="space-y-2 text-sm">
                      @foreach ($categoryMenu->categorySub as $index => $categorySubMenu)
                        <li class="submenu-item"
                          onmouseenter="showImage('category-{{ $categoryMenu->id }}', 'sub-{{ $categorySubMenu->id }}')">
                          <a href="{{ route('category.products', ['id_category' => $categoryMenu->id, 'id_sub_category' => $categorySubMenu->id]) }}"
                            class="text-gray-600 font-light text-lg hover:text-orange-500">{{ $categorySubMenu->name }}</a>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="relative">
                    <div class="rounded-lg overflow-hidden h-56">
                      @foreach ($categoryMenu->categorySub as $index => $categorySubMenuImage)
                        @if ($categorySubMenuImage->image && file_exists(public_path('storage/' . $categorySubMenuImage->image)))
                          <img id="category-{{ $categoryMenu->id }}-sub-{{ $categorySubMenuImage->id }}"
                            src="{{ asset('storage/' . $categorySubMenuImage->image) }}"
                            alt="{{ $categorySubMenuImage->name }}"
                            class="submenu-image {{ $index === 0 ? 'active' : 'absolute top-0 left-0' }} w-full h-full object-cover">
                        @else
                          <img id="category-{{ $categoryMenu->id }}-sub-{{ $categorySubMenuImage->id }}"
                            src="{{ $categorySubMenuImage->image }}" alt="{{ $categorySubMenuImage->name }}"
                            class="submenu-image {{ $index === 0 ? 'active' : 'absolute top-0 left-0' }} w-full h-full object-cover">
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        <!-- Our Solid Stone -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">Our Solid
            Stone</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-5 gap-8">
                <div class="col-span-4">
                  <div class="grid grid-cols-3 gap-6">
                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3">Marble</h4>
                      <ul class="space-y-1 text-xs">
                        <li class="submenu-item" onmouseenter="showImage('stone', 'marble')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">All
                            Marble</a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3">Onyx</h4>
                      <ul class="space-y-1 text-xs">
                        <li class="submenu-item" onmouseenter="showImage('stone', 'onyx')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">All
                            Onyx</a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <ul class="space-y-2 text-sm">
                        <li class="submenu-item" onmouseenter="showImage('stone', 'granite')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Granite
                            Local</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'petrified-wood')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Petrified
                            Wood</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'river-stone')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">River
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'lava-stone')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Lava
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'lime-stone')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Lime
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'ziolit')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Ziolit
                            Stone</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('stone', 'terrazzo')">
                          <a href="#"
                            class="text-gray-600 font-light text-lg hover:text-orange-500">Terrazzo</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-72">
                    <img id="stone-marble"
                      src="https://images.unsplash.com/photo-1615529182904-14819c35db37?w=400&h=400&fit=crop"
                      alt="Marble" class="submenu-image active w-full h-full object-cover">
                    <img id="stone-onyx"
                      src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?w=400&h=400&fit=crop"
                      alt="Onyx" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="stone-granite"
                      src="https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?w=400&h=400&fit=crop"
                      alt="Granite" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="stone-petrified-wood"
                      src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?w=400&h=400&fit=crop"
                      alt="Petrified Wood" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="stone-river-stone"
                      src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400&h=400&fit=crop"
                      alt="River Stone" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="stone-lava-stone"
                      src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=400&h=400&fit=crop"
                      alt="Lava Stone" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="stone-lime-stone"
                      src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=400&h=400&fit=crop"
                      alt="Lime Stone" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="stone-ziolit"
                      src="https://images.unsplash.com/photo-1599629954294-1c8a98e2c8c6?w=400&h=400&fit=crop"
                      alt="Ziolit Stone" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="stone-terrazzo"
                      src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=400&h=400&fit=crop"
                      alt="Terrazzo" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Our Finishing -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">Our
            Finishing</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2">
                  <ul class="space-y-2 text-sm">
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'polish')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Polish</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'doff')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Doff Or
                        Matte</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'acid')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Acid</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'hammered')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Hammered</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'burning')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Burning</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'texture')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Texture</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'groove')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Groove</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'stripe')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Stripe</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'combination')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Combination</a>
                    </li>
                  </ul>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-72">
                    <img id="finishing-polish"
                      src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=400&h=400&fit=crop"
                      alt="Polish" class="submenu-image active w-full h-full object-cover">
                    <img id="finishing-doff"
                      src="https://images.unsplash.com/photo-1615529328331-f8917597711f?w=400&h=400&fit=crop"
                      alt="Doff Matte" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-acid"
                      src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=400&h=400&fit=crop"
                      alt="Acid" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-hammered"
                      src="https://images.unsplash.com/photo-1599629954294-1c8a98e2c8c6?w=400&h=400&fit=crop"
                      alt="Hammered" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-burning"
                      src="https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?w=400&h=400&fit=crop"
                      alt="Burning" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-texture"
                      src="https://images.unsplash.com/photo-1615529182904-14819c35db37?w=400&h=400&fit=crop"
                      alt="Texture" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-groove"
                      src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=400&h=400&fit=crop"
                      alt="Groove" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-stripe"
                      src="https://images.unsplash.com/photo-1621856726086-19cbd7e39c1e?w=400&h=400&fit=crop"
                      alt="Stripe" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="finishing-combination"
                      src="https://images.unsplash.com/photo-1615876234886-fd9a39fda97f?w=400&h=400&fit=crop"
                      alt="Combination" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- About Us -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">About Us</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-5 gap-8">
                <div class="col-span-4">
                  <div class="grid grid-cols-4 gap-6">
                    <div>
                      <ul class="space-y-2 text-sm">
                        <li class="submenu-item" onmouseenter="showImage('about', 'story')">
                          <a href="{{ route('about.our-story.index') }}" class="text-gray-600 font-light text-lg hover:text-orange-500">Our
                            Story</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'commitments')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Our
                            Commitments</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'team')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Our
                            Team</a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <ul class="space-y-2 text-sm">
                        <li class="submenu-item" onmouseenter="showImage('about', 'storage')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Stone
                            Storage</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'factory')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Our
                            Factory</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'warehouse')">
                          <a href="#"
                            class="text-gray-600 font-light text-lg hover:text-orange-500">Warehouse</a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3 text-sm">Our Production</h4>
                      <ul class="space-y-2 text-sm pl-4">
                        <li class="submenu-item" onmouseenter="showImage('about', 'sawing')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Sawing
                            Machine</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'production')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Production
                            Process</a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-900 mb-3 text-sm">Packaging</h4>
                      <ul class="space-y-2 text-sm pl-4">
                        <li class="submenu-item" onmouseenter="showImage('about', 'standard-packaging')">
                          <a href="#"
                            class="text-gray-600 font-light text-lg hover:text-orange-500">Standard</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'foam-packaging')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Moulded
                            Foam</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'wood-packaging')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Wood</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'plywood-packaging')">
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Plywood</a>
                        </li>
                      </ul>
                      <ul class="space-y-2 text-sm mt-4">
                        <li class="submenu-item" onmouseenter="showImage('about', 'stuffing')">
                          <a href="#" class="text-gray-600 hover:text-orange-500">Stuffing Area</a>
                        </li>
                        <li class="submenu-item" onmouseenter="showImage('about', 'contact')">
                          <a href="#" class="text-gray-600 hover:text-orange-500">Contact Us</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-80">
                    <img id="about-story"
                      src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&h=500&fit=crop"
                      alt="Our Story" class="submenu-image active w-full h-full object-cover">
                    <img id="about-commitments"
                      src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=400&h=500&fit=crop"
                      alt="Commitments" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-team"
                      src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=500&fit=crop"
                      alt="Our Team" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-storage"
                      src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=400&h=500&fit=crop"
                      alt="Storage" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-factory"
                      src="https://images.unsplash.com/photo-1565611736921-d785c8c84990?w=400&h=500&fit=crop"
                      alt="Factory" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-warehouse"
                      src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=400&h=500&fit=crop"
                      alt="Warehouse" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-sawing"
                      src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=400&h=500&fit=crop"
                      alt="Sawing Machine" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-production"
                      src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=400&h=500&fit=crop"
                      alt="Production" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-standard-packaging"
                      src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=400&h=500&fit=crop"
                      alt="Standard Packaging" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-foam-packaging"
                      src="https://images.unsplash.com/photo-1609743522471-83c84ce23e32?w=400&h=500&fit=crop"
                      alt="Foam Packaging" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-wood-packaging"
                      src="https://images.unsplash.com/photo-1586864387634-97201f4677d8?w=400&h=500&fit=crop"
                      alt="Wood Packaging" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-plywood-packaging"
                      src="https://images.unsplash.com/photo-1565608346961-47cb00297e72?w=400&h=500&fit=crop"
                      alt="Plywood Packaging" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-stuffing"
                      src="https://images.unsplash.com/photo-1586528116493-a029325540fa?w=400&h=500&fit=crop"
                      alt="Stuffing Area" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="about-contact"
                      src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=400&h=500&fit=crop"
                      alt="Contact Us" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
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
        <div class="relative mb-4">
          <input type="text" placeholder="Search for a product or service..."
            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
            <i class="fas fa-search text-gray-400"></i>
          </div>
        </div>

        <!-- Dynamic Mobile Menu -->
        @foreach ($categoriesMenu as $categoryMenu)
          <div class="mobile-nav-item">
            <button onclick="toggleMobileDropdown('category-{{ $categoryMenu->id }}')"
              class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
              <span>{{ $categoryMenu->name }}</span>
              <i id="category-{{ $categoryMenu->id }}-icon"
                class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
            </button>
            <div id="category-{{ $categoryMenu->id }}-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
              @foreach ($categoryMenu->categorySub as $categorySubMenu)
                <a href="{{ route('category.products', ['id_category' => $categoryMenu->id, 'id_sub_category' => $categorySubMenu->id]) }}"
                  class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">
                  {{ $categorySubMenu->name }}
                </a>
              @endforeach
            </div>
          </div>
        @endforeach

        <!-- Our Solid Stone Mobile -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('solid-stone')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
            <span>Our Solid Stone</span>
            <i id="solid-stone-icon" class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
          </button>
          <div id="solid-stone-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Marble</h4>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">All
                Marble</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Onyx</h4>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">All
                Onyx</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Other Stones</h4>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Granite
                Local</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Petrified
                Wood</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">River
                Stone</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Lava
                Stone</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Lime
                Stone</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Ziolit
                Stone</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Terrazzo</a>
            </div>
          </div>
        </div>

        <!-- Our Finishing Mobile -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('finishing')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
            <span>Our Finishing</span>
            <i id="finishing-icon" class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
          </button>
          <div id="finishing-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Polish</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Doff
              Or Matte</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Acid</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Hammered</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Burning</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Texture</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Groove</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Stripe</a>
            <a href="#"
              class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Combination</a>
          </div>
        </div>

        <!-- About Us Mobile -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('about-us')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
            <span>About Us</span>
            <i id="about-us-icon" class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
          </button>
          <div id="about-us-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Company</h4>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Our
                Story</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Our
                Commitments</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Our
                Team</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Facilities</h4>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Stone
                Storage</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Our
                Factory</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Warehouse</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Production</h4>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Sawing
                Machine</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Production
                Process</a>
            </div>
            <div class="py-1">
              <h4 class="px-3 py-2 text-xs font-semibold text-gray-900 uppercase">Packaging</h4>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Standard</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Moulded
                Foam</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Wood</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Plywood</a>
            </div>
            <div class="py-1 border-t border-gray-200 mt-2">
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Stuffing
                Area</a>
              <a href="#"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-white rounded transition-colors">Contact
                Us</a>
            </div>
          </div>
        </div>

        <!-- Location & Social Media - Mobile -->
        <div class="border-t border-gray-200 pt-4 mt-4">
          <a href="/our-locations"
            class="flex items-center px-3 py-2 text-sm text-gray-600 hover:text-orange-500 hover:bg-gray-50 rounded-lg transition-colors">
            <i class="fas fa-map-marker-alt mr-2"></i>
            Our Locations
          </a>

          @php
            $socialMedias = \App\Models\SocialMedia::all();
          @endphp
          <div class="flex items-center space-x-4 px-3 py-3">
            <span class="text-xs text-gray-500">Follow us:</span>
            @foreach ($socialMedias as $socialMedia)
              <a href="{{ $socialMedia->link }}" target="_blank">
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
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
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
    transition: all 0.3s ease;
  }

  .nav-link:hover::after {
    width: 100%;
    left: 0;
  }

  .submenu-item {
    position: relative;
  }

  .submenu-image {
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .submenu-image.active {
    opacity: 1;
  }

  @media (max-width: 768px) {
    .mobile-dropdown {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
    }

    .mobile-dropdown.active {
      max-height: 1000px;
    }

    /* Ensure icons don't overlap with text */
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
    // Hide all images in this category
    const categoryImages = document.querySelectorAll(`[id^="${category}-"]`);
    categoryImages.forEach(img => {
      img.classList.remove('active');
    });

    // Show the selected image
    const selectedImage = document.getElementById(`${category}-${item}`);
    if (selectedImage) {
      selectedImage.classList.add('active');
    }
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

    // If click is outside menu and not on the menu button, close the menu
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
        // Allow clicks on links to navigate
        if (event.target.tagName === 'A') {
          return;
        }
        // Prevent other clicks from bubbling up
        event.stopPropagation();
      });
    }
  });
</script>


<script>
  function liveSearch() {
    return {
      q: '',
      results: [],
      index: -1,
      open: false,
      controller: null,

      async fetchResults() {
        this.index = -1;
        if (!this.q.trim()) {
          this.results = [];
          return;
        }

        // Abort request sebelumnya biar responsif
        if (this.controller) this.controller.abort();
        this.controller = new AbortController();

        try {
          const res = await fetch(`{{ route('search') }}?q=${encodeURIComponent(this.q)}`, {
            headers: {
              'Accept': 'application/json'
            },
            signal: this.controller.signal
          });
          if (!res.ok) throw new Error('Network error');
          this.results = await res.json();
          this.open = true;
        } catch (e) {
          if (e.name !== 'AbortError') console.error(e);
        }
      },

      move(step) {
        if (!this.results.length) return;
        this.index = (this.index + step + this.results.length) % this.results.length;
        this.open = true;
      },

      highlight(i) {
        this.index = i;
      },

      go() {
        if (this.index >= 0 && this.results[this.index]) {
          window.location = this.results[this.index].url;
        } else if (this.q.trim()) {
          // opsional: arahkan ke halaman hasil penuh
          window.location = `{{ url('/search') }}?q=${encodeURIComponent(this.q)}`;
        }
      }
    }
  }
</script>
