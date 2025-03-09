<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>Cities</x-page-title>

        <section class="mb-8">
            @foreach ($cities as $city)
                <x-card-wrapper>
                    <a href="/cities/{{ $city->id }}">
                        {{ $city->name }}
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
