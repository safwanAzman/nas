<div x-show="{{$modalActive}}" style="display: none;" class="fixed inset-0 z-40 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="{{$modalActive}}"
            x-description="Background overlay, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 transition-opacity"
        >
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        <div x-show="{{$modalActive}}"
            x-description="Modal panel, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl  sm:align-middle sm:max-w-lg lg:max-w-2xl xl:max-w-{{$modalSize}} sm:w-full "
            role="dialog" aria-modal="true" aria-labelledby="modal-headline"
        >

            <div>
                <div class="">
                    <div class="flex items-center justify-between px-2 py-2 font-semibold bg-gray-800 border-b-2">
                        <h3 class="text-lg font-semibold leading-6 text-white">
                            <div class="flex items-center text-base uppercase">
                                {{$title}}
                            </div>
                        </h3>
                        
                        @if (isset($closeBtn) and $closeBtn == "yes")
                        <div class="px-1 py-1 bg-red-500 border-2 border-white rounded-full cursor-pointer hover:bg-red-600" @click="{{$modalActive}} = false">
                            <x-heroicon-o-x class="w-4 h-4 font-bold text-white"/>
                        </div>
                        @endif
                    </div>

                    {{$slot}}

                </div>
            </div>
        </div>
    </div>
</div>
