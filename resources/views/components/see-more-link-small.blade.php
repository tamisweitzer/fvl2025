<a
    {{ $attributes->merge([
        'class' =>
            'block p-4 rounded bg-green-700 border border-green-800 hover:bg-green-800 active:bg-green-900 text-white',
    ]) }}>
    {{ $slot }}</a>
