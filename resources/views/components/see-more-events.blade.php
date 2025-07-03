<!-- These are the links to "see more events by city, by category.." at the bottom of list pages. -->

<div {{ $attributes->merge(['class' => 'mt-12']) }}>
    <div>
        <a href="/summer/events"
            class="mb-4 mr-3 bg-orange-100 border border-orange-300 hover:bg-orange-200 px-3 py-2 rounded inline-block shadow-md"
            title="View the complete list of live bands playing in the Fox Cities of Wisconsin.">
            See <em>all</em> live music
        </a>
        <a href="/summer/events/bands"
            class="mb-4 mr-3 bg-orange-100 border border-orange-300 hover:bg-orange-200 px-3 py-2 rounded inline-block shadow-md"
            title="Find out where your favorite band is playing this week.">
            Search by band
        </a>
        <a href="/summer/events/cities"
            class="mb-4 mr-3 bg-orange-100 border border-orange-300 hover:bg-orange-200 px-3 py-2 rounded inline-block shadow-md"
            title="Find live music in your city">
            Find bands by city
        </a>
        <a href="/summer/events/venues"
            class="mb-4 mr-3 bg-orange-100 border border-orange-300 hover:bg-orange-200 px-3 py-2 rounded inline-block shadow-md"
            title="Find live music playing at your favorite bar.">
            Find bands by venue
        </a>
        <a href="/summer/events/event-names"
            class="mb-4 mr-3 bg-orange-100 border border-orange-300 hover:bg-orange-200 px-3 py-2 rounded inline-block shadow-md"
            title="Find live music at a particular event, such as Paperfest.">
            Find bands by event name
        </a>
    </div>
</div>
