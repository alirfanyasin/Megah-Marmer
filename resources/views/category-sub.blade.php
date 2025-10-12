@extends('layouts.page')
@section('title', 'Category Sub Products')
@section('content')
  <div>
    <section id="category-desc" class="max-w-5xl mx-auto my-10 space-y-4 px-4 text-center">
      <h2 class="text-2xl font-semibold">{{ $category->name }}</h2>
      {{-- <p class="text-base">Ideal for organising multimedia storage, your Designer TV stand is perfect for supporting a
        television, hi-fi,
        home cinema, etc. With its very designer look, this type of solid wood furniture is available oiled, natural or
        varnished, suspended or on legs, which means it fits in perfectly with any living room or dining room. Whatever
        the design style of the house - contemporary, Scandinavian, vintage, modern or more classic – Tikamoon TV units
        add a chic touch to your interior...</p> --}}
    </section>
    <section class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 p-4">
        @foreach ($categorySub as $categoryItem)
          <a href="{{ route('category.products', ['id_category' => $category->id, 'id_sub_category' => $categoryItem->id]) }}"
            class="relative block rounded overflow-hidden h-80 group">
            @if ($categoryItem->image && file_exists(public_path('storage/' . $categoryItem->image)))
              <img src="{{ asset('storage/' . $categoryItem->image) }}" alt="{{ $categoryItem->name }}"
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
            @else
              <img src="{{ $categoryItem->image }}" alt="{{ $categoryItem->name }}"
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
            @endif
            <div
              class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/20 to-transparent flex items-start justify-center">
              <h4 class="text-white text-xl font-bold p-4 text-center">{{ $categoryItem->name }}</h4>
            </div>
          </a>
        @endforeach
      </div>
    </section>
  </div>
@endsection
