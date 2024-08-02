@props(['active'])

@php
$classes = ($active ?? false)
    ? 'block px-4 py-2 mt-5 text-sm font-semibold text-white bg-green-600 rounded-lg hover:bg-green-700 focus:bg-green-700 focus:outline-none focus:shadow-outline'
    : 'block px-4 py-2 mt-5 text-sm font-semibold text-white bg-transparent rounded-lg hover:bg-green-600 focus:bg-green-600 focus:outline-none focus:shadow-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
