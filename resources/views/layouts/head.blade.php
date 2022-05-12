<!DOCTYPE html>
<html x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NAS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <!-- Favicon -->
    <link rel="icon" href="https://www.zakatselangor.com.my/wp-content/uploads/2018/11/favicon.png">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/select2.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/summernote.min.css')}}" rel="stylesheet"/>

    <script src="{{ asset('js/init-alpine.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @livewireStyles
</head>
<style>
    .note-editable ul{
        list-style: disc !important;
        list-style-position: inside !important;
}   
    .note-editable ol {
        list-style: decimal !important;
        list-style-position: inside !important;
    }
</style>
<body class="bg-gray-100 ">
    <div class="flex h-screen " :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts.sidebar.desktop')
        @include('layouts.sidebar.mobile')
        
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            @include('layouts.sidebar.topbar')
            <main class="relative z-0 flex-1 px-6 pb-8 bg-gray-100 sm:h-full">
                <div class="grid pb-10 mt-10">
                    {{-- content --}}
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @livewireScripts

    <script src="{{ url(mix('js/app.js')) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        window.addEventListener('swal',function(e){Swal.fire(e.detail);});
    </script>
    @stack('js')
</body>
</html>
