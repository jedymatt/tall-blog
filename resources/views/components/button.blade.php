@props(['primary' => false, 'outline' => false, 'danger' => false])

@php
$tag = $attributes['href'] ? 'a' : 'button';

$class = 'text-sm px-3 py-1.5 rounded-md inline-flex items-center justify-center gap-1 disabled:opacity-50 disabled:pointer-events-none';

$primaryClass = ' bg-indigo-500 text-white hover:bg-indigo-700 focus:ring focus:ring-indigo-200';
$dangerClass = ' bg-red-500 text-white hover:bg-red-700 focus:ring focus:ring-red-200';
$outlineClass = ' border border-indigo-500 text-indigo-500 hover:bg-indigo-100 hover:border-indigo-700 hover:text-indigo-700 focus:ring focus:ring-indigo-200';

if ($primary) {
    $class .= $primaryClass;
} elseif ($outline) {
    $class .= $outlineClass;
} elseif ($danger) {
    $class .= $dangerClass;
} else {
    $class .= $primaryClass;
}

@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</{{ $tag }}>
