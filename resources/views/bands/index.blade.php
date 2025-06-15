<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">
        <x-page-title>All Bands</x-page-title>

        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @foreach ($bands as $band)
                <x-card-wrapper class="w-full sm:max-w-48 ">
                    <a href="/bands/{{ $band->id }}" class="">
                        <div class="flex flex-row gap-x-4 sm:flex-col">
                            <div class="mb-2 text-lg font-semibold text-gray-700 w-40 h-32  overflow-hidden sm:mx-auto">
                                <img class="object-contain object-middle " src="{{ asset($band->thumbnail_img) }}"
                                    alt="Thumbnail for {{ $band->name }}">
                            </div>
                            <div class="flex flex-col justify-end">
                                <div class="mb-2">{{ $band->name }}</div>
                                {{-- <div class="text-gray-500 text-sm">genre, tag1, tag2</div> --}}
                            </div>
                        </div>
                        {{-- <div class="text-gray-500 text-sm">{{ $band->excerpt }}</div> --}}

                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
