    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div
        x-cloak
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    ></div>
    
    <aside
        x-cloak
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
    >

    
        <div class="mb-6 animate">
            <div class="text-primary">
                <div class="flex justify-center pt-4">
                    <x-logo class="w-24 h-24" /> 
                </div>
                <div class="flex justify-center text-white">
                    <p class="ml-2 italic font-semibold">NAS</p>
                </div>
                <div>
                    <ul class="mt-6 leading-10">
                        <x-sidebar.nav-item title="DASHBOARD" route="{{route('home')}}" uri="home">
                            <x-heroicon-o-chart-pie class="w-7 h-7" />
                        </x-sidebar.nav-item>
                    </ul>
                </div>
            </div>
        </div>
    </aside>