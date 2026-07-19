<x-layout>
    <!-- summer/events/bands/ -->
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto p-4">
        <x-page-title>Band list</x-page-title>
        <p class="-mt-4 mb-12 text-center">The complete list of the bands.</p>
        <p class="text-center mb-4 italic text-sm">Click on any listing for more information.</p>

        <div class="px-4 py-8 mx-2 sm:mx-4 bg-gray-800 rounded-lg overflow-y-auto">
            @foreach ($bands as $band)
                <div class="mb-4">
                    <a href="/summer/events/bands/{{ $band->id }}">{{ $band->band }}</a>
                </div>
            @endforeach
        </div>


        <x-see-more-events></x-see-more-events>
    </x-wrapper-narrow>
</x-layout>
