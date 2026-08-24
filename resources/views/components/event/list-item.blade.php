{{-- Each individual listing on home page --}}

@props(['path', 'color' => 'orange', 'event'])


<a {{ $attributes->merge(['class' => 'px-4 py-4 block bg-gray-800 overflow-y-auto border border-transparent hover:bg-gray-600 rounded-lg overflow-hidden shadow hover:shadow-lg transition']) }}
    title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">

    <h3 class="text-lg font-bold text-amber-400">{{ $event->band }}</h3>

    @if ($event->event_name)
        <div class="text-sm text-gray-400">{{ $event->event_name }}</div>
    @endif

    @if ($event->start_time)
        <div class="text-sm text-gray-400">
            {{ $event->start_time }}
        </div>
    @endif

    <div class="font-semibold text-sm">{{ $event->venue }}, {{ $event->city }}</div>


</a>
