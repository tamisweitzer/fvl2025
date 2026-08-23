<x-layout>
    <section class="pb-4">
        <div class="px-4 mt-8 mb-8 max-w-3xl mx-auto">
            <x-page-title class=" text-amber-400 italic">Live, local music</x-page-title>
            <x-page-subtitle class="mt-4 mb-4 text-orange-600 text-2xl italic">The hottest live music in Wisconsin's Fox
                Valley</x-page-subtitle>
            <p class="mt-8">Browse below for a sampling of the latest summer concerts happening now in your
                area, or
                view the
                extensive list
                of <x-a-inline-link-primary href="/summer/events">all upcoming
                    events</x-a-inline-link-primary>.
            </p>
        </div>
    </section>

    <!-- Live music happening today -->
    <section class="mb-8">
        <x-heading-secondary>Live Music This Week</x-heading-secondary>

        <div class="mb-2 px-4 text-sm">
            <p class="text-gray-400">Click on any listing below for more information.</p>
        </div>

        <div>
            <x-event.list-group :events="$eventsToday" :eventUrl="'/summer/events'"
                viewMoreHoverText="See all live bands playing this week." viewMoreLink="/summer/events"
                viewMoreLinkText="See more live music" noResultsText="There is no live music for today.">

            </x-event.list-group>

            <x-see-more-link href="/summer/events">See all live music listings</x-see-more-link>
        </div>
    </section>


    <!-- Lunchtime Concert Series -->
    <section class="mb-8">
        <x-heading-secondary>Lunchtime Concerts</x-heading-secondary>

        <div class="mb-2 px-4 text-sm">
            <p class="text-gray-400">These concerts are generally held in a park or
                patio,
                and
                are intended as lunch time entertainment. Often these are acoustic, or softer music. Many of these have
                food trucks or vendors near by.</p>
        </div>


        <x-event.list-group :events="$lunches" :eventUrl="'/summer/events'"
            viewMoreHoverText="See all live bands playing lunchtime concerts this week."
            viewMoreLink="/summer/events/lunchtime-concerts" viewMoreLinkText="See all in Lunchtime Concerts"
            noResultsText="There are no results yet for this category."></x-event.list-group>

        <x-see-more-link href="/summer/events/lunchtime-concerts">See all lunchtime concerts</x-see-more-link>
    </section>


    <!-- Regular Bar Events -->
    <section class="mb-8">

        <x-heading-secondary>Bars and Restaurants</x-heading-secondary>

        <div class="mb-2 px-4 text-sm">
            <p class="text-gray-400">The list here includes the typical live band at a
                bar,
                usually held indoors throughout the year, but may be outside during the summer.</p>
        </div>


        <x-event.list-group :events="$events" :eventUrl="'/summer/events'"
            viewMoreHoverText="See all live bands playing Bars & Restaurants this week."
            viewMoreLink="/summer/events/bars-restaurants" viewMoreLinkText="See all in Bars & Restaurants"
            noResultsText="There are no results yet for this category."></x-event.list-group>

        <x-see-more-link href="/summer/events/bars-restaurants">See all bars shows</x-see-more-link>
    </section>


    <!-- Fairs, Fests, and Outdoor Concerts e.g. Rockfest, Winnebago County Fair -->
    <section class="mb-8">

        <x-heading-secondary>Fairs, Fests, and Outdoor Concerts</x-heading-secondary>

        <div class="mb-2 px-4 text-sm">
            <p class="text-gray-400">This list contains the yearly fests, fairs, and
                outdoor
                concerts that are not specifically tied to a bar or restaurant.</p>
        </div>


        <x-event.list-group :events="$fairs" :eventUrl="'/summer/events'"
            viewMoreHoverText="See all live bands playing Fairs, Fests, and Outdoor Concerts this week."
            viewMoreLink="/summer/events/fairs-fests" viewMoreLinkText="See all in Fairs, Fests, and Outdoor Concerts"
            noResultsText="There are no results yet for this category."></x-event.list-group>

        <x-see-more-link href="/summer/events/fairs-fests">See all outdoor concerts</x-see-more-link>
    </section>


    <!-- National Acts -->
    <section class="mb-8">

        <x-heading-secondary>National Acts</x-heading-secondary>

        <div class="mb-2 px-4 text-sm">
            <p class="text-gray-400">These are stand-alone concerts specifically for a
                national
                artist. If
                a national act is playing at Waterfest, for example, that artist would be listed in the fairs and fests
                section, not here.</p>
        </div>

        <x-event.list-group :events="$nationalActs" :eventUrl="'/summer/events'"
            viewMoreHoverText="See all live bands playing National Acts this week."
            viewMoreLink="/summer/events/national-bands" viewMoreLinkText="See all in National Acts"
            noResultsText="There are no results yet for this category."></x-event.list-group>

        <x-see-more-link href="/summer/events/national-bands">See all national acts</x-see-more-link>
    </section>
    <!-- End summer events -->

</x-layout>
