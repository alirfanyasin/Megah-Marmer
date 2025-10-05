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

      <!-- Right Navigation -->
      <div class="hidden md:flex items-center space-x-6">
        <div class="flex items-center text-sm text-gray-600 hover:text-orange-500 transition-colors cursor-pointer">
          <i class="fas fa-map-marker-alt mr-1"></i>
          Our locations
        </div>
        <div class="flex items-center space-x-4">
          <div class="relative cursor-pointer hover:text-orange-500 transition-colors">
            <i class="fas fa-bell text-gray-600"></i>
            <span
              class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">2</span>
          </div>
          <i class="fas fa-comment text-gray-600 cursor-pointer hover:text-orange-500 transition-colors"></i>
          <i class="fas fa-user text-gray-600 cursor-pointer hover:text-orange-500 transition-colors"></i>
          <i class="fas fa-heart text-gray-600 cursor-pointer hover:text-orange-500 transition-colors"></i>
          <div class="flex items-center text-sm text-gray-600 hover:text-orange-500 transition-colors cursor-pointer">
            <i class="fas fa-shopping-basket mr-1"></i>
            Basket
          </div>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button onclick="toggleMobileMenu()" class="text-gray-600 hover:text-orange-500 transition-colors">
          <i id="hamburger" class="fas fa-bars text-xl"></i>
          <i id="close-btn" class="fas fa-times text-xl hidden"></i>
        </button>
      </div>
    </div>

    <!-- Main Navigation with Dropdown -->
    <nav class="hidden md:block">
      <div class="flex items-center justify-between text-sm space-x-4 py-4 font-medium border-t border-gray-100">
        <!-- Living Room -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">Living Room</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2">
                  <ul class="space-y-2 text-sm">
                    <li class="submenu-item" onmouseenter="showImage('living-room', 'coffee-table')">
                      <a href="/category" class="text-gray-600 font-light text-lg hover:text-orange-500">Coffee
                        Table</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('living-room', 'chairs')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Chairs</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('living-room', 'living-decor')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Living Decor</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('living-room', 'side-table')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Side Table</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('living-room', 'mirrors')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Mirrors</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('living-room', 'accessories')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Accessories</a>
                    </li>
                  </ul>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-56">
                    <img id="living-room-coffee-table"
                      src="https://images.unsplash.com/photo-1533090481720-856c6e3c1fdc?w=400&h=300&fit=crop"
                      alt="Coffee Table" class="submenu-image active w-full h-full object-cover">
                    <img id="living-room-chairs"
                      src="https://images.unsplash.com/photo-1506439773649-6e0eb8cfb237?w=400&h=300&fit=crop"
                      alt="Chairs" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="living-room-living-decor"
                      src="https://images.unsplash.com/photo-1615529328331-f8917597711f?w=400&h=300&fit=crop"
                      alt="Living Decor" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="living-room-side-table"
                      src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&h=300&fit=crop"
                      alt="Side Table" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="living-room-mirrors"
                      src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=400&h=300&fit=crop"
                      alt="Mirrors" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="living-room-accessories"
                      src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=400&h=300&fit=crop"
                      alt="Accessories" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Dining Room & Kitchen -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">Dining Room &
            Kitchen</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2">
                  <ul class="space-y-2 text-sm">
                    <li class="submenu-item" onmouseenter="showImage('dining-room', 'dining-table')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Dining
                        Table</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('dining-room', 'chairs')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Chairs</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('dining-room', 'accessories')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Accessories</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('dining-room', 'mirrors')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Mirrors</a>
                    </li>
                  </ul>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-56">
                    <img id="dining-room-dining-table"
                      src="https://images.unsplash.com/photo-1617806118233-18e1de247200?w=400&h=300&fit=crop"
                      alt="Dining Table" class="submenu-image active w-full h-full object-cover">
                    <img id="dining-room-chairs"
                      src="https://images.unsplash.com/photo-1503602642458-232111445657?w=400&h=300&fit=crop"
                      alt="Dining Chairs" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="dining-room-accessories"
                      src="https://images.unsplash.com/photo-1578500494198-246f612d3b3d?w=400&h=300&fit=crop"
                      alt="Accessories" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="dining-room-mirrors"
                      src="https://images.unsplash.com/photo-1597072689227-8882273e8f6a?w=400&h=300&fit=crop"
                      alt="Mirrors" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Bathroom -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">Bathroom</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2">
                  <h4 class="text-gray-600 mb-3 font-light text-lg">Washbasins</h4>
                  <ul class="space-y-2 text-sm pl-4">
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'round')">
                      <a href="#" class="text-gray-600 font-light text-md hover:text-orange-500">Round</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'square')">
                      <a href="#" class="text-gray-600 font-light text-md hover:text-orange-500">Square</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'rectangle')">
                      <a href="#" class="text-gray-600 font-light text-md hover:text-orange-500">Rectangle</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'oval')">
                      <a href="#" class="text-gray-600 font-light text-md hover:text-orange-500">Oval</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'standing-sink')">
                      <a href="#" class="text-gray-600 font-light text-md hover:text-orange-500">Standing
                        Sink</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'hanging-washbasin')">
                      <a href="#" class="text-gray-600 font-light text-md hover:text-orange-500">Hanging
                        Washbasin</a>
                    </li>
                  </ul>
                  <ul class="space-y-2 text-sm mt-4">
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'vanity-unit')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Compact Vanity
                        Unit</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'bathtub')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Bathtub</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'bathroom-decor')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Bathroom
                        Decor</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('bathroom', 'mirrors')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Mirrors</a>
                    </li>
                  </ul>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-72">
                    <img id="bathroom-round"
                      src="https://images.unsplash.com/photo-1604709177225-055f99402ea3?w=400&h=400&fit=crop"
                      alt="Round Sink" class="submenu-image active w-full h-full object-cover">
                    <img id="bathroom-square"
                      src="https://images.unsplash.com/photo-1620626011761-996317b8d101?w=400&h=400&fit=crop"
                      alt="Square Sink" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-rectangle"
                      src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=400&h=400&fit=crop"
                      alt="Rectangle Sink" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-oval"
                      src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=400&h=400&fit=crop"
                      alt="Oval Sink" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-standing-sink"
                      src="https://images.unsplash.com/photo-1594026112284-02bb6f3352fe?w=400&h=400&fit=crop"
                      alt="Standing Sink" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-hanging-washbasin"
                      src="https://images.unsplash.com/photo-1631889993959-41b4e9c6e3c5?w=400&h=400&fit=crop"
                      alt="Hanging Washbasin" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-vanity-unit"
                      src="https://images.unsplash.com/photo-1620626011761-996317b8d101?w=400&h=400&fit=crop"
                      alt="Vanity Unit" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-bathtub"
                      src="https://images.unsplash.com/photo-1564540583246-934409427776?w=400&h=400&fit=crop"
                      alt="Bathtub" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-bathroom-decor"
                      src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=400&h=400&fit=crop"
                      alt="Bathroom Decor" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="bathroom-mirrors"
                      src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?w=400&h=400&fit=crop"
                      alt="Bathroom Mirrors" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Garden -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">Garden</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2">
                  <ul class="space-y-2 text-sm">
                    <li class="submenu-item" onmouseenter="showImage('garden', 'garden-table')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Garden
                        Table</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('garden', 'garden-chairs')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Garden
                        Chairs</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('garden', 'garden-decor')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Garden
                        Decor</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('garden', 'garden-lamp')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Garden Lamp</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('garden', 'fountain')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Fountain</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('garden', 'garden-tile')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Garden Tile</a>
                    </li>
                  </ul>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-56">
                    <img id="garden-garden-table"
                      src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=400&h=300&fit=crop"
                      alt="Garden Table" class="submenu-image active w-full h-full object-cover">
                    <img id="garden-garden-chairs"
                      src="https://images.unsplash.com/photo-1598928506311-c55ded91a20c?w=400&h=300&fit=crop"
                      alt="Garden Chairs" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="garden-garden-decor"
                      src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=400&h=300&fit=crop"
                      alt="Garden Decor" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="garden-garden-lamp"
                      src="https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=400&h=300&fit=crop"
                      alt="Garden Lamp" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="garden-fountain"
                      src="https://images.unsplash.com/photo-1591868708593-29c0c7d9d6c5?w=400&h=300&fit=crop"
                      alt="Fountain" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="garden-garden-tile"
                      src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=400&h=300&fit=crop"
                      alt="Garden Tile" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Wall & Tiles -->
        <div class="nav-item relative">
          <a href="#" class="nav-link text-gray-900 hover:text-orange-500 transition-colors py-2">Wall &
            Tiles</a>
          <div class="dropdown-menu fixed left-0 right-0">
            <div class="dropdown-content mt-4 p-8 max-w-7xl mx-auto">
              <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2">
                  <ul class="space-y-2 text-sm">
                    <li class="submenu-item" onmouseenter="showImage('wall-tiles', 'parquet')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Parquet</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('wall-tiles', 'mosaics')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Mosaics</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('wall-tiles', 'wall-cladding')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Wall
                        Cladding</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('wall-tiles', 'tiles')">
                      <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Tiles</a>
                    </li>
                  </ul>
                </div>
                <div class="relative">
                  <div class="rounded-lg overflow-hidden h-56">
                    <img id="wall-tiles-parquet"
                      src="https://images.unsplash.com/photo-1615876234886-fd9a39fda97f?w=400&h=300&fit=crop"
                      alt="Parquet" class="submenu-image active w-full h-full object-cover">
                    <img id="wall-tiles-mosaics"
                      src="https://images.unsplash.com/photo-1621856726086-19cbd7e39c1e?w=400&h=300&fit=crop"
                      alt="Mosaics" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="wall-tiles-wall-cladding"
                      src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=400&h=300&fit=crop"
                      alt="Wall Cladding" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                    <img id="wall-tiles-tiles"
                      src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=400&h=300&fit=crop"
                      alt="Tiles" class="submenu-image absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Polish</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'doff')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Doff Or
                        Matte</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'acid')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Acid</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'hammered')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Hammered</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'burning')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Burning</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'texture')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Texture</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'groove')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Groove</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'stripe')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Stripe</a>
                    </li>
                    <li class="submenu-item" onmouseenter="showImage('finishing', 'combination')">
                      <a href="#"
                        class="text-gray-600 font-light text-lg font-light text-lg hover:text-orange-500">Combination</a>
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
                          <a href="#" class="text-gray-600 font-light text-lg hover:text-orange-500">Our
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

        <!-- Living Room -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('living-room')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>Living Room</span>
            <i id="living-room-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="living-room-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Coffee Table</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Chairs</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Living Decor</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Side Table</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Mirrors</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Accessories</a>
          </div>
        </div>

        <!-- Dining Room & Kitchen -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('dining-room')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>Dining Room & Kitchen</span>
            <i id="dining-room-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="dining-room-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Dining Table</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Chairs</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Accessories</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Mirrors</a>
          </div>
        </div>

        <!-- Bathroom -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('bathroom')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>Bathroom</span>
            <i id="bathroom-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="bathroom-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600 font-medium">Washbasins</a>
            <a href="#" class="block px-3 py-2 text-xs text-gray-500 pl-6">Round</a>
            <a href="#" class="block px-3 py-2 text-xs text-gray-500 pl-6">Square</a>
            <a href="#" class="block px-3 py-2 text-xs text-gray-500 pl-6">Rectangle</a>
            <a href="#" class="block px-3 py-2 text-xs text-gray-500 pl-6">Oval</a>
            <a href="#" class="block px-3 py-2 text-xs text-gray-500 pl-6">Standing Sink</a>
            <a href="#" class="block px-3 py-2 text-xs text-gray-500 pl-6">Hanging Washbasin</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Compact Vanity Unit</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Bathtub</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Bathroom Decor</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Mirrors</a>
          </div>
        </div>

        <!-- Garden -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('garden')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>Garden</span>
            <i id="garden-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="garden-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Garden Table</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Garden Chairs</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Garden Decor</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Garden Lamp</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Fountain</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Garden Tile</a>
          </div>
        </div>

        <!-- Wall & Tiles -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('wall-tiles')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>Wall & Tiles</span>
            <i id="wall-tiles-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="wall-tiles-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Parquet</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Mosaics</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Wall Cladding</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Tiles</a>
          </div>
        </div>

        <!-- Our Solid Stone -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('solid-stone')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>Our Solid Stone</span>
            <i id="solid-stone-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="solid-stone-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600 font-medium">Marble</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600 font-medium">Onyx</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Granite Local</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Petrified Wood</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">River Stone</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Lava Stone</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Lime Stone</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Ziolit Stone</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600 font-medium">Terrazzo</a>
          </div>
        </div>

        <!-- Our Finishing -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('finishing')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>Our Finishing</span>
            <i id="finishing-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="finishing-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Polish</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Doff Or Matte</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Acid</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Hammered</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Burning</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Texture</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Groove</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Stripe</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Combination</a>
          </div>
        </div>

        <!-- About Us -->
        <div class="mobile-nav-item">
          <button onclick="toggleMobileDropdown('about-us')"
            class="flex justify-between items-center w-full px-3 py-2 text-gray-900 hover:bg-gray-50">
            <span>About Us</span>
            <i id="about-us-icon" class="fas fa-chevron-down text-sm transition-transform"></i>
          </button>
          <div id="about-us-dropdown" class="mobile-dropdown pl-6 bg-gray-50">
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Our Story</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Our Commitments</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Our Team</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Stone Storage</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Our Factory</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Warehouse</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600 font-medium">Our Production</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600 font-medium">Packaging</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Stuffing Area</a>
            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Contact Us</a>
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
      transition: max-height 0.3s ease;
    }

    .mobile-dropdown.active {
      max-height: 800px;
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

    dropdown.classList.toggle('active');
    icon.classList.toggle('rotate-180');
  }

  document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuButton = event.target.closest('button');

    if (!mobileMenu.contains(event.target) && !menuButton) {
      mobileMenu.classList.add('hidden');
      document.getElementById('hamburger').classList.remove('hidden');
      document.getElementById('close-btn').classList.add('hidden');
    }
  });
</script>
