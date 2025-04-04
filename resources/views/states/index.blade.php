<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>States</x-page-title>

        <section class="mb-8">
            @foreach ($states as $state)
                <x-card-wrapper>
                    <a href="/states/{{ $state->id }}">
                        {{ $state->name }}
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
