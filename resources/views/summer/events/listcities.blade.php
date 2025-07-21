<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto p-4">
        <x-page-title>City list</x-page-title>
        <p class="-mt-4 mb-12 text-center">The complete list of the cities.</p>
        <p class="text-center mb-4 text-gray-600 italic text-sm">Click on any listing for more information.</p>

        @foreach ($cities as $city)
            <div class="mb-2">
                <a href="/summer/events/cities/{{ $city->id }}"
                    class="inline-block underline decoration decoration-orange-300 hover:bg-orange-100">{{ $city->city }}</a>
            </div>
        @endforeach

        <x-see-more-events></x-see-more-events>
    </x-wrapper-narrow>
</x-layout>
