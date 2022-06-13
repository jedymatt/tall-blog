@php
$classes = 'flex items-center justify-center p-2 bg-indigo-500 rounded-md hover:bg-indigo-800 focus:bg-indigo-700 text-sm focus:ring ring-indigo-300 text-white font-medium';
@endphp

<button {{  $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
