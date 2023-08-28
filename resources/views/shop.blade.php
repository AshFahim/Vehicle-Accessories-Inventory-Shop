@extends('layouts.main')
@section('main-section')
    @php
        $selectedFilter = isset($selectedFilter) ? $selectedFilter : ['collection' => 'all', 'filter_type' => 'all', 'brand' => 'all', 'model' => 'all', 'specification' => 'all'];
        $filterData = ['filterProductVars' => $filterProductVars, 'selectedFilter' => $selectedFilter];
    @endphp
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0">
        <div class="container pt-20">
            <p class="my-6 text-4xl font-bold text-center text-red-700">Browse All Products</p>
            <hr>
            <x-filter-product :data="$filterData" />
            @if (isset($isFiltered) && !$isFiltered)
                <x-search-sort-product :sortMode="$sortMode" />
            @else
                <div class="sdf pt-8"></div>
            @endif
            <div class="col-span-3">
                <div class="grid md:grid-cols-5 grid-cols-2 gap-6">
                    @foreach ($products as $product)
                        <x-product-grid :data="$product" />
                    @endforeach
                </div>
            </div>
            @if (isset($isSearch) && $isSearch)
                <div class="clearSearch">
                    <a href="{{ route('shop') }}"
                        class="text-white absolute mt-8 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Clear
                        Search</a>
                </div>
            @endif
            <div class="pagination mr-8 mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
