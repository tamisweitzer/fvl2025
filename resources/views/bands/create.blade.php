<x-layout>
    <x-wrapper-narrow>
        @csrf
        <x-page-title>Add a Band</x-page-title>

        <form action="/bands/create" method="post" class="mb-12">
            @csrf
            <x-form-group>
                <x-label-default for="name">Name</x-label-default>
                <x-input-text id="name" name="name"></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="fullname">FullName</x-label-default>
                <x-input-text id="fullname" name="fullname"></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="excerpt">Excerpt</x-label-default>
                <x-input-text-area name="excerpt" id="excerpt"
                    placeholder="A sentence or two about you..."></x-input-text-area>
            </x-form-group>

            <x-form-group>
                <x-label-default for="bio">Bio</x-label-default>
                <x-input-text-area name="bio" id="bio"
                    placeholder="A few more sentences about you..."></x-input-text-area>
            </x-form-group>

            <x-form-group>
                <x-label-default for="city_id">City</x-label-default>
                <select name="city_id" id="city_id" class="block w-full border shadow-inner p-1">
                    <option id="null" value="null">Choose your city</option>
                    @foreach ($cities as $city)
                        <option id="city_{{ $city->id }}" value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </x-form-group>

            <x-form-group>
                <x-label-default for="state_id">State</x-label-default>
                <select name="state_id" id="state_id" class="block w-full border shadow-inner p-1">
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </x-form-group>

            <x-form-group>
                <x-label-default for="website_url">Website url</x-label-default>
                <x-input-text name="website_url" id="website_url"></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="thumbnail_img">Thumbnail</x-label-default>
                {{-- <x-input-text id="xxx" name="xxx"></x-input-text> --}}
                <input type="file" accept=".jpg,.jpeg,.png,.webp" name="thumbnail_img" id="thumbnail_img"
                    class="block w-full border shadow-inner p-1">
            </x-form-group>

            <x-form-group>
                <x-label-default for="banner_img">Banner img</x-label-default>
                <input type="file" accept=".jpg,.jpeg,.png,.webp" name="banner_img" id="banner_img"
                    class="block w-full border shadow-inner p-1">
            </x-form-group>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <x-form-button-cancel>Cancel</x-form-button-cancel>
                <x-form-button-submit>Submit</x-form-button-submit>
            </div>
        </form>
    </x-wrapper-narrow>
</x-layout>
