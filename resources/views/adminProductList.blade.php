@extends('layouts.main')

@section('main-section')
    <br>
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="bg-white p-8 rounded-md w-full">
                <div class="flex items-center justify-between pb-6">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-4xl font-bold text-center text-gray-800">All Product List</h1>
                        <br>
                        <div class="flex flex-wrap justify-around mt-4">
                            <div class="bg-blue-200 rounded-lg p-4 w-40 text-center">
                                <p class="text-xl font-semibold text-gray-800">Total Product</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $totalProducts }}</p>
                            </div>
                            <div class="bg-green-200 rounded-lg p-4 w-40 text-center">
                                <p class="text-xl font-semibold text-gray-800">Total Order</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $totalOders }}</p>
                            </div>
                            <div class="bg-yellow-200 rounded-lg p-4 w-40 text-center">
                                <p class="text-xl font-semibold text-gray-800">New added (30 Days)</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $last30daysproducts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="lg:ml-40 ml-10 space-x-8"></div>
            </div>
        </div>
        <div>
            <div class="overflow-x-auto w-fit" style="margin-left: -10rem">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    BmUK number</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Image</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Create Date and Time</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Update Date and Time</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Euro ID</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Oem ID</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Price</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Collection</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Filter Type</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Car Brand</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Model</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Specification</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Button 1</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Button 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->bmuk_no }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <img src="{{ url($product->image) }}" class="h-12 w-12 rounded-full">
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $product->created_at }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $product->updated_at }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->euro_id }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->oem_id }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->price }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $product->collection }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $product->filter_type }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $product->car_brand }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->model }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $product->specification }}</td>
                                    <td class="border border-gray-200 px-2 py-2">
                                        <button
                                            onclick="window.location.href='{{ route('editProduct') }}?bmuk_no={{ $product->bmuk_no }}'"
                                            class="bg-blue-500 hover:bg-blue- 700 text-white font-bold py- 2 px- 1 rounded">Edit
                                            Product</button>
                                    </td>
                                    <td class="border border-gray-200 px-2 py-2">
                                        <button
                                            onclick="window.location.href='{{ route('deleteProduct') }}?bmuk_no={{ $product->bmuk_no }}'"
                                            class="bg-red-500 hover:bg-blue- 700 text-white font-bold py- 2 px- 4 rounded">Delete
                                            Product</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-5 py-5">
                {{ $products->links() }}
            </div>
            <div class="flex flex-wrap justify-around mt-8">
                <a href="{{ route('addProduct') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">Add new
                    product</a>
                <a href="{{ route('admin-dashboard') }}"
                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">Admin Panel</a>
                <a href="{{ route('adminCustomerList') }}"
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg">View
                    all customer list</a>
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection
