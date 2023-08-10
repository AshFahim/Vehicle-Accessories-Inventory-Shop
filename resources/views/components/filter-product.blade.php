<div id="filter-product">
    <div class="flex items-center justify-between ">
        <h1 class="text-2xl font-bold text-blue-600 dark:text-lightblue">Filter</h1>
    </div>
    <div
        class="{{-- hidden --}}divide-x divide-gray-300 md:grid-cols-3 lg:grid-cols-5 md:grid dark:divide-gray-700">
        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <i class="fa-solid fa-bars"></i>
                Collection
            </div>
            <form>
                <div
                    class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                    <a class="@if ($selectedFilter['collection'] == 'all') selected-label @endif flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                        href="{{ url('/shop/filtered?collection=' . 'all' . '&filter_type=' . $selectedFilter['filter_type'] . '&brand=' . $selectedFilter['brand'] . '&model=' . $selectedFilter['model'] . '&specification=' . $selectedFilter['specification']) }}">
                        All
                    </a>
                    @foreach ($collections as $collection)
                        <a class="@if ($selectedFilter['collection'] == $collection) selected-label @endif flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                            href="{{ url('/shop/filtered?collection=' . $collection . '&filter_type=' . $selectedFilter['filter_type'] . '&brand=' . $selectedFilter['brand'] . '&model=' . $selectedFilter['model'] . '&specification=' . $selectedFilter['specification']) }}">
                            {{ $collection }}
                        </a>
                    @endforeach
                </div>
            </form>
        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <i class="fa-solid fa-wrench"></i>
                Filter Type
            </div>
            <div
                class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                @foreach ($filterTypes as $filterType)
                    <a class="@if ($selectedFilter['filter_type'] == $filterType) selected-label @endif flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                        href="{{ url('/shop/filtered?collection=' . $selectedFilter['collection'] . '&filter_type=' . $filterType . '&brand=' . $selectedFilter['brand'] . '&model=' . $selectedFilter['model'] . '&specification=' . $selectedFilter['specification']) }}">
                        {{ $filterType }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <i class="fa-solid fa-copyright"></i>
                Car Brand
            </div>
            <div
                class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                @foreach ($brands as $brand)
                    <a class="@if ($selectedFilter['brand'] == $brand) selected-label @endif flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                        href="{{ url('/shop/filtered?collection=' . $selectedFilter['collection'] . '&filter_type=' . $selectedFilter['filter_type'] . '&brand=' . $brand . '&model=' . $selectedFilter['model'] . '&specification=' . $selectedFilter['specification']) }}">
                        {{ $brand }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <i class="fa-solid fa-car"></i>
                Model
            </div>
            <div
                class="overflow-x-auto max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">
                @if (!isset($models))
                    <p class="p-2 text-sm font-semibold text-center text-gray-400 dark:text-gray-700">please select a
                        car brand</p>
                @else
                    @foreach ($models as $model)
                        <a class="@if ($selectedFilter['model'] == $model) selected-label @endif flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                            href="{{ url('/shop/filtered?collection=' . $selectedFilter['collection'] . '&filter_type=' . $selectedFilter['filter_type'] . '&brand=' . $selectedFilter['brand'] . '&model=' . $model . '&specification=' . $selectedFilter['specification']) }}">
                            {{ $model }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="p-1">
            <div class="flex items-center gap-2 mb-1 text-gray-600 dark:text-gray-400">
                <i class="fa-solid fa-gear"></i>
                Specification
            </div>
            <div
                class="overflow-x-auto overflow-y-none max-h-40 scrollbar scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-gray-600 hover:scrollbar-thumb-gray-500 dark:hover:scrollbar-thumb-gray-500 dark:scrollbar-track-gray-700 scrollbar-track-gray-200">

                @if (!isset($specifications))
                    <p class="p-2 text-sm font-semibold text-center text-gray-400 dark:text-gray-700">please select a
                        Model
                    </p>
                @else
                    @foreach ($specifications as $specification)
                        <a class="flex justify-start items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:bg-gray-700 hover:bg-gray-100 hover:border-blue-800 dark:hover:border-gray-500 focus:outline-none focus:text-gray-800 focus:border-blue-800 transition duration-150 ease-in-out cursor-pointer"
                            href="#">
                            {{ $specification }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    @if (
        !(
            $selectedFilter['collection'] == 'all' &&
            $selectedFilter['filter_type'] == 'all' &&
            $selectedFilter['brand'] == 'all' &&
            $selectedFilter['model'] == 'all' &&
            $selectedFilter['specification'] == 'all'
        ))
        <div><a href="{{ url('/shop') }}"
                class="block w-full py-1 text-center text-white bg-blue-600 border rounded-b hover:bg-transparent hover:text-rose-500 transition">Clear</a>
        </div>
    @endif
</div>
