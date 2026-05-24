<x-layout>
    <section class="pb-4">
        <x-wrapper-narrow class="px-4 mt-8 mb-8">
            <x-page-title class=" text-amber-400 italic">Live, local music</x-page-title>
            <x-page-subtitle class="mt-4 mb-4 text-orange-600 text-2xl italic">The hottest live music in Wisconsin's Fox
                Valley</x-page-subtitle>
            <p class="mt-8">Browse below for a sampling of the latest summer concerts happening now in your area, or
                view the
                extensive list
                of <x-a-inline-link-primary>all upcoming
                    events</x-a-inline-link-primary>.
            </p>
        </x-wrapper-narrow>
    </section>

    <!-- Live music happening today -->
    <section class="max-w-5xl mx-auto mb-8">

        <x-eventlist-section-header>Live Music This Week</x-eventlist-section-header>

        <div class="mb-2 px-4 text-sm">
            <p>Click on any listing below for more information.</p>
        </div>

        <div class="pb-8 mx-2 sm:mx-4 max-h- 96 bg-gray-800 rounded-lg overflow-y-auto">
            @if (is_countable($eventsToday) && count($eventsToday) > 0) {{-- @dd($eventsToday) --}}
                @foreach ($eventsToday as $day)
                    <x-eventlist-item-header>{{ $day[0]->start_date->format('D M d, Y') }}</x-eventlist-item-header>

                    @foreach ($day as $event)
                        <x-eventlist-item :event=$event href="/summer/events/{{ $event->id }}"
                            class="mb-4"></x-eventlist-item>
                    @endforeach

                    @if (!$loop->last)
                        <x-eventlist-item-divider></x-eventlist-item-divider>
                    @endif
                @endforeach


                <x-eventlist-view-more-button href="/summer/events/" title="See all live bands playing this week.">See
                    more live music</x-eventlist-view-more-button>
            @else
                <div class="my-4">There is no
                    live music for today.
                </div>
            @endif
        </div>
    </section>


    <!-- Lunchtime Concert Series -->
    <section class="max-w-5xl mx-auto mb-8">
        <x-eventlist-section-header>Lunchtime Concerts</x-eventlist-section-header>

        <div class="mb-2 px-4 text-sm">
            <p>These concerts are generally held in a park or
                patio,
                and
                are intended as lunch time entertainment. Often these are acoustic, or softer music. Many of these have
                food trucks or vendors near by.</p>
        </div>


        <div class="pb-8 mx-2 sm:mx-4 max-h- 96 bg-gray-800 rounded-lg overflow-y-auto">
            @if (is_countable($lunches) && count($lunches) > 0)
                @foreach ($lunches as $days)
                    <x-eventlist-item-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-item-header>

                    @foreach ($days as $lunch)
                        <x-eventlist-item :event=$lunch path="/summer/events/" class="mb-4"></x-eventlist-item>
                    @endforeach

                    @if (!$loop->last)
                        <x-eventlist-item-divider></x-eventlist-item-divider>
                    @endif
                @endforeach

                <x-eventlist-view-more-button href="/summer/events/lunchtime-concerts"
                    title="See all live bands playing lunchtime concerts">See
                    all in Lunchtime Concerts</x-eventlist-view-more-button>
            @else
                <div class="mb-4">There are no results yet for this category.
                </div>
            @endif
        </div>
    </section>


    <!-- Regular Bar Events -->
    <section class="max-w-5xl mx-auto mb-8">

        <x-eventlist-section-header>Bars and Restaurants</x-eventlist-section-header>

        <div class="mb-2 px-4 text-sm">
            <p>The list here includes the typical live band at a
                bar,
                usually held indoors throughout the year, but may be outside during the summer.</p>
        </div>

        <div class="pb-8 mx-2 sm:mx-4 max-h- 96 bg-gray-800 rounded-lg overflow-y-auto">
            @if (is_countable($events) && count($events) > 0)
                @foreach ($events as $days)
                    <x-eventlist-item-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-item-header>

                    @foreach ($days as $event)
                        <x-eventlist-item :event=$event path="/summer/events/" class="mb-4"></x-eventlist-item>
                    @endforeach

                    @if (!$loop->last)
                        <x-eventlist-item-divider></x-eventlist-item-divider>
                    @endif
                @endforeach

                <x-eventlist-view-more-button href="/summer/events/bars-restaurants"
                    title="See all live bands playing lunchtime concerts">See
                    all in Bars & Restaurants</x-eventlist-view-more-button>
            @else
                <div class="my-4">There are no results yet for this category.
                </div>
            @endif
        </div>
    </section>


    <!-- Fairs, Fests, and Outdoor Concerts e.g. Rockfest, Winnebago County Fair -->
    <section class="max-w-5xl mx-auto mb-8">

        <x-eventlist-section-header>Fairs, Fests, and Outdoor Concerts</x-eventlist-section-header>

        <div class="mb-2 px-4 text-sm">
            <p>This list contains the yearly fests, fairs, and
                outdoor
                concerts that are not specifically tied to a bar or restaurant.</p>
        </div>


        <div class="pb-8 mx-2 sm:mx-4 max-h- 96 bg-gray-800 rounded-lg overflow-y-auto">
            @if (is_countable($fairs) && count($fairs) > 0)
                @foreach ($fairs as $days)
                    <x-eventlist-item-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-item-header>

                    @foreach ($days as $fair)
                        <x-eventlist-item :event=$fair path="/summer/events/" class="mb-4"></x-eventlist-item>
                    @endforeach

                    @if (!$loop->last)
                        <x-eventlist-item-divider></x-eventlist-item-divider>
                    @endif
                @endforeach

                <x-eventlist-view-more-button href="/summer/events/fairs-fests"
                    title="See all live bands playing lunchtime concerts">See
                    all in Fairs, Fests, and Outdoor Concerts</x-eventlist-view-more-button>
            @else
                <div class="my-4">There are no results yet for this category.
                </div>
            @endif
        </div>
    </section>


    <!-- National Acts -->
    <section class="max-w-5xl mx-auto mb-8">

        <x-eventlist-section-header>National Acts</x-eventlist-section-header>

        <div class="mb-2 px-4 text-sm">
            <p>These are stand-alone concerts specifically for a
                national
                artist. If
                a national act is playing at Waterfest, for example, that artist would be listed in the fairs and fests
                section, not here.</p>
        </div>

        <div class="pb-8 mx-2 sm:mx-4 max-h- 96 bg-gray-800 rounded-lg overflow-y-auto">

            @if (is_countable($nationalActs) && count($nationalActs) > 0)
                @foreach ($nationalActs as $days)
                    <x-eventlist-item-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-item-header>

                    @foreach ($days as $nationalact)
                        <x-eventlist-item :event=$nationalact path="/summer/events/"></x-eventlist-item>
                    @endforeach

                    @if (!$loop->last)
                        <x-eventlist-item-divider></x-eventlist-item-divider>
                    @endif
                @endforeach

                <x-eventlist-view-more-button href="/summer/events/national-bands"
                    title="See all live bands playing lunchtime concerts">See
                    all in National Acts</x-eventlist-view-more-button>
            @else
                <div class="my-4">There are no results yet for this category.
                </div>
            @endif
        </div>
    </section>
    <!-- End summer events -->

</x-layout>
