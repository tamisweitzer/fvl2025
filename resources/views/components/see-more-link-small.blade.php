<a
    {{ $attributes->merge([
        'class' =>
            'block p-4 rounded bg-slate-700 border border-slate-800 hover:bg-slate-800 active:bg-slate-900 text-white',
    ]) }}>
    {{ $slot }}</a>
