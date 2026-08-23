@props(['events', 'eventUrl', 'viewMoreLink', 'viewMoreLinkText', 'viewMoreHoverText', 'noResultsText'])

@if (is_countable($events) && count($events) > 0)

    @foreach ($events as $day)
        <x-event.list-item-header>{{ $day[0]->start_date->format('D M d, Y') }}</x-event.list-item-header>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2">
            @foreach ($day as $event)
                <x-event.list-item :event=$event href="{{ $eventUrl }}/{{ $event->id }}"
                    class="mb-4"></x-event.list-item>
            @endforeach
        </div>

        {{-- @if (!$loop->last)
                <x-event.list-item-divider></x-event.list-item-divider>
            @endif --}}
    @endforeach
@else
    <div class="my-4 p-4 italic text-sm">
        {{ $noResultsText }}
    </div>
@endif
