<!-- Sidebar -->
<aside id="sidebar"
  class="w-72 bg-gray-900 text-white flex-shrink-0 overflow-y-auto fixed lg:static inset-y-0 left-0 z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
  <div class="p-6 border-b border-gray-800">
    <h1 class="text-xl font-bold tracking-wider">MEGAH MARMER</h1>
    <p class="text-gray-400 text-sm mt-1">Admin Panel</p>
  </div>

  <nav class="p-4">
    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}"
      class="{{ request()->routeIs('dashboard') ? 'actived' : '' }} flex items-center px-4 py-3 transition-colors rounded">
      <iconify-icon icon="material-symbols-light:dashboard-outline-rounded" width="24" height="24"></iconify-icon>
      <span class="ml-3 font-medium">Dashboard</span>
    </a>

    <!-- Category Menu -->
    <div class="mb-2">
      <button onclick="toggleMenu('category')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="lucide:box" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">Category</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="category-icon"
          class="transition-transform"></iconify-icon>
      </button>
      @php
        $dataCategory = \App\Models\Category::all();
        $categoryHasActive = false;
        foreach ($dataCategory as $cat) {
            if (request()->routeIs('category-sub-menu.index') && request()->route('id') == $cat->id) {
                $categoryHasActive = true;
                break;
            }
        }
      @endphp
      <div id="category-menu" class="{{ $categoryHasActive ? '' : 'hidden' }} bg-gray-800 mt-1 rounded">
        @foreach ($dataCategory as $categoryMenu)
          <a href="{{ route('category-sub-menu.index', ['id' => $categoryMenu->id]) }}"
            class="{{ request()->routeIs('category-sub-menu.index') && request()->route('id') == $categoryMenu->id ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
            <span class="text-sm">{{ $categoryMenu->name }}</span>
          </a>
        @endforeach
      </div>
    </div>

    <!-- Products Menu -->
    {{-- <div class="mb-2">
      <button onclick="toggleMenu('products')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="mdi:sofa-outline" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">Produk</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="products-icon"
          class="transition-transform"></iconify-icon>
      </button>
      <div id="products-menu" class="hidden bg-gray-800 mt-1 rounded">
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Semua Produk</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Tambah Produk</span>
        </a>
      </div>
    </div> --}}



    <!-- Subscribers -->
    {{-- <a href="{{ route('app.subscribe.index') }}"
      class="{{ request()->routeIs('app.subscribe.index') ? 'actived' : '' }} flex items-center px-4 py-3 hover:bg-gray-800 transition-colors mb-2 rounded">
      <iconify-icon icon="ph:users-three" width="24" height="24"></iconify-icon>
      <span class="ml-3 font-medium">Subscribers</span>
    </a> --}}

    <a href="{{ route('app.contact-us.index') }}"
      class="{{ request()->routeIs('app.contact-us.index') ? 'actived' : '' }} flex items-center px-4 py-3 hover:bg-gray-800 transition-colors mb-2 rounded">
      <iconify-icon icon="ph:users-three" width="24" height="24"></iconify-icon>
      <span class="ml-3 font-medium">Contact Us Message</span>
    </a>

    <!-- About Us Menu -->
    {{-- <div class="mb-2">
      <button onclick="toggleMenu('about-us')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="ix:about" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">About Us</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="orders-icon"
          class="transition-transform"></iconify-icon>
      </button>

      @php
        $aboutHasActiveOurStory = request()->routeIs('app.about.our-story.index');
        $isAboutMenuActive = $aboutHasActiveOurStory;
      @endphp
      <div id="about-us-menu" class="{{ $isAboutMenuActive ? '' : 'hidden' }} bg-gray-800 mt-1 rounded">
        <a href="{{ route('app.about.our-story.index') }}"  class="{{ $aboutHasActiveOurStory ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Our Story</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Our Commitments</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Our Team</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Selesai</span>
        </a>
      </div>
    </div> --}}

    <!-- Settings Menu -->
    <div class="mb-2">
      <button onclick="toggleMenu('settings')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="gravity-ui:gear" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">Settings</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="settings-icon"
          class="transition-transform"></iconify-icon>
      </button>
      @php
        $settingsHasActiveCategory = request()->routeIs('settings.manage-category-menu');
        $settingsHasActiveLocation = request()->routeIs('app.settings.location.index');
        $settingsHasActiveSocialMedia = request()->routeIs('app.settings.social-media.index');
        $settingsHasActiveEmailOrder = request()->routeIs('app.settings.email-order.index');
        $settingsHasActiveHomeImage = request()->routeIs('app.settings.home-image.index');
        $settingsHasActiveOurSelectionOrder = request()->routeIs('app.settings.our-selection-order.index');

        $isSettingsMenuActive =
            $settingsHasActiveCategory ||
            $settingsHasActiveLocation ||
            $settingsHasActiveSocialMedia ||
            $settingsHasActiveEmailOrder ||
            $settingsHasActiveHomeImage;
      @endphp

      <div id="settings-menu" class="{{ $isSettingsMenuActive ? '' : 'hidden' }} bg-gray-800 mt-1 rounded">
        <a href="{{ route('settings.manage-category-menu') }}"
          class="{{ $settingsHasActiveCategory ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Manage Category Menu</span>
        </a>
        <a href="{{ route('app.settings.location.index') }}"
          class="{{ $settingsHasActiveLocation ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Location</span>
        </a>
        <a href="{{ route('app.settings.social-media.index') }}"
          class="{{ $settingsHasActiveSocialMedia ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Social Media</span>
        </a>
        {{-- <a href="{{ route('app.settings.phone-number.index') }}"
          class="{{ $settingsHasActivePhoneNumber ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Phone Number</span>
        </a> --}}
        <a href="{{ route('app.settings.email-order.index') }}"
          class="{{ $settingsHasActiveEmailOrder ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Email for Order</span>
        </a>
        <a href="{{ route('app.settings.home-image.index') }}"
          class="{{ $settingsHasActiveHomeImage ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Home Image</span>
        </a>
        <a href="{{ route('app.settings.our-selection-order.index') }}"
          class="{{ $settingsHasActiveOurSelectionOrder ? 'actived' : '' }} flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Our Selection Order</span>
        </a>
      </div>
    </div>
  </nav>
</aside>
<!-- End Sidebar -->


<style>
  .actived {
    color: white;
    background-color: #d97706;
  }

  .actived:hover {
    background-color: #b45309;
  }
</style>

<script>
  // Auto-expand menus on page load if they have active items
  document.addEventListener('DOMContentLoaded', function() {
    // Check each menu for active items
    const menus = ['category', 'products', 'orders', 'settings', 'about-us'];

    menus.forEach(menuId => {
      const menu = document.getElementById(menuId + '-menu');
      const icon = document.getElementById(menuId + '-icon');

      if (menu && !menu.classList.contains('hidden')) {
        // If menu is not hidden (has active item), rotate the icon
        icon.style.transform = 'rotate(180deg)';
      }
    });
  });

  function toggleMenu(menuId) {
    const menu = document.getElementById(menuId + '-menu');
    const icon = document.getElementById(menuId + '-icon');

    if (menu.classList.contains('hidden')) {
      menu.classList.remove('hidden');
      icon.style.transform = 'rotate(180deg)';
    } else {
      menu.classList.add('hidden');
      icon.style.transform = 'rotate(0deg)';
    }
  }
</script>
