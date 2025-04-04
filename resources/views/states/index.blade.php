<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>States</x-page-title>

        <section class="mb-8">
            @foreach ($states as $state)
                <x-card-wrapper>
                    <a href="/states/{{ $state->id }}">
                        <div class="mb-2 text-lg font-semibold text-gray-700">
                            {{ $state->name }}
                        </div>
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
