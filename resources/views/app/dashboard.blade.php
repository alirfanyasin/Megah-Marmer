@extends('layouts.app')
@section('content')
  <!-- Stats Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Total Pendapatan</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">Rp 45.8M</h3>
          <p class="text-green-600 text-sm mt-2">
            <i class="fas fa-arrow-up"></i> 12.5% dari bulan lalu
          </p>
        </div>
        <div class="w-12 h-12 bg-green-100 flex items-center justify-center">
          <iconify-icon icon="mdi:dollar" width="30" height="30" class="text-green-600"></iconify-icon>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Total Pesanan</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">1,245</h3>
          <p class="text-green-600 text-sm mt-2">
            <i class="fas fa-arrow-up"></i> 8.2% dari bulan lalu
          </p>
        </div>
        <div class="w-12 h-12 bg-blue-100 flex items-center justify-center">
          <iconify-icon icon="lets-icons:bag" width="30" height="30" class="text-blue-600"></iconify-icon>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Produk Terjual</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">3,847</h3>
          <p class="text-green-600 text-sm mt-2">
            <i class="fas fa-arrow-up"></i> 15.3% dari bulan lalu
          </p>
        </div>
        <div class="w-12 h-12 bg-purple-100 flex items-center justify-center">
          <iconify-icon icon="solar:box-outline" width="30" height="30" class="text-purple-600"></iconify-icon>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 border border-gray-200">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500 text-sm uppercase tracking-wide">Pelanggan Baru</p>
          <h3 class="text-3xl font-bold text-gray-900 mt-2">892</h3>
          <p class="text-red-600 text-sm mt-2">
            <i class="fas fa-arrow-down"></i> 3.1% dari bulan lalu
          </p>
        </div>
        <div class="w-12 h-12 bg-amber-100 flex items-center justify-center">
          <iconify-icon icon="ri:user-add-line" width="30" height="30" class="text-amber-600"></iconify-icon>
        </div>
      </div>
    </div>
  </div>

  <!-- Products Table -->
  <div class="bg-white border border-gray-200 mb-6">
    <div class="px-6 py-4 border-b border-gray-200">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-bold text-gray-900">Produk Terlaris</h2>
        <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">Lihat Semua</a>
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Terjual
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="w-12 h-12 bg-gray-200 flex items-center justify-center">
                  <i class="fas fa-chair text-gray-400"></i>
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Kursi Minimalis Modern</div>
                  <div class="text-sm text-gray-500">SKU: FRN-001</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">Kursi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm font-medium text-gray-900">Rp 2.500.000</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">345 unit</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">89</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800">Tersedia</span>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="w-12 h-12 bg-gray-200 flex items-center justify-center">
                  <i class="fas fa-couch text-gray-400"></i>
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Sofa Scandinavian 3 Seater</div>
                  <div class="text-sm text-gray-500">SKU: FRN-002</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">Sofa</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm font-medium text-gray-900">Rp 8.750.000</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">198 unit</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">23</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800">Stok Rendah</span>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="w-12 h-12 bg-gray-200 flex items-center justify-center">
                  <i class="fas fa-bed text-gray-400"></i>
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Meja Kerja Oak Wood</div>
                  <div class="text-sm text-gray-500">SKU: FRN-003</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">Meja</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm font-medium text-gray-900">Rp 3.200.000</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">267 unit</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm text-gray-900">145</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800">Tersedia</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Recent Orders -->
  <div class="bg-white border border-gray-200">
    <div class="px-6 py-4 border-b border-gray-200">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-bold text-gray-900">Pesanan Terbaru</h2>
        <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">Lihat Semua</a>
      </div>
    </div>
    <div class="p-6">
      <div class="space-y-4">
        <div class="flex items-center justify-between p-4 border border-gray-200 hover:bg-gray-50 transition-colors">
          <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-amber-600 flex items-center justify-center">
              <span class="text-white font-bold text-sm">JD</span>
            </div>
            <div>
              <p class="font-medium text-gray-900">John Doe</p>
              <p class="text-sm text-gray-500">Order #12345</p>
            </div>
          </div>
          <div class="text-right">
            <p class="font-medium text-gray-900">Rp 5.750.000</p>
            <p class="text-sm text-gray-500">2 item</p>
          </div>
          <div>
            <span class="px-3 py-1 text-xs font-medium bg-blue-100 text-blue-800">Diproses</span>
          </div>
        </div>
        <div class="flex items-center justify-between p-4 border border-gray-200 hover:bg-gray-50 transition-colors">
          <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-amber-600 flex items-center justify-center">
              <span class="text-white font-bold text-sm">SA</span>
            </div>
            <div>
              <p class="font-medium text-gray-900">Sarah Anderson</p>
              <p class="text-sm text-gray-500">Order #12344</p>
            </div>
          </div>
          <div class="text-right">
            <p class="font-medium text-gray-900">Rp 2.500.000</p>
            <p class="text-sm text-gray-500">1 item</p>
          </div>
          <div>
            <span class="px-3 py-1 text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
          </div>
        </div>
        <div class="flex items-center justify-between p-4 border border-gray-200 hover:bg-gray-50 transition-colors">
          <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-amber-600 flex items-center justify-center">
              <span class="text-white font-bold text-sm">MB</span>
            </div>
            <div>
              <p class="font-medium text-gray-900">Michael Brown</p>
              <p class="text-sm text-gray-500">Order #12343</p>
            </div>
          </div>
          <div class="text-right">
            <p class="font-medium text-gray-900">Rp 8.750.000</p>
            <p class="text-sm text-gray-500">3 item</p>
          </div>
          <div>
            <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800">Selesai</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
