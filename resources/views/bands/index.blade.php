<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Bands</x-page-title>

        <section class="mb-8 flex flex-wrap gap-2">
            @foreach ($bands as $band)
                <x-card-wrapper class="max-w-56">
                    <a href="/bands/{{ $band->id }}" class="inline-block">
                        <div class="mb-2 text-lg font-semibold text-gray-700 w-48 h-24 overflow-hidden">
                            <img class="w-full bg-cover bg-center" src="{{ $band->thumbnail_img }}" alt="">
                        </div>
                        <div class="mb-2">{{ $band->name }}</div>
                        {{-- <div class="text-gray-500 text-sm">{{ $band->excerpt }}</div> --}}
                        <div class="text-gray-500 text-sm">genre, tag1, tag2</div>
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
