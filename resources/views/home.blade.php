<x-layout>
    <section class="pb-8">
        <x-wrapper-narrow>
            <x-page-title>Live Music in the Fox Valley</x-page-title>
            <p class="text-center -mt-4 italic text-gray-600">Click on any listing below for more information.</p>
        </x-wrapper-narrow>
    </section>

    <!-- Start summer events -->
    <section class="pb-8">
        <!-- Regular Bar Events -->
        <x-wrapper-narrow>
            <x-page-subtitle class="mb-4 tracking-wide">Live Bands at Bars and Restaurants</x-page-subtitle>
            <div
                class=" bg-slate-50 border border-slate-300 shadow rounded max-h-[450px] overflow-y-scroll [&::-webkit-scrollbar]">

                @if (count($events) > 0)
                    @foreach ($events as $days)
                        <div class="px-4 pt-4  tracking-widest">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>

                        @foreach ($days as $event)
                            <a href="/summer/events/{{ $event->id }}" class="block p-4 border-b  hover:bg-violet-50">
                                <div>
                                    <span class="font-bold">{{ $event->band }}</span>
                                    @if ($event->event_name)
                                        <span class="font-bold">at {{ $event->event_name }}</span>
                                    @endif
                                    <div class="text-gray-500 text-sm">{{ $event->venue }}, {{ $event->city }}
                                    </div>
                                </div>
                                <div class="text-gray-500 text-sm">
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
            <!-- Lunchtime Concert Series -->
            <x-page-subtitle class="mb-4">Lunchtime Concerts</x-page-subtitle>
            <div
                class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-y-scroll [&::-webkit-scrollbar]">

                @if (count($lunches) > 0)
                    @foreach ($lunches as $days)
                        <div class="px-4 pt-4  tracking-widest">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>
                        @foreach ($days as $lunch)
                            <a href="/summer/events/{{ $lunch->id }}" class="block p-4 border-b  hover:bg-violet-50">
                                <div>
                                    <span class="font-bold">{{ $lunch->band }}</span>
                                    @if ($lunch->event_name)
                                        <span class="font-bold">at {{ $lunch->event_name }}</span>
                                    @endif
                                    <div class="text-gray-500 text-sm">{{ $lunch->venue }}, {{ $lunch->city }}
                                    </div>
                                </div>
                                <div class="text-gray-500 text-sm">
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
        <x-wrapper-narrow>
            <!-- Fairs, Fests, and Outdoor Concerts e.g. Rockfest, Winnebago County Fair -->
            <x-page-subtitle class="mb-4">Fairs, Fests, and Outdoor Concerts</x-page-subtitle>
            <div
                class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-y-scroll [&::-webkit-scrollbar]">
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
                                    <div class="text-gray-500 text-sm">{{ $fair->venue }}, {{ $fair->city }}
                                    </div>
                                </div>
                                <div class="text-gray-500 text-sm">
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
            <x-page-subtitle class="mb-4">National Acts</x-page-subtitle>
            <div
                class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-y-scroll [&::-webkit-scrollbar]">

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
                                    <div class="text-gray-500 text-sm">{{ $nationalact->venue }},
                                        {{ $nationalact->city }}
                                    </div>
                                </div>
                                <div class="text-gray-500 text-sm">
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
