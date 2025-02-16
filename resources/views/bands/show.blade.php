<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="text-2xl">{{ $band['name'] }}</h2>
    <p>{{ $band['name'] }} from <a href="cities/{{ $band->city->id }}">{{ $band->city->name }}</a>
    </p>
</x-layout>
