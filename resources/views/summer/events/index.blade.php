<x-layout>
    <x-page-title>The Complete List of Live Music</x-page-title>

    <p class=" mb-12 text-center">The complete list of summer events around the Fox Valley this summer.</p>

    <x-see-more-events-small class="mb-12"></x-see-more-events-small>

    <div>
        <p class="text-center mb-4 mt-12  text-gray-400 italic text-sm">Click on any listing for more information, or
            select a
            button to filter results.</p>

        @if (is_countable($events) && count($events) > 0)
            @foreach ($events as $day)
                <x-event-list.item-header>{{ $day[0]->start_date->format('M d Y') }}</x-event-list.item-header>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2">
                    @foreach ($day as $event)
                        <a href="/summer/events/{{ $event->id }}"
                            class="px-4 py-4 block bg-gray-800 overflow-y-auto border border-transparent hover:bg-gray-600 rounded-lg overflow-hidden shadow hover:shadow-lg transition"
                            title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">

                            <h3 class="text-lg font-bold text-amber-400">
                                {{ $event->band }}
                            </h3>

                            @if ($event->event_name)
                                <div class="text-sm text-gray-400">
                                    {{ $event->event_name }}
                                </div>
                            @endif

                            <div class="text-sm text-gray-400">
                                {{ $event->venue }}, {{ $event->city }}
                            </div>

                            @if ($event->start_time)
                                <div class="text-sm">
                                    {{ $event->start_time }}
                                </div>
                            @endif
                        </a>
                    @endforeach
                </div>

                {{-- <hr class="mb-8"> --}}
            @endforeach
        @else
            <div class="my-4 p-4 italic text-sm">
                {{ $noResultsText }}
            </div>
        @endif
    </div>
    <x-see-more-events></x-see-more-events>
    </div>
</x-layout>
