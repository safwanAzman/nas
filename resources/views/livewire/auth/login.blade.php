@section('title', 'Log Masuk')

<x-general.grid mobile="1" gap="4" sm="1" md="1" lg="2" xl="2" class="col-span-12 h-screen w-screen ">
    <div class="relative flex items-center justify-center h-screen bg-gradient-to-b from-blue-700 to-blue-800 rounded-r-none  lg:rounded-r-custom lg:h-full">
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
                            <x-heroicon-o-arrow-down class="w-8 h-8 mt-2 ml-7" />
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
                <p class="mb-5 text-2xl text-center text-gray-600 uppercase">LOG MASUK AKAUN</p>
            </div>
            <form wire:submit.prevent="authenticate" class="w-80 lg:w-96">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Alamat Emel
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none w-full px-3 py-2 border border-gray-500 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Kata Laluan
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-500 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-blue-800 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Ingat saya
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium text-blue-700 hover:text-blue-800 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Lupa kata Laluan?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-800 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:border-gray-700 focus:ring-indigo active:bg-gray-700 transition duration-150 ease-in-out">
                            Log Masuk
                        </button>
                    </span>
                </div>

                <p class="pt-1 pb-4 mt-4 text-gray-500 border-t-2 border-gray-400 ">Atau Daftar Akaun baru</p>

                <div>
                    <span class="block w-full rounded-md shadow-sm">
                        <a href="{{ route('register') }}" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:border-gray-700 focus:ring-indigo active:bg-gray-700 transition duration-150 ease-in-out">
                            Daftar Akaun
                        </a>
                    </span>
                </div>
            </form>
        </div>
    </div>
</x-general.grid>