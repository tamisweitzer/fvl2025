<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Cities</x-page-title>

        <section class="mb-8">
            @foreach ($cities as $city)
                <x-card-wrapper>
                    <a href="/cities/{{ $city->id }}">
                        <div class="text-lg font-semibold text-gray-700">
                            {{ $city->name }}
                        </div>

                        <div class="text-gray-500 text-sm">{{ $city->neighborhood }}</div>
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
