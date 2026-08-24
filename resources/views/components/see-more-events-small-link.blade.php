<a
    {{ $attributes->merge([
        'class' => ' p-2 rounded border border-amber-700 hover:border-amber-600 active:border-amber-500',
    ]) }}>
    {{ $slot }}</a>
