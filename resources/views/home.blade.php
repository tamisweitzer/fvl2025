<x-layout>
    <section class="pb-4">
        <x-wrapper-narrow class="text-center">
            <x-page-title>Live Music in the Fox Valley</x-page-title>
            <x-page-subtitle class="text-orange-700  font-semibold mb-2">Wisconsin knows music!</x-page-subtitle>
            <p>Browse below for a sampling of the summer concerts happening now in your area, or <a
                    href="/summer/events/" class="underline text-orange-700">view all upcoming events here</a>.
            </p>
            <p class="mt-8">Click on any listing below for more information.</p>
        </x-wrapper-narrow>
    </section>

    <!-- Start summer events -->
    <section class="pb-8">
        <x-wrapper-narrow>
            <!-- Lunchtime Concert Series -->
            <x-page-subtitle class="mb-4 tracking-wide font-semibold">Lunchtime Concerts</x-page-subtitle>
            <p class="mb-2 text-sm text-center text-gray-800">These concerts are generally held in a park or patio, and
                are intended as lunch time entertainment. Often these are acoustic, or softer music. Many of these have
                food trucks or vendors near by.</p>
            <div
                class=" bg-slate-50 border border-slate-300 shadow rounded max-h-[450px] overflow-y-scroll [&::-webkit-scrollbar]">

                @if (count($lunches) > 0)
                    @foreach ($lunches as $days)
                        <div class="px-4 pt-4 text-gray-800 tracking-widest">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>
                        @foreach ($days as $lunch)
                            <a href="/summer/events/{{ $lunch->id }}" class="block p-4 border-b  hover:bg-violet-50">
                                <div>
                                    <span class="font-bold">{{ $lunch->band }}</span>
                                    @if ($lunch->event_name)
                                        <span class="font-bold">at {{ $lunch->event_name }}</span>
                                    @endif
                                    <div>{{ $lunch->venue }}
                                    </div>
                                    <div class="text-gray-800 text-sm">{{ $lunch->city }}</div>
                                </div>
                                <div class="text-gray-800 text-sm">
                                    @if ($lunch->start_time)
                                        {{ $lunch->start_time }}
                                    @endif
                                </div>
                                @if (!$loop->last)
                                    {{-- <hr> --}}
                                @endif
                            </a>
                        @endforeach
                    @endforeach
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>

    <section class="pb-8">
        <!-- Regular Bar Events -->
        <x-wrapper-narrow>
            <x-page-subtitle class="mb-4 tracking-wide font-semibold">Live Bands at Bars and
                Restaurants</x-page-subtitle>
            <p class="mb-2 text-sm text-center text-gray-800">The list here includes the typical live band at a bar,
                usually held indoors throughout the year, but may be outside during the summer.</p>
            <div
                class="bg-slate-50 border border-slate-300 shadow rounded max-h-[450px] overflow-y-scroll [&::-webkit-scrollbar]">

                @if (count($events) > 0)
                    @foreach ($events as $days)
                        <div class="px-4 pt-4 text-gray-800 tracking-widest">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>

                        @foreach ($days as $event)
                            <a href="/summer/events/{{ $event->id }}" class="block p-4 border-b  hover:bg-violet-50">
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
                                @if (!$loop->last)
                                    {{-- <hr> --}}
                                @endif
                            </a>
                        @endforeach
                    @endforeach
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif

            </div>
        </x-wrapper-narrow>
    </section>

    <section class="pb-8">
        <x-wrapper-narrow>
            <!-- Fairs, Fests, and Outdoor Concerts e.g. Rockfest, Winnebago County Fair -->
            <x-page-subtitle class="mb-4 text-gray-800 tracking-wide font-semibold">Fairs, Fests, and Outdoor
                Concerts</x-page-subtitle>
            <p class="mb-2 text-sm text-center text-gray-800">This list contains the yearly fests, fairs, and outdoor
                concerts that are not specifically tied to a bar or restaurant.</p>

            <div
                class=" bg-slate-50 border border-slate-300 shadow rounded max-h-[450px] overflow-y-scroll [&::-webkit-scrollbar]">
                @if (count($fairs) > 0)
                    @foreach ($fairs as $days)
                        <div class="px-4 pt-4  tracking-widest">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>
                        @foreach ($days as $fair)
                            <a href="/summer/events/{{ $fair->id }}"
                                class="block p-4 border-b  hover:bg-violet-50">
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
                                @if (!$loop->last)
                                    {{-- <hr> --}}
                                @endif
                            </a>
                        @endforeach
                    @endforeach
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>

    <section class="pb-8">
        <x-wrapper-narrow>
            <!-- National Acts -->
            <x-page-subtitle class="mb-4 text-gray-800 tracking-wide font-semibold">National Acts</x-page-subtitle>
            <p class="mb-2 text-sm text-center text-gray-800">These are stand-alone concerts specifically for a national
                artist. If
                a national act is playing at Waterfest, for example, that artist would be listed in the fairs and fests
                section, not here.</p>
            <div
                class=" bg-slate-50 border border-slate-300 shadow rounded max-h-[450px] overflow-y-scroll [&::-webkit-scrollbar]">

                @if (count($nationalActs) > 0)
                    @foreach ($nationalActs as $days)
                        <div class="px-4 pt-4  tracking-widest">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>
                        @foreach ($days as $nationalact)
                            <a href="/summer/events/{{ $nationalact->id }}"
                                class="block p-4 border-b  hover:bg-violet-50">
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
                                @if (!$loop->last)
                                    {{-- <hr> --}}
                                @endif
                            </a>
                        @endforeach
                    @endforeach
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>
    <!-- End summer events -->
</x-layout>
