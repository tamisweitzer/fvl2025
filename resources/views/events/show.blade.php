<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>{{ $event->name }}</x-page-title>

        <section class="mb-8">
            <div>
                <x-kv-key>Band:</x-kv-key>
                <x-kv-value>{{ $event->band->fullname }}</x-kv-value>
            </div>
            <div>
                <x-kv-key>Venue:</x-kv-key>
                <x-kv-value>{{ $event->venue->name }}</x-kv-value>
            </div>
            <div>
                <x-kv-key>Location:</x-kv-key>
                <x-kv-value>
                    {{ $event->venue->city->name }},
                    {{ $event->venue->state->name }}
                </x-kv-value>
            </div>
            <div>
                <x-kv-key>Date:</x-kv-key>
                <x-kv-value>{{ date('M d, Y', strtotime($event->event_date)) }}</x-kv-value>
            </div>
            <div>
                <x-kv-key>Time:</x-kv-key>
                <x-kv-value>{{ date('g:i a', strtotime($event->event_time)) }}</x-kv-value>
            </div>
            <div>
                <x-kv-key>Details:</x-kv-key>
                <x-kv-value>{{ $event->event_details }}</x-kv-value>
            </div>
        </section>
    </x-wrapper-narrow>
</x-layout>
