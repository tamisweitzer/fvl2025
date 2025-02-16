<x-layout>
    <x-slot:heading>Cities</x-slot:heading>

    <ul>
        @foreach ($cities as $city)
            <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <a href="/cities/{{ $city->id }}">
                    {{ $city['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
