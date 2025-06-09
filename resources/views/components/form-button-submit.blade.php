<button type="submit"
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-orange-400 hover:bg-orange-600 active:bg-orange-700 rounded px-4 py-2 text-white']) }}>{{ $slot }}</button>
