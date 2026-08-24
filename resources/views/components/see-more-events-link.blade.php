<a
    {{ $attributes->merge([
        'class' =>
            'block px-4 py-8 rounded-lg border border-amber-700 hover:border-amber-600  active:border-amber-500 text-gray-300',
    ]) }}>
    {{ $slot }}</a>
