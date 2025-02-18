<x-layout>
    <x-wrapper-narrow>
        <x-page-title>Add a Band</x-page-title>

        <form action="/bands/create" method="post">

            <div class="form-group mb-4">
                <label for="name" class="block w-full">Name</label>
                <input type="text" id="name" class="block w-full" name="name">
            </div>

            <div class="form-group mb-4">
                <label for="fullname" class="block w-full">FullName</label>
                <x-input-text id="fullname" name="fullname"></x-input-text>
            </div>

            <div class="form-group mb-4">
                <label for="xxx" class="block w-full">Xxx</label>
                <x-input-text id="xxx" name="xxx"></x-input-text>
            </div>

            <div class="form-group">
                <label for="excerpt" class="block w-full">Excerpt</label>
                <textarea name="excerpt" id="excerpt" class="block w-full" placeholder="A sentence or two about you..."></textarea>
            </div>
        </form>

    </x-wrapper-narrow>
</x-layout>
