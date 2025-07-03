<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">
        <x-page-title>Event name list</x-page-title>
        <p class="-mt-4 mb-12 text-center">The complete list of events by event name (e.g. Paperfest).</p>
        <p class="text-center mb-4 text-gray-600 italic text-sm">Click on any listing for more information.</p>

        @foreach ($events as $event)
            <div class="mb-2">
                <a href="/summer/events/event/{{ $event->id }}"
                    class="inline-block underline decoration decoration-orange-300 hover:bg-orange-100">
                    {{ $event->event_name }}</a>
            </div>
        @endforeach

        <x-see-more-events></x-see-more-events>
    </x-wrapper-narrow>
</x-layout>
