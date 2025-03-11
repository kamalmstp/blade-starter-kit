<auto-complete src="{{ $src }}" for="{{ $id }}_list" class="block relative">
    <input {{ $formControlAttributes }} {{ $attributes }} value="{{ $value }}" autocomplete="off">
    <ul id="{{ $id }}_list" class="z-10 absolute mt-1 w-full rounded-md bg-white shadow-lg ring-1 ring-gray-300/50 rounded-md py-1 max-h-96 overflow-x-hidden overflow-y-auto"></ul>
</auto-complete>