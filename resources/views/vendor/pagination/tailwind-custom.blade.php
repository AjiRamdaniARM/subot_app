@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination" class="inline-flex space-x-2">
        @if ($paginator->onFirstPage())
            <span class="px-3 py-2 bg-gray-300 text-gray-500 rounded-lg cursor-not-allowed">&laquo;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 bg-[#FACC15] text-white rounded-lg hover:bg-[#DAB10BFF]">&laquo;</a>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-2 bg-gray-300 text-gray-500 rounded-lg">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-2 bg-[#0E2C75] text-white rounded-lg">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-2 bg-white text-gray-700 rounded-lg hover:bg-gray-200">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 bg-[#FACC15]  text-white rounded-lg hover:bg-[#DAB10BFF]">&raquo;</a>
        @else
            <span class="px-3 py-2 bg-gray-300 text-gray-500 rounded-lg cursor-not-allowed">&raquo;</span>
        @endif
    </nav>
@endif
