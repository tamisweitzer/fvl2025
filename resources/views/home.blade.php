<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>See Live Music This Week</x-page-title>

        <section class="mb-8">
            @foreach ($events as $event)
                <div class="px-2 py-4 bg-slate-50 border border-slate-200 hover:shadow-lg">
                    <a href="/events/{{ $event->id }}" class="block">
                        <div class="text-lg font-semibold text-gray-700">
                            {{ $event->name }}
                        </div>

                        <div class="text-gray-700">
                            {{ $event->venue->name }}
                            <span> in </span>
                            {{ $event->venue->city->name }}
                        </div>

                        <div class="text-gray-500 text-sm">
                            {{ $event->event_date }}
                            {{ $event->event_time }}
                        </div>
                    </a>
                </div>
            @endforeach
        </section>

        <a href="/events"
            class="btn mt-4 inline-block bg-orange-500 hover:bg-orange-600 active:bg-orange-700 rounded px-4 py-2 text-white">See
            all upcoming shows.</a>
    </x-wrapper-narrow>
</x-layout>
