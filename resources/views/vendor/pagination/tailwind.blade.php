@if ($paginator->hasPages())
  <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
    {{-- Mobile: Prev / Next --}}
    <div class="flex justify-between flex-1 sm:hidden">
      @if ($paginator->onFirstPage())
        <span
          class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-white border border-gray-300 cursor-default rounded-md">
          {!! __('pagination.previous') !!}
        </span>
      @else
        <a href="{{ $paginator->previousPageUrl() }}"
          class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
          {!! __('pagination.previous') !!}
        </a>
      @endif

      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
          class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
          {!! __('pagination.next') !!}
        </a>
      @else
        <span
          class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-400 bg-white border border-gray-300 cursor-default rounded-md">
          {!! __('pagination.next') !!}
        </span>
      @endif
    </div>

    {{-- Desktop: info + number pills --}}
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-600">
          {!! __('Showing') !!}
          @if ($paginator->firstItem())
            <span class="font-semibold">{{ $paginator->firstItem() }}</span>
            {!! __('to') !!}
            <span class="font-semibold">{{ $paginator->lastItem() }}</span>
          @else
            {{ $paginator->count() }}
          @endif
          {!! __('of') !!}
          <span class="font-semibold">{{ $paginator->total() }}</span>
          {!! __('results') !!}
        </p>
      </div>

      <div>
        <span class="relative z-0 inline-flex rtl:flex-row-reverse rounded-full border border-gray-200 bg-white p-1">
          {{-- Prev --}}
          @if ($paginator->onFirstPage())
            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-400">
              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="{{ __('pagination.previous') }}"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-full hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          @endif

          {{-- Numbers --}}
          @foreach ($elements as $element)
            {{-- Separator --}}
            @if (is_string($element))
              <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500">…</span>
            @endif

            {{-- Pages --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span aria-current="page"
                    class="inline-flex justify-center items-center w-8 h-8 text-sm font-semibold rounded-full bg-black text-white">
                    {{ $page }}
                  </span>
                @else
                  <a href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                    class="inline-flex  justify-center items-center w-8 h-8 text-sm font-medium rounded-full text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Next --}}
          @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('pagination.next') }}"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-full hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          @else
            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-400">
              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          @endif
        </span>
      </div>
    </div>
  </nav>
@endif
