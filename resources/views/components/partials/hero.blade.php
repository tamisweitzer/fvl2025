<!-- Hero image and welcome text.  -->
@if (request()->is('/'))
    <div style="box-shadow: 3px 5px 7px 7px rgba(0,0,0,0.3)">

        <div
            class="px-2 sm:px-4 bg-[url('../images/lita.jpg')] bg-cover bg-middle h-[300px] sm:h-[400px] md:h-[500px] lg:h-[500px]">
            {{-- <div class="flex flex-col justify-center items-center align-middle max-w-6xl mx-auto mt-4  h-full">
                <div
                class="content bg-white opacity-95 max-w-fit px-4 sm:px-10 pt-4 pb-6 font-extrabold text-center">
                <p class="text-gray-800 font-semibold text-xl sm:text-3xl">The best live music in the Fox Valley
                    <span class="text-orange-700 italic font-bold fvl-text-stroke"><br>...and beyond!</span>
                </p>
            </div>
        </div> --}}
        </div>
        <div class="px-2 sm:px-4 py-2 text-gray-500 text-right text-xs sm:text-sm">Lita Ford, The Watering
            Hole,
            Green
            Bay</div>
    </div>
@endif
