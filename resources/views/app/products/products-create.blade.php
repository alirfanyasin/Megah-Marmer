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
            <span class="ml-1 text-sm font-medium text-gray-600">Create</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-1">Create Product for {{ $categorySub->name }} Categories</h1>
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
      </div>
    </div>


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

    {{-- Form Create Products --}}
    <section>
      <div class="bg-white border border-gray-200">
        <form action="{{ route('app.products.store', ['id_sub_category' => $categorySub->id]) }}" method="POST"
          enctype="multipart/form-data">
          @csrf
          <div class="p-6">

            <input type="hidden" name="category_sub_id" value="{{ $categorySub->id }}">
            <input type="hidden" name="id_category" value="{{ $category->id }}">


            {{-- Product Name --}}
            <div class="mb-6">
              <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Product Name <span class="text-red-500">*</span>
              </label>
              <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 @error('name') border-red-500 @enderror"
                placeholder="Enter product name" required>
              @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            {{-- Product Images (Multiple) --}}
            <div class="mb-6">
              <label for="images" class="block text-sm font-medium text-gray-700 mb-2">
                Product Images <span class="text-red-500">*</span>
              </label>
              <div class="mb-4">
                <input type="file" name="images[]" id="images" accept="image/*" multiple
                  class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-amber-600 file:text-white hover:file:bg-amber-700 @error('images') border-red-500 @enderror @error('images.*') border-red-500 @enderror"
                  onchange="previewMultipleImages(event)" required>
                <p class="mt-1 text-sm text-gray-500">Accepted formats: JPG, PNG, JPEG. Max size: 2MB per image. You can
                  select multiple images.</p>
                @error('images')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                @error('images.*')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>

              {{-- Image Preview Container --}}
              <div id="imagePreviewContainer" class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <!-- Previews will be inserted here -->
              </div>
            </div>

            {{-- Price & Discount --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
              <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">
                  Price <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                  <span class="absolute left-3 top-2.5 text-gray-500">Rp</span>
                  <input type="number" name="price" id="price" value="{{ old('price') }}" min="0"
                    step="0.01"
                    class="w-full pl-12 pr-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 @error('price') border-red-500 @enderror"
                    placeholder="0" required>
                </div>
                @error('price')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>

              <div>
                <label for="discount" class="block text-sm font-medium text-gray-700 mb-2">
                  Discount (%)
                </label>
                <input type="number" name="discount" id="discount" value="{{ old('discount', 0) }}" min="0"
                  max="100"
                  class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 @error('discount') border-red-500 @enderror"
                  placeholder="0">
                @error('discount')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>

            {{-- Description --}}
            <div class="mb-6">
              <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                Description <span class="text-red-500">*</span>
              </label>
              <textarea name="description" id="description" rows="4"
                class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 @error('description') border-red-500 @enderror"
                placeholder="Enter product description" required>{{ old('description') }}</textarea>
              @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            {{-- Description Point --}}
            <div class="mb-6">
              <div class="flex justify-between items-center mb-2">
                <label class="block text-sm font-medium text-gray-700">
                  Key Points <span class="text-red-500">*</span>
                </label>
                <button type="button" id="addKeyPointBtn"
                  class="px-3 py-1 bg-amber-600 text-white text-sm rounded hover:bg-amber-700 transition-colors flex items-center gap-1">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                  </svg>
                  Add Point
                </button>
              </div>
              <div id="keyPointsContainer" class="space-y-3">
                <div class="flex gap-2 key-point-item">
                  <input type="text" name="description_point[]"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0"
                    placeholder="Enter key point" required>
                  <button type="button"
                    class="remove-key-point px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors opacity-0 pointer-events-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                      </path>
                    </svg>
                  </button>
                </div>
              </div>
              @error('description_point')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            {{-- Dimensions --}}
            <div class="mb-6">
              <label class="block text-sm font-medium text-gray-700 mb-2">
                Dimensions (cm)
              </label>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                  <label for="width" class="block text-xs text-gray-600 mb-1">Width <span
                      class="text-red-500">*</span></label>
                  <input type="number" name="width" id="width" value="{{ old('width') }}" min="0"
                    step="0.01"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 @error('width') border-red-500 @enderror"
                    placeholder="0" required>
                  @error('width')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>

                <div>
                  <label for="height" class="block text-xs text-gray-600 mb-1">Height <span
                      class="text-red-500">*</span></label>
                  <input type="number" name="height" id="height" value="{{ old('height') }}" min="0"
                    step="0.01"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 @error('height') border-red-500 @enderror"
                    placeholder="0" required>
                  @error('height')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>

                <div>
                  <label for="depth" class="block text-xs text-gray-600 mb-1">Depth <span
                      class="text-red-500">*</span></label>
                  <input type="number" name="depth" id="depth" value="{{ old('depth') }}" min="0"
                    step="0.01"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0 @error('depth') border-red-500 @enderror"
                    placeholder="0" required>
                  @error('depth')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            </div>
          </div>

          {{-- Form Actions --}}
          <div class="flex items-center justify-end gap-3 pt-4 border-t px-6 py-4 border-gray-200 bg-gray-50">
            <a href="{{ url()->previous() }}"
              class="px-6 py-2 border border-gray-300 text-gray-700 rounded hover:bg-gray-50 transition-colors">
              Cancel
            </a>
            <button type="submit"
              class="px-6 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition-colors flex items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
              </svg>
              Save Product
            </button>
          </div>
        </form>
      </div>
    </section>
  </div>

  {{-- Scripts --}}
  <script>
    // Store selected files
    let selectedFiles = [];

    // Preview Multiple Images
    function previewMultipleImages(event) {
      const container = document.getElementById('imagePreviewContainer');
      const files = event.target.files;

      // Clear previous data
      container.innerHTML = '';
      selectedFiles = [];

      if (files.length === 0) {
        return;
      }

      // Store files in array
      selectedFiles = Array.from(files);

      // Display previews
      displayPreviews();
    }

    // Display image previews
    function displayPreviews() {
      const container = document.getElementById('imagePreviewContainer');
      container.innerHTML = '';

      selectedFiles.forEach((file, index) => {
        const reader = new FileReader();

        reader.onload = function(e) {
          const previewDiv = document.createElement('div');
          previewDiv.className = 'relative group';
          previewDiv.innerHTML = `
            <img src="${e.target.result}" alt="Preview ${index + 1}" 
              class="w-full h-80 object-cover rounded border border-gray-300">
            <div class="absolute top-2 left-2 bg-amber-600 text-white text-xs px-2 py-1 rounded">
              ${index + 1}
            </div>
            <button type="button" 
              onclick="removeImage(${index})"
              class="absolute -top-2 -right-2 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center transition-colors shadow-lg">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          `;
          container.appendChild(previewDiv);
        };

        reader.readAsDataURL(file);
      });
    }

    // Remove image from selection
    function removeImage(index) {
      // Remove file from array
      selectedFiles.splice(index, 1);

      // Update file input
      const dt = new DataTransfer();
      selectedFiles.forEach(file => {
        dt.items.add(file);
      });
      document.getElementById('images').files = dt.files;

      // Refresh previews
      displayPreviews();
    }

    // Add Key Point functionality
    document.getElementById('addKeyPointBtn').addEventListener('click', function() {
      const container = document.getElementById('keyPointsContainer');
      const newPoint = document.createElement('div');
      newPoint.className = 'flex gap-2 key-point-item';
      newPoint.innerHTML = `
        <input type="text" name="description_point[]"
          class="flex-1 px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-amber-600 focus:outline-0"
          placeholder="Enter key point" required>
        <button type="button"
          class="remove-key-point px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
            </path>
          </svg>
        </button>
      `;
      container.appendChild(newPoint);
      updateRemoveButtons();
    });

    // Remove Key Point functionality
    document.addEventListener('click', function(e) {
      if (e.target.closest('.remove-key-point')) {
        e.target.closest('.key-point-item').remove();
        updateRemoveButtons();
      }
    });

    // Update remove button visibility
    function updateRemoveButtons() {
      const items = document.querySelectorAll('.key-point-item');
      items.forEach((item, index) => {
        const removeBtn = item.querySelector('.remove-key-point');
        if (items.length === 1) {
          removeBtn.classList.add('opacity-0', 'pointer-events-none');
        } else {
          removeBtn.classList.remove('opacity-0', 'pointer-events-none');
        }
      });
    }
  </script>
@endsection
