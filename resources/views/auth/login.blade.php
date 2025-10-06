<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Megah Marmer</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-screen overflow-hidden">
  <div class="grid lg:grid-cols-2 h-full">
    <!-- Form Login Section -->
    <div class="flex items-center justify-center bg-white px-8 py-12">
      <div class="w-full max-w-md">
        <!-- Logo/Brand -->
        <div class="mb-8">
          <img src="{{ asset('img/logo-main.jpg') }}" alt="" class="w-32 mx-auto">
        </div>

        <!-- Form -->
        <form action="{{ route('post.login') }}" method="POST" class="space-y-6">
          @csrf

          <!-- Email Input -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
              Email Address
            </label>
            <input type="email" id="email" name="email" required
              class="w-full px-4 py-3 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 outline-none"
              placeholder="nama@email.com" value="{{ old('email') }}">
            @error('email')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <!-- Password Input -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
              Password
            </label>
            <input type="password" id="password" name="password" required
              class="w-full px-4 py-3 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 outline-none"
              placeholder="••••••••">
            @error('password')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <!-- Remember & Forgot -->
          <div class="flex items-center justify-between">
            <label class="flex items-center">
              <input type="checkbox" name="remember"
                class="w-4 h-4 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
              <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
            </label>
            <a href="" class="text-sm text-amber-600 hover:text-amber-700 font-medium">
              Lupa password?
            </a>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full cursor-pointer bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-4 rounded-sm transition duration-200 transform hover:scale-[1.02] shadow-lg">
            Masuk
          </button>
        </form>

        <!-- Register Link -->
        {{-- <p class="mt-8 text-center text-sm text-gray-600">
          Belum punya akun?
          <a href="" class="text-amber-600 hover:text-amber-700 font-medium">
            Daftar sekarang
          </a>
        </p> --}}
      </div>
    </div>

    <!-- Image Section -->
    <div class="hidden lg:block relative bg-amber-600 overflow-hidden">
      <!-- Background Image -->
      <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/bg-hero.jpg') }}');">
      </div>

      <!-- Overlay -->
      <div class="absolute inset-0 bg-gradient-to-br from-amber-800/60 to-black opacity-80"></div>

      <!-- Content -->
      <div class="relative h-full flex flex-col justify-center p-12 text-white z-10">
        <!-- Top Quote -->
        <div>
          <svg class="w-12 h-12 mb-4 opacity-80" fill="currentColor" viewBox="0 0 32 32">
            <path
              d="M10 8c-3.314 0-6 2.686-6 6s2.686 6 6 6c1.657 0 3.157-.672 4.243-1.757L12 24h4l2.343-6.586C19.277 16.465 20 15.02 20 13.5c0-3.314-2.686-6-6-6H10zm0 2h4c2.21 0 4 1.79 4 4 0 .88-.28 1.684-.757 2.343l-.707.707L15.172 22h-1.344l1.415-3.95-.707-.707C13.684 16.28 12.88 16 12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4h-2z" />
          </svg>
          <h2 class="text-3xl font-bold mb-4">
            Wujudkan Rumah Impian Anda
          </h2>
          <p class="text-amber-100 text-lg leading-relaxed">
            Temukan koleksi furniture berkualitas tinggi yang dirancang untuk kenyamanan dan gaya hidup modern Anda.
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
