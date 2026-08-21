@props(['events', 'eventUrl', 'viewMoreLink', 'viewMoreLinkText', 'viewMoreHoverText', 'noResultsText'])

@if (is_countable($events) && count($events) > 0)
    @foreach ($events as $day)
        <x-event.list-item-header>{{ $day[0]->start_date->format('D M d, Y') }}</x-event.list-item-header>

        @foreach ($day as $event)
            <x-event.list-item :event=$event href="{{ $eventUrl }}/{{ $event->id }}"
                class="mb-4"></x-event.list-item>
        @endforeach

        @if (!$loop->last)
            <x-event.list-item-divider></x-event.list-item-divider>
        @endif
    @endforeach

    <x-event.list-view-more-button href="{{ $viewMoreLink }}" title="{{ $viewMoreHoverText }}">
        {{ $viewMoreLinkText }}
    </x-event.list-view-more-button>
@else
    <div class="my-4 p-4 italic text-sm">
        {{ $noResultsText }}
    </div>
@endif
