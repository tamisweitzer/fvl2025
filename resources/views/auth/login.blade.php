<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Login</x-page-title>

        <form action="/login" method="post" class="mb-12 max-w-lg mx-auto">
            @csrf

            <x-form-group>
                <x-label-default for="email-address">Email Address<span class="text-red-500">*</span></x-label-default>
                <x-input-text id="email-address" name="email-address" required></x-input-text>
            </x-form-group>
            <x-form-group>
                <x-label-default for="email-address">Password<span class="text-red-500">*</span></x-label-default>
                <x-input-password id="password" name="password" required></x-input-password>
            </x-form-group>

            <div class="mt-6 mb-8 flex items-center justify-between gap-x-6">
                <x-form-button-cancel>Cancel</x-form-button-cancel>
                <x-form-button-submit>Log in</x-form-button-submit>
            </div>
            <div>
                Don't have an account? Register <a href="/register" class="underline text-orange-600">here</a>.
            </div>
        </form>



    </x-wrapper-narrow>
</x-layout>
