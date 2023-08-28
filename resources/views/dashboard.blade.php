@extends('layouts.main')

@section('main-section')
    < <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div class="flex justify-start item-start space-y-2 flex-col">
            <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800"></h1>
            <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600"></p>
        </div>
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                <div
                    class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                    <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800"></p>

                    <div class="bg-gray-100 w-full">
                        <div class="container mx-auto p-6">
                            <h1 class="text-3xl font-bold mb-4">Customer Dashboard</h1>
                            <x-customer-at-a-glance :totalOrderCost="$totalOrderCost" :orderCount="$orderCount" :cart="$orderCount"
                                :wishlist="$orderCount" />
                            <div class="bg-white rounded-lg p-4 shadow">
                                <h2 class="text-lg font-semibold mb-2">Last 5 Orders</h2>
                                <table class="w-full text-left">
                                    <thead>
                                        <tr class="border-b">
                                            <th class="py-2">Order Date</th>
                                            <th>Order Status</th>
                                            <th>Total Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @php
                                                $dateTime = new DateTime($order['created_at']);
                                            @endphp
                                            <tr class="border-b">
                                                <td class="py-2">{{ $dateTime->format('F j, Y \a\t g:i A') }}</td>
                                                <td>{{ $order['status'] }}</td>
                                                <td>{{ $order_costs[$order['id']] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('orders') }}"
                        class="hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 p-5 w-full bg-gray-800 text-base text-center font-medium leading-4 text-white rounded-lg">Show
                        All Orders</a>


                </div>
                <div
                    class="flex justify-center md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                    <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Coupons Codes</h3>
                        <div
                            class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                            <div class="flex justify-between w-full">
                                <p class="text-base dark:text-white leading-4 text-gray-800">Student</p>
                                <p class="text-base dark:text-gray-300 leading-4 text-gray-600">5%</p>
                            </div>
                            <div class="flex justify-between items-center w-full">
                                <p class="text-base dark:text-white leading-4 text-gray-800">1yearUser</p>
                                <p class="text-base dark:text-gray-300 leading-4 text-gray-600">$8.00</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <x-customer-details-card :data="[
                'name' => Auth()->user()->name,
                'pastOrderCount' => $orderCount,
                'email' => Auth()->user()->email,
                'shippingAddress' => Auth()->user()->shipping_address,
                'billingAddress' => Auth()->user()->billing_address,
            ]" />
        </div>
        </div>
    @endsection
