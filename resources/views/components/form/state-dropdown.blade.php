<div {{ $attributes }}>
    <label class="block text-sm font-semibold leading-5 text-gray-700">
        {{ $label }}
    </label>
    <div class="mt-1 rounded-md shadow-sm">
        <select
            class="block w-full transition duration-150 ease-in-out form-select sm:text-sm sm:leading-5"
        >
            <option value="" >Choose State</option>
            {{ $slot }}
        </select>
    </div>
</div>