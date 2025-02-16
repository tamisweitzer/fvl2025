<x-layout>
    <x-wrapper-narrow>
        <x-page-title>{{ $city->name }}</x-page-title>


        <h3 class="mt-8 mb-4">All Bands Playing Here</h3>
        <div>
            @foreach ($bands as $band)
                <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                    {{ $band['name'] }}
                </div>
            @endforeach
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
