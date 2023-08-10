@extends('layouts.main')

@section('main-section')
    <br>
    <br><br>
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <!-- component -->
            <div class="bg-white p-8 rounded-md w-full">
                <div class=" flex items-center justify-between pb-6">
                    <div>
                        <h2 class="text-gray-600 font-semibold">Wishlist</h2>
                        <span class="text-xs">All products item</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="lg:ml-40 ml-10 space-x-8">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Serial No.
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Product Name
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Price
                                        </th>
                                        {{--                                         <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Total Price
                                        </th> --}}
                                        {{-- <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Status
                                        </th> --}}
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Order
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">{"1"}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://www.shutterstock.com/image-vector/demo-cursor-icon-presentation-billboard-600w-318562925.jpg"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $order->created_at }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    @php
                                                        $totalProducts = 0;
                                                        foreach ($order->orderDetails as $orderDetail) {
                                                            $totalProducts += $orderDetail->quantity;
                                                        }
                                                        echo $totalProducts;
                                                    @endphp</p>
                                            </td>
                                            {{--                                             <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    @php
                                                        $totalPrice = 0;
                                                        foreach ($order->orderDetails as $orderDetail) {
                                                            $totalPrice += $orderDetail->quantity * $orderDetail->price;
                                                        }
                                                        echo $order->orderDetails;
                                                    @endphp
                                                </p>
                                            </td> --}}
                                            {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 @if ($order->status == 'Completed') bg-green-400 @elseif ($order->status == 'Processing') bg-green-200 @elseif ($order->status == 'Waiting for Payment') bg-blue-400 @elseif ($order->status == 'Suspended' or $order->status == 'Cancelled') bg-red-600 @endif opacity-50 rounded-full"></span>
                                                    <span class="relative">{{ $order->status }}</span>
                                                </span>
                                            </td> --}}
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="/orderdetails/{{ $order->id }}"
                                                    class="hover:bg-black dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 p-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white rounded-lg">Order</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($orders->hasPages())
                                <div class="px-5 py-5 bg-white border-t flex flex-col">
                                    {{ $orders->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <x-customer-details-card :data="[
                'name' => Auth()->user()->name,
                'pastOrderCount' => $orders->total(),
                'email' => Auth()->user()->email,
                'shippingAddress' => Auth()->user()->shipping_address,
                'billingAddress' => Auth()->user()->billing_address,
            ]" />
        </div>
    </div>
@endsection
