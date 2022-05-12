<div>
    @if($label != "")
        <label class="block text-sm font-semibold leading-5 text-gray-700">
            {{ $label }}
        </label>
    @endif

    <div class="mt-1 rounded-md shadow-sm">
        <select name="{{ $value }}" class="block w-full transition duration-150 ease-in-out form-select sm:text-sm sm:leading-5 {{ ($errors->has($value)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}"
            {{ $attributes }}>
            @if($default == 'yes')
                <option value="" selected>Sila Pilih</option>
            @endif

            {{ $slot }}
        </select>
    </div>
    @if($value !="" && $errors->has($value)) <p class="text-sm text-red-600">{{ $errors->first($value) }}</p> @endif
</div>