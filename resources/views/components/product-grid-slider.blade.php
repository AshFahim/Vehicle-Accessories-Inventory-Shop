<div class="flex items-center justify-center w-full h-full py-24 sm:py-8">
    <div class="w-full relative flex items-center justify-center">
        <button type="button" aria-label="slide backward"
            class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
            id="prev{{ $sliderNo }}">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="slider{{ $sliderNo }}"
                class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                @foreach ($products as $product)
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <x-product-grid :data="$product" />
                    </div>
                @endforeach
            </div>
        </div>
        <button type="button" aria-label="slide forward"
            class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
            id="next{{ $sliderNo }}">
            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>
<script>
    let defaultTransform{{ $sliderNo }} = 0;

    function goNext{{ $sliderNo }}() {
        defaultTransform{{ $sliderNo }} = defaultTransform{{ $sliderNo }} - 398;
        var slider{{ $sliderNo }} = document.getElementById("slider{{ $sliderNo }}");
        if (Math.abs(defaultTransform{{ $sliderNo }}) >= slider{{ $sliderNo }}.scrollWidth / 1.7)
            defaultTransform{{ $sliderNo }} = 0;
        slider{{ $sliderNo }}.style.transform = "translateX(" + defaultTransform{{ $sliderNo }} + "px)";
    }
    next{{ $sliderNo }}.addEventListener("click", goNext{{ $sliderNo }});

    function goPrev{{ $sliderNo }}() {
        var slider{{ $sliderNo }} = document.getElementById("slider{{ $sliderNo }}");
        if (Math.abs(defaultTransform{{ $sliderNo }}) === 0) defaultTransform{{ $sliderNo }} = 0;
        else defaultTransform{{ $sliderNo }} = defaultTransform{{ $sliderNo }} + 398;
        slider{{ $sliderNo }}.style.transform = "translateX(" + defaultTransform{{ $sliderNo }} + "px)";
    }
    prev{{ $sliderNo }}.addEventListener("click", goPrev{{ $sliderNo }});
</script>
