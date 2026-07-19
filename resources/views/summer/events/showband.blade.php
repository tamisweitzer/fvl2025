<x-layout>
    <!-- /summer/events/bands/{id} -->
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto p-4">
        {{-- @dd($events) --}}
        <x-page-title>
            @if (count($events) > 0)
                {{ $events->first()->first()->band }}
            @else
                generic title
            @endif
        </x-page-title>
        <p class="mb-12 text-center">The complete list of events for {{ $events->first()->first()->band }}
            this
            summer.</p>
        <p class="text-center mb-4 italic text-sm">Click on any listing for more information.</p>

        <div class="pb-8 mx-2 sm:mx-4 max-h- 96 bg-gray-800 rounded-lg overflow-y-auto">
            @if (is_countable($events) && count($events) > 0)
                @foreach ($events as $days)
                    <x-eventlist-item-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-item-header>

                    @foreach ($days as $event)
                        <x-eventlist-item :event=$event href="/summer/events/{{ $event->id }}"
                            class="mb-4"></x-eventlist-item>
                    @endforeach
                @endforeach
            @endif

        </div>


        <x-see-more-events></x-see-more-events>
    </x-wrapper-narrow>
</x-layout>
