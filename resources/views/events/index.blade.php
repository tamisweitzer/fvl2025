<x-layout>
    <x-slot:heading>Events</x-slot:heading>

    <ul>
        @foreach ($events as $event)
            <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <h2 class="mb-2 text-lg">
                    <a href="/events/{{ $event->id }}"
                        class="border-b border-dotted border-gray-300 hover:bg-gray-300">{{ $event->band->name }}</a>
                    at
                    <a href="venues/{{ $event->venue->id }}">{{ $event->venue->name }}</a>
                </h2>

                <div class="text-sm">
                    <a href="cities/{{ $event->band->city->id }}" class="">{{ $event->band->city->name }}</a>,
                    <a href="events/{{ date('Y/m', strtotime($event->event_time)) }}"
                        class="">{{ date('m/d/Y', strtotime($event->event_time)) }}</a>
                    at 8:00 pm
                </div>

            </li>
        @endforeach
    </ul>
</x-layout>
