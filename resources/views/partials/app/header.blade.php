 <!-- Header -->
 <header class="bg-white border-b border-gray-200 px-4 lg:px-6 py-4">
   <div class="flex items-center justify-between">
     <!-- Mobile Menu Button -->
     <button onclick="toggleSidebar()" class="lg:hidden text-gray-600 hover:text-gray-900 focus:outline-none">
       <iconify-icon icon="heroicons:bars-3" width="28" height="28"></iconify-icon>
     </button>

     <div class="flex-1 max-w-2xl mx-4 hidden md:block">
       <div class="relative">
         <input type="text" placeholder="Cari produk, pesanan, pelanggan..."
           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-500">
         <iconify-icon icon="heroicons:magnifying-glass" width="20" height="20"
           class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></iconify-icon>
       </div>
     </div>

     <div class="flex items-center space-x-2 lg:space-x-4">
       <!-- Mobile Search Button -->
       <button class="md:hidden text-gray-600 hover:text-gray-900">
         <iconify-icon icon="heroicons:magnifying-glass" width="24" height="24"></iconify-icon>
       </button>

       <button class="relative p-2 text-gray-600 hover:text-gray-900">
         <iconify-icon icon="heroicons:bell" width="24" height="24"></iconify-icon>
         <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
       </button>

       <div class="flex items-center space-x-2 lg:space-x-3">
         <div class="w-8 h-8 lg:w-10 lg:h-10 bg-amber-600 rounded-full flex items-center justify-center">
           <span class="text-white font-bold text-sm">AD</span>
         </div>
         <div class="hidden lg:block">
           <p class="text-sm font-medium text-gray-900">Admin</p>
           <p class="text-xs text-gray-500">administrator</p>
         </div>
       </div>
     </div>
   </div>
 </header>
 <!-- End Header -->
