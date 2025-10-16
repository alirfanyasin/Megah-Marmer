@extends('layouts.app')
@section('title', 'Home Image Settings')
@section('content')
  <div class="">
    {{-- Breadcrumb --}}
    <nav class="flex mb-3" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2">
        <li class="inline-flex items-center">
          <a href="{{ route('dashboard') }}"
            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-amber-600">
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
            <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-400">Settings</span>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-400">Home Image</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-700 mb-1">Home Image Settings</h1>
        <p class="text-gray-500 text-sm">Edit your headline and main image in your home page</p>
      </div>
    </div>

    {{-- Alert Messages --}}
    @if (session('success'))
      <div class="bg-green-500/20 border border-green-500 text-green-600 px-4 py-3 rounded-lg mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
            clip-rule="evenodd"></path>
        </svg>
        {{ session('success') }}
      </div>
    @endif

    @if (session('error'))
      <div class="bg-red-500/20 border border-red-500 text-red-600 px-4 py-3 rounded-lg mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
            clip-rule="evenodd"></path>
        </svg>
        {{ session('error') }}
      </div>
    @endif

    {{-- Content Section --}}
    @if ($homeImageData)
      <div class="bg-white border border-gray-200 rounded p-6">
        <div class="space-y-6">
          {{-- Hero Image Preview --}}
          <div>
            <label class="block text-sm font-medium text-gray-600 mb-3">Current Hero Image</label>
            <div class="relative w-full h-80 bg-gray-100 rounded overflow-hidden">
              <img src="{{ asset('storage/' . $homeImageData->hero_img) }}" 
                   alt="Hero Image" 
                   class="w-full h-full object-cover">
            </div>
          </div>

          {{-- Headline --}}
          <div class="border-t pt-4">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-amber-600/20 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                  </path>
                </svg>
              </div>
              <div class="flex-1">
                <p class="text-sm text-gray-500 mb-1">Headline</p>
                <p class="text-xl font-semibold text-gray-700">{{ $homeImageData->headline }}</p>
              </div>
            </div>
          </div>

          {{-- Description --}}
          @if($homeImageData->description)
          <div class="border-t pt-4">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-blue-600/20 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-1">
                <p class="text-sm text-gray-500 mb-1">Description</p>
                <p class="text-gray-700">{{ $homeImageData->description }}</p>
              </div>
            </div>
          </div>
          @endif

          {{-- Action Buttons --}}
          <div class="flex justify-end gap-2 border-t pt-4">
            <button onclick="openModal('edit', {{ $homeImageData->id }})"
              class="bg-amber-600 hover:cursor-pointer hover:bg-amber-700 px-4 py-2 text-white rounded transition-colors inline-flex items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                </path>
              </svg>
              Edit
            </button>
          </div>
        </div>
      </div>
    @else
      <div class="bg-white border border-gray-200 rounded p-12 text-center">
        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold text-gray-700 mb-2">No Home Image Data</h3>
        <p class="text-gray-500 mb-4">There is no home image configuration yet. Please add data from database.</p>
      </div>
    @endif
  </div>

  {{-- Modal Edit --}}
  <div id="homeImageModal"
    class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
        <h3 id="modalTitle" class="text-xl font-semibold text-gray-600">Edit Home Image</h3>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <form id="homeImageForm" method="POST" action="#" enctype="multipart/form-data">
        @csrf
        <div id="methodFieldContainer"></div>
        <div class="px-6 py-4 space-y-4">
          {{-- Headline Input --}}
          <div>
            <label for="headline" class="block text-sm font-medium text-gray-600 mb-2">Headline *</label>
            <input type="text" id="headline" name="headline" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="e.g., Welcome to Our Website">
            @error('headline')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Description Input --}}
          <div>
            <label for="description" class="block text-sm font-medium text-gray-600 mb-2">Description</label>
            <textarea id="description" name="description" rows="3"
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="Enter a brief description..."></textarea>
            @error('description')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Current Image Preview --}}
          <div id="currentImagePreview" class="hidden">
            <label class="block text-sm font-medium text-gray-600 mb-2">Current Image</label>
            <div class="relative w-full h-48 bg-gray-100 rounded-lg overflow-hidden">
              <img id="currentImage" src="" alt="Current Hero Image" class="w-full h-full object-cover">
            </div>
          </div>

          {{-- Image Upload --}}
          <div>
            <label for="hero_img" class="block text-sm font-medium text-gray-600 mb-2">Hero Image</label>
            <input type="file" id="hero_img" name="hero_img" accept="image/jpeg,image/jpg,image/png,image/webp"
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              onchange="previewImage(event)">
            @error('hero_img')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
            <p class="text-xs text-gray-400 mt-1">Supported formats: JPEG, JPG, PNG, WEBP. Max size: 2MB. Leave empty to keep current image.</p>
          </div>

          {{-- New Image Preview --}}
          <div id="newImagePreview" class="hidden">
            <label class="block text-sm font-medium text-gray-600 mb-2">New Image Preview</label>
            <div class="relative w-full h-48 bg-gray-100 rounded-lg overflow-hidden">
              <img id="previewImg" src="" alt="Preview" class="w-full h-full object-cover">
            </div>
          </div>
        </div>
        <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50 sticky bottom-0">
          <button type="button" onclick="closeModal()"
            class="px-4 py-2 bg-gray-200 text-gray-700 hover:cursor-pointer rounded hover:bg-gray-300 transition-colors">
            Cancel
          </button>
          <button type="submit"
            class="px-4 py-2 bg-amber-600 hover:cursor-pointer text-white rounded hover:bg-amber-700 transition-colors">
            Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>


  <script>
    function openModal(mode, id = null) {
      const modal = document.getElementById('homeImageModal');
      const form = document.getElementById('homeImageForm');
      const title = document.getElementById('modalTitle');
      const methodFieldContainer = document.getElementById('methodFieldContainer');
      const currentImagePreview = document.getElementById('currentImagePreview');
      const newImagePreview = document.getElementById('newImagePreview');

      // Reset form
      form.reset();
      methodFieldContainer.innerHTML = '';
      newImagePreview.classList.add('hidden');

      if (mode === 'edit') {
        title.textContent = 'Edit Home Image';
        form.action = `/app/settings/home-image/${id}/update`;

        // Add PUT method for edit
        methodFieldContainer.innerHTML = '<input type="hidden" name="_method" value="PUT">';

        // Fetch data menggunakan AJAX
        fetch(`/app/settings/home-image/${id}/edit`)
          .then(response => response.json())
          .then(data => {
            document.getElementById('headline').value = data.headline;
            document.getElementById('description').value = data.description || '';
            
            // Show current image
            if (data.hero_img) {
              currentImagePreview.classList.remove('hidden');
              document.getElementById('currentImage').src = `/storage/${data.hero_img}`;
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Failed to load home image data');
          });
      }

      modal.classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('homeImageModal').classList.add('hidden');
      document.getElementById('homeImageForm').reset();
      document.getElementById('currentImagePreview').classList.add('hidden');
      document.getElementById('newImagePreview').classList.add('hidden');
    }

    function previewImage(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('previewImg').src = e.target.result;
          document.getElementById('newImagePreview').classList.remove('hidden');
        }
        reader.readAsDataURL(file);
      } else {
        document.getElementById('newImagePreview').classList.add('hidden');
      }
    }
   

    // Close modal when clicking outside
    document.getElementById('homeImageModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

  </script>
@endsection