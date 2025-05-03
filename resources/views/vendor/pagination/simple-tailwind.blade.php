@if ($paginator->hasPages())
    <nav id="pagination-nav" role="navigation" aria-label="Pagination Navigation" class="flex justify-between gap-1">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="grid h-[30px] w-[30px] scale-[0.95] place-content-center rounded-full bg-red-400">
                <i class="fa-solid fa-arrow-left text-white"></i>
            </span>
        @else
            <a rel="prev" href="{{ $paginator->previousPageUrl() }}&scroll=true" class="grid h-[30px] w-[30px] place-content-center rounded-full bg-red-900">
                <i class="fa-solid fa-arrow-left text-white"></i>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a rel="next" href="{{ $paginator->nextPageUrl() }}&scroll=true" class="grid h-[30px] w-[30px] place-content-center rounded-full bg-red-900">
                <i class="fa-solid fa-arrow-right text-white"></i>
            </a>
        @else
            <span class="grid h-[30px] w-[30px] scale-[0.95] place-content-center rounded-full bg-red-400">
                <i class="fa-solid fa-arrow-right text-white"></i>
            </span>
        @endif
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('scroll')) {
                document.getElementById('pagination-nav').scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>
@endif