<a
    {{ $attributes->merge([
        'class' =>
            'inline-block px-4 py-2 mt-4 rounded-lg  bg-transparent border border-amber-700 shadow-lg hover:border-amber-600  active:shadow-amber-900 active:border-amber-500 ',
    ]) }}>
    {{ $slot }}</a>
