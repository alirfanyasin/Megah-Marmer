@extends('layouts.page')
@section('title', 'Contact Us — Connect with Our Marble Specialists')
@section('content')

  <!-- Hero Section with Asymmetric Split -->
  <section class="relative min-h-screen grid lg:grid-cols-5">
    <!-- Left: Image Panel (3 columns) -->
    <div class="lg:col-span-3 relative h-64 lg:h-auto bg-cover bg-center"
      style="background-image: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=1400&q=80');">
      <div class="absolute inset-0 bg-gradient-to-br from-stone-900/40 via-transparent to-rose-900/20"></div>
      <div class="relative z-10 h-full flex flex-col justify-end p-8 sm:p-12 lg:p-20">
        <div class="text-white max-w-2xl">
          <div class="mb-8">
            <div class="w-16 h-1 bg-white/80 mb-6"></div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-light mb-6 leading-tight">
              Let's Talk<br>Marble
            </h1>
            <p class="text-xl sm:text-2xl font-light opacity-90 leading-relaxed">
              Transform your vision into reality with premium natural stone
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right: Content Panel (2 columns) -->
    <div class="lg:col-span-2 bg-white flex items-center py-16 px-6 sm:px-10 lg:px-16">
      <div class="w-full max-w-lg mx-auto">
        @if (session('success'))
          <div class="mb-6 p-4 bg-green-50 text-green-800 border border-green-200">
            {{ session('success') }}
          </div>
        @endif

        @if ($errors->any())
          <div class="mb-6 p-4 bg-red-50 text-red-700 border border-red-200">
            <ul class="list-disc pl-5 space-y-1">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="mb-10">
          <h2 class="text-2xl sm:text-3xl font-light text-gray-900 mb-4">Get in Touch</h2>
          <p class="text-gray-600 leading-relaxed">
            Connect with our marble specialists for project consultation, product catalog,
            or custom design solutions tailored to your space.
          </p>
        </div>

        <!-- Contact Form -->
        <form id="contact-form" class="space-y-5" method="POST" action="{{ route('contact-us.store') }}">
          @csrf
          <div class="grid sm:grid-cols-2 gap-5">
            <div>
              <label for="firstName" class="block text-xs font-medium text-gray-700 mb-2 uppercase tracking-wider">First
                Name</label>
              <input type="text" id="firstName" name="first_name" value="{{ old('first_name') }}"
                class="w-full px-4 py-3.5 border border-gray-300 rounded-none focus:ring-1 focus:ring-stone-600 focus:border-stone-600 transition-all text-gray-900">
              @error('first_name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <label for="lastName" class="block text-xs font-medium text-gray-700 mb-2 uppercase tracking-wider">Last
                Name</label>
              <input type="text" id="lastName" name="last_name" value="{{ old('last_name') }}"
                class="w-full px-4 py-3.5 border border-gray-300 rounded-none focus:ring-1 focus:ring-stone-600 focus:border-stone-600 transition-all text-gray-900">
              @error('last_name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div>
            <label for="email" class="block text-xs font-medium text-gray-700 mb-2 uppercase tracking-wider">Email
              Address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
              class="w-full px-4 py-3.5 border border-gray-300 rounded-none focus:ring-1 focus:ring-stone-600 focus:border-stone-600 transition-all text-gray-900">
            @error('email')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="phone" class="block text-xs font-medium text-gray-700 mb-2 uppercase tracking-wider">Phone
              Number</label>
            <input type="tel" id="phone" name="phone_number" value="{{ old('phone_number') }}"
              class="w-full px-4 py-3.5 border border-gray-300 rounded-none focus:ring-1 focus:ring-stone-600 focus:border-stone-600 transition-all text-gray-900">
            @error('phone_number')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="message" class="block text-xs font-medium text-gray-700 mb-2 uppercase tracking-wider">Your
              Message</label>
            <textarea id="message" name="message" rows="5"
              class="w-full px-4 py-3.5 border border-gray-300 rounded-none focus:ring-1 focus:ring-stone-600 focus:border-stone-600 transition-all resize-none text-gray-900"
              placeholder="Tell us about your project requirements...">{{ old('message') }}</textarea>
            @error('message')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            @error('name')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit"
            class="w-full bg-stone-900 hover:cursor-pointer text-white py-4 px-8 rounded-none hover:bg-stone-800 transition-all duration-300 text-base font-medium uppercase tracking-wider">
            Submit Inquiry
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Direct Contact Section -->
  <section class="relative py-24 sm:py-32 bg-stone-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl sm:text-5xl font-light text-white mb-4">
            Direct Lines of Communication
          </h2>
          <p class="text-lg text-white/70 max-w-2xl mx-auto">
            Choose your preferred method to connect with our team
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 max-w-4xl mx-auto">
          <!-- Phone Contact -->
          <div class="relative group">
            <div
              class="absolute inset-0 bg-gradient-to-br from-stone-700 to-stone-800 opacity-50 group-hover:opacity-70 transition-opacity">
            </div>
            <div class="relative bg-stone-800/90 backdrop-blur-sm p-10 lg:p-12 border border-stone-700">
              <div class="mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 mb-6">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-light text-white mb-3">Call Us</h3>
                <p class="text-white/70 leading-relaxed mb-6">
                  Speak directly with our marble specialists for immediate assistance and expert guidance.
                </p>
              </div>

              <div class="space-y-4">
                <div>
                  <p class="text-xs text-white/50 uppercase tracking-wider mb-2">Main Line</p>
                  <a href="tel:+62318234567"
                    class="text-white text-2xl font-light hover:text-stone-300 transition-colors">
                    +62 31 8234 567
                  </a>
                </div>
              </div>

              <div class="mt-8 pt-6 border-t border-stone-700">
                <p class="text-sm text-white/60">Available Monday - Friday, 9:00 AM - 5:00 PM</p>
              </div>
            </div>
          </div>

          <!-- Email Contact -->
          <div class="relative group">
            <div
              class="absolute inset-0 bg-gradient-to-br from-stone-700 to-stone-800 opacity-50 group-hover:opacity-70 transition-opacity">
            </div>
            <div class="relative bg-stone-800/90 backdrop-blur-sm p-10 lg:p-12 border border-stone-700">
              <div class="mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 mb-6">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <h3 class="text-2xl font-light text-white mb-3">Email Us</h3>
                <p class="text-white/70 leading-relaxed mb-6">
                  Send detailed project requirements and receive comprehensive information within 24 hours.
                </p>
              </div>

              <div class="space-y-4">
                <div>
                  <p class="text-xs text-white/50 uppercase tracking-wider mb-2">General Inquiries</p>
                  <a href="mailto:info@premiummarble.co"
                    class="text-white text-xl font-light hover:text-stone-300 transition-colors break-all">
                    info@premiummarble.co
                  </a>
                </div>
              </div>

              <div class="mt-8 pt-6 border-t border-stone-700">
                <p class="text-sm text-white/60">We respond to all inquiries within one business day</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature Grid Section -->
  {{-- <section class="py-24 sm:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-20">
          <h2 class="text-4xl sm:text-5xl font-light text-gray-900 mb-4">
            Why Choose Us
          </h2>
          <div class="w-20 h-1 bg-stone-900 mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-px bg-stone-200">
          <!-- Feature 1 -->
          <div class="bg-white p-10 group hover:bg-stone-50 transition-colors">
            <div class="w-12 h-12 mb-6 text-stone-900">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-3">Premium Quality</h3>
            <p class="text-gray-600 leading-relaxed">
              Sourced from the finest quarries worldwide, our marble collection meets the highest standards of quality and
              durability.
            </p>
          </div>

          <!-- Feature 2 -->
          <div class="bg-white p-10 group hover:bg-stone-50 transition-colors">
            <div class="w-12 h-12 mb-6 text-stone-900">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-3">Expert Consultation</h3>
            <p class="text-gray-600 leading-relaxed">
              Our team of specialists provides personalized guidance to help you select the perfect marble for your unique
              project.
            </p>
          </div>

          <!-- Feature 3 -->
          <div class="bg-white p-10 group hover:bg-stone-50 transition-colors">
            <div class="w-12 h-12 mb-6 text-stone-900">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-3">Fast Turnaround</h3>
            <p class="text-gray-600 leading-relaxed">
              Efficient processing and delivery systems ensure your project stays on schedule without compromising
              quality.
            </p>
          </div>

          <!-- Feature 4 -->
          <div class="bg-white p-10 group hover:bg-stone-50 transition-colors">
            <div class="w-12 h-12 mb-6 text-stone-900">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-3">Custom Solutions</h3>
            <p class="text-gray-600 leading-relaxed">
              From standard slabs to bespoke cuts and finishes, we accommodate special requests and custom specifications.
            </p>
          </div>

          <!-- Feature 5 -->
          <div class="bg-white p-10 group hover:bg-stone-50 transition-colors">
            <div class="w-12 h-12 mb-6 text-stone-900">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-3">Professional Support</h3>
            <p class="text-gray-600 leading-relaxed">
              Comprehensive support from selection through installation, backed by industry expertise and technical
              knowledge.
            </p>
          </div>

          <!-- Feature 6 -->
          <div class="bg-white p-10 group hover:bg-stone-50 transition-colors">
            <div class="w-12 h-12 mb-6 text-stone-900">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-3">Global Sourcing</h3>
            <p class="text-gray-600 leading-relaxed">
              Access to an extensive network of quarries ensures diverse options and consistent supply of premium
              materials.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- CTA Section -->
  {{-- <section class="relative py-32 sm:py-40 bg-cover bg-center"
    style="background-image: linear-gradient(rgba(28, 25, 23, 0.88), rgba(28, 25, 23, 0.88)), url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1600&q=80');">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <div class="mb-8">
          <div class="w-20 h-1 bg-white/60 mx-auto mb-8"></div>
          <h2 class="text-4xl sm:text-5xl lg:text-6xl font-light text-white mb-6 leading-tight">
            Start Your Marble Journey Today
          </h2>
          <p class="text-xl text-white/80 mb-12 leading-relaxed max-w-2xl mx-auto">
            From concept to completion, we deliver exceptional marble solutions with unmatched attention to detail and
            craftsmanship.
          </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-5 justify-center">
          <a href="#contact-form"
            class="inline-block bg-white text-stone-900 py-4 px-12 hover:bg-stone-100 transition-all duration-300 text-base font-medium uppercase tracking-wider">
            Request Consultation
          </a>
          <a href="/catalog"
            class="inline-block bg-transparent border-2 border-white text-white py-4 px-12 hover:bg-white hover:text-stone-900 transition-all duration-300 text-base font-medium uppercase tracking-wider">
            View Collection
          </a>
        </div>
      </div>
    </div>
  </section> --}}

@endsection
