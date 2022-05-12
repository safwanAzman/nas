<header class="py-2 bg-white relative border-r-2 border-l-2" >
    <div class="flex items-center justify-between px-6 mx-auto">
        <div class="flex items-center space-x-2 ">

            <!-- Mobile hamburger -->
            <button class="-ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple bg-primary p-2 "
                @click="toggleSideMenu" aria-label="Menu">
                <x-heroicon-o-menu class="w-6 h-6 text-white" />
            </button>

            <!-- Desktop hamburger -->
            <div class="hidden sm:block" >
                <div class="flex justify-center ">
                    <button class="p-1 -ml-1 rounded-md focus:outline-none"
                        @click="toggleSideMenuDesktop" aria-label="Menu">
                        <x-heroicon-o-chevron-double-left  x-show="isSideMenuOpenDesktop" class="w-6 h-6 text-black"   x-cloak />
                        <x-heroicon-o-chevron-double-right  x-show="!isSideMenuOpenDesktop" class="w-6 h-6 text-black"  x-cloak/>
                    </button>
                </div>
            </div>

            </div>

            <ul class="flex items-center flex-shrink-0 space-x-6">
                <div class="py-6 border-r-2 border-gray-200"></div>
                <!-- Notifications menu -->
                <li class="relative" x-data="{open:false}">
                    <button class="p-2 text-white align-middle rounded-full shadow-xl bg-primary focus:outline-none "
                        @click="open=!open" @keydown.escape="open=false" aria-haspopup="true">
                        <div class="flex">
                            <x-heroicon-o-bell class="w-6 h-6" />
                        </div>
                        <!-- Notification badge -->
                        <span aria-hidden="true"
                            class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                    </button>
                    <div x-show="open" x-cloak>
                        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @keydown.escape="open=false" 
                            @click.away="open = !open"
                            class="absolute right-0 z-50 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white rounded-md shadow-md">
                            <li class="flex">
                                <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold text-gray-500 transition-colors duration-150 rounded-md "
                                    href="#">
                                    <span>Messages</span>
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                        13
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Profile menu -->
                <li class="relative" x-data="{open:false}">
                    <button
                        class="p-2 text-white align-middle rounded-full shadow-xl bg-primary focus:outline-none "
                        @click="open=!open" @keydown.escape="open=false" aria-haspopup="true">
                        <div class="flex">
                            <x-heroicon-o-cog class="w-6 h-6" />
                        </div>
                    </button>
                    <div x-show="open" x-cloak>
                        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click.away="open = !open"
                            class="absolute right-0 z-50 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border rounded-md shadow-md"
                            aria-label="submenu">
                            <li class="flex">
                                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold text-gray-500 transition-colors duration-150 rounded-md hover:bg-gray-100"
                                    href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <x-heroicon-o-logout class="w-5 h-5 mr-2" />
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        
    </div>
</header>