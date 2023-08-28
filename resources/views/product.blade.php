@extends('layouts.main')

@section('main-section')
    <div class="product-container container mr-auto ml-auto pr-4 pl-4 pt-20">
        <!-- product-detail -->
        <div class="container grid grid-cols-2 gap-6">
            <div>
                <img src="{{ $productDetails['image'] }}" alt="product" class="w-full">
            </div>

            <div>
                <h2 class="text-3xl font-medium uppercase mb-2">
                    {{ $productDetails['collection'] . '-' . $productDetails['filter_type'] }}</h2>
                <div class="flex items-center mb-4">
                    <div class="product-rating">
                        <div class="Stars !mx-0" style="--rating: {{ collect($productDetails['reviews'])->avg('rating') }};">
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">({{ count($productDetails['reviews']) }})</div>
                </div>
                <div class="space-y-2">
                    <p class="text-gray-800 font-semibold space-x-2">
                        <span>Availability: </span>
                        <span class="text-green-600">In Stock</span>
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">Brand: </span>
                        <span class="text-gray-600">{{ $productDetails['car_brand'] }}</span>
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">Model: </span>
                        <span class="text-gray-600">{{ $productDetails['model'] }}</span>
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">Collection: </span>
                        <span class="text-gray-600">{{ $productDetails['collection'] }}</span>
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">Filter Type: </span>
                        <span class="text-gray-600">{{ $productDetails['filter_type'] }}</span>
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">SKU: </span>
                        <span class="text-gray-600">{{ $productDetails['bmuk_no'] }}</span>
                    </p>
                </div>
                <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                    <p class="text-xl text-black font-semibold">${{ $productDetails['price'] }}</p>
                </div>

                <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                    <a href="{{ route('cart.add') }}?bmukNo={{ $productDetails['bmuk_no'] }}"
                        class="bg-primary border border-primary bg-red-600 text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-black transition">
                        <i class="fa-solid fa-cart-shopping fa-xl"></i> Add to cart
                    </a>
                    <a href="{{ route('wishlist.switch') }}?bmukNo={{ $productDetails['bmuk_no'] }}"
                        class="border border-gray-300 text-red-600 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-black transition">
                        <i class="fa-solid fa-star fa-xl"></i> Favorite
                    </a>
                </div>

                <div class="flex gap-3 mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a class="text-gray-500 transition-all duration-150 ease-in-out hover:text-blue-600">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 transition-all duration-150 ease-in-out hover:text-blue-600">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 transition-all duration-150 ease-in-out hover:text-blue-600">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5"
                                    ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 transition-all duration-150 ease-in-out hover:text-blue-600">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <!-- ./product-detail -->

        <!-- description -->
        <div class="container pb-16">
            <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
            <div class="w-3/5 pt-6">
                <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                    <p>Part identification</p>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Oem_part</th>
                        <th class="py-2 px-4 border border-gray-300 ">{{ $productDetails['oem_id'] }}</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Euro_part</th>
                        <th class="py-2 px-4 border border-gray-300 ">{{ $productDetails['euro_id'] }}</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">BMUk_part</th>
                        <th class="py-2 px-4 border border-gray-300 ">{{ $productDetails['bmuk_no'] }}</th>
                    </tr>
                </table>
            </div>
            <div class="w-3/5 pt-6">
                <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                    <p>Specifications</p>
                    @php
                        $productSpecifications = json_decode($productDetails['specification'], true);
                    @endphp
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium"></th>
                        <th class="py-2 px-4 border border-gray-300 ">Engine</th>
                        <th class="py-2 px-4 border border-gray-300 ">Fuel Type</th>
                        <th class="py-2 px-4 border border-gray-300 ">Year</th>
                    </tr>
                    @foreach ($productSpecifications as $productSpecification)
                        <tr>
                            <td class="py-2 px-4 border border-gray-300 w-40 font-medium">{{ $loop->index + 1 }}</th>
                            <td class="py-2 px-4 border border-gray-300 ">{{ $productSpecification['engine'] }}</th>
                            <td class="py-2 px-4 border border-gray-300 ">{{ $productSpecification['fuelType'] }}</th>
                            <td class="py-2 px-4 border border-gray-300 ">{{ $productSpecification['year'] }}</th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <section class="bg-gray-100 py-16">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-8">Customer Reviews</h2>
                <div class="space-y-8">
                    @foreach ($productDetails['reviews'] as $review)
                        <!-- Review 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="flex items-start mb-4 gap-4">
                                <div
                                    class="flex mr-3 text-sm bg-slate-400 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300">
                                    <div class="text-l w-10 h-10 p-2">
                                        <i class="fa-regular fa-user fa-xl"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">{{ $userNames[$review['user_id']] }}
                                    </h3>

                                    <div class="Stars !mx-0"
                                        style="--rating: {{ collect($productDetails['reviews'])->avg('rating') }};"></div>
                                </div>
                            </div>
                            <p class="text-gray-700">{{ $review['comment'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ./description -->
    </div>
@endsection
