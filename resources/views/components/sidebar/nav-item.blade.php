
<li onclick="loading()" class="relative px-2 py-1 ">
    <a class="inline-flex items-center w-full text-sm font-semibold uppercase  cursor-pointer p-2
        @if(Route::current()->uri == $uri)
        bg-blue-500 rounded-lg text-white
        @else
        transform  hover:scale-105 transition duration-300 
        text-black hover:text-primary
        @endif" href="{{$route}}">
        {{$slot}}
        <span class="ml-4">{{$title}}</span>
    </a>
</li>