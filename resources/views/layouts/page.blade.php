<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - MEGAH MARMER</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  @stack('css')
</head>

<body class="bg-white overflow-x-hidden">
  @include('partials.navbar')
  @yield('content')
  @include('partials.footer')

  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>

  <script>
    // Mobile menu toggle
    function toggleMobileMenu() {
      const mobileMenu = document.getElementById('mobile-menu');
      const hamburger = document.getElementById('hamburger');
      const closeBtn = document.getElementById('close-btn');

      mobileMenu.classList.toggle('hidden');
      hamburger.classList.toggle('hidden');
      closeBtn.classList.toggle('hidden');
    }

    // Carousel functionality
    function initCarousel(containerSelector, prevSelector, nextSelector) {
      const container = document.querySelector(containerSelector);
      const prevBtn = document.querySelector(prevSelector);
      const nextBtn = document.querySelector(nextSelector);

      if (!container) return;

      const scrollAmount = container.offsetWidth;

      prevBtn?.addEventListener('click', () => {
        container.scrollBy({
          left: -scrollAmount,
          behavior: 'smooth'
        });
      });

      nextBtn?.addEventListener('click', () => {
        container.scrollBy({
          left: scrollAmount,
          behavior: 'smooth'
        });
      });
    }

    // Initialize carousels when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
      initCarousel('.product-carousel', '.product-prev', '.product-next');
      initCarousel('.worlds-carousel', '.worlds-prev', '.worlds-next');
      initCarousel('.instagram-carousel', '.instagram-prev', '.instagram-next');
      initCarousel('.news-carousel', '.news-prev', '.news-next');
    });
  </script>
  <script>
    // Blok klik kanan
    document.addEventListener('contextmenu', e => e.preventDefault());

    // Blok kombinasi tombol umum (Ctrl/Cmd+S, Ctrl/Cmd+P, Ctrl/Cmd+U)
    document.addEventListener('keydown', e => {
      const k = e.key.toLowerCase();
      if ((e.ctrlKey || e.metaKey) && ['s', 'p', 'u'].includes(k)) {
        e.preventDefault();
      }
    });
  </script>

  @stack('js')
</body>

</html>
