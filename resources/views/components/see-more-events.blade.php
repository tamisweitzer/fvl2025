<!-- These are the links to "see more events by city, by category.." at the bottom of list pages. -->

<h3 class="border-t mb-8 mt-12 pt-8 text-center text-2xl ">Search live music by category</h3>

<div class="grid col-1 sm:grid-cols-2 gap-4 mt-4 mb-12">
    <x-see-more-link class="flex flex-col justify-between" href="/summer/events/lunchtime-concerts">
        <div>
            <x-see-more-event-heading>Lunchtime Concerts</x-see-more-event-heading>

            <x-see-more-event-image>
                <x-eos-dining-o />
            </x-see-more-event-image>

            <x-see-more-event-divider></x-see-more-event-divider>

            <x-see-more-event-body-text>These concerts are generally held in a park or patio, and are intended as lunch
                time
                entertainment.
                Often these are acoustic, or softer music. Many of these have food trucks or vendors near
                by.</x-see-more-event-body-text>
        </div>

        <div>
            <x-see-more-event-button>See more <span class="sr-only">lunchtime concerts.</span></x-see-more-event-button>
        </div>
    </x-see-more-link>

    <x-see-more-link class="flex flex-col justify-between" href="/summer/events/fairs-fests">
        <div>
            <x-see-more-event-heading>Fairs, Fests, and Outdoor Concerts</x-see-more-event-heading>

            <x-see-more-event-image>
                <x-gmdi-festival-o />
            </x-see-more-event-image>

            <x-see-more-event-divider></x-see-more-event-divider>

            <x-see-more-event-body-text>This list contains the yearly fests, fairs, and outdoor concerts that are not
                specifically tied to
                a bar or restaurant.</x-see-more-event-body-text>
        </div>

        <div>
            <x-see-more-event-button>See more <span class="sr-only">xxx.</span></x-see-more-event-button>
        </div>
    </x-see-more-link>

    <x-see-more-link class="flex flex-col justify-between" href="/summer/events/national-bands">
        <div>
            <x-see-more-event-heading>Bar and
                Restaurant Gigs</x-see-more-event-heading>

            <x-see-more-event-image>
                <x-ri-beer-line />
            </x-see-more-event-image>

            <x-see-more-event-divider></x-see-more-event-divider>

            <x-see-more-event-body-text>The list here includes the typical live band at a
                bar,
                usually held indoors throughout the year, but may be outside during the
                summer.</x-see-more-event-body-text>
        </div>

        <div>
            <x-see-more-event-button>See more <span class="sr-only">xxx.</span></x-see-more-event-button>
        </div>
    </x-see-more-link>

    <x-see-more-link class="flex flex-col justify-between" href="/summer/events/national-bands">
        <div>

            <x-see-more-event-heading>National Acts</x-see-more-event-heading>

            <x-see-more-event-image>
                <x-forkawesome-music />
            </x-see-more-event-image>

            <x-see-more-event-divider></x-see-more-event-divider>

            <x-see-more-event-body-text>These are stand-alone concerts specifically for a national artist. </p>
                <p>If a national act is playing at
                    Waterfest, for example, that artist would be listed in the fairs and fests section, not here.
            </x-see-more-event-body-text>
        </div>

        <div>
            <x-see-more-event-button>See more <span class="sr-only">xxx.</span></x-see-more-event-button>
        </div>
    </x-see-more-link>

    {{-- <x-see-more-link href="/summer/events/bands">
        <h3 class="text-sm text-center font-bold border-b border-b-transparent">Search all Bands</h3>
    </x-see-more-link>

    <x-see-more-link href="/summer/events/venues">
        <h3 class="text-sm text-center font-bold border-b border-b-transparent">Search all Venues</h3>
    </x-see-more-link>

    <x-see-more-link href="/summer/events/event-names">
        <h3 class="text-sm text-center font-bold border-b border-b-transparent">Search by Event Name</h3>
    </x-see-more-link>

    <x-see-more-link href="/summer/events/cities">
        <h3 class="text-sm text-center font-bold border-b border-b-transparent">Find Music by City</h3>
    </x-see-more-link>

    <x-see-more-link href="/summer/events">
        <h3 class="text-sm text-center font-bold border-b border-b-transparent">See the Full List of Upcoming Music</h3>
    </x-see-more-link> --}}
</div>
