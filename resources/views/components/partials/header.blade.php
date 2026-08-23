<header class="text-gray-300" style="box-shadow: 3px 5px 7px 7px rgba(0,0,0,0.3)">
    <div class="px-2 sm:px-4 max-w-4xl mx-auto">
        @auth
            <nav class=" bg-slate-900 p-0 text-sm">
                <div class="secondary-nav-menu   flex justify-end gap-2 p-0">
                    <x-nav-link href="/summer/events/create" :active="request()->is('/summer/events/create/')">Add Summer Event</x-nav-link>
                    {{-- <x-nav-link href="/bands/create" :active="request()->is('/bands/create/')">Add Band</x-nav-link>
                    <x-nav-link href="/venues" :active="request()->is('/venues')">Add Venue</x-nav-link>
                    <x-nav-link href="/events" :active="request()->is('events')">Add Event</x-nav-link> --}}
                </div>
            </nav>
        @endauth
        <nav class="max-w-5xl mx-auto pr-4 flex justify-end gap-2 p-0 text-gray-200">
            <a href="/"
                class="site-branding inline-block  px-4 pt-2 pb-2 mr-auto text-orange-600 hover:text-amber-600 hover:underline hover:underline-offset-4 text-xl font-bold small-caps">
                Fox Valley Live
            </a>

            <div class="nav-menu mt-3">
                <x-nav-link href="/summer/events" :active="request()->is('summer/events')">events</x-nav-link>
                {{-- @auth
                    <x-nav-link href="/events" :active="request()->is('events')">events</x-nav-link>
                @endauth --}}
                {{-- <x-nav-link href="/bands" :active="request()->is('bands')">bands</x-nav-link>
                <x-nav-link href="/cities" :active="request()->is('cities')">cities</x-nav-link>
                <x-nav-link href="/venues" :active="request()->is('venues')">venues</x-nav-link> --}}

                @auth

                @endauth
                {{-- <x-nav-link href="/summer/events/bands" :active="request()->is('bands')">bands</x-nav-link>
                <x-nav-link href="/summer/events/cities" :active="request()->is('cities')">cities</x-nav-link>
                <x-nav-link href="/summer/events/venues" :active="request()->is('venues')">venues</x-nav-link> --}}

                <span class="inline-block mt-8 md:mt-0 md:ml-8">
                    @guest
                        {{-- <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link> --}}
                    @endguest
                    @auth
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <input type="submit" value="Log out"
                                class="btn inline text-inherit  hover:text-orange-600 active:text-orange-800 rounded px-4"></input>
                        </form>
                    @endauth
                </span>
            </div>
            <div class="hamburger mt-3">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>
</header>
