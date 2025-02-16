<x-layout>
    <x-slot:heading>City</x-slot:heading>
    <h2 class="text-2xl">{{ $city['name'] }}</h2>

    <p>{{ $city['name'] }}</p>

    <h3 class="mt-8 mb-4">All Bands Playing Here</h3>
    <div>
        @foreach ($bands as $band)
            <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                {{ $band['name'] }}
            </div>
        @endforeach
    </div>


</x-layout>
