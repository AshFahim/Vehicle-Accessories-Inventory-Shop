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
                        <div class="Stars !mx-0" style="--rating: 4;"></div>
                    </div>
                    <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div>
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

                <div class="mt-4">
                    <h3 class="text-sm text-gray-800 uppercase mb-1">Quantity</h3>
                    <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                        <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                        <div class="h-8 w-8 text-base flex items-center justify-center">1</div>
                        <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                    </div>
                </div>

                <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                    <a href="#"
                        class="bg-primary border border-primary bg-red-600 text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-black transition">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 p-2 transition-all duration-300 ease-in-out rounded-full" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg> Add to cart
                    </a>
                    <a href="#"
                        class="border border-gray-300 text-red-600 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-black transition">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.22303 0.665992C7.32551 0.419604 7.67454 0.419604 7.77702 0.665992L9.41343 4.60039C9.45663 4.70426 9.55432 4.77523 9.66645 4.78422L13.914 5.12475C14.18 5.14607 14.2878 5.47802 14.0852 5.65162L10.849 8.42374C10.7636 8.49692 10.7263 8.61176 10.7524 8.72118L11.7411 12.866C11.803 13.1256 11.5206 13.3308 11.2929 13.1917L7.6564 10.9705C7.5604 10.9119 7.43965 10.9119 7.34365 10.9705L3.70718 13.1917C3.47945 13.3308 3.19708 13.1256 3.25899 12.866L4.24769 8.72118C4.2738 8.61176 4.23648 8.49692 4.15105 8.42374L0.914889 5.65162C0.712228 5.47802 0.820086 5.14607 1.08608 5.12475L5.3336 4.78422C5.44573 4.77523 5.54342 4.70426 5.58662 4.60039L7.22303 0.665992Z"
                                fill="currentColor" />
                        </svg> Favorite
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
        <!-- ./description -->
    </div>
@endsection
