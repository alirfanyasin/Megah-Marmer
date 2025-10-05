<!-- Sidebar -->
<aside id="sidebar"
  class="w-72 bg-gray-900 text-white flex-shrink-0 overflow-y-auto fixed lg:static inset-y-0 left-0 z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
  <div class="p-6 border-b border-gray-800">
    <h1 class="text-xl font-bold tracking-wider">MEGAH MARMER</h1>
    <p class="text-gray-400 text-sm mt-1">Admin Panel</p>
  </div>

  <nav class="p-4">
    <!-- Dashboard -->
    <a href="#"
      class="flex items-center px-4 py-3 bg-amber-600 text-white mb-2 hover:bg-amber-700 transition-colors rounded">
      <iconify-icon icon="material-symbols-light:dashboard-outline-rounded" width="24" height="24"></iconify-icon>
      <span class="ml-3 font-medium">Dashboard</span>
    </a>

    <!-- Category Menu -->
    {{-- <div class="mb-2">
      <button onclick="toggleMenu('category')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="lucide:box" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">Category</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="category-icon"
          class="transition-transform"></iconify-icon>
      </button>
      <div id="category-menu" class="hidden bg-gray-800 mt-1 rounded">
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Living Room</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Dining Room</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Kategori</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Stok</span>
        </a>
      </div>
    </div> --}}

    <!-- Products Menu -->
    <div class="mb-2">
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
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Kategori</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Stok</span>
        </a>
      </div>
    </div>

    <!-- Orders Menu -->
    <div class="mb-2">
      <button onclick="toggleMenu('orders')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">Pesanan</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="orders-icon"
          class="transition-transform"></iconify-icon>
      </button>
      <div id="orders-menu" class="hidden bg-gray-800 mt-1 rounded">
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Semua Pesanan</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Pending</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Diproses</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Selesai</span>
        </a>
      </div>
    </div>

    <!-- Customers Menu -->
    <div class="mb-2">
      <button onclick="toggleMenu('customers')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="ph:users-three" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">Pelanggan</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="customers-icon"
          class="transition-transform"></iconify-icon>
      </button>
      <div id="customers-menu" class="hidden bg-gray-800 mt-1 rounded">
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Semua Pelanggan</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Tambah Pelanggan</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Member VIP</span>
        </a>
      </div>
    </div>

    <!-- Analytics -->
    <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-800 transition-colors mb-2 rounded">
      <iconify-icon icon="flowbite:chart-outline" width="24" height="24"></iconify-icon>
      <span class="ml-3 font-medium">Analitik</span>
    </a>

    <!-- Settings Menu -->
    <div class="mb-2">
      <button onclick="toggleMenu('settings')"
        class="w-full flex items-center justify-between px-4 py-3 hover:bg-gray-800 transition-colors rounded">
        <div class="flex items-center">
          <iconify-icon icon="gravity-ui:gear" width="24" height="24"></iconify-icon>
          <span class="ml-3 font-medium">Pengaturan</span>
        </div>
        <iconify-icon icon="ep:arrow-down-bold" width="12" height="12" id="settings-icon"
          class="transition-transform"></iconify-icon>
      </button>
      <div id="settings-menu" class="hidden bg-gray-800 mt-1 rounded">
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Profil Toko</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Pembayaran</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Pengiriman</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 pl-12 hover:bg-gray-700 transition-colors">
          <span class="text-sm">Notifikasi</span>
        </a>
      </div>
    </div>
  </nav>
</aside>
<!-- End Sidebar -->
