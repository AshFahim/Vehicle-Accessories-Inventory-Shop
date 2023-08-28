@extends('layouts.main')

@section('main-section')
    <br>
    <br>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us - Vehicle Accessory Shop</title>
    </head>

    <body class="bg-gray-100 font-sans">

        <!-- About Us Section -->
        <section class="bg-gray-100 py-16">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-center space-y-8 md:space-y-0 md:space-x-8">
                    <div class="w-full md:w-1/2">
                        <img src="images/about-shop.jpg" alt="Our Shop" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-1/2">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">About Our Shop</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Welcome to Vehicle Accessory Shop, where we turn your vehicle into a masterpiece. With a passion
                            for all things automotive, we have been serving vehicle enthusiasts for over a decade.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mt-4">
                            At our shop, we offer an extensive range of top-notch accessories and upgrades for cars, trucks,
                            and more. Whether you're looking for performance enhancements, stylish customizations, or
                            practical add-ons, we've got you covered.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mt-4">
                            What sets us apart is our commitment to quality and customer satisfaction. Our expert team
                            consists of dedicated car enthusiasts who are always ready to assist you in choosing the perfect
                            accessories for your vehicle.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mt-4">
                            Visit us today and experience the difference. Let's take your vehicle to the next level
                            together!
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </body>
    <br>
    <br>
@endsection
