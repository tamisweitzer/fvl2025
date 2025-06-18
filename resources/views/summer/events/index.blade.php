summers events template.
<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">
        <x-page-title>All Summer Events</x-page-title>

        <section class="mb-8 flex flex-wrap gap-2 mx-auto">
            @foreach ($events as $event)
                <x-card-wrapper class="w-full ">
                    <a href="/events/{{ $event->id }}" class="">
                        <div class="flex flex-row gap-x-4 sm:flex-col">
                            <div class="flex flex-col justify-end">
                                <div class="mb-2">Start Date: {{ $event->start_date }}</div>
                                <div class="mb-2">End date: {{ $event->end_date }}</div>
                                <div class="mb-2">Start time:{{ $event->start_time }}</div>
                                <div class="mb-2">Band(s): {{ $event->band }}</div>
                                <div class="mb-2">Event name: {{ $event->event_name }}</div>
                                <div class="mb-2">Venue: {{ $event->venue }}</div>
                                <div class="mb-2">City: {{ $event->city }}</div>
                                <div class="mb-2">URL: {{ $event->url }}</div>
                                <div class="mb-2">Notes: {{ $event->notes }}</div>
                                <div class="mb-2">Type: {{ $event->event_type }}</div>

                            </div>
                        </div>
                        {{-- <div class="text-gray-500 text-sm">{{ $event->excerpt }}</div> --}}
                    </a>
                </x-card-wrapper>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
