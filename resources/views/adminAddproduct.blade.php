@extends('layouts.main')

@section('main-section')
    <br>
    <br>
    <br>

    <body class="bg-gray-100">

        <div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md">
            <h1 class="text-4xl font-bold text-center text-gray-800">Add Product</h1>
            <br>
            <form action="{{ route('addProduct.submit') }}" method="GET">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Bmuk Number</label>
                        <input name="bmukno" type="text" class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Euro ID</label>
                        <input name="euroid" type="text" class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">OEM ID</label>
                    <input name="oemid" type="text" class="mt-1 p-2 block w-full border rounded-md">
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input name="image" type="text" class="mt-1 p-2 block w-full border rounded-md">
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <input name="price" type="text" class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Collection</label>
                        <input name="collection" type="text" class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Filter Type</label>
                        <input name="filtertype" type="text" class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Car Brand</label>
                        <input name="carbrand" type="text" class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Model</label>
                    <input name="model" type="text" class="mt-1 p-2 block w-full border rounded-md">
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Specification</label>
                    <textarea name="specification" class="mt-1 p-2 block w-full border rounded-md"></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add
                        Product</button>
                    <button type="button" onclick="window.location='{{ route('adminProductList') }}'"
                        class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Cancel</button>
                </div>
            </form>
        </div>

    </body>

    </html>


    <br>
    <br>
    <br>
    <br>
@endsection
