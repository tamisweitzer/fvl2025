<x-layout>
    @auth
        <x-wrapper-narrow class="mt-8 mb-8 clear-both">
            <a href="/cities/{{ $city->id }}/edit" class="bg-orange-400 rounded px-3 py-2 float-right">Edit City
                Profile</a>
        </x-wrapper-narrow>
    @endauth

    <x-wrapper-narrow class="mt-8 mb-8">
        @if ($city->banner_img)
            <div class="bg-slate-200 max-h-[506px] mb-8 overflow-hidden">
                <img class="object-contain object-center w-full" src="{{ asset($city->banner_img) }}"
                    alt="Banner image for {{ $city->name }}">
            </div>
        @endif

        <x-page-title>{{ $city->name }}</x-page-title>

        <section class="mb-8">
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Excerpt:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $city->excerpt }}</x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">About:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $city->bio }}</x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Website:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $city->website_url }}</x-kv-value>
            </x-kv-group>
        </section>

        <hr>

        <section class="my-8">
            <x-page-subtitle class="mb-8">All Bands Playing Here</x-page-subtitle>
            <div>
                @if (count($events) > 0)
                    @foreach ($events as $days)
                        <div class="px-4 pt-4  tracking-widest">
                            {{ $days[0]->start_date->format('D M d, Y') }}
                        </div>

                        @foreach ($days as $event)
                            <a href="/summer/events/{{ $event->id }}"
                                class="block p-4 border-b  hover:bg-orange-50 hover:border-t hover:border-t-orange-300 hover:border-b hover:border-b-orange-300"
                                title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">
                                <div>
                                    <span class="font-bold">{{ $event->band }}</span>
                                    @if ($event->event_name)
                                        <span class="font-bold">at {{ $event->event_name }}</span>
                                    @endif
                                    <div class="text-gray-500 text-sm">{{ $event->venue }}
                                    </div>
                                    <div class="text-gray-500 text-sm">{{ $event->city }}</div>
                                </div>
                                <div class="text-gray-500 text-sm">
                                    @if ($event->start_time)
                                        {{ $event->start_time }}
                                    @endif
                                </div>
                                @if (!$loop->last)
                                    {{-- <hr> --}}
                                @endif
                            </a>
                        @endforeach
                    @endforeach
                @else
                    <p class="text-gray-500 italic">There are no bands listed for this city yet.</p>
                @endif
            </div>
        </section>

        {{-- <hr>
        <section class="my-8">
            <x-page-subtitle>All Venues Located Here</x-page-subtitle>
            TODO
            <div>
                @foreach ($venues as $venue)
                <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                    {{ $venue['name'] }}
                </div>
                @endforeach
            </div>
        </section> --}}
    </x-wrapper-narrow>
</x-layout>
