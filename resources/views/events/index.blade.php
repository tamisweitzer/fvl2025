<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>All Upcoming Live Music</x-page-title>

        <section class="mb-8">
            @foreach ($events as $event)
                <div class="px-2 py-4 bg-slate-50 border border-slate-200 hover:shadow-lg">
                    <a href="/events/{{ $event->id }}" class="block">
                        <div class="text-lg font-semibold text-gray-700">
                            {{ $event->name }}
                        </div>

                        <div class="text-gray-700">
                            {{ $event->venue->name }}
                            <span> in </span>
                            {{ $event->venue->city->name }}
                        </div>

                        <div class="text-gray-500 text-sm">
                            {{ $event->event_date }}
                            {{ $event->event_time }}
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
    </x-wrapper-narrow>
</x-layout>
