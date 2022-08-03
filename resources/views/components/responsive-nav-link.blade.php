@props(['active'])

@php
$classes = ($active ?? false)
? 'block pl-3 pr-4 py-2 border-l-4 border-base-color text-base font-medium text-base-color
bg-base-colorfocus:outline-none focus:text-base-color focus:bg-base-color focus:border-base-color transition
duration-150 ease-in-out'
: 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800
hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300
transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>