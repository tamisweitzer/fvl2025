<x-layout>
    <x-page-title>All Bands</x-page-title>

    <section class="mb-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 text-gray-800">
        @foreach ($bands as $band)
            <x-card-wrapper class="w-full">
                <a href="/bands/{{ $band->id }}" class="">
                    <div class="flex flex-col ">
                        <div class="mb-2 text-lg font-semibold text-gray-700 h-[120px]  overflow-hidden sm:mx-auto">
                            <img class="bg-cover bg-center border w-full" src="{{ asset($band->thumbnail_img) }}"
                                alt="Thumbnail for {{ $band->name }}">
                        </div>
                        <div class="flex flex-col justify-end">
                            <div class="mb-2 text-xs">{{ $band->name }}</div>
                            {{-- <div class="text-gray-500 text-sm">genre, tag1, tag2</div> --}}
                        </div>
                    </div>
                    {{-- <div class="text-gray-500 text-sm">{{ $band->excerpt }}</div> --}}
                </a>
            </x-card-wrapper>
        @endforeach
    </section>
</x-layout>
