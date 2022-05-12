
<nav class="flex flex-col sm:flex-row">
    <div class="text-gray-600 py-2 px-6 block focus:outline-none cursor-pointer" x-on:click.prevent="active = {{ $name }}" x-bind:class="{'text-indigo-600 border-b-4 border-indigo-600 ': active === {{ $name }} }"
    {{ $livewire }}
    >
        <div class="">
            {{ $slot }}
        </div>
    </div>
</nav>


