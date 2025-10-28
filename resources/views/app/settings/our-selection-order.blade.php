@extends('layouts.app')
@section('title', 'Our Selection Order')
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
            <span class="ml-1 text-sm font-medium text-gray-400">Our Selection Order</span>
          </div>
        </li>
      </ol>
    </nav>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-700 mb-1">Our Selection Order</h1>
        <p class="text-gray-500 text-sm">Manage the display order of selected products</p>
      </div>
      <button onclick="openModal('add')"
        class="bg-amber-600 hover:bg-amber-700 hover:cursor-pointer text-white px-2 md:px-4 py-2 rounded flex items-center gap-2 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span class="md:block hidden">Add</span>
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

    {{-- Table Section --}}
    <div class="bg-white border border-gray-200 rounded">
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order #</th>
              <th class="px-6 py-3 text-left w-32 text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Name</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($orderDatas as $order)
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="text-sm text-gray-700">{{ $order->order_number }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  @if ($order->categoryProduct)
                    <img src="{{ $order->categoryProduct->first_image_url }}" alt="Product Image"
                      class="w-12 h-12 object-cover rounded">
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="text-sm font-medium text-gray-900">{{ $order->categoryProduct->name ?? '-' }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex gap-2">
                    <button onclick="openModal('edit', {{ $order->id }})"
                      class="text-blue-600 hover:cursor-pointer hover:text-blue-900 transition-colors" title="Edit">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                      </svg>
                    </button>
                    <button onclick="confirmDelete({{ $order->id }})"
                      class="text-red-600 hover:cursor-pointer hover:text-red-900 transition-colors" title="Hapus">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                        </path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                  No data yet
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- Modal Add/Edit --}}
  <div id="orderModal"
    class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white rounded shadow-xl max-w-md w-full">
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
        <h3 id="modalTitle" class="text-xl font-semibold text-gray-600">Add Order Item</h3>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <form id="orderForm" method="POST" action="{{ route('app.settings.our-selection-order.index') }}">
        @csrf
        <div id="methodFieldContainer"></div>
        <div class="px-6 py-4 space-y-4">
          <div>
            <label for="order_number" class="block text-sm font-medium text-gray-600 mb-2">Order Number</label>
            <input type="number" id="order_number" name="order_number" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
              placeholder="e.g., 1">
            @error('order_number')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="category_product_id" class="block text-sm font-medium text-gray-600 mb-2">Product</label>
            <select id="category_product_id" name="category_product_id" required
              class="w-full px-3 py-2 bg-white border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent">
              <option value="">-- Select product --</option>
              @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
              @endforeach
            </select>
            @error('category_product_id')
              <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
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
            <p class="text-sm text-gray-400">Are you sure you want to delete this item? This action cannot be undone.
            </p>
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
      const modal = document.getElementById('orderModal');
      const form = document.getElementById('orderForm');
      const title = document.getElementById('modalTitle');
      const methodFieldContainer = document.getElementById('methodFieldContainer');

      // Reset
      form.reset();
      methodFieldContainer.innerHTML = '';

      if (mode === 'add') {
        title.textContent = 'Add Order Item';
        form.action = '{{ route('app.settings.our-selection-order.index') }}';
      } else if (mode === 'edit') {
        title.textContent = 'Edit Order Item';
        form.action = `/app/settings/our-selection-order/${id}/update`;
        methodFieldContainer.innerHTML = '<input type="hidden" name="_method" value="PUT">';

        fetch(`/app/settings/our-selection-order/${id}/edit`)
          .then(response => response.json())
          .then(data => {
            document.getElementById('order_number').value = data.order_number;
            document.getElementById('category_product_id').value = data.category_product_id;
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Failed to load data');
          });
      }

      modal.classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('orderModal').classList.add('hidden');
      document.getElementById('orderForm').reset();
    }

    function confirmDelete(id) {
      const modal = document.getElementById('deleteModal');
      const form = document.getElementById('deleteForm');
      form.action = `/app/settings/our-selection-order/${id}/destroy`;
      modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
      document.getElementById('deleteModal').classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('orderModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
      if (e.target === this) closeDeleteModal();
    });
  </script>
  {{-- Pagination --}}
  <div class="mt-4">
    {{ $orderDatas->links('vendor.pagination.tailwind') }}
  </div>

@endsection
