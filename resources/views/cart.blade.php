@extends('layouts.main')

@section('main-section')
    @php
        $total = 0;
    @endphp
    <div class="bg-gray-100 w-full py-10">
        <div class="container mx-auto mt-10">
            <div class="flex shadow-md my-10">
                <div class="w-3/4 bg-white px-10 py-10">
                    <div class="flex justify-between border-b pb-8">
                        <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                        <h2 class="font-semibold text-2xl">{{ count($cartItems) }} Items</h2>
                    </div>
                    @if (count($cartItems) == 0)
                        <div class="flex items-center justify-center h-96">
                            <div class="block pb-8 container w-full text-center">
                                <h1 class="font-semibold text-2xl">No Items in Cart</h1>
                            </div>
                        </div>
                        <div class="block pb-8 container w-full text-center">
                            <a href="{{ route('shop') }}">
                                <button type="button"
                                    class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Continue
                                    Shopping</button></a>
                        </div>
                    @else
                        <div class="flex mt-10 mb-5">
                            <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Quantity
                            </h3>
                            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Price</h3>
                            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Total</h3>
                        </div>

                        @foreach ($cartItems as $cartItem)
                            <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                                <div class="flex w-2/5"> <!-- product -->
                                    <div class="w-20">
                                        <img class="h-24" src="{{ $cartItem['product']['image'] }}" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between ml-4 flex-grow">
                                        <span
                                            class="font-bold text-sm">{{ $cartItem['product']['collection'] . '-' . $cartItem['product']['filter_type'] }}</span>
                                        <span
                                            class="text-red-500 text-xs">{{ $cartItem['product']['car_brand'] . ', ' . $cartItem['product']['model'] }}</span>
                                        <a href="{{ route('cart.remove') }}?bmuk_no={{ $cartItem['product']['bmuk_no'] }}"
                                            class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                                    </div>
                                </div>
                                <div class="flex justify-center w-1/5">
                                    <a
                                        href="{{ route('cart.update') }}?bmuk_no={{ $cartItem['product']['bmuk_no'] }}&quantity={{ $cartItem['quantity'] - 1 }}">
                                        <i class="fa-solid fa-minus fa-xl pt-5 pr-2"></i>
                                    </a>
                                    <form action="{{ route('cart.update') }}" method="GET">
                                        <input type="hidden" name="bmuk_no" value="{{ $cartItem['product']['bmuk_no'] }}">
                                        <input name="quantity" class="mx-2 border text-center w-20" type="text"
                                            value="{{ $cartItem['quantity'] }}" onchange='this.form.submit()'>
                                    </form>
                                    <a
                                        href="{{ route('cart.update') }}?bmuk_no={{ $cartItem['product']['bmuk_no'] }}&quantity={{ $cartItem['quantity'] + 1 }}">
                                        <i class="fa-solid fa-plus fa-xl pt-5 pl-2"></i>
                                    </a>
                                </div>
                                <span
                                    class="text-center w-1/5 font-semibold text-sm">${{ $cartItem['product']['price'] }}</span>
                                <span
                                    class="text-center w-1/5 font-semibold text-sm">${{ $cartItem['product']['price'] * $cartItem['quantity'] }}</span>
                            </div>
                            @php
                                $total += $cartItem['product']['price'] * $cartItem['quantity'];
                            @endphp
                        @endforeach
                        <a href="{{ route('shop') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">
                            <i class="fa-solid fa-arrow-left-long text-indigo-600 pt-0.5 pr-1"></i>
                            Continue Shopping
                        </a>
                </div>

                <div id="summary" class="w-1/4 px-8 py-10">
                    <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                    <div class="flex justify-between mt-10 mb-5">
                        <span class="font-semibold text-sm uppercase">Items {{ count($cartItems) }}</span>
                        <span class="font-semibold text-sm">${{ $total }}</span>
                    </div>
                    <div class="pb-3">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                        <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
                    </div>
                    <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button>
                    <form action="{{ route('checkout') }}" method="GET">
                        <div class="py-10">
                            <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping Method</label>
                            <select name="shippingMethod" class="block p-2 text-gray-600 w-full text-sm">
                                <option value="Sundarban">Sundarban - $10.00</option>
                                <option value="eCourier">eCourier - $10.00</option>
                                <option value="Steadfast">Steadfast - $10.00</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-medium inline-block mb-3 text-sm uppercase">Payment Method</label>
                            <select name="paymentMethod" class="block p-2 text-gray-600 w-full text-sm">
                                <option>Bkash</option>
                                <option>Nagad</option>
                                <option>Card</option>
                                <option>COD</option>
                            </select>
                        </div>
                        <div>
                            <br>
                            <div class="font-medium inline-block mb-3 text-sm uppercase">Shipping Address</div>
                            <div class="font-medium inline-block mb-3 text-sm bg-slate-200">
                                {{ Auth()->user()->shipping_address }}
                            </div>
                            </br>
                            <label for="existingShippingAddress">Existing Address: </label>
                            <input type="checkbox" checked id="existingShippingAddress" name="existingShippingAddress"
                                value="1">
                            <label for="existingShippingAddress">Yes</label>
                            <input hidden disabled type="text" name="customShippingAddress" id="customShippingAddress"
                                placeholder="Enter your address" class="p-2 text-sm w-full">
                        </div>
                        <div class="py-10">
                            <label class="font-medium inline-block mb-3 text-sm uppercase">Billing Address</label>
                            <div class="font-medium inline-block mb-3 text-sm bg-slate-200">
                                {{ Auth()->user()->billing_address }}
                            </div>
                            </br>
                            <label for="existingBillingAddress">Existing Address: </label>
                            <input type="checkbox" checked id="existingBillingAddress" name="existingBillingAddress"
                                value="1">
                            <label for="existingBillingAddress">Yes</label>
                            <input hidden disabled type="text" name="customBillingAddress" id="customBillingAddress"
                                placeholder="Enter your address" class="p-2 text-sm w-full">
                        </div>
                        <div class="border-t mt-8">
                            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                <span>Total cost</span>
                                <span>${{ $total + 10 }}</span>
                            </div>
                            <button type="submit"
                                class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
                    </form>
                </div>
                @endif
            </div>

        </div>
    </div>
    </div>
    <script>
        const existingShippingAddress = document.getElementById('existingShippingAddress');
        const customShippingAddress = document.getElementById('customShippingAddress');
        const existingBillingAddress = document.getElementById('existingBillingAddress');
        const customBillingAddress = document.getElementById('customBillingAddress');

        existingShippingAddress.addEventListener('change', () => {
            if (existingShippingAddress.checked) {
                customShippingAddress.hidden = true;
                customShippingAddress.disabled = true;
                customShippingAddress.value = null;
            } else {
                customShippingAddress.hidden = false;
                customShippingAddress.disabled = false;
            }
        });

        existingBillingAddress.addEventListener('change', () => {
            if (existingBillingAddress.checked) {
                customBillingAddress.hidden = true;
                customBillingAddress.disabled = true;
                customBillingAddress.value = null;
            } else {
                customBillingAddress.hidden = false;
                customBillingAddress.disabled = false;
            }
        });
    </script>
@endsection
