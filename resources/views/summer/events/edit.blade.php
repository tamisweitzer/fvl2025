<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Edit Event: {{ $event->event_name }}</x-page-title>
        @auth
            <form action="/summer/events/{{ $event->id }}/patch" method="post" class="mb-12">
                @csrf
                @method('PATCH')
                <x-form-group>
                    <x-label-default for="start_date">Start date</x-label-default>
                    <x-input-date name="start_date" id="start_date"
                        value="{{ $event->start_date->format('Y-m-d') }}"></x-input-date>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="end_date">End date</x-label-default>
                    <x-input-date name="end_date" id="end_date"
                        value="{{ $event->end_date ? $event->end_date->format('Y-m-d') : '' }}"></x-input-date>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="start_time">Start time</x-label-default>
                    <x-input-text name="start_time" id="start_time" value="{{ $event->start_time }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="band">Band or band list</x-label-default>
                    <x-input-text name="band" id="band" placeholder="The band, or list of bands"
                        value="{{ $event->band }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="event_name">Event name</x-label-default>
                    <x-input-text id="event_name" name="event_name"
                        placeholder="e.g. Heid Music in the Park, or Brown County Fair"
                        value="{{ $event->event_name }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="venue">Venue</x-label-default>
                    <x-input-text name="venue" id="venue" placeholder="Name of bar, fairgrounds, etc."
                        value="{{ $event->venue }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="city">City</x-label-default>
                    <x-input-text name="city" id="city" value="{{ $event->city }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="url">Url</x-label-default>
                    <x-input-text name="url" id="url" value="{{ $event->url }}"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="notes">Notes</x-label-default>
                    <x-input-text-area name="notes" id="notes"
                        placeholder="Additional notes regarding entry rules, cover charge, etc.">{{ $event->notes }}"</x-input-text-area>
                </x-form-group>


                <h2 class=" mb-2">Select one event type</h2>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_bar_gig" class="" value="is_bar_gig"
                        {{ $event->event_type == 'is_bar_gig' ? 'checked' : '' }}>
                    <label for="is_bar_gig" class="ml-2">Is a bar gig</label>
                </x-form-group>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_lunch_gig" class="" value="is_lunch_gig"
                        {{ $event->event_type == 'is_lunch_gig' ? 'checked' : '' }}>
                    <label for="is_lunch_gig" class="ml-2" value="{{ $event->is_lunch_gig }}">Is a lunch show</label>
                </x-form-group>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_fair" class="" value="is_fair"
                        {{ $event->event_type == 'is_fair' ? 'checked' : '' }}>
                    <label for="is_fair" class="ml-2" value="{{ $event->is_fair }}">Is a fair, fest, or outdoor
                        concert</label>
                </x-form-group>

                <x-form-group>
                    <input type="radio" name="event_type" id="is_national_act" class="" value="is_national_act"
                        {{ $event->event_type == 'is_national_act' ? 'checked' : '' }}>
                    <label for="is_national_act" class="ml-2" value="{{ $event->is_fair }}">Is a national act</label>
                </x-form-group>

                <div class="mt-8 flex items-center justify-between gap-x-6 border-t border-t-slate-200">
                    <x-form-button-cancel>Cancel</x-form-button-cancel>
                    <x-form-button-submit>Submit</x-form-button-submit>
                </div>
            </form>

            <hr class="py-4 mt-36 border-red-600">
            <div class="px-8 py-12 rounded bg-red-100 text-red-600">
                <h2 class="text-2xl mb-4">Delete {{ $event->event_name }}</h2>
                <form action="/summer/events/{{ $event->id }}/delete" method="post"
                    class="mb-12 flex flex-col sm:flex-row sm:justify-between border">
                    @csrf
                    @method('DELETE')

                    <div class="flex items-center justify-between gap-x-6 w-full">
                        <p class="text-red-500 text-bold">Caution: This action cannot be undone.</p>
                        <x-form-button-submit>Delete Event</x-form-button-submit>
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
