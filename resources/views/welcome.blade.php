@extends('layouts.main')

@section('main-section')
    <x-home-banner />
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="container pt-20">
            <x-find-product :data="$findProductVars" />
            <p class="my-6 text-4xl font-bold text-center text-red-700">Featured Products</p>
            <hr>
            <x-product-grid-slider :data="$featureds" />
            <p class="my-6 text-4xl font-bold text-center text-red-700">Best Seller</p>
            <hr>
            <x-product-grid-slider :data="$bestSellers" />
            <p class="my-6 text-4xl font-bold text-center text-red-700">New Arrivals</p>
            <hr>
            <x-product-grid-slider :data="$newArrivals" />
            <p class="my-6 text-4xl font-bold text-center text-red-700">Previously Visited</p>
            <hr>
            <x-product-grid-slider :data="$prevVisits" />
        </div>
    </div>
@endsection
