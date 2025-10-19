<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Add a City</x-page-title>
        <div class="px-4">
            @auth
                <form action="/cities/create" method="post" class="mb-12" enctype="multipart/form-data">
                    @csrf
                    <x-form-group>
                        <x-label-default for="name">City Name</x-label-default>
                        <x-input-text id="name" name="name" placeholder=""></x-input-text>
                    </x-form-group>

                    <x-form-group>
                        <x-label-default for="excerpt">Excerpt</x-label-default>
                        <x-input-text-area name="excerpt" id="excerpt"
                            placeholder="One or two sentences that sum up the essence of the city."></x-input-text-area>
                    </x-form-group>

                    <x-form-group>
                        <x-label-default for="bio">Bio</x-label-default>
                        <x-input-text-area name="bio" id="bio"
                            placeholder="A longer description."></x-input-text-area>
                    </x-form-group>

                    <x-form-group>
                        <x-label-default for="website_url">Website url for the city</x-label-default>
                        <x-input-text name="website_url" id="website_url"
                            placeholder="https://yourwebsite.com"></x-input-text>
                    </x-form-group>

                    <x-form-group>
                        <x-label-default for="lat">Latitude (for Google maps)</x-label-default>
                        <x-input-text name="lat" id="lat" placeholder=""></x-input-text>
                    </x-form-group>

                    <x-form-group>
                        <x-label-default for="long">Longitude (for Google maps)</x-label-default>
                        <x-input-text name="long" id="long" placeholder=""></x-input-text>
                    </x-form-group>

                    <x-form-group>
                        <x-label-default for="thumbnail_img">Thumbnail image</x-label-default>
                        {{-- <x-input-text id="xxx" name="xxx"></x-input-text> --}}
                        <input type="file" accept=".jpg,.jpeg,.png,.webp" name="thumbnail_img" id="thumbnail_img"
                            class="block w-full p-1 text-gray-500">
                        <details class="text-gray-400 hover:cursor-pointer hover:text-gray-700">
                            <summary>Preferred image has a 4x3 ratio. Size 160x120..</summary>
                            <div class="bg-gray-300 w-[400px] h-[300px]">.</div>
                        </details>
                    </x-form-group>

                    <x-form-group>
                        <x-label-default for="banner_img">Banner image</x-label-default>
                        <input type="file" accept=".jpg,.jpeg,.png,.webp" name="banner_img" id="banner_img"
                            class="block w-full p-1 text-gray-500">
                        <details class="text-gray-400 hover:cursor-pointer hover:text-gray-700">
                            <summary>Preferred image has a 16x9 ratio. Sized 896x504.</summary>
                            <div class="bg-gray-300 w-[400px] h-[225px]">.</div>
                        </details>
                    </x-form-group>

                    <div class="mt-8 flex items-center justify-between gap-x-6 border-t border-t-slate-200">
                        <x-form-button-cancel>Cancel</x-form-button-cancel>
                        <x-form-button-submit>Submit</x-form-button-submit>
                    </div>
                </form>
            @endauth
            @guest
                <div class="mt-12 max-w-2xl mx-auto bg-violet-50 border border-violet-200 text-violet-700 px-4 py-8">
                    <p>Sorry, public access is not available at this time. </p>
                    <p class="mt-4">Please email Tami at <a href="mailto:foxvalleylive@gmail.com"
                            class="font-semibold underline underline-offset-2">foxvalleylive@gmail.com</a> to
                        be added to the site.</p>
                </div>
            @endguest
        </div>
    </x-wrapper-narrow>
</x-layout>
