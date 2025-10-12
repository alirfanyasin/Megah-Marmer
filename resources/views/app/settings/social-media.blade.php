@extends('layouts.app')
@section('title', 'Social Media Settings')
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
            <span class="ml-1 text-sm font-medium text-gray-400">Social Media</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-700 mb-1">Social Media</h1>
        <p class="text-gray-500 text-sm">Manage social media links</p>
      </div>
      <button onclick="openModal('add')"
        class="bg-amber-600 hover:bg-amber-700 text-white px-2 md:px-4 py-2 rounded flex items-center gap-2 transition-colors cursor-pointer">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span class="md:block hidden">Add Social Media</span>
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
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      @forelse ($dataSocialMedia as $social)
        <div
          class="bg-white border border-gray-200 rounded shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col">
          <div class="flex items-start justify-between mb-4">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 bg-amber-600/10 rounded-full flex items-center justify-center">
                <iconify-icon icon="{{ $social->icon }}" width="24" height="24"
                  class="text-amber-600"></iconify-icon>
              </div>
              <div>
                <h3 class="text-lg font-bold text-gray-800">{{ $social->name }}</h3>
              </div>
            </div>
          </div>

          <div class="mb-4 flex-grow">
            <a href="{{ $social->link }}" target="_blank"
              class="text-sm text-amber-600 hover:text-amber-700 break-all cursor-pointer">
              {{ $social->link }}
            </a>
          </div>

          <div class="flex gap-2">
            <button onclick="openModal('edit', {{ $social->id }})"
              class="flex-1 flex items-center justify-center gap-2 px-4 py-2 bg-black hover:text-amber-600 text-white rounded transition-colors cursor-pointer">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                </path>
              </svg>
              <span class="text-sm font-medium">Edit</span>
            </button>
            <button onclick="confirmDelete({{ $social->id }})"
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
      @empty
        <div class="col-span-full bg-white border border-gray-200 rounded-lg shadow-sm p-12">
          <div class="flex flex-col items-center justify-center text-center">
            <svg class="w-20 h-20 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
              </path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">No social media yet</h3>
            <p class="text-gray-400 mb-6">Click "Add Social Media" button to add a new link</p>
            <button onclick="openModal('add')"
              class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-3 rounded-lg flex items-center gap-2 transition-colors cursor-pointer">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              <span>Add Your First Social Media</span>
            </button>
          </div>
        </div>
      @endforelse
    </div>
  </div>

  {{-- Modal Add/Edit --}}
  <div id="socialMediaModal"
    class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
        <h3 id="modalTitle" class="text-xl font-semibold text-gray-600">Add Social Media</h3>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <form id="socialMediaForm" method="POST" action="{{ route('app.settings.social-media.store') }}">
        @csrf
        <input type="hidden" id="methodField" name="_method" value="">
        <div class="px-6 py-4 space-y-4">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-600 mb-2">Name <span
                class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="e.g., Facebook, Instagram, Twitter">
            @error('name')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="icon" class="block text-sm font-medium text-gray-600 mb-2">Icon <span
                class="text-red-500">*</span></label>
            <input type="text" id="icon" name="icon" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="e.g., mdi:facebook, mdi:instagram">
            <p class="text-xs text-gray-400 mt-1">Browse icons at <a href="https://icon-sets.iconify.design/"
                target="_blank" class="text-amber-600 hover:text-amber-700 cursor-pointer">iconify.design</a></p>
            @error('icon')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="link" class="block text-sm font-medium text-gray-600 mb-2">Link <span
                class="text-red-500">*</span></label>
            <input type="url" id="link" name="link" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="https://facebook.com/yourpage">
            @error('link')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div id="iconPreview" class="hidden">
            <label class="block text-sm font-medium text-gray-600 mb-2">Icon Preview</label>
            <div class="flex items-center gap-3 p-4 bg-gray-50 rounded border border-gray-200">
              <div class="w-12 h-12 bg-amber-600/10 rounded-full flex items-center justify-center">
                <iconify-icon id="previewIcon" icon="mdi:help-circle" width="24" height="24"
                  class="text-amber-600"></iconify-icon>
              </div>
              <span id="previewName" class="text-gray-700 font-medium"></span>
            </div>
          </div>
        </div>
        <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
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
            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
              </path>
            </svg>
          </div>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-gray-600 mb-1">Delete Confirmation</h3>
            <p class="text-sm text-gray-400">Are you sure you want to delete this social media? This action cannot be
              undone.</p>
          </div>
        </div>
      </div>
      <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200">
        <button onclick="closeDeleteModal()"
          class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors cursor-pointer">
          Cancel
        </button>
        <form id="deleteForm" method="POST" action="#" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit"
            class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition-colors cursor-pointer">
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  <script>
    // Icon preview functionality
    document.getElementById('icon').addEventListener('input', function(e) {
      const iconValue = e.target.value.trim();
      const nameValue = document.getElementById('name').value.trim();
      const preview = document.getElementById('iconPreview');
      const previewIcon = document.getElementById('previewIcon');
      const previewName = document.getElementById('previewName');

      if (iconValue) {
        previewIcon.setAttribute('icon', iconValue);
        previewName.textContent = nameValue || 'Preview';
        preview.classList.remove('hidden');
      } else {
        preview.classList.add('hidden');
      }
    });

    document.getElementById('name').addEventListener('input', function(e) {
      const nameValue = e.target.value.trim();
      const previewName = document.getElementById('previewName');
      if (nameValue) {
        previewName.textContent = nameValue;
      }
    });

    function openModal(mode, id = null) {
      const modal = document.getElementById('socialMediaModal');
      const form = document.getElementById('socialMediaForm');
      const title = document.getElementById('modalTitle');
      const methodField = document.getElementById('methodField');
      const iconPreview = document.getElementById('iconPreview');

      if (mode === 'add') {
        title.textContent = 'Add Social Media';
        form.action = '{{ route('app.settings.social-media.store') }}';
        methodField.value = '';
        form.reset();
        iconPreview.classList.add('hidden');
      } else if (mode === 'edit') {
        title.textContent = 'Edit Social Media';
        form.action = `/app/settings/social-media/${id}/update`;
        methodField.value = 'PUT';

        // Fetch data using AJAX
        fetch(`/app/settings/social-media/${id}/edit`)
          .then(response => response.json())
          .then(data => {
            document.getElementById('name').value = data.name;
            document.getElementById('icon').value = data.icon;
            document.getElementById('link').value = data.link;

            // Show preview
            document.getElementById('previewIcon').setAttribute('icon', data.icon);
            document.getElementById('previewName').textContent = data.name;
            iconPreview.classList.remove('hidden');
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Failed to load social media data');
          });
      }

      modal.classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('socialMediaModal').classList.add('hidden');
      document.getElementById('socialMediaForm').reset();
      document.getElementById('iconPreview').classList.add('hidden');
    }

    function confirmDelete(id) {
      const modal = document.getElementById('deleteModal');
      const form = document.getElementById('deleteForm');
      form.action = `/app/settings/social-media/${id}/destroy`;
      modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
      document.getElementById('deleteModal').classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('socialMediaModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
      if (e.target === this) closeDeleteModal();
    });
  </script>
@endsection
