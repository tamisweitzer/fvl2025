<button
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-red-200 border border-red-300 text-red-700 hover:bg-red-300 active:bg-red-300 rounded px-4 py-2 text-white']) }}
    type="button">{{ $slot }}</button>
