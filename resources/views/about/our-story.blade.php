@extends('layouts.page')
@section('title', 'Our Story')
@section('content')

<!-- Hero Section - Ambil story pertama sebagai hero -->
@if($stories->count() > 0 && $stories->first())
  @php $heroStory = $stories->first(); @endphp
  <section class="relative h-screen bg-cover bg-center" 
           style="background-image: url('{{ $heroStory->image ? asset('storage/' . $heroStory->image) : 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=1600' }}');">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
      <div class="max-w-xl text-white">
        <h1 class="text-5xl md:text-6xl font-light mb-6 leading-tight">{{ $heroStory->title }}</h1>
        <p class="text-lg md:text-xl font-light leading-relaxed">
          {{ Str::limit($heroStory->description, 250) }}
        </p>
      </div>
    </div>
  </section>
@else
  <!-- Fallback Hero jika belum ada data -->
  <section class="relative h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=1600');">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
      <div class="max-w-xl text-white">
        <h1 class="text-5xl md:text-6xl font-light mb-6 leading-tight">Our Story</h1>
        <p class="text-lg md:text-xl font-light leading-relaxed">
          Discover our journey and what makes us unique.
        </p>
      </div>
    </div>
  </section>
@endif

<!-- Dynamic Story Sections - Loop semua story kecuali yang pertama -->
@foreach($stories->skip(1) as $index => $story)
  <section class="py-20 md:py-32 {{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-50' }}">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="{{ $index % 2 == 0 ? 'order-2 md:order-1' : 'order-1' }}">
          <h2 class="text-3xl md:text-4xl font-light mb-6">{{ $story->title }}</h2>
          <p class="text-gray-700 leading-relaxed mb-4 whitespace-pre-line">
            {{ $story->description }}
          </p>
        </div>
        <div class="{{ $index % 2 == 0 ? 'order-1 md:order-2' : 'order-2' }}">
          @if($story->image)
            <img src="{{ asset('storage/' . $story->image) }}" 
                 alt="{{ $story->title }}" 
                 class="w-full h-auto rounded-lg shadow-lg">
          @else
            <img src="https://images.unsplash.com/photo-1615874694520-474822394e73?w=800" 
                 alt="{{ $story->title }}" 
                 class="w-full h-auto rounded-lg shadow-lg">
          @endif
        </div>
      </div>
    </div>
  </section>
@endforeach

<!-- Empty State jika tidak ada data -->
@if($stories->count() == 0)
  <section class="py-20 md:py-32 bg-white">
    <div class="container mx-auto px-4 text-center">
      <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
          </path>
        </svg>
      </div>
      <h3 class="text-2xl font-semibold text-gray-700 mb-2">Our Story Coming Soon</h3>
      <p class="text-gray-500">We're working on sharing our journey with you.</p>
    </div>
  </section>
@endif

@endsection