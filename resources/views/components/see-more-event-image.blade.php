@props(['textcolor' => 'text-orange-500', 'size' => 'sm'])

@php
    // sizes: sm:18px; md: 36px; lg:48px;
    if ($size == 'sm') {
        $width = 'w-12';
    } elseif ($size == 'md') {
        $width = 'w-36';
    }

@endphp

<div class="{{ $width }} {{ $textcolor }} mx-auto">{{ $slot }}</div>
