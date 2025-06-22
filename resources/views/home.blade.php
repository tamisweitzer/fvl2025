<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>Live Music in the Fox Valley</x-page-title>
        <p class="text-center -mt-4 mb-12 italic text-gray-600">Click on any listing below for more information.</p>
    </x-wrapper-narrow>

    <!-- Start summer events -->
    <section class="mb-16 mr-4">
        <!-- Regular Bar Events -->
        <x-wrapper-narrow>
            <x-page-subtitle class="mb-4 mt-8 tracking-wide">Live Bands at Bars and Restaurants</x-page-subtitle>
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-[450px] overflow-y-scroll">
                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <a href="/summer/events/{{ $event->id }}" class="block p-4 border-b  hover:bg-violet-50">
                            <div>
                                <div class="font-bold">{{ $event->band }}</div>

                                <div class="text-gray-500">
                                    @if ($event->event_name)
                                        <div class="">{{ $event->event_name }}</div>
                                    @endif
                                    {{ $event->venue }}, {{ $event->city }}
                                </div>
                            </div>
                            <div class="text-gray-500">
                                @if ($event->start_date)
                                    <span>{{ $event->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($event->start_time)
                                    --- {{ $event->start_time }}
                                @endif
                            </div>
                            @if (!$loop->last)
                                {{-- <hr> --}}
                            @endif
                        </a>
                    @endforeach
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>


    <section class="mb-16 mr-4">
        <x-wrapper-narrow>
            <!-- Lunchtime Concert Series -->
            <x-page-subtitle class="mb-4">Lunchtime Concerts</x-page-subtitle>
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-y-scroll">
                @if (count($lunches) > 0)
                    @foreach ($lunches as $lunch)
                        <a href="/summer/events/{{ $lunch->id }}" class="block p-4 border-b  hover:bg-violet-50">
                            <div>
                                <div class="font-bold">{{ $lunch->band }}</div>
                                <div class="text-gray-500">
                                    @if ($lunch->event_name)
                                        <div>{{ $lunch->event_name }}</div>
                                    @endif
                                    {{ $lunch->venue }} - {{ $lunch->city }}
                                </div>
                            </div>
                            <div class="text-gray-500">
                                @if ($lunch->start_date)
                                    <span>{{ $lunch->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($lunch->start_time)
                                    --- {{ $lunch->start_time }}
                                @endif
                            </div>
                            @if (!$loop->last)
                                {{-- <hr> --}}
                            @endif
                        </a>
                    @endforeach
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>


    {{-- <hr class="mb-8"> --}}

    <section class="mb-16 mr-4">
        <x-wrapper-narrow>
            <!-- Fairs, Fests, and Outdoor Concerts e.g. Rockfest, Winnebago County Fair -->
            <x-page-subtitle class="mb-4">Fairs, Fests, and Outdoor Concerts</x-page-subtitle>
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-y-scroll">
                @if (count($fairs) > 0)
                    @foreach ($fairs as $fair)
                        <a href="/summer/events/{{ $fair->id }}" class="block p-4 border-b  hover:bg-violet-50">
                            <div>
                                <div class="font-bold">{{ $fair->band }}</div>
                                <div class="text-gray-500">
                                    @if ($fair->event_name)
                                        <div>{{ $fair->event_name }} </div>
                                    @endif
                                    {{ $fair->venue }}, {{ $event->city }}
                                </div>
                            </div>
                            <div class="text-gray-500">
                                @if ($fair->start_date)
                                    <span>{{ $fair->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($fair->start_time)
                                    --- {{ $fair->start_time }}
                                @endif
                            </div>
                            @if (!$loop->last)
                                {{-- <hr> --}}
                            @endif
                        </a>
                    @endforeach
                @else
                    <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                    </div>
                @endif
            </div>
        </x-wrapper-narrow>
    </section>

    <!-- National Acts -->
    <section class="mb-16 mr-4">
        <x-wrapper-narrow>
            <x-page-subtitle class="mb-4">National Acts</x-page-subtitle>
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-y-scroll">
                @if (count($nationalActs) > 0)
                    @foreach ($nationalActs as $act)
                        <a href="/summer/events/{{ $act->id }}" class="block p-4 border-b  hover:bg-violet-50">
                            <div>
                                <span class="font-bold">{{ $act->band }}</span>
                                @if ($act->event_name)
                                    <span class="font-bold">at {{ $act->event_name }}</span>
                                @endif
                                <div class="text-gray-500">{{ $act->venue }}</div>
                            </div>
                            <div class="text-gray-500">
                                @if ($act->start_date)
                                    <span>{{ $act->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($act->start_time)
                                    --- {{ $act->start_time }}
                                @endif
                            </div>
                            @if (!$loop->last)
                                {{-- <hr> --}}
                            @endif
                        </a>
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
