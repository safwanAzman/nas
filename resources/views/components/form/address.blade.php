<div {{ $attributes }}>
    <label class="block text-sm font-semibold leading-5 text-gray-700">
        {{ $label }}
    </label>
    <div class="mt-1 flex rounded-md shadow-sm">
        <input  value="{{ $value1 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value1)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
    </div>
    @if($errors->has($value1)) <p class="text-sm text-red-600">{{ $errors->first($value1) }}</p> @endif

    <div class="mt-1 flex rounded-md shadow-sm">
        <input value="{{ $value2  }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value2)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
    </div>
    @if($errors->has($value2)) <p class="text-sm text-red-600">{{ $errors->first($value2) }}</p> @endif

    <div class="mt-1 flex rounded-md shadow-sm">
        <input  value="{{ $value3  }}"  class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value3)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
    </div>
    @if($errors->has($value3)) <p class="text-sm text-red-600">{{ $errors->first($value3) }}</p> @endif
</div>
<div class="mt-3 grid gap-2 lg:grid-cols-3 sm:grid-cols-1"> 
    <div>
        <label class="block text-sm font-semibold leading-5 text-gray-700">
            Bandar
        </label>
        <div class="mt-1  flex rounded-md shadow-sm">
            <input  value="{{ $value4 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value4)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
        </div>
        @if($errors->has($value4)) <p class="text-sm text-red-600">{{ $errors->first($value4) }}</p> @endif
    </div>
    <div>
        <label class="block text-sm font-semibold leading-5 text-gray-700">
            Poskod
        </label>
        <div class="mt-1  flex rounded-md shadow-sm">
            <input  value="{{ $value5 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value5)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
        </div>
        @if($errors->has($value5)) <p class="text-sm text-red-600">{{ $errors->first($value5) }}</p> @endif
    </div>
    <x-form.state-dropdown label="Negeri" value="">
        <option value="0" selected>Sila pilih</option>
        <option value="1">JOHOR</option>
        <option value="2">KEDAH</option>
        <option value="3">KELANTAN</option>
        <option value="4">MELAKA</option>
        <option value="5">NEGERI SEMBILAN</option>
        <option value="6">PAHANG</option>
        <option value="7">PERAK</option>
        <option value="8">PERLIS</option>
        <option value="9">PULAU PINANG</option>
        <option value="10">SABAH</option>
        <option value="11">SARAWAK</option>
        <option value="12">SELANGOR</option>
        <option value="13">TERENGGANU</option>
        <option value="14">W.P KUALA LUMPUR</option>
        <option value="15">W.P LABUAN</option>
        <option value="16">W.P PUTRAJAYA</option>
    </x-form.state-dropdown>
</div>