<div
    class="px-2 py-3 md:px-6 md:py-4 bg-white border border-gray-300 dark:border-gray-700 dark:bg-gray-800 w-9/12 mx-auto backdrop-filter backdrop-blur-lg bg-opacity-30 dark:backdrop-filter dark:backdrop-blur-lg dark:bg-opacity-30">
    <h4 class="text-2xl font-bold dark:text-gray-300">Find your Product</h4>
    <form action="/shop/filtered">
        <select required id="brand" name="brand"
            class="block w-full mt-6 transition duration-300 ease-in-out bg-transparent border-transparent dark:text-gray-400 focus:border-red focus:outline-none focus:ring-transparent">
            <option disabled selected value="">Car Brand</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand }}">{{ $brand }}</option>
            @endforeach
        </select>
        <select required id="model" name="model"
            class="block w-full mt-6 transition duration-300 ease-in-out bg-transparent border-transparent dark:text-gray-400 focus:border-red focus:outline-none focus:ring-transparent">
            <option disabled selected value="">Model (Select Car Brand to Load)</option>
        </select>

        <select required id="specification" name="specification"
            class="block w-full mt-6 transition duration-300 ease-in-out bg-transparent border-transparent dark:text-gray-400 focus:border-red focus:outline-none focus:ring-transparent">
            <option disabled selected value="">Specification (Select Car Model to Load)</option>
        </select>


        <select required="" id="collection" name="collection"
            class="block w-full mt-6 transition duration-300 ease-in-out bg-transparent border-transparent dark:text-gray-400 focus:border-red focus:outline-none focus:ring-transparent">
            <option disabled selected value="">Collection</option>
            @foreach ($collections as $collection)
                <option value="{{ $collection }}">{{ $collection }}</option>
            @endforeach
        </select>

        <select id="filter_type" name="filter_type"
            class="block w-full mt-6 transition duration-300 ease-in-out bg-transparent border-transparent dark:text-gray-400 focus:border-red focus:outline-none focus:ring-transparent">
            <option disabled selected value="">Filter Type (Optional)</option>
            @foreach ($filterTypes as $filterType)
                <option value="{{ $filterType }}">{{ $filterType }}</option>
            @endforeach
        </select>

        <button type="submit"
            class="items-center px-4 py-4 bg-blue-600 border border-transparent font-semibold text-base text-white uppercase tracking-widest hover:bg-blue-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-300 block w-full mt-4">
            Search
        </button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#brand').on('change', function() {
            var carSpec = $('#specification').val();
            var carBrand = $(this).val();
            if (carBrand) {
                $.ajax({
                    url: '/updateModels/' + carBrand,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('#model').empty();
                            $('#model').append(
                                '<option disabled selected value="">Car Model</option>');
                            $.each(data, function(key, model) {
                                $('select[name="model"]').append(
                                    '<option value="' + model + '">' +
                                    model + '</option>');
                            });
                            $('#specification').empty()
                            $('#specification').append(
                                '<option disabled selected value="">Specification (Select Car Model to Load)</option>'
                            );
                        } else {
                            $('#model').empty();
                        }
                    }
                });
            } else {
                $('#model').empty();
            }
        });

        $('#model').on('change', function() {
            var carBrand = $('#brand').val();
            var carModel = $(this).val();
            if (carModel) {
                $.ajax({
                    url: '/updateSpecifications/' + carBrand + '/' + carModel,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('#specification').empty();
                            $('#specification').append(
                                '<option disabled selected value="">Specification</option>'
                            );
                            $.each(data, function(key, specification) {
                                $('select[name="specification"]').append(
                                    '<option value="' + specification + '">' +
                                    specification + '</option>');
                            });
                        } else {
                            $('#specification').empty();
                        }
                    }
                });
            } else {
                $('#specification').empty();
            }
        });
    });
</script>
