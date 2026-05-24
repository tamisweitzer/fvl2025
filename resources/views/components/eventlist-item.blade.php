@props(['path', 'color' => 'orange', 'event'])


<a {{ $attributes->merge(['class' => 'px-4 block bg-gray-800 rounded-lg overflow-y-auto border border-transparent hover:border-amber-600']) }}
    title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">

    <div class="font-bold">{{ $event->band }}</div>

    @if ($event->event_name)
        <div class=" text-sm">{{ $event->event_name }}</div>
    @endif

    <div class=" text-sm">{{ $event->venue }}</div>

    <div class=" text-sm">{{ $event->city }}</div>

    @if ($event->start_time)
        <div class=" text-sm">
            {{ $event->start_time }}
        </div>
    @endif
</a>
