<x-layout>
    {{-- Site styles and component samples. --}}

    <h1 class="text-3xl">Branding for Fox Valley Live v1.0_sqlite</h1>

    <div class="bg-white text-gray-900">
        <div class="p-4 m-4">
            <div class=my-8>
                <h2>Surface colors</h2>
                <div>
                    <x-branding.color-swatch class="bg-gray-900"></x-branding.color-swatch>
                    <p>bg-gray-900</p>
                </div>
                <div>
                    <x-branding.color-swatch class="bg-gray-800"></x-branding.color-swatch>
                    <p>bg-gray-800</p>
                </div>
                <div>
                    <x-branding.color-swatch class="bg-gray-700"></x-branding.color-swatch>
                    <p>bg-gray-700</p>
                </div>
                <div>
                    <x-branding.color-swatch class="bg-gray-900"></x-branding.color-swatch>
                    <p>bg-gray-900</p>
                </div>
            </div>


        </div>
    </div>

    <x-heading-secondary>Event List</x-heading-secondary>
    <div class="pb-8 mx-2 sm:mx-4 bg-gray-800 rounded-lg overflow-y-auto">
        @if (is_countable($eventsToday) && count($eventsToday) > 0) {{-- @dd($eventsToday) --}}
            @foreach ($eventsToday as $day)
                <x-event.list-item-header>{{ $day[0]->start_date->format('D M d, Y') }}</x-event.list-item-header>

                @foreach ($day as $event)
                    <x-event.list-item :event=$event href="/summer/events/{{ $event->id }}"
                        class="mb-4"></x-event.list-item>
                @endforeach

                @if (!$loop->last)
                    <x-event.list-item-divider></x-event.list-item-divider>
                @endif
            @endforeach


            <x-event.list-view-more-button href="/summer/events/" title="See all live bands playing this week.">See
                more live music</x-event.list-view-more-button>
        @else
            <div class="my-4 p-4 italic text-sm">There is no
                live music for today.
            </div>
        @endif
    </div>


</x-layout>
