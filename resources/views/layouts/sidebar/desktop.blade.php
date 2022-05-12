<!-- Desktop sidebar -->
<x-sidebar-loading/>
<aside
    x-show="isSideMenuOpenDesktop"
    x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="opacity-0 transform -translate-x-20"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20"
    @keydown.escape="closeSideMenuDesktop"
    class="z-20 flex-shrink-0 hidden px-2 overflow-y-auto bg-white w-60 md:block">

    <div class="mb-6 animate">
        <div class="text-primary">
            <div class="flex justify-center pt-4">
                <x-logo class="w-24 h-24" /> 
            </div>
            <div class="flex justify-center text-black">
                <p class="italic font-semibold text-lg">NAS</p>
            </div> 
            <div>
                <ul class="mt-6 leading-10">
                    <x-sidebar.nav-item title="HOME" route="{{route('home')}}" uri="home">
                        <x-heroicon-o-home class="w-6 h-6" />
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item title="HOME" route="#" uri="">
                        <x-heroicon-o-home class="w-6 h-6" />
                    </x-sidebar.nav-item>

                    <x-sidebar.dropdown-nav-item active="open" title="dropdown" uri="dropdown">
                        <x-slot name="icon">
                            <x-heroicon-o-user-group class="w-6 h-6" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="DropDown" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-6 h-6" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                        </div>
                    </x-sidebar.dropdown-nav-item>
                </ul>
            </div>
        </div>
    </div>
    
</aside>
