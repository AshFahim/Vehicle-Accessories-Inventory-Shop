# Vehicle Accessories Inventory Shop

Welcome to the Vehicle Accessories Inventory Shop GitHub repository! This repository contains the source code for our web application that facilitates the management and sale of modified car parts. The project is built using the Laravel framework and is designed to cater to both users and administrators.

## Set up the project

-   Clone the repo
-   Clone the repository: `git clone https://github.com/AshFahim/Vehicle-Accessories-Inventory-Shop.git`
-   Navigate to the project directory: `cd Vehicle-Accessories-Inventory-Shop`
-   `composer install`
-   `npm install laravel-mix --save-dev`
-   `cp .env.example .env`
-   `php artisan key:generate`
-   create a database
-   update the database info in .env
-   run `npm run watch` and `php artisan serve` in 2 different terminal (dont close these 2)
-   `php artisan optimize`
-   `php artisan migrate`
-   run `php artisan db:seed` 3-4 times
-   Access the application in your browser: `http://localhost:8000`
    Now you should be able to access the website from previous `php artisan serve` command. 1st user from database is an admin. All demo users has password set to `password` Access the application in your browser: `http://localhost:8000`

## Features

### Users

-   **Login/Register:** Users can create accounts or log in if they already have one.
-   **Search and Filter:** Users can search for modified car parts based on car brands, collections, and filter types using the search bar on the homepage.
-   **Product Details:** Users can view product details, including price and specifications.
-   **Add to Cart:** Users can add products to their shopping cart.
-   **Rate Products:** Users can provide ratings and reviews for products.
-   **Favorite Products:** Users can mark products as favorites.
-   **Contact Owner:** Users can contact the owner for inquiries.
-   **Purchase:** Users can buy products, view the total bill, and choose from multiple payment options.
-   **Order History:** Users can access their order history and tracking information.
-   **Password Recovery:** Users can reset their password through the "forgot password" option.

### Admin

-   **Login:** Administrators can log in to the admin panel.
-   **User Approval:** Admins can approve user registrations.
-   **Product Management:** Admins can add, delete, and edit products.
-   **Product Ratings:** Admins can view product ratings and reviews.
-   **Sorting:** Admins can sort products by popularity.
-   **Order Management:** Admins can manage customer orders, including processing, tracking, and cancellations.
-   **Stock Information:** Admins can view stock information and prevent orders for unavailable products.
-   **Reports and Analytics:** Admins can access sales reports and analytics for tracking popular products.
-   **User Feedback:** Admins can manage and respond to user reviews and feedback on products.
-   **Coupons:** Admins can create discount coupons.
-   **Payment Monitoring:** Admins can monitor user payments and amounts.
-   **Purchase History:** Admins can view a user's purchase history and products bought.

## Screenshots

### Guest

![](/readme/guest1.jpeg)
![](/readme/guest2.jpeg)
![](/readme/guest3.jpeg)

<br>
<br>
<br>
<br>
<br>

### Customer

![](/readme/customer1.jpeg)
![](/readme/customer2.jpeg)
![](/readme/customer3.jpeg)
![](/readme/customer4.jpeg)
![](/readme/customer5.jpeg)
![](/readme/customer6.jpeg)
![](/readme/customer7.jpeg)
![](/readme/customer8.jpeg)
![](/readme/customer9.jpeg)
![](/readme/customer10.jpeg)
![](/readme/customer11.jpeg)
<br>
<br>
<br>
<br>
<br>

### Admin

![](/readme/admin1.jpg)
![](/readme/admin2.jpg)
![](/readme/admin3.jpg)
![](/readme/admin4.jpg)
![](/readme/admin5.jpg)
![](/readme/admin6.jpg)
![](/readme/admin7.jpg)
![](/readme/admin8.jpg)
<br>
<br>

## Contributing

We welcome contributions from the community to improve this project. If you find any issues or have suggestions, please open an issue or submit a pull request.
