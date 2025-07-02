<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>{{ $venue->fullname }}</x-page-title>
        <div class="-mt-4 mb-12 text-center">{{ $venue->excerpt }}</div>

        <section class="mb-8">
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Venue:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">
                    {{ $venue->name }}
                </x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">About:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $venue->bio }}</x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">City:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $venue->city->name }}</x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Website:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">
                    <a href="{{ $venue->website }}">{{ $venue->website }}</a>
                </x-kv-value>
            </x-kv-group>
        </section>

        <hr>

        <section class="mt-8 mb-8">
            <x-page-subtitle>Upcoming Shows</x-page-subtitle>
            TODO
            {{-- @foreach ($events as $event)
                <x-card-wrapper-secondary>
                    <a href="/events/{{ $event->id }}" class="block">
                        <div class="text-lg font-semibold text-gray-700">
                            {{ $event->admin_name }}
                        </div>

                        <div class="text-gray-700">
                            {{ $event->venue->fullname }}
                            <span> in </span>
                            {{ $event->venue->city->name }}
                        </div>

                        <div class="text-gray-500 text-sm">
                            {{ $event->event_date }}
                            {{ $event->event_time }}
                        </div>
                    </a>
                </x-card-wrapper-secondary>
            @endforeach --}}
        </section>

    </x-wrapper-narrow>
</x-layout>
