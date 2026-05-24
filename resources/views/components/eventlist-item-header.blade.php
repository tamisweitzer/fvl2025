@props(['color' => 'orange'])



<h3 {{ $attributes->merge(['class' => 'mt-4 pt-2 pb-4 px-4 text-amber-700 font-extrabold']) }}>
    {{ $slot }}
</h3>
