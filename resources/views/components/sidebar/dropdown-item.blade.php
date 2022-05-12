<li onclick="loading()" class="px-2 py-1 text-white transition-colors duration-150">
    <div class="px-1 hover:text-white rounded-lg @if(Route::current()->uri == $uri) text-white @endif">
        <div class="flex items-center px-1 py-1">
            {{$icon}}
            <a class="w-full ml-2 text-sm font-semibold" {{ $attributes }}>{{$title}}</a>
        </div>
    </div>
</li>
