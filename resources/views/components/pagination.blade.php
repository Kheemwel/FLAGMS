<div>
    @if ($paginator->hasPages())
        <div style="margin-top: 10rem;">
            <ul class="pagination justify-content-center">
                @if ($paginator->onFirstPage())
                    <li class="paginate_button page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="paginate_button page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="0">Previous</a>
                    </li>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="paginate_button page-item disabled">
                            <span class="page-link">{{ $element }}</span>
                        </li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="paginate_button page-item active">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="paginate_button page-item">
                                    <a class="page-link" href="{{ $url }}" tabindex="0">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="paginate_button page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" tabindex="0">Next</a>
                    </li>
                @else
                    <li class="paginate_button page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </div>
    @endif
</div>
