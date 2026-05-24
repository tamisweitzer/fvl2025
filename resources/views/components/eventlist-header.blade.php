@props(['color' => 'orange'])



<h3 {{ $attributes->merge(['class' => 'mt-4 px-2 pt-2 text-amber-500 font-extrabold']) }}>
    {{ $slot }}
</h3>
