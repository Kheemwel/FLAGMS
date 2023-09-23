<div>
    @props(['label', 'click', 'direction', 'sortable'])

    <th @if (isset($click)) wire:click="{{ $click }}" @endif>
        {{ $label }}
        @if (isset($sortable) && isset($direction))
            @if ($direction === 'asc')
                <i aria-hidden="true" class="fa fa-sort-up" style="color : #3C58FF;"></i>
            @elseif ($direction === 'desc')
                <i aria-hidden="true" class="fa fa-sort-down" style="color : #3C58FF;"></i>
            @endif
        @elseif (isset($sortable))
            <i aria-hidden="true" class="fa fa-sort" style="color : lightgray;"></i>
        @endif
    </th>
</div>
