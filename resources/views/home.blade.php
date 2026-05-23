<x-layout>
    <section class="pb-4">
        <x-wrapper-narrow class="px-4">
            <x-page-title>Live Music in the Fox Valley</x-page-title>
            <x-page-subtitle class="text-orange-700  font-semibold mb-4">Wisconsin knows music!</x-page-subtitle>
            <p>Browse below for a sampling of the latest summer concerts happening now in your area, or view the
                extensive list
                of <a href="/summer/events/" class="underline text-orange-700"> all upcoming events</a>. </p>
            <p class="mt-4">You can even <a href="/cities" class="underline text-orange-700">search by city</a> for
                events filtered to
                a specific
                area.
            </p>
            <p class="mt-8 text-gray-700">Click on any listing below for more information.</p>
        </x-wrapper-narrow>
    </section>

    {{-- @dd($events, $eventsToday, $lunches, $fairs, $nationalActs); --}}
    {{-- @dd(is_countable($events), is_countable($eventsToday), is_countable($lunches), is_countable($nationalActs)); --}}

    <!-- Live music happening today -->
    <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-orange-600 text-white rounded-t">Live
                music this week!</x-page-subtitle>

            <div class="rounded-b">
                @if (is_countable($eventsToday) && count($eventsToday) > 0)

                    {{-- @dd($eventsToday) --}}
                    @foreach ($eventsToday as $day)
                        <div class="mb-8 ">
                            <x-eventlist-header>{{ $day[0]->start_date->format('D M d, Y') }}</x-eventlist-header>

                            @foreach ($day as $event)
                                <x-eventlist-item :event=$event path="/summer/events/"
                                    color="purple"></x-eventlist-item>
                            @endforeach
                        </div>
                    @endforeach

                    <x-eventlist-view-more-button href="/summer/events/"
                        title="See all live bands playing lunchtime concerts">See
                        <em>all</em> upcoming live music</x-eventlist-view-more-button>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There is no live music for today.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>

    {{-- @dd($events); --}}
    <!-- Lunchtime Concert Series -->
    <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-orange-600 text-white">Lunchtime
                Concerts</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-orange-800">These concerts are generally held in a park or
                patio,
                and
                are intended as lunch time entertainment. Often these are acoustic, or softer music. Many of these have
                food trucks or vendors near by.</p>
            <div class=" ">

                @if (is_countable($lunches) && count($lunches) > 0)
                    @foreach ($lunches as $days)
                        <x-eventlist-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-header>

                        @foreach ($days as $lunch)
                            <x-eventlist-item :event=$lunch path="/summer/events/" color="purple"></x-eventlist-item>
                        @endforeach
                    @endforeach

                    <x-eventlist-view-more-button href="/summer/events/lunchtime-concerts"
                        title="See all live bands playing lunchtime concerts">See
                        all in Lunchtime Concerts</x-eventlist-view-more-button>
                @else
                    <div class="px-4 py-4 text-gray-500 italic text-sm mx-auto">There are no results yet for this
                        category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>


    <!-- Regular Bar Events -->
    <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12 ">
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-orange-600 text-white">Live Bands at
                Bars and
                Restaurants</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-orange-800">The list here includes the typical live band at a
                bar,
                usually held indoors throughout the year, but may be outside during the summer.</p>
            <div class="">

                {{-- @dd($events) --}}

                @if (is_countable($events) && count($events) > 0)
                    @foreach ($events as $days)
                        <x-eventlist-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-header>

                        @foreach ($days as $event)
                            <x-eventlist-item :event=$event path="/summer/events/"></x-eventlist-item>
                        @endforeach
                    @endforeach

                    <x-eventlist-view-more-button href="/summer/events/bars-restaurants"
                        title="See all live bands playing lunchtime concerts">See
                        all in Bars & Restaurants</x-eventlist-view-more-button>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>


    <!-- Fairs, Fests, and Outdoor Concerts e.g. Rockfest, Winnebago County Fair -->
    <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-orange-600 text-white">Fairs, Fests,
                and
                Outdoor
                Concerts</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-orange-800">This list contains the yearly fests, fairs, and
                outdoor
                concerts that are not specifically tied to a bar or restaurant.</p>

            <div class=" ">
                @if (is_countable($fairs) && count($fairs) > 0)
                    @foreach ($fairs as $days)
                        <x-eventlist-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-header>

                        @foreach ($days as $fair)
                            <x-eventlist-item :event=$fair path="/summer/events/"></x-eventlist-item>
                        @endforeach
                    @endforeach

                    <x-eventlist-view-more-button href="/summer/events/fairs-fests"
                        title="See all live bands playing lunchtime concerts">See
                        all in Fairs, Fests, and Outdoor Concerts</x-eventlist-view-more-button>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>


    <!-- National Acts -->
    <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-violet-700 text-white">National
                Acts</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-violet-800">These are stand-alone concerts specifically for a
                national
                artist. If
                a national act is playing at Waterfest, for example, that artist would be listed in the fairs and fests
                section, not here.</p>
            <div class=" ">

                @if (is_countable($nationalActs) && count($nationalActs) > 0)
                    @foreach ($nationalActs as $days)
                        <x-eventlist-header>{{ $days[0]->start_date->format('D M d, Y') }}</x-eventlist-header>

                        @foreach ($days as $nationalact)
                            <x-eventlist-item :event=$nationalact path="/summer/events/"></x-eventlist-item>
                        @endforeach
                    @endforeach

                    <x-eventlist-view-more-button href="/summer/events/national-bands"
                        title="See all live bands playing lunchtime concerts">See
                        all in National Acts</x-eventlist-view-more-button>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>

        </x-wrapper-narrow>
    </section>
    <!-- End summer events -->

</x-layout>
