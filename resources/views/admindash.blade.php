@extends('layouts.main')

@section('main-section')
    <br>
    <br>
    <br>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-gray-800">Admin Panel</h1>
        <div class="flex flex-wrap justify-around mt-4">
            <div class="bg-blue-200 rounded-lg p-4 w-40 text-center">
                <p class="text-xl font-semibold text-gray-800">Total customer</p>
                <p class="text-2xl font-bold text-gray-900">{{ $toalCustomers }}</p>
            </div>
            <div class="bg-green-200 rounded-lg p-4 w-40 text-center">
                <p class="text-xl font-semibold text-gray-800">Total order</p>
                <p class="text-2xl font-bold text-gray-900">{{ $toalOrders }}</p>
            </div>
            <div class="bg-yellow-200 rounded-lg p-4 w-40 text-center">
                <p class="text-xl font-semibold text-gray-800">Total products</p>
                <p class="text-2xl font-bold text-gray-900">{{ $totalProducts }}</p>
            </div>
            <div class="bg-red-200 rounded-lg p-4 w-40 text-center">
                <p class="text-xl font-semibold text-gray-800">Total order to deliver</p>
                <p class="text-2xl font-bold text-gray-900">{{ $totalOrderProcessing }}</p>
            </div>
        </div>
        <table class="table-auto border-collapse border border-gray-300 mt-8 w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">Who ordered</th>
                    <th class="border border-gray-300 px-4 py-2">Order number</th>
                    <th class="border border-gray-300 px-4 py-2">Total price</th>
                    <th class="border border-gray-300 px-4 py-2">Order status</th>
                    <th class="border border-gray-300 px-4 py-2">Button 1</th>
                    <th class="border border-gray-300 px-4 py-2">Button 2</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($ordersActive as $order)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $userNames[$order->id] }}</td>
                        <td class="border border-gray-300 px-4 py-2">#{{ $order->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">${{ $order->total_cost }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $order->status }}</td>
                        <td class="border border-gray-300 px-4 py-2"><a
                                href="{{ route('adminOrderdetails', ['orderNo' => $order->id]) }}"
                                class="bg-blue-500 hover:bg-blue- 700 text-white font-bold py-2 px-4 rounded">View
                                order</a></td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="max-w-md mx-auto p-8 bg-white shadow-lg rounded-lg">
                                <form id="dropdown-form" action="{{ route('updateOrderStatus') }}" method="get">
                                    <input type="hidden" name="orderid" value="{{ $order->id }}">
                                    <label class="block font-semibold mb-2">Select an option:</label>
                                    <select id="dropdown" name="setStatus" class="border rounded p-2 w-full"
                                        onchange="this.form.submit();">
                                        @foreach (['Waiting for Payment', 'Processing', 'Suspended', 'Cancelled', 'Completed'] as $availableAction)
                                            <option {{ $availableAction == $order->status ? 'selected' : '' }}
                                                value="{{ $availableAction }}">{{ $availableAction }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>


        </table>


        <div class="flex flex-wrap justify-around mt-8">
            <a href="{{ route('addProduct') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">Add new
                product</a>
            <a href="{{ route('adminProductList') }}"
                class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">View all
                product list</a>
            <a href="{{ route('adminCustomerList') }}"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg">View all
                customer list</a>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection
