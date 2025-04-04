<x-layout>
    <x-slot:heading>Venue</x-slot:heading>
    <h2 class="text-2xl">{{ $venue['name'] }}</h2>

    <p>{{ $venue['name'] }}</p>

    <h3 class="mt-8 mb-4">All Bands Playing Here</h3>
    <div>
        TODO
        {{-- @foreach ($bands as $band)
            <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                {{ $band['name'] }}
            </div>
        @endforeach --}}
    </div>


</x-layout>
