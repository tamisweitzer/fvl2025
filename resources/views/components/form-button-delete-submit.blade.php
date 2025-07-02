<button type="submit"
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-red-500 border border-red-500 text-white hover:bg-red-600 active:bg-red-600 rounded px-4 py-2 ']) }}>{{ $slot }}</button>
