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

    <!-- Start summer events -->
    <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <!-- Live music happening today -->
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-orange-600 text-white rounded-t">Where
                to find
                live
                music
                today!</x-page-subtitle>

            <div class="rounded-b">
                @if (count($eventsToday) > 0)
                    <h3 class="mx-4 pb-2 mb-8 text-2xl font-bold text-orange-600 border-b border-orange-500">
                        {{ $eventsToday->first()->start_date->format('M d, Y') }}
                    </h3>
                    @foreach ($eventsToday as $eventToday)
                        <a href="/summer/events/{{ $eventToday->id }}"
                            class="block px-4 py-2 border-t border-b border-t-transparent border-b-inherit last:border-b-0 hover:bg-orange-50 hover:border-t hover:border-t-orange-300 hover:border-b hover:border-b-orange-300"
                            title="Live music in {{ $eventToday->city }} from {{ $eventToday->band }} at {{ $eventToday->venue }} @if ($eventToday->event_name) for {{ $eventToday->event_name }} @endif">
                            <div class="font-bold">{{ $eventToday->band }}</div>
                            <div class="text-gray-800 text-sm">{{ $eventToday->venue }}, {{ $eventToday->city }}</div>
                            <div class="text-gray-800 text-sm"></div>
                        </a>
                    @endforeach
                    <a href="/summer/events/"
                        class="mx-4 mt-8 inline-block text-white rounded px-3 py-2 bg-orange-600 hover:bg-orange-700"
                        title="See all upcoming live bands">See
                        <em>all</em> upcoming live music</a>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There is no live music for today.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>


    <section class="px-4 py-8">
        <x-page-subtitle class="mt-4 font-semibold mb-8">Find live music in one of these categories.</x-page-subtitle>
        <x-wrapper-narrow>
            <x-see-more-events></x-see-more-events>
        </x-wrapper-narrow>
    </section>

    {{-- <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <!-- Lunchtime Concert Series -->
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-fuchsia-700 text-white">Lunchtime
                Concerts</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-fuchsia-800">These concerts are generally held in a park or
                patio,
                and
                are intended as lunch time entertainment. Often these are acoustic, or softer music. Many of these have
                food trucks or vendors near by.</p>
            <div class=" ">

                @if (count($lunches) > 0)
                    @foreach ($lunches as $days)
                        <div class="mt-4 px-2 pt-2 border-b border-b-fuchsia-500 text-fuchsia-600 font-extrabold">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>
                        @foreach ($days as $lunch)
                            <a href="/summer/events/{{ $lunch->id }}"
                                class="block px-4 py-4 border-t border-b border-t-transparent border-b-transparent last:border-b-0 hover:bg-fuchsia-50 hover:border-t hover:border-t-fuchsia-300 hover:border-b hover:border-b-fuchsia-300"
                                title="Live music in {{ $lunch->city }} from {{ $lunch->band }} at {{ $lunch->venue }} @if ($lunch->event_name) for {{ $lunch->event_name }} @endif">
                                <div class="font-bold">{{ $lunch->band }}</div>
                                @if ($lunch->event_name)
                                    <div class="text-gray-800 text-sm">{{ $lunch->event_name }}</div>
                                @endif
                                <div class="text-gray-800 text-sm">{{ $lunch->venue }}</div>
                                <div class="text-gray-800 text-sm">{{ $lunch->city }}</div>
                                @if ($lunch->start_time)
                                    <div class="text-gray-800 text-sm">
                                        {{ $lunch->start_time }}
                                    </div>
                                @endif
                            </a>
                        @endforeach
                    @endforeach
                    <a href="/summer/events/lunchtime-concerts"
                        class="mx-4 mt-8 inline-block text-white rounded px-3 py-2 bg-fuchsia-700 hover:bg-fuchsia-800 shadow-lg"
                        title="See all live bands playing lunchtime concerts">See
                        all in Lunchtime Concerts</a>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section> --}}

    {{-- <section class="pb-8 mx-2">
        <!-- Regular Bar Events -->
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12 ">
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-blue-700 text-white">Live Bands at
                Bars and
                Restaurants</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-blue-800">The list here includes the typical live band at a
                bar,
                usually held indoors throughout the year, but may be outside during the summer.</p>
            <div class="">
                @if (count($events) > 0)
                    @foreach ($events as $days)
                        <div class="mt-4 px-2 pt-2 border-b border-b-blue-500 text-blue-600 font-extrabold">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>

                        @foreach ($days as $event)
                            <a href="/summer/events/{{ $event->id }}"
                                class="block p-4 border-t border-b border-t-transparent border-b-transparent last:border-b-0 hover:bg-blue-50 hover:border-t hover:border-t-blue-300 hover:border-b hover:border-b-blue-300"
                                title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">
                                <div>
                                    <span class="font-bold">{{ $event->band }}</span>
                                    @if ($event->event_name)
                                        <span class="font-bold">at {{ $event->event_name }}</span>
                                    @endif
                                    <div class="text-gray-800 text-sm">{{ $event->venue }}
                                    </div>
                                    <div class="text-gray-800 text-sm">{{ $event->city }}</div>
                                </div>
                                <div class="text-gray-800 text-sm">
                                    @if ($event->start_time)
                                        {{ $event->start_time }}
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                    <a href="/summer/events/bars-restaurants?"
                        class="mx-4 mt-8 inline-block text-white rounded px-3 py-2 bg-blue-700 hover:bg-blue-800"
                        title="See all live bands playing at bars and restaurants">See
                        all in Bars & Restaurants </a>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section> --}}

    {{-- <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <!-- Fairs, Fests, and Outdoor Concerts e.g. Rockfest, Winnebago County Fair -->
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-green-700 text-white">Fairs, Fests,
                and
                Outdoor
                Concerts</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-green-800">This list contains the yearly fests, fairs, and
                outdoor
                concerts that are not specifically tied to a bar or restaurant.</p>

            <div class=" ">
                @if (count($fairs) > 0)
                    @foreach ($fairs as $days)
                        <div class="mt-4 px-2 pt-2 border-b border-b-green-500 text-green-600 font-extrabold">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>
                        @foreach ($days as $fair)
                            <a href="/summer/events/{{ $fair->id }}"
                                class="block p-4 border-t border-b border-t-transparent border-b-transparent last:border-b-0 hover:bg-green-50 hover:border-t hover:border-t-green-300 hover:border-b hover:border-b-green-300"
                                title="Live music in {{ $fair->city }} from {{ $fair->band }} at {{ $fair->venue }} @if ($fair->event_name) for {{ $fair->event_name }} @endif">
                                <div>
                                    <span class="font-bold">{{ $fair->band }}</span>
                                    @if ($fair->event_name)
                                        <span class="font-bold">at {{ $fair->event_name }}</span>
                                    @endif
                                    <div class="text-gray-800 text-sm">{{ $fair->venue }}
                                    </div>
                                    <div class="text-gray-800 text-sm">{{ $fair->city }}</div>
                                </div>
                                <div class="text-gray-800 text-sm">
                                    @if ($fair->start_time)
                                        {{ $fair->start_time }}
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                    <a href="/summer/events/fairs-fests"
                        class="mx-4 mt-8 inline-block text-white rounded px-3 py-2 bg-green-700 hover:bg-green-800 shadow-lg"
                        title="See all live bands playing at fairs, festivals, and outdoor concerts in Wisconsin">See
                        all in Fairs, Fests, and Outdoor Concerts</a>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section> --}}

    {{-- <section class="pb-8 mx-2">
        <x-wrapper-narrow class="bg-white shadow-lg border pb-12">
            <!-- National Acts -->
            <x-page-subtitle class="px-4 py-6 mb-8 tracking-wide font-semibold bg-violet-700 text-white">National
                Acts</x-page-subtitle>
            <p class="px-4 mb-2 text-sm text-center text-violet-800">These are stand-alone concerts specifically for a
                national
                artist. If
                a national act is playing at Waterfest, for example, that artist would be listed in the fairs and fests
                section, not here.</p>
            <div class=" ">

                @if (count($nationalActs) > 0)
                    @foreach ($nationalActs as $days)
                        <div class="mt-4 px-2 pt-2 border-b border-b-violet-500 text-violet-600 font-extrabold">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>
                        @foreach ($days as $nationalact)
                            <a href="/summer/events/{{ $nationalact->id }}"
                                class="block p-4 border-t border-b border-t-transparent border-b-transparent last:border-b-0 hover:bg-violet-50 hover:border-t hover:border-t-violet-300 hover:border-b hover:border-b-violet-300"
                                title="Live music in {{ $nationalact->city }} from {{ $nationalact->band }} at {{ $nationalact->venue }} @if ($nationalact->event_name) for {{ $nationalact->event_name }} @endif">
                                <div>
                                    <span class="font-bold">{{ $nationalact->band }}</span>
                                    @if ($nationalact->event_name)
                                        <span class="font-bold">at {{ $nationalact->event_name }}</span>
                                    @endif
                                    <div class="text-gray-800 text-sm">{{ $nationalact->venue }}
                                    </div>
                                    <div class="text-gray-800 text-sm">
                                        {{ $nationalact->city }}
                                    </div>
                                </div>
                                <div class="text-gray-800 text-sm">
                                    @if ($nationalact->start_time)
                                        {{ $nationalact->start_time }}
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                    <a href="/summer/events/national-bands"
                        class="mx-4 mt-8 inline-block text-white rounded px-3 py-2 bg-violet-700 hover:bg-violet-800 shadow-lg"
                        title="See all national bands touring in Wisconsin this summer ">See
                        all in National Acts</a>
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>

        </x-wrapper-narrow>
    </section> --}}
    <!-- End summer events -->

</x-layout>
