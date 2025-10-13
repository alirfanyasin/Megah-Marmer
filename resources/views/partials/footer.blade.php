<!-- Newsletter Section -->

<section class="py-16 bg-gray-50">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h3 class="text-3xl font-bold text-gray-900 mb-4">Subscribe to our newsletter</h3>
    <p class="text-gray-600 mb-2">Enjoy <span class="font-bold">£20 off*</span> your first order when you spend £200
      or more</p>
    <p class="text-gray-600 mb-8">and receive our offers and news.</p>

    @if (session('success'))
      <div class="bg-green-100 text-green-700 p-3 rounded max-w-xl mx-auto mb-4 border border-green-300">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('app.subscribe.store') }}" method="POST">
      @csrf
      <div class="flex max-w-xl mx-auto">
        <input type="email" name="email" placeholder="Your e-mail address"
          class="flex-1 px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-amber-600 focus:border-amber-600">
        @error('email')
          <small class="text-red-500 font-light">{{ $message }}</small>
        @enderror
        <button type="submit"
          class="bg-black text-white hover:cursor-pointer px-8 py-3 rounded-r-lg hover:bg-gray-800 transition duration-300">
          Subscribe
        </button>
      </div>
    </form>
  </div>
</section>


<!-- Footer -->
<footer class="bg-black text-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Room Categories -->
    <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mb-12 text-sm">
      <!-- Living Room -->
      @php
        $categories = \App\Models\Category::all();
      @endphp
      @foreach ($categories as $category)
        <div>
          <h5 class="font-bold mb-4">{{ $category->name }}</h5>
          <ul class="space-y-1 text-gray-300">
            @foreach ($category->categorySub as $subCategory)
              <li><a
                  href="{{ route('category.products', ['id_category' => $category->id, 'id_sub_category' => $subCategory->id]) }}"
                  class="hover:text-white">{{ $subCategory->name }}</a></li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>

    <!-- Social Media -->
    <div class="mb-8">
      <h5 class="font-bold mb-4">Social Media</h5>
      <div class="flex flex-wrap gap-4">
        <div class="bg-white w-10 h-10 flex justify-center items-center rounded">
          <a href="" class="text-black">
            <iconify-icon icon="gg:facebook" width="30" height="30"></iconify-icon>
          </a>
        </div>
        <div class="bg-white w-10 h-10 flex justify-center items-center rounded">
          <a href="" class="text-black">
            <iconify-icon icon="ri:instagram-fill" width="30" height="30"></iconify-icon>
          </a>
        </div>
        <div class="bg-white w-10 h-10 flex justify-center items-center rounded">
          <a href="" class="text-black">
            <iconify-icon icon="ic:sharp-tiktok" width="30" height="30"></iconify-icon>
          </a>
        </div>
        <div class="bg-white w-10 h-10 flex justify-center items-center rounded">
          <a href="" class="text-black">
            <iconify-icon icon="ri:whatsapp-fill" width="30" height="30"></iconify-icon>
          </a>
        </div>

      </div>
    </div>



    <!-- Disclaimer -->
    <div class="border-t border-gray-700 pt-8 mb-8">
      <p class="text-xs text-gray-400 mb-4">
        *Offer valid from 23/09/2025 until 30/09/2025. Cannot be used in conjunction with any other offer or code.
        Cannot be used on the Opéra de Paris collection. Discount code to be applied at the first step of your
        shopping
        basket.
      </p>
    </div>

    <!-- Bottom Footer -->
    <div class="border-t border-gray-700 pt-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
          <h2 class="text-2xl font-bold">Megah Marmer</h2>
        </div>

        <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-300">
          Copyright © 2025 Megah Marmer. All rights reserved.
        </div>
      </div>
    </div>
  </div>

  <!-- Back to Top Button -->
  <div class="fixed bottom-6 right-6">
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
      class="bg-black text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-gray-800 transition duration-300">
      <i class="fas fa-chevron-up"></i>
    </button>
  </div>
</footer>
