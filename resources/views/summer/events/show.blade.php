<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">
        <x-page-title>{{ $event->band }} at @if ($event->event_name)
                {{ $event->event_name }}
            @else
                {{ $event->venue }}
            @endif
        </x-page-title>

        <section class="mb-8 flex flex-wrap gap-2 mx-auto">

            <x-card-single-wrapper class="w-full">
                <div class="flex flex-row gap-x-4 sm:flex-col">
                    <div class="flex flex-col justify-end">
                        <x-kv-group class="grid grid-cols-12">
                            <x-kv-key class="col-span-3 sm:col-span-2">Band(s):</x-kv-key>
                            <x-kv-value class="col-span-9 sm:col-span-10">{{ $event->band }}</x-kv-value>
                        </x-kv-group>

                        @if ($event->event_name)
                            <x-kv-group class="grid grid-cols-12">
                                <x-kv-key class="col-span-3 sm:col-span-2">Event:</x-kv-key>
                                <x-kv-value class="col-span-9 sm:col-span-10">{{ $event->event_name }}</x-kv-value>
                            </x-kv-group>
                        @endif

                        @if ($event->venue)
                            <x-kv-group class="grid grid-cols-12">
                                <x-kv-key class="col-span-3 sm:col-span-2">Venue:</x-kv-key>
                                <x-kv-value class="col-span-9 sm:col-span-10">{{ $event->venue }}</x-kv-value>
                            </x-kv-group>
                        @endif


                        <x-kv-group class="grid grid-cols-12">
                            <x-kv-key class="col-span-3 sm:col-span-2">City:</x-kv-key>
                            <x-kv-value class="col-span-9 sm:col-span-10">{{ $event->city }}</x-kv-value>
                        </x-kv-group>

                        <x-kv-group class="grid grid-cols-12">
                            <x-kv-key class="col-span-3 sm:col-span-2">Date:</x-kv-key>
                            <x-kv-value class="col-span-9 sm:col-span-10">
                                {{ $event->start_date->format('M d, Y') }}
                                @if ($event->end_date)
                                    - {{ $event->end_date->format('M d, Y') }}
                                @endif
                            </x-kv-value>
                        </x-kv-group>

                        @if ($event->start_time)
                            <x-kv-group class="grid grid-cols-12">
                                <x-kv-key class="col-span-3 sm:col-span-2">Time:</x-kv-key>
                                <x-kv-value class="col-span-9 sm:col-span-10">{{ $event->start_time }}</x-kv-value>
                            </x-kv-group>
                        @endif

                        @if ($event->url)
                            <x-kv-group class="grid grid-cols-12">
                                <x-kv-key class="col-span-3 sm:col-span-2">Event link:</x-kv-key>
                                <x-kv-value class="col-span-9 sm:col-span-10">
                                    <a href="{{ $event->url }}" class="border-b border-b-orange-400">Event
                                        link</a>
                                </x-kv-value>
                            </x-kv-group>
                        @endif

                        @if ($event->notes)
                            <x-kv-group class="grid grid-cols-12">
                                <x-kv-key class="col-span-3 sm:col-span-2">Notes:</x-kv-key>
                                <x-kv-value class="col-span-9 sm:col-span-10">{{ $event->notes }}</x-kv-value>
                            </x-kv-group>
                        @endif
                    </div>
                </div>
                @auth
                    <div class="mt-12 flex flex-row">
                        <div>
                            <a href="/summer/events/{{ $event->id }}/edit"
                                class="bg-orange-300 border border-orange-400 px-3 py-2 rounded ">Edit Event</a>
                        </div>
                    </div>
                @endauth
            </x-card-single-wrapper>
        </section>
    </x-wrapper-narrow>
</x-layout>
