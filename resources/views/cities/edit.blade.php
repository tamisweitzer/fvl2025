<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Edit {{ $city->name }}</x-page-title>
        @auth

            <form action="/cities/{id}/edit" method="post" class="mb-12 text-gray-800" enctype="multipart/form-data">
                @csrf
                <x-form-group>
                    <x-label-default for="name">City Name</x-label-default>
                    <x-input-text id="name" class="text-gray-600" name="name"
                        value="{{ $city->name }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="excerpt">Excerpt</x-label-default>
                    <textarea name="excerpt" id="excerpt" class="block w-full border shadow-inner p-1 text-gray-600">{{ $city->excerpt }}</textarea>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="bio">Bio</x-label-default>
                    <textarea name="bio" id="bio" class="block w-full border shadow-inner p-1 text-gray-600">{{ $city->bio }}</textarea>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="website_url">Website url for the city</x-label-default>
                    <x-input-text name="website_url" id="website_url" class="text-gray-600"
                        value="{{ $city->website_url }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="lat">Latitude (for Google maps)</x-label-default>
                    <x-input-text name="lat" id="lat" class="text-gray-600"
                        value="{{ $city->lat }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="long">Longitude (for Google maps)</x-label-default>
                    <x-input-text name="long" id="long" class="text-gray-600"
                        value="{{ $city->long }}"></x-input-text>
                </x-form-group>

                <div class="mt-8 flex items-center justify-end gap-x-6">
                    <x-form-button-cancel>Cancel</x-form-button-cancel>
                    <x-form-button-submit class="">Update Profile</x-form-button-submit>
                </div>
            </form>

            <hr>

            <h2 class="text-2xl mt-12 mb-4">Edit the Thumbnail Image</h2>
            <form action="/cities/{{ $city->id }}/thumbnail" method="post"
                class="mb-12 flex flex-col sm:flex-row sm:justify-between" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div>
                    <x-form-group class="w-fit mb-0">
                        <x-label-default for="thumbnail_img">Select new thumbnail image</x-label-default>
                        <input type="file" accept=".jpg,.jpeg,.png,.webp" name="thumbnail_img" id="thumbnail_img"
                            class="block w-full p-1 text-gray-500" value="{{ $city->thumbnail_img }}">
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
            <form action="/cities/{{ $city->id }}/banner" method="post"
                class="mb-12 flex flex-col sm:flex-row sm:justify-between" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div>
                    <x-form-group class="w-fit mb-0">
                        <x-label-default for="banner_img">Select new banner image</x-label-default>
                        <input type="file" accept=".jpg,.jpeg,.png,.webp" name="banner_img" id="banner_img"
                            class="block w-full p-1 text-gray-500" value="{{ $city->banner_img }}">
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
                <h2 class="text-2xl mb-4">Delete city</h2>
                <form action="/cities/{{ $city->id }}" method="post"
                    class="mb-12 flex flex-col sm:flex-row sm:justify-between" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <p class="text-red-500 text-bold">Caution: Action cannot be undone.</p>
                    <div class="flex items-center justify-end gap-x-6">
                        <x-form-button-delete-submit>Delete City</x-form-button-delete-submit>
                    </div>
                </form>
            </div>
        @endauth
        @guest
            <div class="mt-12 max-w-2xl mx-auto bg-violet-50 border border-violet-200 text-violet-700 px-4 py-8">
                <p>Sorry, public access is not available at this time. </p>
                <p class="mt-4">Please email Tami at <a href="mailto:foxvalleylive@gmail.com"
                        class="font-semibold underline underline-offset-2">foxvalleylive@gmail.com</a> to
                    be added to the site.</p>
            </div>
        @endguest
    </x-wrapper-narrow>
</x-layout>
