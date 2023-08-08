
@section('main-section')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="container pt-20">
            <p class="my-6 text-4xl font-bold text-center text-red-700">Browse All Products</p>
            <hr>
            <x-filter-product :data="$filterProductVars" />
            <x-search-sort-product />
            <div id="product-grid" class="container product-grid columns-3xs">
                @foreach ($products as $product)
                    <x-product-grid :data="$product" />
                @endforeach
            </div>
            <div class="pagination mr-8 mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
