<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Register</x-page-title>

        <form action="/register" method="post" class="mb-12 max-w-lg mx-auto">
            @csrf
            <x-form-group>
                <x-label-default for="name">Display Name<span class="text-red-500">*</span></x-label-default>
                <x-input-text id="name" name="name" required></x-input-text>
            </x-form-group>

            <x-form-group>
                <x-label-default for="email-address">Email Address<span class="text-red-500">*</span></x-label-default>
                <x-input-text id="email-address" name="email-address" required></x-input-text>
            </x-form-group>
            <x-form-group>
                <x-label-default for="email-address">Password<span class="text-red-500">*</span></x-label-default>
                <x-input-text id="password" name="password" required></x-input-text>
                <details class="mt-1 text-gray-400 hover:text-gray-600 open:text-gray-600">
                    <summary class="text-sm  block cursor-pointer underline-offset-2">View password
                        requirements.
                    </summary>
                    <small class=" mt-4">Minimum 8 characters long, must include at least one lowercase,
                        uppercase,
                        and numeric character.
                    </small>
                </details>
            </x-form-group>


            <div class="mt-6 mb-8 flex items-center justify-between gap-x-6">
                <x-form-button-cancel>Cancel</x-form-button-cancel>
                <x-form-button-submit>Required</x-form-button-submit>
            </div>

            <div>
                Already have an account? <a href="/login" class="underline text-orange-600">Login now</a>.
            </div>
        </form>

    </x-wrapper-narrow>
</x-layout>
