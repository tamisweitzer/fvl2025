<x-layout>
    <div class="max-w-3xl mx-auto p-4 mt-8 mb-8">
        <h1 class="text-2xl sm:text-3xl md:text-4xl text-center mb-8">See Live Music This Week</h1>

        <section class="mb-8">
            <?php foreach ($events as $event) : ?>
            <div class=" px-1 py-4 border-b  border-b-slate-200">
                <span class="text-lg font-semibold text-gray-700">
                    <?php echo $event['bandName']; ?>
                </span>
                <br>
                {{-- <span class="mx-2 font-semibold text-gray-700"> - </span> --}}

                <span class="text-gray-700">
                    <?php echo $event['venueName']; ?>,
                </span>

                <span class="text-gray-700">
                    <?php echo $event['city']; ?>
                </span>

                <br>
                <span class="text-gray-500 text-sm">
                    <?php echo $event['date']; ?>,
                    <?php echo $event['time']; ?>,
                </span>
            </div>
            <?php endforeach; ?>
        </section>

        <a href="./events.php"
            class="btn mt-4 inline-block bg-orange-500 hover:bg-orange-600 active:bg-orange-700 rounded px-4 py-2 text-white">See
            all upcoming shows.</a>
    </div>
</x-layout>
