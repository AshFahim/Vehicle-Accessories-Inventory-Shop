@extends('layouts.main')

@section('main-section')
    <br>
    <br><br>
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div class="flex justify-between items-center space-x-4">
            <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Order
                # {{ $orders->id }} ({{ $orders->status }})
            </h1>
            <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">{{ $orders->created_at }}</p>
            <a href="{{ route('admin-dashboard') }}"
                class="hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 p-5 w-96 bg-gray-800 text-base text-center font-medium leading-4 text-white rounded-lg">Admin
                Dashboard</a>
        </div>
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                <div
                    class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                    <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Orderd
                        Items</p>
                    @php $total_order_price = 0; @endphp
                    @foreach ($orders->toArray()['order_details'] as $order)
                        <div
                            class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                            <div class="pb-4 md:pb-8 w-full md:w-40">
                                <img class="w-full hidden md:block"
                                    src="https://www.shutterstock.com/image-vector/demo-cursor-icon-presentation-billboard-600w-318562925.jpg"
                                    alt="dress" />

                            </div>
                            <div
                                class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                                <div class="w-full flex flex-col justify-start items-start space-y-8">
                                    <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800">
                                        {{ $productDetails[$order['bmuk_no']]['collection'] }}-{{ $productDetails[$order['bmuk_no']]['filter_type'] }}
                                    </h3>
                                </div>
                                <div class="flex justify-between space-x-8 items-start w-full">
                                    <p class="text-base dark:text-white xl:text-lg leading-6">
                                        ${{ $productDetails[$order['bmuk_no']]['price'] }}</p>
                                    <p class="text-base dark:text-white xl:text-lg leading-6 text-gray-800">
                                        {{ $order['quantity'] }}</p>
                                    <p class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800">
                                        ${{ $productDetails[$order['bmuk_no']]['price'] * $order['quantity'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @php
                            $total_order_price += $productDetails[$order['bmuk_no']]['price'] * $order['quantity'];
                        @endphp
                    @endforeach
                </div>
                <div
                    class="flex justify-center flex-col md:flex-row items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                    <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3>
                        <div
                            class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                            <div class="flex justify-between w-full">
                                <p class="text-base dark:text-white leading-4 text-gray-800">Subtotal</p>
                                <p class="text-base dark:text-gray-300 leading-4 text-gray-600">${{ $total_order_price }}
                                </p>
                            </div>
                            {{--                             <div class="flex justify-between items-center w-full">
                                <p class="text-base dark:text-white leading-4 text-gray-800">Discount <span
                                        class="bg-gray-200 p-1 text-xs font-medium dark:bg-white dark:text-gray-800 leading-3 text-gray-800">STUDENT</span>
                                </p>
                                <p class="text-base dark:text-gray-300 leading-4 text-gray-600">-$28.00 (50%)</p>
                            </div> --}}
                            <div class="flex justify-between items-center w-full">
                                <p class="text-base dark:text-white leading-4 text-gray-800">Shipping</p>
                                <p class="text-base dark:text-gray-300 leading-4 text-gray-600">$10.00</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                            <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">
                                ${{ $total_order_price + 10 }}</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Shipping</h3>
                        <div class="flex justify-between items-start w-full">
                            <div class="flex justify-center items-center space-x-4">
                                <div class="w-8 h-8">
                                    <img class="w-full h-full" alt="logo" src="https://i.ibb.co/L8KSdNQ/image-3.png" />
                                </div>
                                <div class="flex flex-col justify-start items-center">
                                    <p class="text-lg leading-6 dark:text-white font-semibold text-gray-800">
                                        {{ $orders->shipping_method }} ({{ $orders->payment_method }})<br /><span
                                            class="font-normal">Delivery with 24
                                            Hours</span></p>
                                </div>
                            </div>

                        </div>
                        <div class="w-full flex justify-center items-center">
                            <button
                                class="hover:bg-black dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white">View
                                Carrier Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <x-customer-details-card :data="[
                'name' => $customerName,
                'pastOrderCount' => null,
                'email' => $customerEmail,
                'shippingAddress' => $orders->shipping_address,
                'billingAddress' => $orders->billing_address,
            ]" />
        </div>
    </div>
@endsection
