@props(['color' => 'orange'])



<h3 {{ $attributes->merge(['class' => 'mt-4 px-2 pt-2 border-b border-b-orange-500 text-orange-600 font-extrabold']) }}>
    {{ $slot }}
</h3>
