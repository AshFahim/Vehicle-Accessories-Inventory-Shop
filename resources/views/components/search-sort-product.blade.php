<div id="search-sort-product" class="flex flex-wrap items-center justify-end gap-2 my-2 space-y-2 md:space-y-0">

    <input
        class="disabled:opacity-50 shadow-sm bg-gray-100 border-transparent focus:border-red-500 focus:outline-none focus:ring-transparent transition ease-in-out duration-300 w-full md:w-96"
        type="text" placeholder="search bmUk part #" name="search" wire:model.debounce.150ms="search">
    <select wire:model="sort" required=""
        class="block w-full transition duration-300 ease-in-out bg-gray-100 border-transparent md:w-60 focus:border-red-500 focus:outline-none focus:ring-transparent">
        <option value="0" disabled="">Sort by</option>
        <option value="1">Default</option>
        <option value="2">Car Name (A-Z)</option>
        <option value="3">Car Name (Z-A)</option>
        <option value="4">Price (High-low)</option>
        <option value="5">Price (low-high)</option>
        <option value="6">Stock (high-low)</option>
        <option value="7">Stock (low-high)</option>
        <option value="8">Rating (high-low)</option>
        <option value="9">Rating (low-high)</option>

    </select>
</div>
