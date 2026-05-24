<a
    {{ $attributes->merge([
        'class' =>
            'block p-4 rounded bg-slate-50 border border-slate-200 shadow hover:bg-slate-200 hover:border-slate-300 active:bg-slate-300 text-black',
    ]) }}>
    {{ $slot }}</a>
