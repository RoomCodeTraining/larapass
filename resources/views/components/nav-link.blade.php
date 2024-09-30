@props(['active'])
@php
    $classes =
        $active ?? false
            ? 'mr-6 font-medium leading-6 text-gray-600 uppercase hover:text-gray-900'
            : 'mr-6 font-medium leading-6 text-gray-600 uppercase hover:text-gray-900';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
