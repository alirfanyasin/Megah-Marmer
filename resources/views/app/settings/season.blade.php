@extends('layouts.app')
@section('title', 'Season Settings')
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
            <span class="ml-1 text-sm font-medium text-gray-400">Season</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-700 mb-1">Season Settings</h1>
        <p class="text-gray-500 text-sm">Manage up to 5 season items</p>
      </div>
      <button onclick="openModal('add')"
        class="bg-amber-600 hover:bg-amber-700 hover:cursor-pointer text-white px-2 md:px-4 py-2 rounded flex items-center gap-2 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span class="md:block hidden">Add Season</span>
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
    <div class="bg-white border border-gray-200 rounded p-6">
      @php $count = $seasons->count(); @endphp
      <div class="flex items-center justify-between mb-4">
        <p class="text-sm text-gray-500">Total seasons: {{ $count }} / 5</p>
      </div>
      @if ($seasons->isEmpty())
        <div class="p-12 text-center text-gray-500">No seasons yet. Click Add Season.</div>
      @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          @foreach ($seasons as $season)
            <div class="border border-gray-200 rounded overflow-hidden">
              <div class="relative w-full h-40 bg-gray-100">
                <img src="{{ asset('storage/' . $season->image) }}" class="w-full h-full object-cover" alt="Season">
              </div>
              <div class="p-4">
                <h4 class="font-semibold text-gray-700">{{ $season->title }}</h4>
                <p class="text-sm text-gray-500 line-clamp-2">{{ $season->description }}</p>
                <div class="mt-3 flex gap-2">
                  <button onclick="openModal('edit', {{ $season->id }})"
                    class="px-3 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 hover:cursor-pointer">Edit</button>
                  <button onclick="confirmDelete({{ $season->id }})"
                    class="px-3 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700 hover:cursor-pointer">Delete</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </div>

  {{-- Modal Add/Edit --}}
  <div id="seasonModal"
    class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-xl max-w-xl w-full max-h-[90vh] overflow-y-auto">
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
        <h3 id="modalTitle" class="text-xl font-semibold text-gray-600">Add Season</h3>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <form id="seasonForm" method="POST" action="{{ route('season.store') }}" enctype="multipart/form-data">
        @csrf
        <div id="methodFieldContainer"></div>
        <div class="px-6 py-4 space-y-4">
          <div>
            <label for="title" class="block text-sm font-medium text-gray-600 mb-2">Title *</label>
            <input type="text" id="title" name="title" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="e.g., Autumn Collection">
            @error('title')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="description" class="block text-sm font-medium text-gray-600 mb-2">Description *</label>
            <textarea id="description" name="description" rows="3" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="Short description..."></textarea>
            @error('description')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div id="currentImageWrapper" class="hidden">
            <label class="block text-sm font-medium text-gray-600 mb-2">Current Image</label>
            <div class="relative w-full h-40 bg-gray-100 rounded overflow-hidden">
              <img id="currentImage" src="" alt="Season Image" class="w-full h-full object-cover">
            </div>
          </div>
          <div>
            <label for="image" class="block text-sm font-medium text-gray-600 mb-2">Image
            </label>
            <input type="file" id="image" name="image"
              accept="image/jpeg,image/jpg,image/png,image/webp,image/avif"
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent">
            @error('image')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
            <p class="text-xs text-gray-400 mt-1">Supported: JPEG, JPG, PNG, WEBP, AVIF. Max 5MB.</p>
          </div>
          <div id="newImageWrapper" class="hidden">
            <label class="block text-sm font-medium text-gray-600 mb-2">New Image Preview</label>
            <div class="relative w-full h-40 bg-gray-100 rounded overflow-hidden">
              <img id="newImage" src="" alt="New Image" class="w-full h-full object-cover">
            </div>
          </div>
        </div>
        <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50">
          <button type="button" onclick="closeModal()"
            class="px-4 py-2 bg-gray-200 text-gray-700 hover:cursor-pointer rounded hover:bg-gray-300 transition-colors">
            Cancel
          </button>
          <button type="submit"
            class="px-4 py-2 bg-amber-600 hover:cursor-pointer text-white rounded hover:bg-amber-700 transition-colors">
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
            <h3 class="text-lg font-semibold text-gray-600 mb-1">Confirm Delete</h3>
            <p class="text-sm text-gray-400">Are you sure you want to delete this phone number? This action cannot be
              undone.</p>
          </div>
        </div>
      </div>
      <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50">
        <button onclick="closeDeleteModal()"
          class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:cursor-pointer hover:bg-gray-300 transition-colors">
          Cancel
        </button>
        <form id="deleteForm" method="POST" action="#" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit"
            class="px-4 py-2 bg-red-500 hover:cursor-pointer text-white rounded hover:bg-red-600 transition-colors">
            Yes, Delete
          </button>
        </form>
      </div>
    </div>
  </div>

  <script>
    function openModal(mode, id = null) {
      const modal = document.getElementById('seasonModal');
      const form = document.getElementById('seasonForm');
      const title = document.getElementById('modalTitle');
      const methodFieldContainer = document.getElementById('methodFieldContainer');
      const currentImageWrapper = document.getElementById('currentImageWrapper');
      const currentImage = document.getElementById('currentImage');
      const newImageWrapper = document.getElementById('newImageWrapper');
      const newImage = document.getElementById('newImage');
      const imageInput = document.getElementById('image');

      // Reset form
      form.reset();
      methodFieldContainer.innerHTML = '';
      currentImageWrapper.classList.add('hidden');
      newImageWrapper.classList.add('hidden');
      newImage.src = '';

      // Bind preview handler
      imageInput.onchange = function(e) {
        const file = e.target.files && e.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(ev) {
            newImage.src = ev.target.result;
            newImageWrapper.classList.remove('hidden');
          }
          reader.readAsDataURL(file);
        } else {
          newImageWrapper.classList.add('hidden');
          newImage.src = '';
        }
      }

      if (mode === 'add') {
        title.textContent = 'Add Season';
        form.action = '{{ route('season.store') }}';
      } else if (mode === 'edit') {
        title.textContent = 'Edit Season';
        form.action = `/app/season/${id}/update`;

        // Add PUT method for edit
        methodFieldContainer.innerHTML = '<input type="hidden" name="_method" value="PUT">';

        // Fetch data menggunakan AJAX
        fetch(`/app/season/${id}/edit`)
          .then(response => response.json())
          .then(data => {
            document.getElementById('title').value = data.title;
            document.getElementById('description').value = data.description;
            if (data.image) {
              currentImageWrapper.classList.remove('hidden');
              currentImage.src = `/storage/${data.image}`;
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Failed to load season data');
          });
      }

      modal.classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('seasonModal').classList.add('hidden');
      document.getElementById('seasonForm').reset();
    }

    function confirmDelete(id) {
      const modal = document.getElementById('deleteModal');
      const form = document.getElementById('deleteForm');
      form.action = `/app/season/${id}/destroy`;
      modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
      document.getElementById('deleteModal').classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('seasonModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
      if (e.target === this) closeDeleteModal();
    });
  </script>
@endsection
