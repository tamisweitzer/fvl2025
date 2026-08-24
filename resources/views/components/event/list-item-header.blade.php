@props(['color' => 'orange'])



<h3 {{ $attributes->merge(['class' => 'mt-4 pt-2 pb-2 px-4 text-amber-600 font-extrabold']) }}>
    {{ $slot }}
</h3>
