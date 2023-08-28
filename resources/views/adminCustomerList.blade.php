@extends('layouts.main') @section('main-section')
    <br>
    <br>
    <br>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-gray-800">All Customer List</h1>
        <div class="flex flex-wrap justify-around mt-4">
            <div class="bg-blue-200 rounded-lg p-4 w-40 text-center">
                <p class="text-xl font-semibold text-gray-800">Total customer</p>
                <p class="text-2xl font-bold text-gray-900">{{ $totalCustomers }}</p>
            </div>
            <div class="bg-green-200 rounded-lg p-4 w-40 text-center">
                <p class="text-xl font-semibold text-gray-800">Total Verified</p>
                <p class="text-2xl font-bold text-gray-900">{{ $totalVerifiedCustomers }}</p>
            </div>
            <div class="bg-yellow-200 rounded-lg p-4 w-40 text-center">
                <p class="text-xl font-semibold text-gray-800">New Customer (30 Days)</p>
                <p class="text-2xl font-bold text-gray-900">{{ $last30daysCustomers }}</p>
            </div>
        </div>
        <br>
        <table class="table-auto border-collapse border border-gray-300 mt-8 w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">E-mail</th>
                    <th class="border border-gray-300 px-4 py-2">Shipping Address</th>
                    <th class="border border-gray-300 px-4 py-2">Billing address</th>
                    <th class="border border-gray-300 px-4 py-2">Verification Status</th>
                    <th class="border border-gray-300 px-4 py-2">Option</th>
                    <th class="border border-gray-300 px-4 py-2">Show Orders</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $customer->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $customer->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $customer->shipping_address }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $customer->billing_address }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            @if ($customer->email_verified_at == null)
                                <span style="color:red">Not verified</span>
                            @else
                                <span style="color:green">Verified</span>
                            @endif
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            @if ($customer->email_verified_at == null)
                                <button
                                    onclick="window.location.href='{{ route('verifycustomer') }}?userid={{ $customer->id }}'"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Verify
                                    User</button>
                            @else
                                \^o^/
                            @endif
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button
                                onclick="window.location.href='{{ route('customerpastorders', ['user_id' => $customer->id]) }}'"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show
                                orders</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $customers->links() }}
        <div class="flex flex-wrap justify-around mt-8">
            <a href="{{ route('addProduct') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">Add new
                product</a>
            <a href="{{ route('adminProductList') }}"
                class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">View all
                product list</a>
            <a href="{{ route('admin-dashboard') }}"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg">Admin Panel</a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    @endsection
