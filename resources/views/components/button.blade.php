@props(['type','color'])

<button type="{{ $type }}" style="background-color: {{ $color }}" class="text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
    {{ $slot }}
</button>
