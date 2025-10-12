@extends('layouts.app')
@section('title', ($data->name ?? 'Category Menu') . ' - Sub Categories')
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
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-600">{{ $data->name }}</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-1">{{ $data->name }}</h1>
        <p class="text-gray-500 text-sm">Kelola sub kategori untuk {{ $data->name }}</p>
      </div>
      <div class="flex gap-2">
        <a href="{{ url()->previous() }}"
          class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded flex items-center gap-2 transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
          </svg>
          <span class="hidden sm:block">Back</span>
        </a>
        <button onclick="openModal('add')"
          class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded flex items-center gap-2 transition-colors shadow-sm">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
          </svg>
          <span>Add Sub Category</span>
        </button>
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
          <p class="font-medium">Success!</p>
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
      @if ($dataSubMenu->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
          @foreach ($dataSubMenu as $item)
            <div
              class="bg-white border border-gray-200 rounded shadow-sm hover:shadow-md transition-all duration-200 p-3 flex flex-col items-center text-center group">
              <div class="w-full h-56 mb-4 relative overflow-hidden">
                @if ($item->image && file_exists(public_path('storage/' . $item->image)))
                  <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                    class="w-full h-full object-cover rounded ring-2 ring-gray-200 group-hover:scale-110 duration-300 ease-out group-hover:rotate-[1.5deg] transition-all">
                @else
                  <img src="{{ $item->image }}" alt="{{ $item->name }}"
                    class="w-full h-full object-cover rounded ring-2 ring-gray-200 group-hover:scale-110 duration-300 ease-out group-hover:rotate-[1.5deg] transition-all">
                @endif
              </div>
              <h2 class="text-lg font-semibold text-gray-800 mb-3 line-clamp-2">{{ $item->name }}</h2>

              <div class="flex item-center justify-center gap-2">
                <a href="{{ route('app.products.index', ['id_category' => $data->id, 'id_sub_category' => $item->id]) }}"
                  class="flex-1 bg-gray-900 hover:text-amber-600 text-white w-10 h-10 rounded-full text-sm font-medium transition-colors flex items-center justify-center gap-1">
                  <iconify-icon icon="material-symbols:menu-rounded" width="20" height="20"></iconify-icon>
                </a>
                <button onclick="openModal('edit', {{ $item->id }})"
                  class="flex-1 bg-gray-900 hover:text-amber-600 text-white w-10 h-10 rounded-full text-sm font-medium transition-colors flex items-center justify-center gap-1">
                  <iconify-icon icon="uil:edit" width="20" height="20"></iconify-icon>
                </button>
                <button onclick="confirmDelete({{ $item->id }}, '{{ $item->name }}')"
                  class="flex-1 bg-gray-900 hover:text-amber-600 text-white w-10 h-10 rounded-full text-sm font-medium transition-colors flex items-center justify-center gap-1">
                  <iconify-icon icon="mi:delete" width="20" height="20"></iconify-icon>
                </button>
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
          <h3 class="text-lg font-medium text-gray-700 mb-2">There are no subcategories yet</h3>
          <p class="text-gray-500 mb-4">Start by adding the first subcategory for the {{ $data->name }}</p>
          <button onclick="openModal('add')"
            class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded inline-flex items-center gap-2 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Add Sub Category
          </button>
        </div>
      @endif
    </section>
  </div>

  {{-- Modal Add/Edit --}}
  <div id="categoryModal"
    class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-2xl max-w-md w-full transform transition-all" onclick="event.stopPropagation()">
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
        <h3 id="modalTitle" class="text-xl font-semibold text-gray-800">Add Sub Category</h3>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <form id="categoryForm" method="POST" action="{{ route('category-sub-menu.store', $data->id) }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="methodField" name="_method" value="">
        <input type="hidden" name="category_id" value="{{ $data->id }}">

        <div class="px-6 py-4 space-y-4 max-h-[calc(100vh-300px)] overflow-y-auto">
          {{-- Name Field --}}
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
              Sub Category Name <span class="text-red-500">*</span>
            </label>
            <input type="text" id="name" name="name" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-all"
              placeholder="Contoh: Living Room, Kitchen, dll">
            @error('name')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Image Field --}}
          <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
              Image <span id="imageRequiredLabel" class="text-red-500">*</span>
            </label>
            <div class="relative">
              <input type="file" id="image" name="image"
                accept="image/jpeg,image/png,image/jpg,image/avif,image/webp"
                class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-amber-600 file:text-white hover:file:bg-amber-700 transition-all cursor-pointer">
            </div>
            <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, AVIF, WEBP (Max: 2MB)</p>
            @error('image')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Image Preview --}}
          <div id="imagePreview" class="hidden">
            <label class="block text-sm font-medium text-gray-700 mb-2">Image Preview</label>
            <div class="relative inline-block">
              <img id="previewImg" src="" alt="Preview"
                class="w-32 h-32 object-cover rounded border-2 border-gray-300 shadow-sm">
              <button type="button" onclick="removePreview()"
                class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                  </path>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50 rounded-b-lg">
          <button type="button" onclick="closeModal()"
            class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded hover:bg-gray-50 transition-colors">
            Cancel
          </button>
          <button type="submit"
            class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition-colors shadow-sm">
            <span id="submitButtonText">Save</span>
          </button>
        </div>
      </form>
    </div>
  </div>

  {{-- Modal Delete Confirmation --}}
  <div id="deleteModal"
    class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-2xl max-w-md w-full transform transition-all" onclick="event.stopPropagation()">
      <div class="px-6 py-4">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-red-100 flex items-center justify-center">
            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
              </path>
            </svg>
          </div>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-gray-800 mb-1">Konfirmasi Hapus</h3>
            <p class="text-sm text-gray-600">Apakah Anda yakin ingin menghapus sub kategori <strong
                id="deleteCategoryName"></strong>?</p>
          </div>
        </div>
      </div>
      <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50 rounded-b-lg">
        <button onclick="closeDeleteModal()"
          class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded hover:bg-gray-50 transition-colors">
          Batal
        </button>
        <form id="deleteForm" method="POST" action="#" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit"
            class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition-colors shadow-sm">
            Ya, Hapus
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
        // Validate file size (2MB)
        if (file.size > 2 * 1024 * 1024) {
          alert('Ukuran file terlalu besar! Maksimal 2MB');
          this.value = '';
          return;
        }

        // Validate file type
        const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/avif', 'image/webp'];
        if (!validTypes.includes(file.type)) {
          alert('Format file tidak valid! Gunakan JPG, PNG, AVIF, atau WEBP');
          this.value = '';
          return;
        }

        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('previewImg').src = e.target.result;
          document.getElementById('imagePreview').classList.remove('hidden');
        }
        reader.readAsDataURL(file);
      }
    });

    function removePreview() {
      document.getElementById('image').value = '';
      document.getElementById('imagePreview').classList.add('hidden');
      document.getElementById('previewImg').src = '';
    }

    function openModal(mode, id = null) {
      const modal = document.getElementById('categoryModal');
      const form = document.getElementById('categoryForm');
      const methodField = document.getElementById('methodField');
      const imageInput = document.getElementById('image');
      const imageRequiredLabel = document.getElementById('imageRequiredLabel');
      const imagePreview = document.getElementById('imagePreview');

      form.reset();
      imagePreview.classList.add('hidden');

      if (mode === 'add') {
        methodField.value = '';
        imageInput.required = true;
        imageRequiredLabel.classList.remove('hidden');
      } else if (mode === 'edit' && id) {
        // update sub-kategori (id = id subkategori)
        form.action = `/app/category/${id}/sub-menu/update`;
        methodField.value = 'PUT';
        imageInput.required = false;
        imageRequiredLabel.classList.add('hidden');

        fetch(`/app/category/${id}/sub-menu/edit`)
          .then(r => {
            if (!r.ok) throw new Error();
            return r.json();
          })
          .then(data => {
            document.getElementById('name').value = data.name ?? '';
            if (data.image) {
              const url = data.image.startsWith('http') ? data.image : `/storage/${data.image}`;
              document.getElementById('previewImg').src = url;
              imagePreview.classList.remove('hidden');
            }
          })
          .catch(() => {
            alert('Gagal memuat data sub kategori.');
          });
      }

      modal.classList.remove('hidden');
    }


    function closeModal() {
      const modal = document.getElementById('categoryModal');
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
      document.getElementById('categoryForm').reset();
      removePreview();
    }

    function confirmDelete(id, name) {
      const modal = document.getElementById('deleteModal');
      const form = document.getElementById('deleteForm');
      const categoryName = document.getElementById('deleteCategoryName');

      // PERBAIKI: gunakan prefix /app/category/... sesuai rute destroy sub-kategori
      form.action = `/app/category/${id}/sub-menu/destroy`;
      categoryName.textContent = name;
      modal.classList.remove('hidden');
    }


    function closeDeleteModal() {
      const modal = document.getElementById('deleteModal');
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    document.getElementById('categoryModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
      if (e.target === this) closeDeleteModal();
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        closeModal();
        closeDeleteModal();
      }
    });

    // Auto-hide success/error messages after 5 seconds
    document.addEventListener('DOMContentLoaded', function() {
      const alerts = document.querySelectorAll('[role="alert"]');
      alerts.forEach(alert => {
        setTimeout(() => {
          alert.style.transition = 'opacity 0.5s';
          alert.style.opacity = '0';
          setTimeout(() => alert.remove(), 500);
        }, 5000);
      });
    });
  </script>
@endsection
