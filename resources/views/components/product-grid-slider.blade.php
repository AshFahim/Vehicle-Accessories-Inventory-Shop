<div class="container pb-16">
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
        @foreach ($products as $product)
            <div class="bg-white shadow rounded overflow-hidden group">
                <x-product-grid :data="$product" />
            </div>
        @endforeach
    </div>
</div>
