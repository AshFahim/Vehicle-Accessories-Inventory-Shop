@extends('layouts.main')

@section('main-section')
    <div class="container mx-auto py-28 flex flex-row w-full">
        <div class="flex items-center flex-grow">
            <img src="{{ $product['image'] }}" alt="{{ $product['car_brand'] }} {{ $product['model'] }}"
                class="w-32 h-32 mr-4">
            <div>
                <h1 class="text-2xl font-semibold">{{ $product['car_brand'] }} {{ $product['model'] }}</h1>
                <p class="text-gray-600">{{ $product['collection'] }} - {{ $product['filter_type'] }}</p>
                <p class="text-lg font-bold mt-2">${{ $product['price'] }}</p>
            </div>
        </div>
        <div class="mt-8 flex-grow">
            <h2 class="text-lg font-semibold mb-2">Product Details:</h2>
            <ul>
                <li><strong>BMUK No:</strong> {{ $product['bmuk_no'] }}</li>
                <li><strong>Created At:</strong> {{ $product['created_at'] }}</li>
                <li><strong>Updated At:</strong> {{ $product['updated_at'] }}</li>
                <li><strong>Euro ID:</strong> {{ $product['euro_id'] }}</li>
                <li><strong>OEM ID:</strong> {{ $product['oem_id'] }}</li>
            </ul>
        </div>
        <div class="mt-8 flex-grow">
            <h2 class="text-lg font-semibold mb-2">Write a Review:</h2>
            <form action="{{ route('submitReview') }}" method="get">
                <input type="hidden" name="product_id" value="{{ $product['bmuk_no'] }}">
                <input type="hidden" name="order_id" value="{{ $orderid }}">
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Score:</label>
                    <div class="flex items-center">
                        @for ($i = 1; $i <= 5; $i++)
                            <input {{ $i == 5 ? 'checked' : '' }} type="radio" name="score"
                                id="star{{ $i }}" value="{{ $i }}" class="hidden">
                            <label for="star{{ $i }}" class="text-yellow-500 cursor-pointer"
                                onclick="updateRating({{ $i }})">
                                <i class="fas fa-star text-xl"></i>
                            </label>
                        @endfor
                    </div>
                </div>

                <script>
                    function updateRating(rating) {
                        const stars = document.querySelectorAll('.fa-star');

                        for (let i = 0; i < stars.length; i++) {
                            if (i < rating) {
                                stars[i].classList.add('text-yellow-500');
                                stars[i].classList.remove('text-gray-400');
                            } else {
                                stars[i].classList.add('text-gray-400');
                                stars[i].classList.remove('text-yellow-500');
                            }
                        }
                    }
                </script>
                <div class="mb-4">
                    <label for="comment" class="block font-semibold mb-1">Comment:</label>
                    <textarea name="comment" id="comment" class="border rounded p-2 w-full" rows="4" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit
                    Review</button>
            </form>
        </div>
    </div>
@endsection
