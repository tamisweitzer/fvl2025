<x-layout>
    <div class="max-w-3xl mx-auto p-4 mt-8 mb-8">
        <h1 class="text-2xl sm:text-3xl md:text-4xl text-center mb-8">All Bands</h1>

        <section class="mb-8">
            <ul>
                @foreach ($bands as $band)
                    <a href="/bands/{{ $band->id }}" class="block hover:shadow">
                        <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                            {{ $band->name }}
                            from
                            {{ $band->city->name }}
                        </li>
                    </a>
                @endforeach
            </ul>
        </section>
</x-layout>
