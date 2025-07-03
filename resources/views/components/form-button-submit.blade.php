<button type="submit"
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-green-200 border border-green-400 text-green-700 hover:bg-green-300 active:bg-green-300 rounded px-4 py-2']) }}>{{ $slot }}</button>
