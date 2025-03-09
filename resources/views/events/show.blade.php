<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>{{ $event->name }}</x-page-title>

        <div>
            <span class="inline-block w-20 font-semibold">Band:</span>
            <span>{{ $event->band->name }}</span>
        </div>
        <div>
            <span class="inline-block w-20 font-semibold">Venue:</span>
            <span>{{ $event->venue->name }}</span>
        </div>
        <div>
            <span class="inline-block w-20 font-semibold">Location:</span>
            <span>{{ $event->venue->city->name }}, {{ $event->venue->state->name }}</span>
        </div>
        <div>
            <span class="inline-block w-20 font-semibold">Date:</span>
            <span>{{ date('M d, Y', strtotime($event->event_date)) }}</span>
        </div>
        <div>
            <span class="inline-block w-20 font-semibold">Time:</span>
            <span>{{ date('g:i a', strtotime($event->event_time)) }}</span>
        </div>
        <div>
            <span class="inline-block w-20 font-semibold">Details:</span>
            <span>{{ $event->event_details }}</span>
        </div>
    </x-wrapper-narrow>
</x-layout>
