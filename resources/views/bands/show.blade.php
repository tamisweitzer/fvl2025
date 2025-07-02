<x-layout>
    @auth
        <x-wrapper-narrow class="mt-8 mb-8 clear-both">
            <a href="/bands/{{ $band->id }}/edit" class="bg-orange-400 rounded px-3 py-2 float-right">Edit Band
                Profile</a>
        </x-wrapper-narrow>
    @endauth
    {{-- @dd($events); --}}
    <x-wrapper-narrow class="mt-8 mb-8">
        @if ($band->banner_img)
            <div class="bg-slate-200 max-h-[506px] mb-8 overflow-hidden">
                <img class="object-contain object-center w-full" src="{{ asset($band->banner_img) }}"
                    alt="Banner image for {{ $band->name }}">
            </div>
        @endif

        <x-page-title>{{ $band->name }}</x-page-title>

        <div class="mb-12">{{ $band->bio }}</div>

        <section class="mb-12">
            <x-kv-group class="grid grid-cols-12 border-b ">
                <x-kv-key class="col-span-3 sm:col-span-2">About:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $band->excerpt }}</x-kv-value>
            </x-kv-group>
            {{-- <x-kv-group class="grid grid-cols-12 border-b">
                <x-kv-key class="col-span-3 sm:col-span-2">City:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $band->city->name }}</x-kv-value>
            </x-kv-group> --}}
            <x-kv-group class="grid grid-cols-12 border-b">
                <x-kv-key class="col-span-3 sm:col-span-2">Website:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10"><a
                        href="{{ $band->website_url }}">{{ $band->website_url }}</a></x-kv-value>
            </x-kv-group>
        </section>

        <section class="mt-8 mb-8">
            <x-page-subtitle>Upcoming Shows</x-page-subtitle>

        </section>

        <div>
            @if ($events != null && count($events) > 0)
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
    </x-wrapper-narrow>
</x-layout>
