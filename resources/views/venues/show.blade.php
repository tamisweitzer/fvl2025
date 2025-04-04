<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title class="">{{ $venue->fullname }}</x-page-title>
        <div class="-mt-4 mb-12 text-center">{{ $venue->excerpt }}</div>

        <section class="mb-8">
            <div class="mb-4">
                <x-kv-key>About:</x-kv-key>
                <x-kv-value>{{ $venue->bio }}</x-kv-value>
            </div>
            <div class="mb-4">
                <x-kv-key>City:</x-kv-key>
                <x-kv-value>{{ $venue->city->name }}</x-kv-value>
            </div>
            <div class="mb-4">
                <x-kv-key>Website:</x-kv-key>
                <x-kv-value>{{ $venue->website }}</x-kv-value>
            </div>
        </section>
        <hr>
        <section class="mt-8 mb-8">
            <h2 class="mb-4 text-xl sm:text-2xl md:text-3xl">Upcoming Shows</h2>
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
