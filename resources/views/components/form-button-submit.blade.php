<button type="submit"
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-green-600 border border-green-700 text-white font-semi-bold hover:bg-green-700 active:bg-green-800 rounded px-4 py-2']) }}>{{ $slot }}</button>
