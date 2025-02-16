<x-layout>
    <x-slot:heading>Event</x-slot:heading>
    <h2 class="">{{ $event['name'] }}</h2>

    <div>{{ $event->band->common_name }} at {{ $event->venue->common_name }} </div>
    <div>{{ $event->date }}</div> {{ $event->time }} </div>
</x-layout>
