<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">
        <x-page-title>Event</x-page-title>

        <section class="mb-8 flex flex-wrap gap-2 mx-auto">

            <x-card-wrapper class="w-full ">
                <a href="/summer/events/{{ $event->id }}" class="">
                    <div class="flex flex-row gap-x-4 sm:flex-col">
                        <div class="flex flex-col justify-end">
                            <div class="mb-2">
                                <span class="inline-block w-28">Event name</span>
                                <span class="font-bold text-2xl">{{ $event->event_name }}</span>
                            </div>
                            <div class="mb-2">
                                <span class="inline-block w-28">Venue:</span>
                                <span class="">{{ $event->venue }}</span>
                            </div>
                            <div class="mb-2">
                                <span class="inline-block w-28">City: </span>
                                <span>{{ $event->city }}</span>
                            </div>
                            <div class="mb-2">
                                <span class="inline-block w-28">Band(s):</span>
                                <span class="font-extrabold">{{ $event->band }}</span>
                            </div>



                            <div class="mb-2">
                                <span class="inline-block w-28">Start Date:</span>
                                <span>{{ $event->start_date->format('M d, Y') }}</span>
                            </div>
                            <div class="mb-2">
                                @if ($event->end_date)
                                    <span class="inline-block w-28">End date:</span>
                                    <span>{{ $event->end_date->format('M d, Y') }}</span>
                                @endif
                            </div>
                            <div class="mb-2">
                                <span class="inline-block w-28">Time:</span>
                                <span>{{ $event->start_time }}</span>
                            </div>



                            <div class="mb-2">
                                <span class="inline-block w-28">URL: </span>
                                <span>{{ $event->url }}</span>
                            </div>
                            <div class="mb-2">
                                <span class="inline-block w-28">Notes: </span>
                                <span>{{ $event->notes }}</span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="text-gray-500 text-sm">{{ $event->excerpt }}</div> --}}
                </a>

                <div class="mt-8 ">
                    <a href="/summer/events/{{ $event->id }}/edit"
                        class="bg-orange-300 border border-orange-400 px-3 py-2 rounded ">Edit Event</a>
                </div>
            </x-card-wrapper>

        </section>
    </x-wrapper-narrow>
</x-layout>
