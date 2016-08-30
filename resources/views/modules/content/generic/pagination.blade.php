<div aria-label="Page navigation" style="text-align:center">
  <ul class="pagination">
    @if($active > 1)
        <li>
          <a href="{{ preg_replace("/\{page\}/", $active - 1, $url) }}" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
    @endif
    
    @for($page = $active - $interval > 0 ? $active - $interval : 1; $page <= $active + $interval && $page <= $pages; $page++)
        @if($page === $active)
            <li class="active">
        @else
            <li>
        @endif
            <a href="{{ preg_replace("/\{page\}/", $page, $url) }}">{{ $page }}</a>
        </li>
    @endfor
    
    @if($active < $pages)
    <li>
      <a href="{{ preg_replace("/\{page\}/", $active + 1, $url) }}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    @endif
  </ul>
</div>