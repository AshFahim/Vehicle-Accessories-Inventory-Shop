@extends('layouts.main')

@section('main-section')
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div class="flex justify-start item-start space-y-2 flex-col">
            <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800"></h1>
            <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600"></p>
        </div>
        <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800"></p>

        <div class="bg-gray-100 w-full">
            <div class="container mx-auto p-6">
                <h1 class="text-3xl font-bold mb-4">Customer Dashboard</h1>
                <div class="flex space-x-4 mb-4">
                    <div class="flex-1 bg-white rounded-lg p-4 shadow">
                        <h2 class="text-lg font-semibold mb-2">Total Spending</h2>
                        <p class="text-gray-600">${{ $totalOrderCost }}</p>
                    </div>
                    <div class="flex-1 bg-white rounded-lg p-4 shadow">
                        <h2 class="text-lg font-semibold mb-2">Total Orders</h2>
                        <p class="text-gray-600">{{ $orderCount }}</p>
                    </div>
                </div>

                <div class="bg-gray-100">
                    <div class="container mx-auto p-8">
                        <h1 class="text-2xl font-bold mb-4">User Information</h1>

                        <div class="bg-white rounded-lg p-6 shadow-md">
                            <div class="mb-4">
                                <h2 class="text-lg font-semibold">User Information</h2>
                                <p class="mt-2"><strong>Name:</strong> {{ Auth()->user()->name }}</p>
                                <p><strong>Email:</strong> {{ Auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto p-8">
                        <h1 class="text-2xl font-bold mb-4">Shipping Address</h1>

                        <div class="bg-white rounded-lg p-6 shadow-md">
                            <div class="mb-4">
                                <h2 class="text-lg font-semibold">Saved Shipping Address</h2>
                                <p><strong>Shipping Address:</strong> {{ Auth()->user()->shipping_address }}</p>
                                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
                                    id="editButton1">Edit Information</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto p-8">
                        <h1 class="text-2xl font-bold mb-4">Billing Address</h1>

                        <div class="bg-white rounded-lg p-6 shadow-md">
                            <div class="mb-4">
                                <h2 class="text-lg font-semibold">Saved Billing Address</h2>
                                <p><strong>Billing Address</strong> {{ Auth()->user()->billing_address }}</p>
                                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
                                    id="editButton2">Edit Information</button>
                            </div>
                        </div>
                    </div>

                    <!-- Pop-up for editing information -->
                    <div class="popup pb-32" id="popup1">
                        <div class="popup-content">
                            <h2 class="text-lg font-semibold mb-4">Edit Shipping Address</h2>
                            <form class="space-y-4" action="/updateShippingAddress" method="GET">
                                <div>
                                    <label class="block font-semibold" for="newAddress">New Address</label>
                                    <textarea class="w-full border rounded px-3 py-2" id="newAddress" name="newAddress" rows="4" cols="50"
                                        required>{{ Auth()->user()->shipping_address }}</textarea>
                                </div>
                                <div class="container flex justify-between items-center">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
                                        type="submit">
                                        Save Changes
                                    </button>
                                    <button id="cancel1" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded"
                                        type="button">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="popup pb-32" id="popup2">
                        <div class="popup-content">
                            <h2 class="text-lg font-semibold mb-4">Edit Billing Address</h2>
                            <form class="space-y-4" action="/updateBillingAddress" method="GET">
                                <div>
                                    <label class="block font-semibold" for="newAddress">New Address</label>
                                    <textarea class="w-full border rounded px-3 py-2" id="newAddress" name="newAddress" rows="4" cols="50"
                                        required>{{ Auth()->user()->billing_address }}</textarea>
                                </div>
                                <div class="container flex justify-between items-center">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
                                        type="submit">
                                        Save Changes
                                    </button>
                                    <button id="cancel2" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded"
                                        type="button">
                                        Cancel
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <script>
                        const editButton1 = document.getElementById('editButton1');
                        const popup1 = document.getElementById('popup1');
                        const cancelButton1 = document.getElementById('cancel1');

                        cancelButton1.addEventListener('click', () => {
                            popup1.classList.remove('active');
                        });

                        editButton1.addEventListener('click', () => {
                            popup1.classList.add('active');
                        });

                        const editButton2 = document.getElementById('editButton2');
                        const popup2 = document.getElementById('popup2');
                        const cancelButton2 = document.getElementById('cancel2');

                        cancelButton2.addEventListener('click', () => {
                            popup2.classList.remove('active');
                        });

                        editButton2.addEventListener('click', () => {
                            popup2.classList.add('active');
                        });
                    </script>
                </div>
            </div>
        </div>
    @endsection
