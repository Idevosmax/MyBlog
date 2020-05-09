@if ($paginator->hasPages())
<div class="pagination-wrapper box-shadow-card m-t-10">
    <nav class="pagination is-centered " role="pagination" aria-label="pagination">
        
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            
            <a href="" class="pagination-previous" disabled>&laquo;></a>
        @else
           
        <a href="{{$paginator->previousPageUrl()}}" class="pagination-previous" rev="prev">&laquo;></a>
        @endif
        <ul class="pagination-list" >
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                
                <li><span class="pagination-ellipsis">&hellip;></span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        
                        <li>
                        <a href="" class="pagination-link is-current ">{{$page}}</a>
                        </li>
                    @else
                       
                    <li><a href="{{$url}}" class="pagination-link">{{$page}}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
 
    </ul>
 
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
           
                <a href="{{$paginator->nextPageUrl()}}" class="pagination-next" rev="next">&raquo;></a>
            @else
           <a href="" class="pagination-next" disabled>&raquo;></a>
            
        @endif
    </nav>
</div>
@endif
