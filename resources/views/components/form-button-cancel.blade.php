<button
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-red-600 border border-red-700 text-white font-semibold hover:bg-red-600 active:bg-red-700 rounded px-4 py-2']) }}
    type="button">{{ $slot }}</button>
