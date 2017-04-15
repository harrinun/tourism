@if ($paginator->hasPages())
    <div class="page__pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-prev"><i class="fa fa-caret-left"></i></a>

        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="disabled"><span>{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next"><i class="fa fa-caret-right"></i></a>
        @else
            <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
        @endif
    </div>
@endif