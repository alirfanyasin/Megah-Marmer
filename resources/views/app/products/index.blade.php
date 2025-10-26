@extends('layouts.app')
@section('title', ($categorySub->name ?? 'Category Products') . ' - Products')
@section('content')
  <div class="container mx-auto">
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
            <span class="ml-1 text-sm font-medium text-gray-600">{{ $categorySub->name }}</span>
          </div>
        </li>

      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-1">{{ $categorySub->name }}</h1>
        <p class="text-gray-500 text-sm">Manage products for subcategories {{ $categorySub->name }} </p>
      </div>
      <div class="flex gap-2">
        <a href="{{ url()->previous() }}"
          class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded flex items-center gap-2 transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
          </svg>
          <span class="hidden sm:block">Back</span>
        </a>
        <a href="{{ route('app.products.create', ['id_category' => $category->id, 'id_sub_category' => $categorySub->id]) }}"
          class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors shadow-sm">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
          </svg>
          <span>Add Product</span>
        </a>
      </div>
    </div>

    {{-- Alert Messages --}}
    @if (session('success'))
      <div class="bg-green-50 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded mb-4 flex items-start"
        role="alert">
        <svg class="w-5 h-5 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
            clip-rule="evenodd"></path>
        </svg>
        <div>
          <p class="font-medium">Berhasil!</p>
          <p class="text-sm">{{ session('success') }}</p>
        </div>
      </div>
    @endif

    @if (session('error'))
      <div class="bg-red-50 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg mb-4 flex items-start"
        role="alert">
        <svg class="w-5 h-5 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
            clip-rule="evenodd"></path>
        </svg>
        <div>
          <p class="font-medium">Error!</p>
          <p class="text-sm">{{ session('error') }}</p>
        </div>
      </div>
    @endif

    {{-- Sub Categories Grid --}}
    <section>
      @if ($dataProducts->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
          @foreach ($dataProducts as $item)
            <div
              class="bg-white border relative border-gray-200 rounded shadow-sm hover:shadow-md transition-all duration-200 flex flex-col text-center group">
              <div class="relative w-full h-[400px] overflow-hidden rounded">
                <img src="{{ $item->first_image_url }}" alt="{{ $item->name }}"
                  class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-110 group-hover:rotate-[1.5deg]" />
                <div class="absolute inset-x-0 bottom-0 h-44 z-10"
                  style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);"></div>

                <div class="absolute inset-x-0 bottom-0 z-20 p-4 text-left text-white">
                  <h2 class="text-lg font-semibold">
                    {{ $item->name }}
                  </h2>
                  <p>$ {{ number_format($item->price, 0, ',', '.') }}</p>
                </div>
              </div>

              <div
                class="flex items-center justify-center gap-2 absolute bottom-40 left-0 right-0 px-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-30">
                <a href="{{ route('app.products.show', ['id_category' => $category->id, 'id_sub_category' => $categorySub->id, 'id_product' => $item->id]) }}"
                  class="bg-gray-900 hover:text-amber-600 text-white w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-200">
                  <iconify-icon icon="meteor-icons:eye" width="22" height="22"></iconify-icon>
                </a>
                <a href="{{ route('app.products.edit', ['id_product' => $item->id]) }}"
                  class="bg-gray-900 hover:text-amber-600 text-white w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-200">
                  <iconify-icon icon="uil:edit" width="20" height="20"></iconify-icon>
                </a>
                <form action="{{ route('app.products.destroy', ['id_product' => $item->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="bg-gray-900 hover:text-amber-600 text-white w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-200">
                    <iconify-icon icon="mi:delete" width="20" height="20"></iconify-icon>
                  </button>
                </form>
              </div>
            </div>
          @endforeach

        </div>
      @else
        <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded p-12 text-center">
          <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
            </path>
          </svg>
          <h3 class="text-lg font-medium text-gray-700 mb-2">Product not found</h3>
          <p class="text-gray-500 mb-4">Start by adding the first product to the {{ $categorySub->name }}</p>
          <a href="{{ route('app.products.create', ['id_category' => $category->id, 'id_sub_category' => $categorySub->id]) }}"
            class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded inline-flex items-center gap-2 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Add Product
          </a>
        </div>
      @endif
    </section>
  </div>
@endsection
