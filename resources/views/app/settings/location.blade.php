@extends('layouts.app')
@section('title', 'Location Settings')
@section('content')
  <div class="">
    {{-- Breadcrumb --}}
    <nav class="flex mb-3" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2">
        <li class="inline-flex items-center">
          <a href="{{ route('dashboard') }}"
            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-amber-600 cursor-pointer">
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
            <span class="ml-1 text-sm font-medium text-gray-400">Location</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-700 mb-1">Location</h1>
        <p class="text-gray-500 text-sm">Manage store locations</p>
      </div>
      <button onclick="openModal('add')"
        class="bg-amber-600 hover:bg-amber-700 text-white px-2 md:px-4 py-2 rounded flex items-center gap-2 transition-colors cursor-pointer">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span class="md:block hidden">Add Location</span>
      </button>
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

    {{-- Cards Section --}}
    @forelse ($dataLocations as $location)
      <div class="bg-white border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow mb-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 p-6">
          {{-- Left: Image and Basic Info --}}
          <div class="lg:col-span-1">
            <div class="space-y-4">
              {{-- Image --}}
              <div class="w-full h-48 rounded overflow-hidden bg-gray-100">
                @if ($location->image && file_exists(public_path('storage/' . $location->image)))
                  <img src="{{ asset('storage/' . $location->image) }}" alt="Location Image"
                    class="w-full h-full object-cover">
                @else
                  <div class="w-full h-full flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                      </path>
                    </svg>
                  </div>
                @endif
              </div>

              {{-- Name --}}
              <div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $location->name }}</h3>

                {{-- Address --}}
                <div class="flex items-start gap-2 text-gray-600 mb-3">
                  <svg class="w-5 h-5 text-gray-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                  <span class="text-sm">{{ $location->address }}</span>
                </div>

                {{-- Phone --}}
                @if ($location->phone)
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                      </path>
                    </svg>
                    <span class="text-sm">{{ $location->phone }}</span>
                  </div>
                @endif
              </div>

              {{-- Action Buttons --}}
              <div class="flex gap-2 pt-2">
                <button onclick="openModal('edit', {{ $location->id }})"
                  class="flex-1 flex items-center justify-center gap-2 px-4 py-2 bg-black hover:text-amber-600 text-white rounded transition-colors cursor-pointer">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                  </svg>
                  <span class="text-sm font-medium">Edit</span>
                </button>
                <button onclick="confirmDelete({{ $location->id }})"
                  class="flex-1 flex items-center justify-center gap-2 px-4 py-2 bg-black hover:text-amber-600 text-white rounded transition-colors cursor-pointer">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                  </svg>
                  <span class="text-sm font-medium">Delete</span>
                </button>
              </div>
            </div>
          </div>

          {{-- Right: Google Maps --}}
          <div class="lg:col-span-2">
            @if ($location->google_map)
              <div class="w-full h-full min-h-[300px] lg:min-h-full">
                <iframe src="{{ $location->google_map }}" width="100%" height="100%"
                  style="border:0; min-height: 300px;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade" class="rounded border border-gray-200">
                </iframe>
              </div>
            @else
              <div
                class="w-full h-full min-h-[300px] bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 flex items-center justify-center">
                <div class="text-center">
                  <svg class="w-12 h-12 text-gray-300 mx-auto mb-2" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                    </path>
                  </svg>
                  <p class="text-gray-400 text-sm">No map available</p>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    @empty
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-12">
        <div class="flex flex-col items-center justify-center text-center">
          <svg class="w-20 h-20 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
            </path>
          </svg>
          <h3 class="text-xl font-semibold text-gray-700 mb-2">No locations yet</h3>
          <p class="text-gray-400 mb-6">Click "Add Location" button to add a new location</p>
          <button onclick="openModal('add')"
            class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-3 rounded-lg flex items-center gap-2 transition-colors cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Add Your First Location</span>
          </button>
        </div>
      </div>
    @endforelse
  </div>

  {{-- Modal Add/Edit --}}
  <div id="locationModal"
    class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
        <h3 id="modalTitle" class="text-xl font-semibold text-gray-600">Add Location</h3>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <form id="locationForm" method="POST" action="{{ route('app.settings.location.store') }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="methodField" name="_method" value="">
        <div class="px-6 py-4 space-y-4">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-600 mb-2">Location Name <span
                class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="Enter location name">
            @error('name')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="address" class="block text-sm font-medium text-gray-600 mb-2">Address <span
                class="text-red-500">*</span></label>
            <textarea id="address" name="address" rows="3" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="Example: Jl. anonym ..."></textarea>
            @error('address')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="phone" class="block text-sm font-medium text-gray-600 mb-2">Phone Number</label>
            <input type="text" id="phone" name="phone"
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="Enter phone number">
            @error('phone')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="google_map" class="block text-sm font-medium text-gray-600 mb-2">Google Maps Embed</label>
            <textarea id="google_map" name="google_map" rows="4"
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent text-sm"
              placeholder="Paste iframe embed from Google Maps or direct URL..."></textarea>
            <p class="text-xs text-gray-400 mt-1">Paste the entire iframe code from Google Maps or just the embed URL</p>
            @error('google_map')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="image" class="block text-sm font-medium text-gray-600 mb-2">
              Image <span id="imageRequired" class="text-red-500">*</span>
            </label>
            <input type="file" id="image" name="image" accept="image/*"
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-amber-600 file:text-white hover:file:bg-amber-700 file:cursor-pointer cursor-pointer">
            <p class="text-xs text-gray-400 mt-1">Format: JPG, PNG, GIF, JPEG, WEBP, AVIF (Max: 4MB)</p>
            @error('image')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div id="imagePreview" class="hidden">
            <label class="block text-sm font-medium text-gray-600 mb-2">Preview</label>
            <img id="previewImg" src="" alt="Preview"
              class="w-full h-48 object-cover rounded border border-gray-300">
          </div>
        </div>
        <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-gray-50">
          <button type="button" onclick="closeModal()"
            class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors cursor-pointer">
            Cancel
          </button>
          <button type="submit"
            class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition-colors cursor-pointer">
            Save
          </button>
        </div>
      </form>
    </div>
  </div>

  {{-- Modal Delete Confirmation --}}
  <div id="deleteModal"
    class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-xl max-w-md w-full">
      <div class="px-6 py-4">
        <div class="flex items-center gap-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-red-500/20 flex items-center justify-center">
            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
              </path>
            </svg>
          </div>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-gray-600 mb-1">Delete Confirmation</h3>
            <p class="text-sm text-gray-400">Are you sure you want to delete this location? This action cannot be undone.
            </p>
          </div>
        </div>
      </div>
      <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 border-gray-50">
        <button onclick="closeDeleteModal()"
          class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors cursor-pointer">
          Cancel
        </button>
        <form id="deleteForm" method="POST" action="#" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit"
            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors cursor-pointer">
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Image preview functionality
    document.getElementById('image').addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('previewImg').src = e.target.result;
          document.getElementById('imagePreview').classList.remove('hidden');
        }
        reader.readAsDataURL(file);
      }
    });

    function openModal(mode, id = null) {
      const modal = document.getElementById('locationModal');
      const form = document.getElementById('locationForm');
      const title = document.getElementById('modalTitle');
      const methodField = document.getElementById('methodField');
      const imagePreview = document.getElementById('imagePreview');
      const imageInput = document.getElementById('image');
      const imageRequired = document.getElementById('imageRequired');

      if (mode === 'add') {
        title.textContent = 'Add Location';
        form.action = '{{ route('app.settings.location.store') }}';
        methodField.value = '';
        form.reset();
        imagePreview.classList.add('hidden');
        imageInput.required = true;
        imageRequired.classList.remove('hidden');
      } else if (mode === 'edit') {
        title.textContent = 'Edit Location';
        form.action = `/app/settings/location/${id}/update`;
        methodField.value = 'PUT';
        imageInput.required = false;
        imageRequired.classList.add('hidden');

        // Fetch data using AJAX
        fetch(`/app/settings/location/${id}/edit`)
          .then(response => response.json())
          .then(data => {
            document.getElementById('name').value = data.name;
            document.getElementById('phone').value = data.phone || '';
            document.getElementById('address').value = data.address;
            document.getElementById('google_map').value = data.google_map || '';
            if (data.image) {
              document.getElementById('previewImg').src = data.image;
              imagePreview.classList.remove('hidden');
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Failed to load location data');
          });
      }

      modal.classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('locationModal').classList.add('hidden');
      document.getElementById('locationForm').reset();
      document.getElementById('imagePreview').classList.add('hidden');
    }

    function confirmDelete(id) {
      const modal = document.getElementById('deleteModal');
      const form = document.getElementById('deleteForm');
      form.action = `/app/settings/location/${id}/destroy`;
      modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
      document.getElementById('deleteModal').classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('locationModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
      if (e.target === this) closeDeleteModal();
    });
  </script>
@endsection
