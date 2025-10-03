<a
    {{ $attributes->merge([
        'class' =>
            'block px-4 py-8 rounded-lg bg-green-700 border border-green-800 hover:bg-green-800 active:bg-green-900 text-white',
    ]) }}>
    {{ $slot }}</a>
