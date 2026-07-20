<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Upcoming Live Music</x-page-title>

        <p class=" mb-12 text-center">The complete list of summer events around the Fox Valley this summer.</p>

        <div>
            <p class="text-center mb-4 mt-12  text-gray-600 italic text-sm">Click on any listing for more information, or
                select a
                button to filter results.</p>
            {{-- @dd($events) --}}

            @if (is_countable($events) && count($events) > 0)
                @foreach ($events as $day)
                    <x-event.list-item-header>{{ $day[0]->event_date->format('M d Y') }}</x-event.list-item-header>

                    @foreach ($day as $event)
                        <a class='px-4 block bg-gray-800 overflow-y-auto border border-transparent hover:bg-gray-600'
                            title="Live music in {{ $event->venue->city->name }} from {{ $event->band->name }} at {{ $event->venue->name }} @if ($event->name) for {{ $event->name }} @endif">

                            <div class="text-lg font-bold">{{ $event->band->name }}</div>

                            @if ($event->name)
                                <div class="text-md font-semibold text-sm">{{ $event->name }}</div>
                            @endif

                            <div class="font-semibold text-sm">{{ $event->venue->name }}</div>

                            {{-- <div class="text-sm">{{ $event->city }}</div> --}}

                            @if ($event->event_time)
                                <div class="text-sm">
                                    {{ $event->event_time }}
                                </div>
                            @endif
                        </a>
                    @endforeach

                    @if (!$loop->last)
                        <x-event.list-item-divider></x-event.list-item-divider>
                    @endif
                @endforeach
            @else
                <div class="my-4 p-4 italic text-sm">
                    {{ $noResultsText }}
                </div>
            @endif


        </div>
    </x-wrapper-narrow>
</x-layout>
