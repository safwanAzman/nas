@section('title', 'Set semula kata laluan')

<x-general.grid mobile="1" gap="4" sm="1" md="1" lg="2" xl="2" class="col-span-12 h-screen w-screen ">
    <div class="hidden lg:block">
        <div class="relative flex items-center justify-center h-screen bg-gradient-to-b from-blue-700 to-blue-800 rounded-r-none  lg:rounded-r-custom lg:h-full ">
            <div class="absolute top-0 left-0 px-6 py-4 text-2xl font-semibold text-white ">
                NAS
            </div>
            <div class="max-w-lg px-4 text-3xl leading-snug text-white uppercase lg:text-4xl lg:leading-snug myfont font-bold">
                <span class="text-lg text-yellow-500">Sejak ditubuhkan pada 1994</span>
                <br>
                Kami komited
                dalam pengendalian zakat anda
                <div class="block lg:hidden">
                    <div class="flex justify-center text-white">
                        <div class="absolute bottom-0 p-5 my-4 text-sm border-2 rounded-lg animate-bounce">
                            <p>Log Masuk</p>
                            <div>
                                <x-heroicon-o-arrow-down class="w-8 h-8 mt-2 ml-5" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center h-full mb-20 ">
        <div class="">
            <div class="mb-10">
                <div class="flex justify-center mb-4">
                    <x-logo class="w-24 h-24" />
                </div>
                <p class="mb-5 text-2xl text-center text-gray-600 uppercase">Set semula kata laluan</p>
            </div>
            @if ($emailSentMessage)
                <div class="rounded-md bg-green-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>

                        <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-green-800">
                                {{ $emailSentMessage }}
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <form wire:submit.prevent="sendResetPasswordLink" class="w-80 lg:w-96">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            Alamat Email
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Hatar capaian set-semula kata laluan
                            </button>
                        </span>
                    </div>
                </form>
            @endif
        </div>
    </div>
</x-general.grid>
