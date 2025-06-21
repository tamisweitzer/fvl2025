<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Add a Summer Event</x-page-title>
        @auth
            <form action="/summer/events/create" method="post" class="mb-12" enctype="multipart/form-data">
                @csrf

                <x-form-group>
                    <x-label-default for="start_date">Start date</x-label-default>
                    <x-input-date name="start_date" id="start_date"></x-input-date>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="end_date">End date</x-label-default>
                    <x-input-date name="end_date" id="end_date"></x-input-date>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="start_time">Start time</x-label-default>
                    <x-input-text name="start_time" id="start_time"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="band">Band or band list</x-label-default>
                    <x-input-text name="band" id="band" placeholder="The band, or list of bands"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="event_name">Event name</x-label-default>
                    <x-input-text id="event_name" name="event_name"
                        placeholder="e.g. Heid Music in the Park, or Brown County Fair"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="venue">Venue</x-label-default>
                    <x-input-text name="venue" id="venue" placeholder="Name of bar, fairgrounds, etc."></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="city">City</x-label-default>
                    <x-input-text name="city" id="city"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="url">Url</x-label-default>
                    <x-input-text name="url" id="url"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="notes">Notes</x-label-default>
                    <x-input-text-area name="notes" id="notes"
                        placeholder="Additional notes regarding entry rules, cover charge, etc."></x-input-text-area>
                </x-form-group>

                <h2 class=" mb-2">Select one event type</h2>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_bar_gig" class="" value="is_bar_gig" checked>
                    <label for="is_bar_gig" class="ml-2">Is a bar gig</label>
                </x-form-group>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_lunch_gig" class="" value="is_lunch_gig">
                    <label for="is_lunch_gig" class="ml-2">Is a lunch show</label>

                </x-form-group>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_series" class="" value="is_series">
                    <label for="is_series" class="ml-2">Is a series</label>
                </x-form-group>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_fair" class="" value="is_fair">
                    <label for="is_fair" class="ml-2">Is a fair, fest, or outdoor concert</label>
                </x-form-group>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_national_act" class="" value="is_national_act">
                    <label for="is_national_act" class="ml-2">Is a national act</label>
                </x-form-group>

                <div class="mt-8 flex items-center justify-between gap-x-6 border-t border-t-slate-200">
                    <x-form-button-cancel>Cancel</x-form-button-cancel>
                    <x-form-button-submit>Submit</x-form-button-submit>
                </div>
            </form>
        @endauth
        @guest
            <p>Email <a href="mailto:foxvalleylive@gmail.com"
                    class="font-semibold underline underline-offset-2">foxvalleylive@gmail.com</a> to
                be added to the site. </p>
        @endguest
    </x-wrapper-narrow>
</x-layout>
