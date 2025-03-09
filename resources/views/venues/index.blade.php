<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Live Music Venues</x-page-title>

        <section class="mb-8">
            @foreach ($venues as $venue)
                <div
                    class="p-2 bg-slate-50 border border-slate-200 hover:border hover:border-b-slate-300 hover:shadow-lg">
                    <a href="/venues/{{ $venue->id }}" class="block">
                        <span class=" text-gray-700 text-lg font-semibold">
                            {{ $venue->name }}
                        </span>
                        <br>
                        <span class="text-sm">{{ $venue->city->name }}, {{ $venue->state->name }}</span>

                    </a>
                </div>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
