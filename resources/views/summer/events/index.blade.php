<x-layout>
    {{-- @dd($events); --}}
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">
        <x-page-title>Summer Events</x-page-title>
        <p class="-mt-4 mb-12 text-center">The complete list of summer events around the Fox Valley this summer.</p>
        <p class="text-center mb-4 text-gray-600 italic text-sm">Click on any listing for more information.</p>

        @foreach ($events as $days)
            {{ $days[0]->start_date->format('D M d, Y') }}
            @foreach ($days as $event)
                <a href="/summer/events/{{ $event->id }}" class="block ">
                    <div class="px-4 py-4 hover:bg-orange-50">
                        <div class="font-bold">
                            {{ $event->band }}
                        </div>
                        <div>
                            @if ($event->event_name)
                                {{ $event->event_name }}, {{ $event->city }}
                            @else
                                {{ $event->venue }}, {{ $event->city }}
                            @endif
                        </div>
                        <div>
                            @if ($event->start_date)
                                {{ $event->start_date->format('M d, Y') }}
                            @endif
                            @if ($event->start_time)
                                - {{ $event->start_time }}
                            @endif
                        </div>
                    </div>
                    @if (!$loop->last)
                        {{-- <hr> --}}
                    @endif
                </a>
            @endforeach
            <hr class="mb-8">
        @endforeach
    </x-wrapper-narrow>
</x-layout>
