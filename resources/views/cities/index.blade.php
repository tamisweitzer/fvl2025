<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Cities</x-page-title>
        <ul class="my-8">
            @foreach ($cities as $city)
                <li class="p-4 my-2 bg-slate-50 border b-slate-100 hover:shadow hover:b-slate-500">
                    <a href="/cities/{{ $city->id }}">
                        {{ $city->id }} {{ $city['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </x-wrapper-narrow>
</x-layout>
