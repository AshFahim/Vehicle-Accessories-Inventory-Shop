<div id="filter-product">
    <div class="flex items-center justify-between ">
        <h1 class="text-2xl font-bold text-blue-600 dark:text-lightblue">Filter</h1>
    </div>
    <div class="hidden divide-x divide-gray-300 md:grid-cols-3 lg:grid-cols-5 md:grid dark:divide-gray-700">
        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
                Collection
            </div>
            <div
                class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                <a class="pl-3 pr-4 py-2 border-l-4 border-red-400 text-base text-red-600 bg-gray-100 dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:text-blue-600 focus:border-blue-800 transition duration-150 ease-in-out flex justify-start items-center cursor-pointer"
                    href="{{ url('/shop/collection/All') }}">
                    All
                </a>
                @foreach ($collections as $collection)
                    <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                        href="{{ url('/shop/collection/' . $collection) }}">
                        {{ $collection }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20"
                    style="enable-background:new 0 0 20 20;" xml:space="preserve" fill="currentColor">
                    <path
                        d="M1.45,9.31c0-2.07,0.01-4.14-0.01-6.21c0-0.53,0.21-0.87,0.67-1.1c1.04-0.53,2.17-0.76,3.31-0.95
                c1.79-0.31,3.6-0.37,5.41-0.29c2.16,0.1,4.31,0.3,6.35,1.08c0.36,0.14,0.71,0.34,1.04,0.53C18.46,2.5,18.56,2.72,18.56,3
                c0,4.24-0.01,8.48,0,12.72c0,0.3-0.18,0.43-0.39,0.5c-0.54,0.19-1.08,0.38-1.63,0.5c-1.57,0.35-3.17,0.49-4.78,0.56
                c-2.05,0.09-4.1-0.01-6.13-0.26c-1.18-0.15-2.37-0.31-3.5-0.7c-0.12-0.04-0.24-0.1-0.36-0.15c-0.22-0.1-0.32-0.27-0.31-0.53
                C1.46,13.53,1.45,11.42,1.45,9.31z M9.95,4C9.95,4,9.95,4,9.95,4C9.65,4,9.35,4.01,9.05,4C8.73,4,8.42,3.99,8.11,3.98
                c-0.45-0.01-0.6,0.13-0.6,0.58c0,1.02,0,2.05,0,3.07c0,0.58,0.09,0.69,0.68,0.7c1.2,0.02,2.41,0.01,3.61,0.01
                c0.4,0,0.59-0.2,0.59-0.6c0.01-1.06,0.01-2.13,0-3.19c0-0.4-0.16-0.55-0.58-0.55C11.19,4,10.57,4,9.95,4z M12.7,6.08
                c0,0.52,0,1.05,0,1.57c0,0.46,0.14,0.62,0.59,0.58c0.81-0.07,1.62-0.16,2.43-0.25c0.27-0.03,0.41-0.23,0.41-0.48
                c0.01-1.11,0.01-2.21,0-3.32c0-0.35-0.2-0.52-0.54-0.49c-0.79,0.06-1.58,0.14-2.37,0.22c-0.38,0.04-0.51,0.21-0.51,0.6
                C12.7,5.03,12.7,5.55,12.7,6.08z M7.16,6.08c0-0.54,0-1.08,0-1.63c0-0.34-0.11-0.5-0.44-0.54C5.95,3.83,5.17,3.75,4.39,3.69
                C4.09,3.66,3.9,3.83,3.9,4.13c-0.01,1.12,0,2.25,0,3.37c0,0.27,0.15,0.44,0.41,0.47c0.77,0.09,1.53,0.18,2.3,0.25
                C7.01,8.26,7.16,8.1,7.16,7.7C7.17,7.16,7.16,6.62,7.16,6.08z M18.26,5.48c0-0.55,0-1.1,0-1.66c0-0.38-0.23-0.59-0.56-0.53
                c-0.29,0.05-0.57,0.11-0.85,0.18c-0.25,0.06-0.39,0.23-0.39,0.5c0,1.09,0,2.19,0,3.28c0,0.36,0.21,0.54,0.56,0.5
                c0.3-0.03,0.59-0.09,0.88-0.16c0.24-0.06,0.37-0.22,0.37-0.48C18.25,6.57,18.26,6.02,18.26,5.48z M1.73,5.46c0,0.54,0,1.08,0,1.63
                c0,0.3,0.15,0.47,0.43,0.53C2.39,7.66,2.62,7.7,2.84,7.74c0.54,0.09,0.72-0.06,0.72-0.61c0-0.99,0-1.99,0-2.98
                c0-0.49-0.09-0.6-0.56-0.69C2.8,3.41,2.59,3.37,2.38,3.34C1.94,3.27,1.74,3.44,1.74,3.89C1.73,4.41,1.73,4.93,1.73,5.46z">
                    </path>
                    <path
                        d="M10.59,19.26c-1.76,0.03-3.35-0.06-4.92-0.3c-0.25-0.04-0.49-0.1-0.72-0.19c-0.14-0.05-0.33-0.16-0.36-0.28
                c-0.08-0.29-0.28-0.28-0.49-0.33c-0.79-0.18-1.58-0.36-2.36-0.57c-0.16-0.04-0.32-0.19-0.4-0.33c-0.06-0.11-0.05-0.34,0.02-0.44
                c0.07-0.09,0.29-0.14,0.42-0.11c0.54,0.13,1.07,0.33,1.62,0.46c1.62,0.37,3.27,0.54,4.92,0.58c1.38,0.03,2.77,0.04,4.16,0
                c1.89-0.05,3.75-0.33,5.57-0.86c0.08-0.02,0.16-0.06,0.23-0.06c0.15,0.01,0.41,0.01,0.42,0.06c0.04,0.16,0.03,0.38-0.06,0.5
                c-0.1,0.14-0.29,0.25-0.47,0.29c-0.76,0.18-1.53,0.33-2.29,0.49c-0.19,0.04-0.33,0.06-0.42,0.29c-0.12,0.33-0.46,0.44-0.79,0.48
                c-0.94,0.12-1.89,0.22-2.84,0.3C11.36,19.29,10.89,19.26,10.59,19.26z">
                    </path>
                </svg>
                Filter Type
            </div>
            <div
                class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                @foreach ($filterTypes as $filterType)
                    <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                        href="{{ url('/shop/filterType/' . $filterType) }}">
                        {{ $filterType }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <svg class="w-5 h-5" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    fill="currentColor" xml:space="preserve">
                    <path
                        d="M256,85.3c-94.1,0-170.7,76.6-170.7,170.7S161.9,426.7,256,426.7S426.7,350.1,426.7,256S350.1,85.3,256,85.3z M343.3,149.1
                c1.9-2.1,4.6-3.4,7.5-3.5c2.5-0.3,5.7,0.9,7.8,2.9c22.1,20.9,37.2,47.6,43.5,77.1c1,4.7-1.3,9.5-5.5,11.7c-10.4,5.4-22.8,8-34.7,8
                c-15.5,0-30.1-4.4-38.6-12.9C305,214.3,312.6,183.2,343.3,149.1z M168.7,364.6c-1.9,2.1-4.6,3.4-7.5,3.5c-0.1,0-0.3,0-0.4,0
                c-2.7,0-5.4-1-7.3-2.9c-22.1-20.9-37.2-47.6-43.5-77.1c-1-4.7,1.3-9.5,5.5-11.7c24-12.4,58.3-10.1,73.4,4.9
                C206.9,299.4,199.4,330.5,168.7,364.6z M188.9,232.4c-8.5,8.5-23.2,12.9-38.6,12.9c-11.9,0-24.3-2.6-34.7-8c-4.3-2.2-6.5-7-5.5-11.7
                c6.3-29.5,21.3-56.2,43.5-77.1c2.1-2,5.1-3.2,7.8-2.9c2.9,0.1,5.6,1.4,7.5,3.5C199.4,183.2,207,214.3,188.9,232.4z M301.5,398.2
                c-14.8,4.7-30.1,7.1-45.5,7.1s-30.7-2.4-45.5-7.1c-4.7-1.5-7.8-6-7.4-10.9c2.7-38.4,25.4-67.3,52.9-67.3s50.2,28.9,52.9,67.3
                C309.2,392.2,306.1,396.7,301.5,398.2z M213.3,256c0-23.5,19.1-42.7,42.7-42.7s42.7,19.1,42.7,42.7s-19.1,42.7-42.7,42.7
                S213.3,279.5,213.3,256z M308.9,125.5c-2.7,38.4-25.4,67.3-52.9,67.3s-50.2-28.9-52.9-67.3c-0.3-4.9,2.7-9.4,7.4-10.9
                c29.5-9.4,61.4-9.4,91,0C306.2,116.1,309.2,120.6,308.9,125.5z M402,286.4c-6.3,29.5-21.3,56.2-43.5,77.1c-2,1.9-4.6,2.9-7.3,2.9
                c-0.1,0-0.3,0-0.4,0c-2.9-0.1-5.6-1.4-7.5-3.5c-30.7-34.1-38.3-65.2-20.2-83.3c15-15,49.3-17.3,73.4-4.9
                C400.8,276.9,403,281.7,402,286.4z">
                    </path>
                    <path
                        d="M256,0C114.8,0,0,114.8,0,256s114.8,256,256,256s256-114.8,256-256S397.2,0,256,0z M256,448c-105.9,0-192-86.1-192-192
                S150.1,64,256,64s192,86.1,192,192S361.9,448,256,448z">
                    </path>
                </svg>
                Car Brand
            </div>
            <div
                class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                    wire:click="selectCar(36)">
                    @foreach ($brands as $brand)
                        <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                            href="{{ url('/shop/brand/' . $brand) }}">
                            {{ $brand }}
                        </a>
                    @endforeach
                </a>
            </div>
        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                    fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                    <path
                        d="M15.81,12.45c-0.43-0.31-0.85-0.61-1.28-0.92c-0.06,0.08-0.1,0.14-0.14,0.2c-1.48,2.07-2.96,4.15-4.45,6.22
                c-0.83,1.16-2.2,1.64-3.54,1.23c-0.34-0.1-0.67-0.28-0.97-0.48c-0.74-0.5-1.46-1.03-2.19-1.55c-1.48-1.07-1.8-3.02-0.75-4.51
                c1.48-2.08,2.97-4.16,4.46-6.23C7,6.34,7.04,6.28,7.09,6.2C6.66,5.89,6.24,5.59,5.81,5.29C6.19,4.77,6.68,4.5,7.29,4.47
                c0.26-0.01,0.53,0.05,0.79,0.11C8.2,4.6,8.26,4.58,8.33,4.49c0.57-0.8,1.14-1.6,1.71-2.4c1.1-1.54,3.05-1.86,4.59-0.76
                c0.71,0.51,1.42,1.02,2.13,1.53c1.28,0.92,1.72,2.54,1.07,3.97c-0.09,0.2-0.22,0.39-0.34,0.57c-0.56,0.8-1.13,1.59-1.71,2.38
                c-0.09,0.13-0.09,0.2,0.01,0.33C16.31,10.76,16.33,11.74,15.81,12.45z M3.4,13.08c0.77,1.89,3.85,4.06,5.82,4.16
                c0.24-0.79,0.49-1.58,0.72-2.33c-0.8-0.51-1.6-0.98-2.35-1.52c-0.75-0.54-1.46-1.15-2.21-1.75C4.74,12.1,4.07,12.59,3.4,13.08z
                M9.28,4.85c-0.23,0.76-0.46,1.52-0.7,2.28c-0.03,0.1,0,0.13,0.08,0.18C9.07,7.53,9.48,7.76,9.87,8C11,8.7,12.04,9.5,13,10.41
                c0.03,0.03,0.12,0.03,0.16,0.01c0.65-0.46,1.29-0.93,1.94-1.4C14.39,7.24,11.47,5.03,9.28,4.85z">
                    </path>
                </svg>
                Model


            </div>

            <div
                class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                <p class="p-2 text-sm font-semibold text-center text-gray-400 dark:text-gray-700">please select a car
                    brand</p>
            </div>

        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                Specification


            </div>
            <div
                class="overflow-x-auto overflow-y-none max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                <p class="p-2 text-sm font-semibold text-center text-gray-400 dark:text-gray-700">please select a Model
                </p>

            </div>

        </div>
    </div>

    {{-- <div class="md:hidden flex-col w-full transition-all duration-300 ease-in-out max-h-[100vh] overflow-y-auto">
        <div
            class="flex flex-col flex-shrink-0 w-full border-r border-gray-200 bg-gradient-to-t from-white to-gray-100 dark:from-gray-900 dark:to-gray-800 dark:border-gray-700">
            <nav class="flex-grow pb-4 md:md:pb-0 md:overflow-y-auto">

                <ul>

                    <li x-data="{ showDrop: true }">
                        <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out flex justify-between cursor-pointer"
                            x-on:click="showDrop=!showDrop">
                            <div class="flex items-center gap-2 text-gray-600 dark:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                                Collection
                            </div>


                            <svg x-show="!showDrop" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>

                            <svg x-show="showDrop" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 15l7-7 7 7"></path>
                            </svg>
                        </a>

                        <div x-show="showDrop" x-transition:enter="transition transform duration-300"
                            x-transition:enter-start="-translate-y-9 opacity-0"
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition transform duration-300"
                            x-transition:leave-start="translate-y-0 opacity-100"
                            x-transition:leave-end="-translate-y-9 opacity-0">
                            <a class="pl-3 pr-4 py-2 border-l-4 border-red-400 text-base text-red-600 bg-gray-100 dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:text-blue-600 focus:border-blue-800 transition duration-150 ease-in-out flex justify-start items-center pl-12 cursor-pointer"
                                href="https://bogramotors.co.uk/shop/all">
                                All
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                href="https://bogramotors.co.uk/shop/air-filter">
                                Air Filter
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                href="https://bogramotors.co.uk/shop/oil-filter">
                                Oil Filter
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                href="https://bogramotors.co.uk/shop/0w-30">
                                0w-30
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                href="https://bogramotors.co.uk/shop/5w-30">
                                5w-30
                            </a>

                        </div>
                    </li>


                    <li x-data="{ showDrop: false }">
                        <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out flex justify-between cursor-pointer"
                            @click="showDrop=!showDrop">
                            <div class="flex items-center">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 mr-3" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                    y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                                    xml:space="preserve" fill="currentColor">
                                    <path
                                        d="M1.45,9.31c0-2.07,0.01-4.14-0.01-6.21c0-0.53,0.21-0.87,0.67-1.1c1.04-0.53,2.17-0.76,3.31-0.95
                                    c1.79-0.31,3.6-0.37,5.41-0.29c2.16,0.1,4.31,0.3,6.35,1.08c0.36,0.14,0.71,0.34,1.04,0.53C18.46,2.5,18.56,2.72,18.56,3
                                    c0,4.24-0.01,8.48,0,12.72c0,0.3-0.18,0.43-0.39,0.5c-0.54,0.19-1.08,0.38-1.63,0.5c-1.57,0.35-3.17,0.49-4.78,0.56
                                    c-2.05,0.09-4.1-0.01-6.13-0.26c-1.18-0.15-2.37-0.31-3.5-0.7c-0.12-0.04-0.24-0.1-0.36-0.15c-0.22-0.1-0.32-0.27-0.31-0.53
                                    C1.46,13.53,1.45,11.42,1.45,9.31z M9.95,4C9.95,4,9.95,4,9.95,4C9.65,4,9.35,4.01,9.05,4C8.73,4,8.42,3.99,8.11,3.98
                                    c-0.45-0.01-0.6,0.13-0.6,0.58c0,1.02,0,2.05,0,3.07c0,0.58,0.09,0.69,0.68,0.7c1.2,0.02,2.41,0.01,3.61,0.01
                                    c0.4,0,0.59-0.2,0.59-0.6c0.01-1.06,0.01-2.13,0-3.19c0-0.4-0.16-0.55-0.58-0.55C11.19,4,10.57,4,9.95,4z M12.7,6.08
                                    c0,0.52,0,1.05,0,1.57c0,0.46,0.14,0.62,0.59,0.58c0.81-0.07,1.62-0.16,2.43-0.25c0.27-0.03,0.41-0.23,0.41-0.48
                                    c0.01-1.11,0.01-2.21,0-3.32c0-0.35-0.2-0.52-0.54-0.49c-0.79,0.06-1.58,0.14-2.37,0.22c-0.38,0.04-0.51,0.21-0.51,0.6
                                    C12.7,5.03,12.7,5.55,12.7,6.08z M7.16,6.08c0-0.54,0-1.08,0-1.63c0-0.34-0.11-0.5-0.44-0.54C5.95,3.83,5.17,3.75,4.39,3.69
                                    C4.09,3.66,3.9,3.83,3.9,4.13c-0.01,1.12,0,2.25,0,3.37c0,0.27,0.15,0.44,0.41,0.47c0.77,0.09,1.53,0.18,2.3,0.25
                                    C7.01,8.26,7.16,8.1,7.16,7.7C7.17,7.16,7.16,6.62,7.16,6.08z M18.26,5.48c0-0.55,0-1.1,0-1.66c0-0.38-0.23-0.59-0.56-0.53
                                    c-0.29,0.05-0.57,0.11-0.85,0.18c-0.25,0.06-0.39,0.23-0.39,0.5c0,1.09,0,2.19,0,3.28c0,0.36,0.21,0.54,0.56,0.5
                                    c0.3-0.03,0.59-0.09,0.88-0.16c0.24-0.06,0.37-0.22,0.37-0.48C18.25,6.57,18.26,6.02,18.26,5.48z M1.73,5.46c0,0.54,0,1.08,0,1.63
                                    c0,0.3,0.15,0.47,0.43,0.53C2.39,7.66,2.62,7.7,2.84,7.74c0.54,0.09,0.72-0.06,0.72-0.61c0-0.99,0-1.99,0-2.98
                                    c0-0.49-0.09-0.6-0.56-0.69C2.8,3.41,2.59,3.37,2.38,3.34C1.94,3.27,1.74,3.44,1.74,3.89C1.73,4.41,1.73,4.93,1.73,5.46z">
                                    </path>
                                    <path
                                        d="M10.59,19.26c-1.76,0.03-3.35-0.06-4.92-0.3c-0.25-0.04-0.49-0.1-0.72-0.19c-0.14-0.05-0.33-0.16-0.36-0.28
                                    c-0.08-0.29-0.28-0.28-0.49-0.33c-0.79-0.18-1.58-0.36-2.36-0.57c-0.16-0.04-0.32-0.19-0.4-0.33c-0.06-0.11-0.05-0.34,0.02-0.44
                                    c0.07-0.09,0.29-0.14,0.42-0.11c0.54,0.13,1.07,0.33,1.62,0.46c1.62,0.37,3.27,0.54,4.92,0.58c1.38,0.03,2.77,0.04,4.16,0
                                    c1.89-0.05,3.75-0.33,5.57-0.86c0.08-0.02,0.16-0.06,0.23-0.06c0.15,0.01,0.41,0.01,0.42,0.06c0.04,0.16,0.03,0.38-0.06,0.5
                                    c-0.1,0.14-0.29,0.25-0.47,0.29c-0.76,0.18-1.53,0.33-2.29,0.49c-0.19,0.04-0.33,0.06-0.42,0.29c-0.12,0.33-0.46,0.44-0.79,0.48
                                    c-0.94,0.12-1.89,0.22-2.84,0.3C11.36,19.29,10.89,19.26,10.59,19.26z">
                                    </path>
                                </svg>

                                Filter Type
                            </div>

                            <svg x-show="!showDrop" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>

                            <svg x-show="showDrop" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 15l7-7 7 7"></path>
                            </svg>
                        </a>

                        <div x-show="showDrop" x-transition:enter="transition transform duration-300"
                            x-transition:enter-start="-translate-y-9 opacity-0"
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition transform duration-300"
                            x-transition:leave-start="translate-y-0 opacity-100"
                            x-transition:leave-end="-translate-y-9 opacity-0" style="display: none;">

                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(1)">
                                Polyurethane
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(2)">
                                Plastic Panel
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(3)">
                                Metal Cap
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(4)">
                                Plastic Cap
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(5)">
                                Eco Felt
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(6)">
                                Spin On
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(7)">
                                ECO type
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(8)">
                                Plastic Cap
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(11)">
                                4 liter
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(12)">
                                5 Liter
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(13)">
                                1 Liter
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(14)">
                                5 Liter
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(15)">
                                4 Liter
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectSubCats(16)">
                                1 Liter
                            </a>

                        </div>
                    </li>

                    <li x-data="{ showDrop: false }">
                        <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out flex justify-between cursor-pointer"
                            @click="showDrop=!showDrop">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" fill="currentColor"
                                    xml:space="preserve">
                                    <path
                                        d="M256,85.3c-94.1,0-170.7,76.6-170.7,170.7S161.9,426.7,256,426.7S426.7,350.1,426.7,256S350.1,85.3,256,85.3z M343.3,149.1
                                c1.9-2.1,4.6-3.4,7.5-3.5c2.5-0.3,5.7,0.9,7.8,2.9c22.1,20.9,37.2,47.6,43.5,77.1c1,4.7-1.3,9.5-5.5,11.7c-10.4,5.4-22.8,8-34.7,8
                                c-15.5,0-30.1-4.4-38.6-12.9C305,214.3,312.6,183.2,343.3,149.1z M168.7,364.6c-1.9,2.1-4.6,3.4-7.5,3.5c-0.1,0-0.3,0-0.4,0
                                c-2.7,0-5.4-1-7.3-2.9c-22.1-20.9-37.2-47.6-43.5-77.1c-1-4.7,1.3-9.5,5.5-11.7c24-12.4,58.3-10.1,73.4,4.9
                                C206.9,299.4,199.4,330.5,168.7,364.6z M188.9,232.4c-8.5,8.5-23.2,12.9-38.6,12.9c-11.9,0-24.3-2.6-34.7-8c-4.3-2.2-6.5-7-5.5-11.7
                                c6.3-29.5,21.3-56.2,43.5-77.1c2.1-2,5.1-3.2,7.8-2.9c2.9,0.1,5.6,1.4,7.5,3.5C199.4,183.2,207,214.3,188.9,232.4z M301.5,398.2
                                c-14.8,4.7-30.1,7.1-45.5,7.1s-30.7-2.4-45.5-7.1c-4.7-1.5-7.8-6-7.4-10.9c2.7-38.4,25.4-67.3,52.9-67.3s50.2,28.9,52.9,67.3
                                C309.2,392.2,306.1,396.7,301.5,398.2z M213.3,256c0-23.5,19.1-42.7,42.7-42.7s42.7,19.1,42.7,42.7s-19.1,42.7-42.7,42.7
                                S213.3,279.5,213.3,256z M308.9,125.5c-2.7,38.4-25.4,67.3-52.9,67.3s-50.2-28.9-52.9-67.3c-0.3-4.9,2.7-9.4,7.4-10.9
                                c29.5-9.4,61.4-9.4,91,0C306.2,116.1,309.2,120.6,308.9,125.5z M402,286.4c-6.3,29.5-21.3,56.2-43.5,77.1c-2,1.9-4.6,2.9-7.3,2.9
                                c-0.1,0-0.3,0-0.4,0c-2.9-0.1-5.6-1.4-7.5-3.5c-30.7-34.1-38.3-65.2-20.2-83.3c15-15,49.3-17.3,73.4-4.9
                                C400.8,276.9,403,281.7,402,286.4z">
                                    </path>
                                    <path
                                        d="M256,0C114.8,0,0,114.8,0,256s114.8,256,256,256s256-114.8,256-256S397.2,0,256,0z M256,448c-105.9,0-192-86.1-192-192
                                S150.1,64,256,64s192,86.1,192,192S361.9,448,256,448z">
                                    </path>
                                </svg>
                                Car Brand
                            </div>

                            <svg x-show="!showDrop" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>

                            <svg x-show="showDrop" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 15l7-7 7 7"></path>
                            </svg>
                        </a>

                        <div x-show="showDrop" x-transition:enter="transition transform duration-300"
                            x-transition:enter-start="-translate-y-9 opacity-0"
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition transform duration-300"
                            x-transition:leave-start="translate-y-0 opacity-100"
                            x-transition:leave-end="-translate-y-9 opacity-0" style="display: none;">

                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(36)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161629png"
                                        class="w-6 h-6" alt="">
                                    Audi
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(38)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_BMW.png"
                                        class="w-6 h-6" alt="">
                                    BMW
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(42)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-01272023121526png"
                                        class="w-6 h-6" alt="">
                                    Castrol
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(8)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161453png"
                                        class="w-6 h-6" alt="">
                                    Citroen
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(24)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161542png"
                                        class="w-6 h-6" alt="">
                                    Fiat
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(50)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Ford-01282023131117png"
                                        class="w-6 h-6" alt="">
                                    Ford
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(44)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-01272023152858png"
                                        class="w-6 h-6" alt="">
                                    Fuchs
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(41)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Honda-09122022161926png"
                                        class="w-6 h-6" alt="">
                                    Honda
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(29)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09132022160853png"
                                        class="w-6 h-6" alt="">
                                    Land Rover
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(10)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161504png"
                                        class="w-6 h-6" alt="">
                                    Lexus
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(49)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Mercedes-Benz-01282023131049png"
                                        class="w-6 h-6" alt="">
                                    Mercedes-Benz
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(37)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161643png"
                                        class="w-6 h-6" alt="">
                                    Mitsubishi
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(47)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Mobil-01272023130755png"
                                        class="w-6 h-6" alt="">
                                    Mobil
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(45)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Motul-01272023121754png"
                                        class="w-6 h-6" alt="">
                                    Motul
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(32)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Nissan.png"
                                        class="w-6 h-6" alt="">
                                    Nissan
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(43)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-01272023121546png"
                                        class="w-6 h-6" alt="">
                                    Petronas
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(39)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09132022155707png"
                                        class="w-6 h-6" alt="">
                                    Peugeot
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(48)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Shell-01272023130814png"
                                        class="w-6 h-6" alt="">
                                    Shell
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(21)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09132022155158png"
                                        class="w-6 h-6" alt="">
                                    Toyota
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(46)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_VALVOLINE-01272023130730png"
                                        class="w-6 h-6" alt="">
                                    Valvoline
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(6)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161441png"
                                        class="w-6 h-6" alt="">
                                    Vauxhall
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(33)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_Vaushall.png"
                                        class="w-6 h-6" alt="">
                                    Vauxhall
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(40)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161718png"
                                        class="w-6 h-6" alt="">
                                    Volkswagen
                                </div>
                            </a>
                            <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out pl-12 cursor-pointer"
                                wire:click="selectCar(12)">
                                <div class="flex items-center justify-start gap-5">
                                    <img src="https://bogramotors.co.uk/storage/uploads/logos/logo_-09122022161514png"
                                        class="w-6 h-6" alt="">
                                    Volvo
                                </div>
                            </a>


                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div> --}}

</div>
