<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>{{ $event->name }}</x-page-title>

        <section class="mb-8">
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Band:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">
                    <a href="/bands/{{ $event->band->id }}" class="default-inline-link">
                        {{ $event->band->fullname }}
                    </a>
                </x-kv-value>
            </x-kv-group>
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Venue:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">
                    <a href="/venues/{{ $event->venue->id }}" class="default-inline-link">
                        {{ $event->venue->name }}
                    </a>
                </x-kv-value>
            </x-kv-group>
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Location:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">
                    <a href="/cities/{{ $event->venue->city->id }}" class="default-inline-link">
                        {{ $event->venue->city->name }},
                    </a>
                    {{ $event->venue->state->name }}
                </x-kv-value>
            </x-kv-group>
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Date:</x-kv-key>
                <x-kv-value
                    class="col-span-9 sm:col-span-10">{{ date('M d, Y', strtotime($event->event_date)) }}</x-kv-value>
            </x-kv-group>
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Time:</x-kv-key>
                <x-kv-value
                    class="col-span-9 sm:col-span-10">{{ date('g:i a', strtotime($event->event_time)) }}</x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Details:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $event->event_details }}</x-kv-value>
            </x-kv-group>
        </section>

        <hr class="mt-12 mb-8 w-3/4 mx-auto">

        <section data-event-address>
            <div>
                <h3 class="text-xl bold mb-2">Address:</h3>
                <address>
                    @if ($event->venue->fullname)
                        <div class="mb-1 sm:mb-0">{{ $event->venue->fullname }}</div>
                    @else
                        <div class="mb-1 sm:mb-0">{{ $event->venue->name }}</div>
                    @endif
                    @if ($event->venue->address1)
                        @php
                            $addr =
                                trim($event->venue->address1) .
                                ',+' .
                                trim($event->venue->city->name) .
                                ',+' .
                                trim($event->venue->state->name) .
                                '+' .
                                trim($event->venue->zip);
                        @endphp
                        <div class="mb-1 sm:mb-0">
                            <a href="https://www.google.com/maps/place/{{ $addr }}" class="default-inline-link"
                                target="_blank">
                                {{ $event->venue->address1 }}<br>
                            </a>
                        </div>
                    @endif
                    <div class="mb-1 sm:mb-0">
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
                    </div>

                    @if ($event->venue->phone)
                        <div>
                            Ph: <a href="tel:{{ $event->venue->phone }}" class="default-inline-link inline-block mt-2"
                                target="_blank">{{ $event->venue->phone }}</a>
                        </div>
                    @endif
                </address>
            </div>
        </section>
    </x-wrapper-narrow>
</x-layout>
