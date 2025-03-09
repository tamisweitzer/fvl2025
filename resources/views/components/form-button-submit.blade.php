<button type="submit"
    {{ $attributes->merge(['class' => 'btn mt-4 inline-block bg-violet-500 hover:bg-green-600 active:bg-green-700 rounded px-4 py-2 text-white']) }}>{{ $slot }}</button>
