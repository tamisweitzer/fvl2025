<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Bands</x-page-title>

        <section class="mb-8">
            @foreach ($bands as $band)
                <x-card-wrapper>
                    <a href="/bands/{{ $band->id }}" class="block">
                        {{ $band->name }}
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
