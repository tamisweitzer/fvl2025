<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Bands</x-page-title>

        <section class="mb-8">
            @foreach ($bands as $band)
                <x-card-wrapper>
                    <a href="/bands/{{ $band->id }}" class="block">
                        <div class="text-lg font-semibold text-gray-700">
                            {{ $band->name }}
                        </div>

                        <div class="text-gray-500 text-sm">{{ $band->excerpt }}</div>
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
