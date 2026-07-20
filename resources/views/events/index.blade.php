<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Upcoming Live Music</x-page-title>

        <p class=" mb-12 text-center">The complete list of summer events around the Fox Valley this summer.</p>

        <div>
            <p class="text-center mb-4 mt-12 text-gray-400 italic text-sm">Click on any listing for more information, or
                select a
                button to filter results.</p>
            {{-- @dd($events) --}}




            @if (is_countable($events) && count($events) > 0)
                @foreach ($events as $day)
                    <x-event-list.item-header>{{ $day[0]->event_date->format('M d Y') }}</x-event-list.item-header>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($day as $event)
                            <a href="/events/{{ $event->id }}"
                                class='px-4 py-4 block bg-gray-800 overflow-y-auto border border-transparent hover:bg-gray-600 rounded-lg overflow-hidden shadow hover:shadow-lg transition'
                                title="Live music in {{ $event->venue->city->name }} from {{ $event->band->name }} at {{ $event->venue->name }} @if ($event->name) for {{ $event->name }} @endif">

                                <h3 class="text-lg font-bold text-amber-400">{{ $event->band->name }} at
                                    {{ $event->venue->name }}</h3>
                                @if ($event->name)
                                    <p class="text-sm text-gray-400">{{ $event->name }}</p>
                                @endif
                                <p class="text-sm text-gray-300">
                                    @if ($event->event_time)
                                        {{ $event->event_time }}
                                    @endif
                                </p>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            @else
                <div class="my-4 p-4 italic text-sm">
                    {{ $noResultsText }}
                </div>
            @endif

        </div>
    </x-wrapper-narrow>
</x-layout>
