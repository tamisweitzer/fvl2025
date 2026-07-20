{{-- Container for wrapping event lists and other content. --}}

@props(['maxHeight' => ''])

@php
    $styles =
        'mx-2 py-4 sm:mx-4 bg-gray-800 rounded-lg overflow-y-auto shadow-inner shadow-gray-900/50' . ' ' . $maxHeight;
@endphp

<div {{ $attributes->merge(['class' => $styles]) }}>{{ $slot }}</div>
