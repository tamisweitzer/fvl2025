<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>See Live Music This Week</x-page-title>

        <section class="mb-8">
            @foreach ($events as $event)
                <div class="pb-2 border-b  border-b-slate-200">
                    <div class="text-lg font-semibold text-gray-700">
                        <a href="/events/{{ $event->id }}"
                            class="py-2 inline-block hover:bg-orange-300">{{ $event->name }}</a>
                    </div>

                    <div class="text-gray-700">
                        <a href="/venues/{{ $event->venue->id }}"
                            class="py-2 inline-block hover:bg-orange-300">{{ $event->venue->name }}</a>
                        <span> in </span>
                        <a href="/cities/{{ $event->venue->city->id }}"
                            class="py-2 inline-block hover:bg-orange-300">{{ $event->venue->city->name }}</a>
                    </div>

                    <div class="text-gray-500 text-sm">
                        {{ $event->event_date }}
                        {{ $event->event_time }}
                    </div>
                </div>
            @endforeach
        </section>

        <a href="/events"
            class="btn mt-4 inline-block bg-orange-500 hover:bg-orange-600 active:bg-orange-700 rounded px-4 py-2 text-white">See
            all upcoming shows.</a>
    </x-wrapper-narrow>
</x-layout>
