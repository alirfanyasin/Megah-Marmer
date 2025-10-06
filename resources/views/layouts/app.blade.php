<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - MEGAH MARMER</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
</head>

<body class="bg-gray-50 font-sans">
  <div class="flex h-screen overflow-hidden">
    {{-- Sidebar --}}
    @include('partials.app.sidebar')

    <!-- Overlay for mobile -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden" onclick="toggleSidebar()">
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden w-full">
      {{-- Header --}}
      @include('partials.app.header')

      <!-- Content Area -->
      <main class="flex-1 overflow-y-auto p-4 lg:p-6">
        @yield('content')
      </main>
    </div>
  </div>

  <script>
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

    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');

      sidebar.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');
    }

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
      const menuButton = event.target.closest('button[onclick="toggleSidebar()"]');

      if (!menuButton && !sidebar.contains(event.target) && !sidebar.classList.contains('-translate-x-full')) {
        if (window.innerWidth < 1024) {
          sidebar.classList.add('-translate-x-full');
          overlay.classList.add('hidden');
        }
      }
    });
  </script>
</body>
