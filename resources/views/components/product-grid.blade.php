<div class="product-item float-left bg-white mt-8 mr-8 border border-gray-200 border-solid">
    <form method="post" action="?action=add&bmuk_no={{ $bmuk_no }}">
        @csrf
        <div class="product-image h-44 w-64 overflow-hidden"><img src="{{ $product_image }}"></div>
        <div class="favorite-switch" style="--star-color:{{ $product_fav ? 'red' : 'black' }};"
            onclick="document.location='?action=switch-favorite&bmuk_no={{ $bmuk_no }}'"></div>
        <div class="product-tile-footer px-4 pt-4 overflow-auto">
            <div class="product-title text-purple-700 font-bold">{{ $product_name }}</div>
            <div class="product-desc mb-5 text-amber-950">{{ $product_desc }}</div>
            <div class="product-price mt-2 mr-1 float-left">${{ $product_price }}</div>
            @auth
                <div class="cart-action float-right"><input type="text"
                        class="product-quantity w-12 py-1 px-2 rounded border border-slate-100 border-solid" name="quantity"
                        value="1" size="2" /><input type="submit" value="Add to Cart"
                        class="btnAddAction px-2 py-1 ml-2 bg-slate-100 border-stone-400 border border-solid text-gray-950 rounded-sm cursor-pointer float-right" />
                </div>
            @endauth
            <div class="product-rating mt-16">
                <div class="Stars" style="--rating: {{ $product_rating }};"></div>
            </div>
        </div>
    </form>
</div>
