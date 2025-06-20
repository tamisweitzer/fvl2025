<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>See Live Music This Week</x-page-title>

        <!-- Start summer events -->
        <!-- Regular Bar Events -->
        <x-page-title>Live Music at Bars and Restaurants</x-page-title>
        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @if (count($events) > 0)
                @foreach ($events as $event)
                    <x-card-wrapper class="w-full ">
                        <a href="/summer/events/{{ $event->id }}" class="">
                            <div>
                                @if ($event->band)
                                    <span class="font-bold text-xl">{{ $event->band }}</span>
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
                        </a>
                    </x-card-wrapper>
                @endforeach
            @else
                <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                </div>
            @endif
        </section>

        <hr class="mb-8">

        <!-- Lunchtime Concert Series -->
        <x-page-title>Lunchtime and Day Concerts</x-page-title>
        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @if (count($lunches) > 0)
                @foreach ($lunches as $lunch)
                    <x-card-wrapper class="w-full ">
                        <a href="/summer/events/{{ $lunch->id }}" class="">
                            <div>
                                @if ($lunch->band)
                                    <span class="font-bold text-xl">{{ $lunch->band }}</span>
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
                        </a>
                    </x-card-wrapper>
                @endforeach
            @else
                <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                </div>
            @endif
        </section>

        <hr class="mb-8">

        <!-- Summer Concert Series e.g. Heid Summer Concert Series -->
        <x-page-title>Summer Concert Series</x-page-title>
        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @if (count($series) > 0)
                @foreach ($series as $serie)
                    <x-card-wrapper class="w-full">
                        <a href="/summer/events/{{ $serie->id }}" class="">
                            <div>
                                @if ($serie->band)
                                    <span class="font-bold text-xl">{{ $serie->band }}</span>
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
                        </a>
                    </x-card-wrapper>
                @endforeach
            @else
                <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                </div>
            @endif
        </section>

        <hr class="mb-8">

        <!-- Fairs and Standalone Concerts e.g. Rockfest, Winnebago County Fair -->
        <x-page-title>Fairs and Regular Outdoor Concerts</x-page-title>
        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @if (count($fairs) > 0)
                @foreach ($fairs as $fair)
                    <x-card-wrapper class="w-full">
                        <a href="/summer/events/{{ $fair->id }}" class="">
                            <div class="">
                                <div class="">
                                    <div>
                                        @if ($fair->band)
                                            <span class="font-bold text-xl">{{ $fair->band }}</span>
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
                                </div>
                            </div>
                        </a>
                    </x-card-wrapper>
                @endforeach
            @else
                <div class="text-gray-500 italic text-sm mx-auto">There are no results yet for this category.
                </div>
            @endif
        </section>
        <!-- End summer events -->

        {{-- <section class="mb-8">
            @foreach ($events as $event)
                <x-card-wrapper>
                    <a href="/events/{{ $event->id }}" class="block">
                        <div class="text-lg font-semibold text-gray-700">
                            {{ $event->name }}
                        </div>

                        <div class="text-gray-700">
                            {{ $event->venue->name }}
                            <span> in </span>
                            {{ $event->venue->city->name }}
                        </div>

                        <div class="text-gray-500 text-sm">
                            {{ $event->event_date }}
                            {{ $event->event_time }}
                        </div>
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>

        <a href="/events"
            class="btn mt-4 inline-block bg-orange-500 hover:bg-orange-600 active:bg-orange-700 rounded px-4 py-2 text-white">See
            all upcoming shows.</a> --}}
    </x-wrapper-narrow>
</x-layout>
