<x-layout>
    <x-page-title>All Cities</x-page-title>

    <section class="mb-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
        @foreach ($cities as $city)
            <x-card-wrapper>
                <a href="/cities/{{ $city->id }}" class="block">
                    <div class="mb-2 text-lg font-semibold text-gray-700">
                        {{ $city->name }}
                    </div>

                    <div class="text-gray-500 text-sm">{{ $city->neighborhood }}</div>
                </a>
            </x-card-wrapper>
        @endforeach
    </section>
</x-layout>
