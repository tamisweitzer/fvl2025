<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>Live Music This Week in the Fox Valley</x-page-title>
        <p class="text-center -mt-4 mb-12">Click on any listing for more information.</p>

        <!-- Start summer events -->
        <!-- Regular Bar Events -->
        <x-page-subtitle class="mb-4">Live Music at Bars and Restaurants</x-page-subtitle>
        <section class="mb-12 mx-auto">
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-auto">
                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <a href="/summer/events/{{ $event->id }}"
                            class="block p-4 sm:p-8 border-b  hover:bg-violet-50">
                            <div>
                                @if ($event->band)
                                    <span class="font-bold">{{ $event->band }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($event->event_name)
                                    <span class="">{{ $event->event_name }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($event->start_date)
                                    <span>{{ $event->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($event->end_date)
                                    <span> - {{ $event->end_date->format('M d, Y') }}</span>
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
        </section>

        <!-- Lunchtime Concert Series -->
        <x-page-subtitle class="mb-4">Lunchtime Concerts</x-page-subtitle>
        <section class="mb-12 mx-auto">
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-auto">
                @if (count($lunches) > 0)
                    @foreach ($lunches as $lunch)
                        <a href="/summer/events/{{ $lunch->id }}"
                            class="block p-4 sm:p-8 border-b  hover:bg-violet-50">
                            <div>
                                @if ($lunch->band)
                                    <span class="font-bold">{{ $lunch->band }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($lunch->event_name)
                                    <span class="">{{ $lunch->event_name }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($lunch->start_date)
                                    <span>{{ $lunch->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($lunch->end_date)
                                    <span> - {{ $lunch->end_date->format('M d, Y') }}</span>
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
        </section>

        <!-- Summer Concert Series e.g. Heid Summer Concert Series -->
        <x-page-subtitle class="mb-4">Summer Concert Series</x-page-subtitle>
        <section class="mb-12 mx-auto">
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-auto">
                @if (count($series) > 0)
                    @foreach ($series as $serie)
                        <a href="/summer/events/{{ $serie->id }}"
                            class="block p-4 sm:p-8 border-b  hover:bg-violet-50">
                            <div>
                                @if ($serie->band)
                                    <span class="font-bold">{{ $serie->band }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($serie->event_name)
                                    <span class="">{{ $serie->event_name }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($serie->start_date)
                                    <span>{{ $serie->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($serie->end_date)
                                    <span> - {{ $serie->end_date->format('M d, Y') }}</span>
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
        </section>

        {{-- <hr class="mb-8"> --}}

        <!-- Fairs and Standalone Concerts e.g. Rockfest, Winnebago County Fair -->
        <x-page-subtitle class="mb-4">Fairs and Regular Outdoor Concerts</x-page-subtitle>
        <section class="mb-12 mx-auto">
            <div class=" bg-slate-50 border border-slate-300 shadow rounded max-h-96 overflow-auto">
                @if (count($fairs) > 0)
                    @foreach ($fairs as $fair)
                        <a href="/summer/events/{{ $fair->id }}"
                            class="block p-4 sm:p-8 border-b  hover:bg-violet-50">
                            <div>
                                @if ($fair->band)
                                    <span class="font-bold">{{ $fair->band }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($fair->event_name)
                                    <span class="">{{ $fair->event_name }}</span>
                                @endif
                            </div>

                            <div>
                                @if ($fair->start_date)
                                    <span>{{ $fair->start_date->format('M d, Y') }}</span>
                                @endif
                                @if ($fair->end_date)
                                    <span> - {{ $fair->end_date->format('M d, Y') }}</span>
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
        </section>
        <!-- End summer events -->

    </x-wrapper-narrow>
</x-layout>
