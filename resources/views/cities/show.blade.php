<x-layout>
    <x-wrapper-narrow class="mt-8 mb-8">
        <x-page-title>{{ $city->name }}</x-page-title>
        <div class="-mt-4 mb-12 text-center">{{ $city->excerpt }}</div>

        <section class="mb-8">
            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Excerpt:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $city->excerpt }}</x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Bio:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $city->bio }}</x-kv-value>
            </x-kv-group>

            <x-kv-group class="grid grid-cols-12">
                <x-kv-key class="col-span-3 sm:col-span-2">Website:</x-kv-key>
                <x-kv-value class="col-span-9 sm:col-span-10">{{ $city->website_url }}</x-kv-value>
            </x-kv-group>
        </section>

        <hr>

        <section class="my-8">
            <x-page-subtitle>All Bands Playing Here</x-page-subtitle>
            <div>
                TODO
                {{-- @foreach ($bands as $band)
                <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                    {{ $band['name'] }}
                </div>
            @endforeach --}}
            </div>
        </section>

        <hr>
        <section class="my-8">
            <x-page-subtitle>All Venues Located Here</x-page-subtitle>
            TODO
            {{-- <div>
                @foreach ($venues as $venue)
                <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                    {{ $venue['name'] }}
                </div>
                @endforeach
            </div> --}}
        </section>
    </x-wrapper-narrow>
</x-layout>
