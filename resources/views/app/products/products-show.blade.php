@extends('layouts.app')
@section('title', 'Detail Product - ' . $product->name)
@section('content')
  <section class="container mx-auto">

    {{-- Breadcrumb --}}
    <nav class="flex mb-4" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2">
        <li class="inline-flex items-center">
          <a href="{{ route('dashboard') }}"
            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-amber-600 transition-colors">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
              </path>
            </svg>
            App
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <a href="" class="ml-1 text-sm font-medium text-gray-400 hover:text-amber-600 transition-colors">
              Category
            </a>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <a href="{{ route('category-sub-menu.index', ['id' => $category->id]) }}"
              class="ml-1 text-sm font-medium text-gray-400 hover:text-amber-600 transition-colors">
              {{ $category->name }}
            </a>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <a href="{{ route('app.products.index', ['id_category' => $category->id, 'id_sub_category' => $categorySub->id]) }}"
              class="ml-1 text-sm font-medium text-gray-400 hover:text-amber-600 transition-colors">
              {{ $categorySub->name }}
            </a>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-600">Detail</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-1">Detail {{ $product->name }}</h1>
        <p class="text-gray-500 text-sm">Detail {{ $product->name }} </p>
      </div>
      <div class="flex gap-2">
        <a href="{{ url()->previous() }}"
          class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded flex items-center gap-2 transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
          </svg>
          <span class="hidden sm:block">Back</span>
        </a>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      {{-- Left Side - Image Gallery (Scrollable) --}}
      @php
        $images = is_array($product->image) ? $product->image : json_decode($product->image, true);
      @endphp
      <div class="space-y-4">
        {{-- Main Image --}}
        <div class="relative aspect-square bg-gray-100 rounded overflow-hidden">
          <img src="{{ asset('storage/' . $images[0]) }}" alt="Celeste TV Unit"
            class="w-full h-full object-cover cursor-pointer">
        </div>

        {{-- Thumbnail Grid --}}
        <div class="grid grid-cols-2 gap-4">
          @foreach (array_slice($images, 1) as $thumb)
            <div class="aspect-square bg-gray-100 rounded overflow-hidden cursor-pointer hover:opacity-80 transition">
              <img src="{{ asset('storage/' . $thumb) }}" alt="Product Thumbnail" class="w-full h-full object-cover">
            </div>
          @endforeach
        </div>
      </div>

      {{-- Right Side - Product Details (Sticky) --}}
      <div class="lg:sticky lg:top-8 lg:self-start space-y-6 lg:h-fit">

        {{-- Sale Badge --}}
        @if ($product->discount !== 0)
          <div class="inline-block">
            <span class="bg-red-900 text-white text-xs font-semibold px-3 py-1 rounded">
              Sale -{{ $product->discount }}%
            </span>
          </div>
        @endif


        {{-- Product Title --}}
        <div>
          <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
          <p class="text-md text-gray-600">{{ $product->description }}</p>
        </div>

        {{-- Dimensions --}}
        <div class="flex flex-wrap gap-6">
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 flex items-center justify-center text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-500">Height</p>
              <p class="text-sm font-semibold text-gray-900">{{ $product->height }}cm</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 flex items-center justify-center text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12M8 12h12m-12 5h12" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-500">Width</p>
              <p class="text-sm font-semibold text-gray-900">{{ $product->width }}cm</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 flex items-center justify-center text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-500">Depth</p>
              <p class="text-sm font-semibold text-gray-900">{{ $product->depth }}cm</p>
            </div>
          </div>
        </div>


        {{-- Features --}}
        <ul class="space-y-3">

          @foreach ($product->description_point as $index => $point)
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-700">{{ $point }}</span>
            </li>
          @endforeach
        </ul>

        {{-- Price --}}
        <div class="flex items-baseline gap-3">
          @if ($product->discount !== 0)
            <span class="text-3xl font-bold text-red-900">$
              {{ number_format($product->price * (1 - $product->discount / 100), 0, ',', '.') }}</span>
            <span class="text-xl text-gray-400 line-through">$
              {{ number_format($product->price, 0, ',', '.') }}</span>
          @else
            <span class="text-3xl font-bold text-red-900">$ {{ number_format($product->price, 0, ',', '.') }}</span>
          @endif
        </div>

        {{-- Action Buttons --}}
        <div class="flex items-center justify-start gap-3">
          <a href="{{ route('app.products.edit', ['id_product' => $product->id]) }}"
            class="bg-gray-900 hover:text-amber-600 text-white w-32 h-10 rounded flex items-center justify-center transition-colors duration-200">
            <iconify-icon icon="uil:edit" width="20" height="20"></iconify-icon>
            <span class="ms-2">Edit</span>
          </a>
          <form action="{{ route('app.products.destroy', ['id_product' => $product->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
              class="bg-gray-900 hover:text-amber-600 text-white w-32 h-10 rounded flex items-center justify-center transition-colors duration-200">
              <iconify-icon icon="mi:delete" width="20" height="20"></iconify-icon>
              <span class="ms-2">Delete</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>


@endsection
