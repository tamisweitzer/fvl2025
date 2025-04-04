<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Live Music Venues</x-page-title>

        <section class="mb-8">
            @foreach ($venues as $venue)
                <x-card-wrapper>
                    <a href="/venues/{{ $venue->id }}" class="block">
                        <div class="mb-2 text-lg font-semibold text-gray-700">
                            {{ $venue->name }}
                        </div>

                        <div class="text-gray-500 text-sm">{{ $venue->city->name }}, {{ $venue->state->name }}</div>
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
