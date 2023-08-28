@extends('layouts.main')

@section('main-section')
    <br>
    <br>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us - Vehicle Accessory Shop</title>
    </head>

    <body class="bg-gray-100 font-sans">

        <!-- Contact Us Section -->
        <section class="bg-white py-16">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-center space-y-8 md:space-y-0 md:space-x-8">
                    <div class="w-full md:w-1/2">
                        <img src="images/contact-image.jpg" alt="Contact Us" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-1/2">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Contact Us</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Have a question or need assistance with your vehicle accessory needs? Feel free to reach out to
                            us. Our friendly team is here to help you.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mt-4">
                            Address: 1234 Main Street, City, State, ZIP
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Phone: (123) 456-7890
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mt-4">
                            <a href="mailto:info@vehicleaccessoryshop.com" class="text-blue-500 hover:underline">Email:
                                info@vehicleaccessoryshop.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Email Subscription -->
        <section class="bg-gray-800 py-8">
            <div class="container mx-auto text-center text-white">
                <h2 class="text-2xl font-semibold mb-4">Subscribe to Our Newsletter</h2>
                <p class="text-gray-300 text-lg mb-4">Stay updated with the latest vehicle accessories and promotions.</p>
                <form action="#" method="POST" class="flex flex-col items-center">
                    <input type="email" placeholder="Enter your email"
                        class="bg-gray-200 w-full md:w-1/2 py-2 px-4 rounded-md mb-2" required>
                    <button type="submit"
                        class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Subscribe</button>
                </form>
            </div>
        </section>

    </body>

    </html>

    <br>
    <br>
@endsection
