@props(['type' => 'primary'])

@php
    $buttonType = [
        'primary' => 'underline',
        'secondary' => 'underline',
        'tertiary' => 'underline',
    ];

    $styles = 'color-inherit font-serif' . ' ' . $buttonType[$type];

    dd($buttonType[$type]);
@endphp

<a href=""></a>
