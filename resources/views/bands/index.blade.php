<x-layout>
    <x-slot:heading>Bands</x-slot:heading>
    <ul>
        @foreach ($bands as $band)
            <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <a href="/bands/{{ $band->id }}">{{ $band->name }}</a>
                from
                <a href="cities/{{ $band->city->id }}">{{ $band->city->name }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
