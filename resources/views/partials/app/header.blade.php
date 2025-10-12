 <!-- Header -->
 <header class="bg-white border-b border-gray-200 px-4 lg:px-6 py-4">
   <div class="flex items-center justify-between">
     <!-- Mobile Menu Button -->
     <button onclick="toggleSidebar()" class="lg:hidden text-gray-600 hover:text-gray-900 focus:outline-none">
       <iconify-icon icon="heroicons:bars-3" width="28" height="28"></iconify-icon>
     </button>

     {{-- <div class="flex-1 max-w-2xl mx-4 hidden md:block">
       <div class="relative">
         <input type="text" placeholder="Cari produk, pesanan, pelanggan..."
           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-500">
         <iconify-icon icon="heroicons:magnifying-glass" width="20" height="20"
           class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></iconify-icon>
       </div>
     </div> --}}

     <div class="flex-1"></div>

     <div class="flex items-center space-x-2 lg:space-x-4">
       <!-- Mobile Search Button -->
       {{-- <button class="md:hidden text-gray-600 hover:text-gray-900">
         <iconify-icon icon="heroicons:magnifying-glass" width="24" height="24"></iconify-icon>
       </button>

       <button class="relative p-2 text-gray-600 hover:text-gray-900">
         <iconify-icon icon="heroicons:bell" width="24" height="24"></iconify-icon>
         <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
       </button> --}}


       <!-- Dropdown Menu Component -->
       <div class="relative" id="userDropdown">
         <button id="dropdownButton"
           class="flex items-center space-x-2 lg:space-x-3 hover:opacity-80 transition-opacity focus:outline-none">
           <div class="w-8 h-8 lg:w-10 lg:h-10 bg-amber-600 rounded flex items-center justify-center">
             <span class="text-white font-bold text-sm">AD</span>
           </div>
           <div class="hidden lg:block text-left">
             <p class="text-sm font-medium text-gray-900">Admin</p>
             <p class="text-xs text-gray-500">administrator</p>
           </div>
           <svg id="dropdownArrow" class="w-4 h-4 text-gray-500 transition-transform duration-200" fill="none"
             stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
           </svg>
         </button>

         <!-- Dropdown Menu -->
         <div id="dropdownMenu"
           class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-1 z-50 border border-gray-200 hidden">

           <form action="{{ route('logout') }}" method="POST" id="logoutForm">
             @csrf
             <button type="submit"
               class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
               <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                   d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
               </svg>
               Logout
             </button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </header>
 <!-- End Header -->

 <script>
   // Dropdown functionality
   const dropdownButton = document.getElementById('dropdownButton');
   const dropdownMenu = document.getElementById('dropdownMenu');
   const dropdownArrow = document.getElementById('dropdownArrow');
   const userDropdown = document.getElementById('userDropdown');

   // Toggle dropdown
   dropdownButton.addEventListener('click', function(e) {
     e.stopPropagation();
     dropdownMenu.classList.toggle('hidden');
     dropdownArrow.classList.toggle('rotate-180');
   });

   // Close dropdown when clicking outside
   document.addEventListener('click', function(e) {
     if (!userDropdown.contains(e.target)) {
       dropdownMenu.classList.add('hidden');
       dropdownArrow.classList.remove('rotate-180');
     }
   });

   // Prevent dropdown from closing when clicking inside
   dropdownMenu.addEventListener('click', function(e) {
     e.stopPropagation();
   });
 </script>
