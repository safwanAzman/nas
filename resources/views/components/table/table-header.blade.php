<th {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-50 text-xs leading-4 font-medium uppercase tracking-wider']) }}>
    @if ($sort != "")
        <div class="flex cursor-pointer">
            <span class="mr-2">{{ $value }}</span>
                {{-- @include('pages.misc.sort_icon', ['field' => $sort ]) --}}
        </div>
    @else
        {{ $value }}
    @endif
</th>