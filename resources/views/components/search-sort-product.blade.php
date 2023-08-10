<div id="search-sort-product" class="flex flex-wrap items-center justify-end gap-2 my-2 space-y-2 md:space-y-0">
    <form class="w-96 h-14" action="{{ url('/shop') }}"" method="get">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="searchQuery"
                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search bmUk part #" required>
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
    <form class="w-40 h-14" action="{{ url('/shop') }}" method="get">
        <select id="sortMode" name="sortMode" required="" onchange="this.form.submit()"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 h-14 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="0" disabled="">Sort by</option>
            <option @if (isset($sortMode) && $sortMode == 2) selected @endif value="1">Default</option>
            <option @if (isset($sortMode) && $sortMode == 2) selected @endif value="2">Car Brand (A-Z)</option>
            <option @if (isset($sortMode) && $sortMode == 3) selected @endif value="3">Car Brand (Z-A)</option>
            <option @if (isset($sortMode) && $sortMode == 4) selected @endif value="4">Car Model (A-Z)</option>
            <option @if (isset($sortMode) && $sortMode == 5) selected @endif value="5">Car Model (Z-A)</option>
            <option @if (isset($sortMode) && $sortMode == 6) selected @endif value="6">Price (High-low)</option>
            <option @if (isset($sortMode) && $sortMode == 7) selected @endif value="7">Price (low-high)</option>
        </select>
    </form>
</div>
