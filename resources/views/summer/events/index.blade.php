<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 mx-auto">
        <x-page-title>Summer Events</x-page-title>
        <p class="-mt-4 mb-12 text-center">The complete list of summer events around the Fox Valley this summer.</p>
        <p class="text-center mb-2">Click on any listing for more information.</p>
        <div class="p-4 sm:p-8 bg-slate-50 border border-slate-300 shadow rounded">
            @foreach ($events as $event)
                <a href="/summer/events/{{ $event->id }}" class="block">
                    <div class="my-4">
                        @if ($event->event_type == 'is_bar_gig')
                            <div class="font-bold">{{ $event->band }} at {{ $event->venue }}</div>
                        @else
                            <div class="font-bold">{{ $event->band }} at {{ $event->event_name }}, {{ $event->venue }}
                            </div>
                        @endif
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
                        <hr>
                    @endif
                </a>
            @endforeach
        </div>
    </x-wrapper-narrow>
</x-layout>
