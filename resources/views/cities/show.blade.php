<x-layout>
    <x-wrapper-narrow>
        <x-page-title>{{ $city->name }}</x-page-title>

        <h2>About</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, molestiae obcaecati dolores sapiente
            laboriosam, officiis atque voluptas distinctio dignissimos maxime odit nemo voluptatem adipisci
            necessitatibus commodi cupiditate repellat. Voluptatem, nesciunt!</p>

        <h3 class="mt-8 mb-4">All Bands Playing Here</h3>
        <div>
            TODO
            {{-- @foreach ($bands as $band)
                <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                    {{ $band['name'] }}
                </div>
            @endforeach --}}
        </div>

        <h3 class="mt-8 mb-4">All Venues Located Here</h3>
        TODO
        {{-- <div>
        @foreach ($venues as $venue)
            <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                {{ $venue['name'] }}
            </div>
        @endforeach
    </div> --}}
    </x-wrapper-narrow>
</x-layout>
