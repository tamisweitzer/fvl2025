@props(['path', 'color' => 'orange', 'event'])


<a href="{{ $event->id }}"
    class="block px-4 py-4 border-t border-b border-t-transparent border-b-transparent last:border-b-0 hover:bg-fuchsia-50 hover:border-t hover:border-t-fuchsia-300 hover:border-b hover:border-b-fuchsia-300"
    title="Live music in {{ $event->city }} from {{ $event->band }} at {{ $event->venue }} @if ($event->event_name) for {{ $event->event_name }} @endif">
    <div class="font-bold">{{ $event->band }}</div>
    @if ($event->event_name)
        <div class="text-gray-800 text-sm">{{ $event->event_name }}</div>
    @endif
    <div class="text-gray-800 text-sm">{{ $event->venue }}</div>
    <div class="text-gray-800 text-sm">{{ $event->city }}</div>
    @if ($event->start_time)
        <div class="text-gray-800 text-sm">
            {{ $event->start_time }}
        </div>
    @endif
</a>
