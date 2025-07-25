<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto p-4">
        <x-page-title>{{ $events->first()->first()->event_name }}</x-page-title>
        <p class="-mt-4 mb-12 text-center">The complete list of live bands playing at
            {{ $events->first()->first()->event_name }} in {{ $events->first()->first()->city }}, WI this
            summer.</p>
        <p class="text-center mb-4 text-gray-600 italic text-sm">Click on any listing for more information.</p>

        @foreach ($events as $days)
            <div class="mt-4 border-b border-b-slate-500 text-orange-600 font-extrabold">
                {{ $days[0]->start_date->format('D M d, Y') }}
            </div>
            @foreach ($days as $event)
                <a href="/summer/events/{{ $event->id }}"
                    class="block px-4 py-4 border-t border-b border-t-transparent border-b-transparent hover:bg-orange-50 hover:border-t hover:border-t-orange-300 hover:border-b hover:border-b-orange-300"
                    title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">
                    <div class="font-bold">
                        {{ $event->band }}
                    </div>
                    @if ($event->event_name)
                        <div class="text-gray-800 text-sm">
                            {{ $event->event_name }}
                        </div>
                    @endif
                    <div class="text-gray-800 text-sm">
                        {{ $event->venue }}
                    </div>
                    <div class="text-gray-800 text-sm">
                        {{ $event->city }}
                    </div>
                    @if ($event->start_time)
                        <div class="text-gray-800 text-sm">
                            {{ $event->start_time }}
                        </div>
                    @endif
                </a>
            @endforeach
        @endforeach

        <x-see-more-events></x-see-more-events>
    </x-wrapper-narrow>
</x-layout>
