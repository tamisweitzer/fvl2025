<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8 clear-both">
        <a href="/bands/{{ $band->id }}/edit" class="bg-orange-400 rounded px-3 py-2 float-right">Edit Band
            Profile</a>
    </x-wrapper-narrow>

    <x-wrapper-narrow class="mt-8 mb-8">
        @if ($band->banner_img)
            <div class="bg-slate-200 max-h-[506px] mb-8 overflow-hidden">
                <img class="object-contain object-center w-full" src="{{ asset($band->banner_img) }}" alt="banner img ">
            </div>
        @endif

        <x-page-title>{{ $band->fullname }}</x-page-title>

        <div class="mb-12">{{ $band->bio }}</div>

        <section class="mb-12">
            <x-kv-group class="grid grid-cols-12 border-b ">
                <x-kv-key class="col-span-3 sm:col-span-2">About:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $band->excerpt }}</x-kv-value>
            </x-kv-group>
            <x-kv-group class="grid grid-cols-12 border-b">
                <x-kv-key class="col-span-3 sm:col-span-2">City:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $band->city->name }}</x-kv-value>
            </x-kv-group>
            <x-kv-group class="grid grid-cols-12 border-b">
                <x-kv-key class="col-span-3 sm:col-span-2">Website:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $band->website_url }}</x-kv-value>
            </x-kv-group>
        </section>

        <section class="mt-8 mb-8">
            <x-page-subtitle>Upcoming Shows</x-page-subtitle>
            @foreach ($events as $event)
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
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
