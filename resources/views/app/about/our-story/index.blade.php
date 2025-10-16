@extends('layouts.app')
@section('title', 'Our Story')
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
            <span class="ml-1 text-sm font-medium text-gray-400">About</span>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-400">Our Story</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-700 mb-1">Our Story Management</h1>
        <p class="text-gray-500 text-sm">Manage the content sections for your company's story page</p>
      </div>
      <button onclick="openModal('add')"
        class="bg-amber-600 hover:bg-amber-700 hover:cursor-pointer text-white px-2 md:px-4 py-2 rounded flex items-center gap-2 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span class="md:block hidden">Add Story Section</span>
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
    @if ($stories->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($stories as $story)
          <div class="bg-white border border-gray-200 rounded overflow-hidden hover:shadow-lg transition-shadow">
            {{-- Image --}}
            <div class="h-48 bg-gray-100 overflow-hidden">
              @if ($story->image)
                <img src="{{ asset('storage/' . $story->image) }}" alt="{{ $story->title }}"
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

            {{-- Content --}}
            <div class="p-4">
              <div class="flex items-start justify-between mb-2">
                <h3 class="text-lg font-semibold text-gray-700 flex-1">{{ $story->title }}</h3>
                <div class="flex items-center gap-2">
                  <span
                    class="px-2 py-1 text-xs rounded {{ $story->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                    {{ $story->is_active ? 'Active' : 'Inactive' }}
                  </span>
                  <span class="px-2 py-1 text-xs bg-amber-100 text-amber-700 rounded">
                    Order: {{ $story->order }}
                  </span>
                </div>
              </div>
              <p class="text-sm text-gray-600 line-clamp-3 mb-4">{{ $story->description }}</p>

              {{-- Actions --}}
              <div class="flex gap-2 pt-3 border-t border-gray-100">
                <button onclick="openModal('edit', {{ $story->id }})"
                  class="flex-1 text-blue-600 hover:cursor-pointer hover:text-blue-900 py-2 px-3 hover:bg-blue-50 rounded transition-colors text-sm font-medium">
                  <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                  </svg>
                  Edit
                </button>
                <button onclick="confirmDelete({{ $story->id }})"
                  class="flex-1 text-red-600 hover:cursor-pointer hover:text-red-900 py-2 px-3 hover:bg-red-50 rounded transition-colors text-sm font-medium">
                  <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                  </svg>
                  Delete
                </button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <div class="bg-white border border-gray-200 rounded p-12 text-center">
        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold text-gray-700 mb-2">No Story Sections Yet</h3>
        <p class="text-gray-500 mb-4">Start building your company's story by adding content sections</p>
        <button onclick="openModal('add')"
          class="bg-amber-600 hover:bg-amber-700 hover:cursor-pointer text-white px-6 py-2 rounded transition-colors">
          Add First Section
        </button>
      </div>
    @endif
  </div>

  {{-- Modal Add/Edit --}}
  <div id="storyModal"
    class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 backdrop-blur-sm overflow-y-auto">
    <div class="bg-white rounded shadow-xl max-w-2xl w-full my-8">
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
        <h3 id="modalTitle" class="text-xl font-semibold text-gray-600">Add Story Section</h3>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <form id="storyForm" method="POST" action="{{ route('app.about.our-story.store') }}" enctype="multipart/form-data">
        @csrf
        <div id="methodFieldContainer"></div>
        <div class="px-6 py-4 space-y-4 max-h-[calc(100vh-200px)] overflow-y-auto">
          {{-- Title --}}
          <div>
            <label for="title" class="block text-sm font-medium text-gray-600 mb-2">Title *</label>
            <input type="text" id="title" name="title" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="e.g., Our Beginning">
            @error('title')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Description --}}
          <div>
            <label for="description" class="block text-sm font-medium text-gray-600 mb-2">Description *</label>
            <textarea id="description" name="description" rows="6" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent resize-none"
              placeholder="Tell your story..."></textarea>
            @error('description')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Image --}}
          <div>
            <label for="image" class="block text-sm font-medium text-gray-600 mb-2">Image</label>
            <div class="mt-1 flex items-center gap-4">
              <div id="imagePreviewContainer" class="hidden">
                <img id="imagePreview" src="" alt="Preview" class="w-32 h-32 object-cover rounded border border-gray-300">
              </div>
              <div class="flex-1">
                <label for="image"
                  class="cursor-pointer inline-flex items-center px-4 py-2 border border-gray-300 rounded text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                  </svg>
                  Choose Image
                </label>
                <input type="file" id="image" name="image" accept="image/*" class="hidden" onchange="previewImage(event)">
                <p class="text-xs text-gray-400 mt-1">PNG, JPG, GIF up to 2MB</p>
              </div>
            </div>
            @error('image')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Order --}}
          <div>
            <label for="order" class="block text-sm font-medium text-gray-600 mb-2">Display Order *</label>
            <input type="number" id="order" name="order" required min="0" value="0"
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent">
            <p class="text-xs text-gray-400 mt-1">Lower numbers appear first</p>
            @error('order')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Status --}}
          <div class="flex items-center">
            <input type="checkbox" id="is_active" name="is_active" value="1" checked
              class="w-4 h-4 text-amber-600 bg-white border-gray-300 rounded focus:ring-amber-600">
            <label for="is_active" class="ml-2 text-sm font-medium text-gray-600">Active (Show on website)</label>
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
            <p class="text-sm text-gray-400">Are you sure you want to delete this story section? This action cannot be
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
    function previewImage(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('imagePreview').src = e.target.result;
          document.getElementById('imagePreviewContainer').classList.remove('hidden');
        }
        reader.readAsDataURL(file);
      }
    }

    function openModal(mode, id = null) {
      const modal = document.getElementById('storyModal');
      const form = document.getElementById('storyForm');
      const title = document.getElementById('modalTitle');
      const methodFieldContainer = document.getElementById('methodFieldContainer');
      const imagePreviewContainer = document.getElementById('imagePreviewContainer');

      // Reset form
      form.reset();
      methodFieldContainer.innerHTML = '';
      imagePreviewContainer.classList.add('hidden');

      if (mode === 'add') {
        title.textContent = 'Add Story Section';
        form.action = '{{ route('app.about.our-story.store') }}';
        document.getElementById('is_active').checked = true;
      } else if (mode === 'edit') {
        title.textContent = 'Edit Story Section';
        form.action = `/app/about/our-story/${id}/update`;

        // Add PUT method for edit
        methodFieldContainer.innerHTML = '<input type="hidden" name="_method" value="PUT">';

        // Fetch data menggunakan AJAX
        fetch(`/app/about/our-story/${id}/edit`)
          .then(response => response.json())
          .then(data => {
            document.getElementById('title').value = data.title;
            document.getElementById('description').value = data.description;
            document.getElementById('order').value = data.order;
            document.getElementById('is_active').checked = data.is_active;

            if (data.image) {
              document.getElementById('imagePreview').src = `/storage/${data.image}`;
              imagePreviewContainer.classList.remove('hidden');
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Failed to load story data');
          });
      }

      modal.classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('storyModal').classList.add('hidden');
      document.getElementById('storyForm').reset();
      document.getElementById('imagePreviewContainer').classList.add('hidden');
    }

    function confirmDelete(id) {
      const modal = document.getElementById('deleteModal');
      const form = document.getElementById('deleteForm');
      form.action = `/app/about/our-story/${id}/destroy`;
      modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
      document.getElementById('deleteModal').classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('storyModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
      if (e.target === this) closeDeleteModal();
    });
  </script>
@endsection