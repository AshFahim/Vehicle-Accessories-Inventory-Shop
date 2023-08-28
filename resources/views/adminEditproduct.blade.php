@extends('layouts.main')

@section('main-section')
    <br>
    <br>
    <br>

    <body class="bg-gray-100">

        <div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md">
            <h1 class="text-4xl font-bold text-center text-gray-800">Edit Product (Bmuk_no: {{ $product->bmuk_no }})</h1>
            <br>
            <form action="{{ route('editProduct.submit') }}" method="GET">
                <input name="oldbmukno" value="{{ $product->bmuk_no }}" type="text" hidden>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Bmuk Number</label>
                        <input name="bmukno" value="{{ $product->bmuk_no }}" type="text"
                            class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Euro ID</label>
                        <input value="{{ $product->euro_id }}" name="euroid" type="text"
                            class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">OEM ID</label>
                    <input value="{{ $product->oem_id }}" name="oemid" type="text"
                        class="mt-1 p-2 block w-full border rounded-md">
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input value="{{ $product->image }}" name="image" type="text"
                        class="mt-1 p-2 block w-full border rounded-md">
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <input value="{{ $product->price }}" name="price" type="text"
                            class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Collection</label>
                        <input value="{{ $product->collection }}" name="collection" type="text"
                            class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Filter Type</label>
                        <input value="{{ $product->filter_type }}" name="filtertype" type="text"
                            class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Car Brand</label>
                        <input value="{{ $product->car_brand }}" name="carbrand" type="text"
                            class="mt-1 p-2 block w-full border rounded-md">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Model</label>
                    <input value="{{ $product->model }}" name="model" type="text"
                        class="mt-1 p-2 block w-full border rounded-md">
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Specification</label>
                    <textarea name="specification" class="mt-1 p-2 block w-full border rounded-md">{{ json_decode(json_encode($product->specification, JSON_PRETTY_PRINT)) }}</textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit
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
