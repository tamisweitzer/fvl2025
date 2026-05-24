<a
    {{ $attributes->merge([
        'class' =>
            'block px-4 py-8 rounded-lg bg-slate-50 border border-slate-200 shadow-lg hover:border-orange-200  active:border-orange-300 text-black',
    ]) }}>
    {{ $slot }}</a>
