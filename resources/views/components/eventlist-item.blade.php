@props(['path', 'color' => 'orange', 'event'])


<a {{ $attributes->merge(['class' => 'px-4 block bg-gray-800 rounded-lg overflow-y-auto border border-transparent hover:bg-gray-600']) }}
    title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">

    <h4 class="text-lg font-bold text-amber-500">{{ $event->band }}</h4>

    @if ($event->event_name)
        <div class="text-md font-semibold text-sm">{{ $event->event_name }}</div>
    @endif

    <div class="font-semibold text-sm">{{ $event->venue }}</div>

    {{-- <div class="text-sm">{{ $event->city }}</div> --}}

    @if ($event->start_time)
        <div class="text-sm">
            {{ $event->start_time }}
        </div>
    @endif
</a>
