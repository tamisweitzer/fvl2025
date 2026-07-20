<x-layout>
    {{-- Site styles and component samples. --}}

    <h1 class="text-3xl">Branding for Fox Valley Live v1.0_sqlite</h1>

    <div class="bg-white text-gray-900">
        <div class="p-4 m-4">
            <div class=my-8>
                <h2>Surface colors</h2>
                <div>
                    <x-branding.color-swatch class="bg-gray-900"></x-branding.color-swatch>
                    <p>bg-gray-900</p>
                </div>
                <div>
                    <x-branding.color-swatch class="bg-gray-800"></x-branding.color-swatch>
                    <p>bg-gray-800</p>
                </div>
                <div>
                    <x-branding.color-swatch class="bg-gray-700"></x-branding.color-swatch>
                    <p>bg-gray-700</p>
                </div>
                <div>
                    <x-branding.color-swatch class="bg-gray-900"></x-branding.color-swatch>
                    <p>bg-gray-900</p>
                </div>
            </div>


        </div>
    </div>

    <x-heading-secondary>Event List</x-heading-secondary>
    <div class="pb-8 mx-2 sm:mx-4 bg-gray-800 rounded-lg overflow-y-auto">
        @if (is_countable($eventsToday) && count($eventsToday) > 0) {{-- @dd($eventsToday) --}}
            @foreach ($eventsToday as $day)
                <x-event.list-item-header>{{ $day[0]->start_date->format('D M d, Y') }}</x-event.list-item-header>

                @foreach ($day as $event)
                    <x-event.list-item :event=$event href="/summer/events/{{ $event->id }}"
                        class="mb-4"></x-event.list-item>
                @endforeach

                @if (!$loop->last)
                    <x-event.list-item-divider></x-event.list-item-divider>
                @endif
            @endforeach


            <x-event.list-view-more-button href="/summer/events/" title="See all live bands playing this week.">See
                more live music</x-event.list-view-more-button>
        @else
            <div class="my-4 p-4 italic text-sm">There is no
                live music for today.
            </div>
        @endif
    </div>

    <hr>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6 text-center">
        <div class="text-orange-600 text-3xl font-bold">Fox Valley Live</div>
        <div class="text-brand-light text-sm italic">Your source for live music in the fox valley</div>

    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Default div from starter kit -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
        </div>

        <!-- Search Bar (Hero Section) -->
        <div class="mb-4 relative w-full mx-auto mt-6">
            <input type="text"
                class="w-full px-4 py-3 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-amber-500"
                placeholder="Search for a band or venue name">
        </div>


        <!-- Featured Show -->
        <h3 class="mt-8 mb-4 text-xl text-amber-400">Featured Show</h3>
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow hover:shadow-lg transition p-4 mb-4">
            <div class="w-full">
                <img src="{{ asset('images/deepai-concert-banner-6.jpg') }}" alt="" class="rounded mb-2">
            </div>
            <h3 class="text-lg font-bold text-indigo-400">Band name @ Venue</h3>
            <p class="text-sm text-gray-400">Friday Oct 12</p>
            <p class="text-gray-300">Description or tags.</p>
        </div>

        <!-- Upcoming Shows -->
        <h3 class="mt-8 mb-4 text-xl text-orange-400">Upcoming Shows</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow hover:shadow-lg transition p-4">
                <div class="w-full">
                    <img src="{{ asset('images/deepai-concert-banner-6.jpg') }}" alt="" class="rounded mb-2">
                </div>
                <h3 class="text-lg font-bold text-brand-accent">Band name @ Venue</h3>
                <p class="text-sm text-gray-400">Friday Oct 12</p>
                <p class="text-gray-300">Description or tags.</p>
            </div>
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow hover:shadow-lg transition p-4">
                <div class="w-full">
                    <img src="{{ asset('images/deepai-concert-banner-6.jpg') }}" alt="" class="rounded mb-2">
                </div>
                <h3 class="text-lg font-bold text-amber-400">Band name @ Venue</h3>
                <p class="text-sm text-gray-400">Friday Oct 12</p>
                <p class="text-gray-300">Description or tags.</p>
            </div>
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow hover:shadow-lg transition p-4">
                <div class="w-full">
                    <img src="{{ asset('images/deepai-concert-banner-6.jpg') }}" alt="" class="rounded mb-2">
                </div>
                <h3 class="text-lg font-bold text-amber-400">Band name @ Venue</h3>
                <p class="text-sm text-gray-400">Friday Oct 12</p>
                <p class="text-gray-300">Description or tags.</p>
            </div>
        </div>

        <!-- Event Card -->
        <h3 class="mt-8 mb-4 text-xl text-brand-accent">Event Cards</h3>
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow hover:shadow-lg transition p-4 mb-4">
            <h3 class="text-lg font-bold text-amber-400">Band name @ Venue</h3>
            <p class="text-sm text-gray-400">Friday Oct 12</p>
            <p class="text-gray-300">Description or tags.</p>
        </div>

        <!-- Band Card -->
        <div class="bg-gray-800 rounded p-4 text-white">
            <div class="w-60">
                <img src="{{ asset('images/lita_600x400.jpg') }}" alt="" class="rounded mb-2">
            </div>
            <h4 class="font-bold">Band name</h4>
            <p class="text-sm text-gray-400">Genre - hometown</p>
        </div>
    </div>


</x-layout>
