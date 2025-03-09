<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Live Music Venues</x-page-title>

        <section class="mb-8">
            @foreach ($venues as $venue)
                <div class="px-2 py-4 bg-slate-50 border border-slate-200 hover:shadow-lg">
                    <a href="/venues/{{ $venue->id }}" class="block">
                        <div class="text-lg font-semibold text-gray-700">
                            {{ $venue->name }}
                        </div>

                        <div class="text-gray-500 text-sm">{{ $venue->city->name }}, {{ $venue->state->name }}</div>
                    </a>
                </div>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
