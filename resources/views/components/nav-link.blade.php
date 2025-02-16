@props(['active' => false])

<a class="{{ $active ? 'text-orange-500' : 'text-inherit' }} hover:text-orange-500 p-4 pb-2"
    aria-current="{{ request()->is('/') ? 'page' : 'false' }}" {{ $attributes }}>
    {{ $slot }}
</a>
