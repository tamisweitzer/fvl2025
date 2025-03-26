<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>{{ $event->name }}</x-page-title>

        <section data-event-details>
            <x-kv-group>
                <x-kv-key class="basis-20 text-right">Band:</x-kv-key>
                <x-kv-value>{{ $event->band->fullname }}</x-kv-value>
            </x-kv-group>

            <x-kv-group>
                <x-kv-key class="basis-20 text-right">Venue:</x-kv-key>
                <x-kv-value>{{ $event->venue->name }}</x-kv-value>
            </x-kv-group>

            <x-kv-group>
                <x-kv-key class="basis-20 text-right">Location:</x-kv-key>
                <x-kv-value>
                    {{ $event->venue->city->name }},
                    {{ $event->venue->state->name }}
                </x-kv-value>
            </x-kv-group>

            <x-kv-group>
                <x-kv-key class="basis-20 text-right">Date:</x-kv-key>
                <x-kv-value>{{ date('M d, Y', strtotime($event->event_date)) }}</x-kv-value>
            </x-kv-group>

            <x-kv-group>
                <x-kv-key class="basis-20 text-right">Time:</x-kv-key>
                <x-kv-value>{{ date('g:i a', strtotime($event->event_time)) }}</x-kv-value>
            </x-kv-group>

            <x-kv-group>
                <x-kv-key class="basis-20 text-right">Details:</x-kv-key>
                <x-kv-value class="">{{ $event->event_details }}</x-kv-value>
            </x-kv-group>
        </section>

        <hr class="mt-12 mb-8 w-3/4 mx-auto">

        <section data-event-address>
            <div>
                <h3 class="text-xl bold mb-2">Address:</h3>
                <address>
                    @if ($event->venue->fullname)
                        {{ $event->venue->fullname }}<br>
                    @else
                        {{ $event->venue->name }}
                    @endif
                    @if ($event->venue->address1)
                        {{ $event->venue->address1 }}<br>
                    @endif
                    @if ($event->venue->address2)
                        {{ $event->venue->address2 }}<br>
                    @endif
                    @if ($event->venue->city->name)
                        {{ $event->venue->city->name }},
                    @endif
                    @if ($event->venue->state->name)
                        {{ $event->venue->state->name }}
                    @endif
                    @if ($event->venue->zip)
                        {{ $event->venue->zip }}<br>
                    @endif
                    @if ($event->venue->phone)
                        Ph: <a href="tel:{{ $event->venue->phone }}"
                            class="inline-block mt-2">{{ $event->venue->phone }}</a>
                    @endif
                </address>
            </div>
        </section>
    </x-wrapper-narrow>
</x-layout>
