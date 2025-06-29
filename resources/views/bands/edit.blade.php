<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Edit {{ $band->name }} Band</x-page-title>

        @auth
            <form action="/bands/{{ $band->id }}/profile" method="post" class="mb-16" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form-group>
                    <x-label-default for="name">Nickname</x-label-default>
                    <x-input-text id="name" name="name" value="{{ $band->name }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="fullname">Full or Proper Name</x-label-default>
                    <x-input-text id="fullname" name="fullname" value="{{ $band->fullname }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="excerpt">Excerpt</x-label-default>
                    <textarea name="excerpt" id="excerpt" class="block w-full border shadow-inner p-1">{{ $band->excerpt }}</textarea>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="bio">Bio</x-label-default>
                    <textarea name="bio" id="bio" class="block w-full border shadow-inner p-1">{{ $band->bio }}</textarea>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="city_id">City</x-label-default>
                    <select name="city_id" id="city_id" class="block w-full border shadow-inner p-1 text-gray-500">
                        <option id="select-city" value="null">Select your city</option>
                        @foreach ($cities as $city)
                            @php
                                if ($city->id == $band->city->id) {
                                    $selected = 'selected';
                                } else {
                                    $selected = '';
                                }
                            @endphp
                            <option id="city_{{ $city->id }}" value="{{ $city->id }}" {{ $selected }}>
                                {{ $city->name }}</option>
                        @endforeach
                    </select>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="state_id">
                        State</x-label-default>
                    <select name="state_id" id="state_id" class="block w-full border shadow-inner p-1 text-gray-500">
                        @foreach ($states as $state)
                            @php
                                if ($state->id == $band->state->id) {
                                    $selected = 'selected';
                                } else {
                                    $selected = '';
                                }
                            @endphp
                            <option id="state_{{ $state->id }}" value="{{ $state->id }}" {{ $selected }}>
                                {{ $state->name }}</option>
                        @endforeach
                    </select>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="website_url">Website url</x-label-default>
                    <x-input-text name="website_url" id="website_url" value="{{ $band->website_url }}"></x-input-text>
                </x-form-group>

                <div class="mt-4 flex items-center justify-end gap-x-6">
                    <x-form-button-cancel>Cancel</x-form-button-cancel>
                    <x-form-button-submit>Update Profile</x-form-button-submit>
                </div>
            </form>

            <hr>

            <h2 class="text-2xl mt-12 mb-4">Edit the Thumbnail Image</h2>
            <form action="/bands/{{ $band->id }}/thumbnail" method="post"
                class="mb-12 flex flex-col sm:flex-row sm:justify-between" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div>
                    <x-form-group class="w-fit mb-0">
                        <x-label-default for="thumbnail_img">Select new thumbnail image</x-label-default>
                        <input type="file" accept=".jpg,.jpeg,.png,.webp" name="thumbnail_img" id="thumbnail_img"
                            class="block w-full p-1 text-gray-500" value="{{ $band->thumbnail_img }}">
                        <details class="text-gray-400 hover:cursor-pointer hover:text-gray-700">
                            <summary>Preferred image has a 4x3 ratio. Size 160x120.</summary>
                            <div class="bg-gray-300 w-[400px] h-[300px]">.</div>
                        </details>
                    </x-form-group>
                    {{-- <x-form-group>
                        <x-label-default for="thumbnail-alt-text">Alt text</x-label-default>
                        <x-input-text id="thumbnail-alt-text"></x-input-text>
                    </x-form-group> --}}
                </div>

                <div class="flex items-center justify-end gap-x-6">
                    <x-form-button-cancel>Cancel</x-form-button-cancel>
                    <x-form-button-submit>Update Thumb</x-form-button-submit>
                </div>
            </form>

            <hr>

            <h2 class="text-2xl mt-12 mb-4">Edit the Banner Image</h2>
            <form action="/bands/{{ $band->id }}/banner" method="post"
                class="mb-12 flex flex-col sm:flex-row sm:justify-between" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div>
                    <x-form-group class="w-fit mb-0">
                        <x-label-default for="banner_img">Select new banner image</x-label-default>
                        <input type="file" accept=".jpg,.jpeg,.png,.webp" name="banner_img" id="banner_img"
                            class="block w-full p-1 text-gray-500" value="{{ $band->banner_img }}">
                        <details class="text-gray-400 hover:cursor-pointer hover:text-gray-700">
                            <summary>Preferred image has a 16x9 ratio. Sized 896x504.</summary>
                            <div class="bg-gray-300 w-[400px] h-[225px]">.</div>
                        </details>
                    </x-form-group>
                    {{-- <x-form-group>
                        <x-label-default for="banner-alt-text">Alt text</x-label-default>
                        <x-input-text id="banner-alt-text"></x-input-text>
                    </x-form-group> --}}
                </div>

                <div class="flex items-center justify-end gap-x-6">
                    <x-form-button-cancel>Cancel</x-form-button-cancel>
                    <x-form-button-submit>Update Banner</x-form-button-submit>
                </div>
            </form>


            <hr class="py-4 mt-36 border-red-600">
            <div class="px-8 py-12 rounded bg-red-100 text-red-600">
                <h2 class="text-2xl mb-4">Delete Band</h2>
                <form action="/bands/{{ $band->id }}" method="post"
                    class="mb-12 flex flex-col sm:flex-row sm:justify-between" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <p class="text-red-500 text-bold">Caution: Action cannot be undone.</p>
                    <div class="flex items-center justify-end gap-x-6">
                        <x-form-button-submit>Delete Band</x-form-button-submit>
                    </div>
                </form>
            </div>

        @endauth
        @guest
            <p>Email <a href="mailto:foxvalleylive@gmail.com"
                    class="font-semibold underline underline-offset-2">foxvalleylive@gmail.com</a> to
                be added to the site. </p>
        @endguest
    </x-wrapper-narrow>
</x-layout>
