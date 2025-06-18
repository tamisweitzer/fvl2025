<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">

        <!-- Regular Bar Events -->
        <x-page-title>Bars and Restaurants</x-page-title>
        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @foreach ($events as $event)
                <x-kv-group class="grid grid-cols-12">
                    <x-kv-key class="col-span-3 sm:col-span-2">Event Name:</x-kv-key>
                    <x-kv-value class="col-span-9 sm:col-span-10">
                        <a href="/summer/events{{ $event->band->id }}" class="default-inline-link">
                            {{ $event->band->fullname }}
                        </a>
                    </x-kv-value>
                </x-kv-group>

                <x-card-wrapper class="w-full ">
                    <a href="/summer/events/{{ $event->id }}" class="">
                        <div class="flex flex-row gap-x-4 sm:flex-col">
                            <div class="flex flex-col justify-end">
                                @if ($event->event_name)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Event name</span>
                                        <span class="font-bold text-2xl">{{ $event->event_name }}</span>
                                    </div>
                                @endif

                                @if ($event->venue)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Venue:</span>
                                        <span class="">{{ $event->venue }}</span>
                                    </div>
                                @endif

                                @if ($event->city)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">City: </span>
                                        <span>{{ $event->city }}</span>
                                    </div>
                                @endif

                                @if ($event->band)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Band(s):</span>
                                        <span class="font-extrabold">{{ $event->band }}</span>
                                    </div>
                                @endif


                                @if ($event->start_date)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Start Date:</span>
                                        <span>{{ $event->start_date }}</span>
                                    </div>
                                @endif

                                @if ($event->end_date)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">End date:</span>
                                        <span>{{ $event->end_date }}</span>
                                    </div>
                                @endif

                                @if ($event->start_time)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Time:</span>
                                        <span>{{ $event->start_time }}</span>
                                    </div>
                                @endif


                                @if ($event->url)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">URL: </span>
                                        <span>{{ $event->url }}</span>
                                    </div>
                                @endif

                                @if ($event->notes)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Notes: </span>
                                        <span>{{ $event->notes }}</span>
                                    </div>
                                @endif

                                @if ($event->event_type)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Type: </span>
                                        <span>{{ $event->event_type }}</span>
                                    </div>
                                @endif

                            </div>
                        </div>
                        {{-- <div class="text-gray-500 text-sm">{{ $event->excerpt }}</div> --}}
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>


        <!-- Lunchtime Concert Series -->
        <x-page-title>Lunchtime Concert Series</x-page-title>
        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @foreach ($lunches as $lunch)
                <x-card-wrapper class="w-full ">
                    <a href="/summer/events/{{ $lunch->id }}" class="">
                        <div class="flex flex-row gap-x-4 sm:flex-col">
                            <div class="flex flex-col justify-end">
                                @if ($lunch->event_name)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">lunch name</span>
                                        <span class="font-bold text-2xl">{{ $lunch->event_name }}</span>
                                    </div>
                                @endif

                                @if ($lunch->venue)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Venue:</span>
                                        <span class="">{{ $lunch->venue }}</span>
                                    </div>
                                @endif

                                @if ($lunch->city)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">City: </span>
                                        <span>{{ $lunch->city }}</span>
                                    </div>
                                @endif

                                @if ($lunch->band)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Band(s):</span>
                                        <span class="font-extrabold">{{ $lunch->band }}</span>
                                    </div>
                                @endif


                                @if ($lunch->start_date)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Start Date:</span>
                                        <span>{{ $lunch->start_date }}</span>
                                    </div>
                                @endif

                                @if ($lunch->end_date)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">End date:</span>
                                        <span>{{ $lunch->end_date }}</span>
                                    </div>
                                @endif

                                @if ($lunch->start_time)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Time:</span>
                                        <span>{{ $lunch->start_time }}</span>
                                    </div>
                                @endif


                                @if ($lunch->url)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">URL: </span>
                                        <span>{{ $lunch->url }}</span>
                                    </div>
                                @endif

                                @if ($lunch->notes)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Notes: </span>
                                        <span>{{ $lunch->notes }}</span>
                                    </div>
                                @endif

                                {{-- @if ($lunch->lunch_type)
                                    <div class="mb-2">
                                        <span class="inline-block w-28">Type: </span>
                                        <span>{{ $lunch->event_type }}</span>
                                    </div>
                                @endif --}}

                            </div>
                        </div>
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>


        <!-- Summer Concert Series -->
        <x-page-title>Summer Concert Series</x-page-title>
        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @foreach ($series as $serie)
                <x-card-wrapper class="w-full">
                    <a href="/summer/events/{{ $serie->id }}" class="">
                        <div class="flex flex-row gap-x-4 sm:flex-col">
                            <div class="flex flex-col justify-end">
                                @if ($serie->band)
                                    <div class="mb-0">
                                        <span class="font-extrabold text-xl">{{ $serie->band }}</span>
                                    </div>
                                @endif


                                @if ($serie->event_name)
                                    <div class="mb-0">
                                        <span class="font-bold">{{ $serie->event_name }}</span>
                                    </div>
                                @endif

                                <div class="mb-0">
                                    @if ($serie->start_date)
                                        <span>{{ $serie->start_date->format('M d, Y') }}</span>
                                    @endif
                                    @if ($serie->end_date)
                                        <span> - {{ $serie->end_date }}</span>
                                    @endif


                                </div>

                                @if ($serie->start_time)
                                    <span>{{ $serie->start_time }}</span>
                            </div>
            @endif
            </div>
            </div>
            </a>
            </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
