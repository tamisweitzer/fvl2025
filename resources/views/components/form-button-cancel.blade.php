<button
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-red-500 hover:bg-red-600 active:bg-red-700 rounded px-4 py-2 text-white']) }}
    type="button">{{ $slot }}</button>
