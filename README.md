# Vehicle Accessories Inventory Shop

Welcome to the Vehicle Accessories Inventory Shop GitHub repository! This repository contains the source code for our web application that facilitates the management and sale of modified car parts. The project is built using the Laravel framework and is designed to cater to both users and administrators.

## Features

### Users
- **Login/Register:** Users can create accounts or log in if they already have one.
- **Search and Filter:** Users can search for modified car parts based on car brands, collections, and filter types using the search bar on the homepage.
- **Product Details:** Users can view product details, including price and specifications.
- **Add to Cart:** Users can add products to their shopping cart.
- **Rate Products:** Users can provide ratings and reviews for products.
- **Favorite Products:** Users can mark products as favorites.
- **Contact Owner:** Users can contact the owner for inquiries.
- **Purchase:** Users can buy products, view the total bill, and choose from multiple payment options.
- **Order History:** Users can access their order history and tracking information.
- **Password Recovery:** Users can reset their password through the "forgot password" option.

### Admin
- **Login:** Administrators can log in to the admin panel.
- **User Approval:** Admins can approve user registrations.
- **Product Management:** Admins can add, delete, and edit products.
- **Product Ratings:** Admins can view product ratings and reviews.
- **Sorting:** Admins can sort products by popularity.
- **Order Management:** Admins can manage customer orders, including processing, tracking, and cancellations.
- **Stock Information:** Admins can view stock information and prevent orders for unavailable products.
- **Reports and Analytics:** Admins can access sales reports and analytics for tracking popular products.
- **User Feedback:** Admins can manage and respond to user reviews and feedback on products.
- **Coupons:** Admins can create discount coupons.
- **Payment Monitoring:** Admins can monitor user payments and amounts.
- **Purchase History:** Admins can view a user's purchase history and products bought.

## Getting Started

To run the project locally, follow these steps:

1. Clone the repository: `git clone https://github.com/group5/vehicle-accessories-shop.git`
2. Navigate to the project directory: `cd vehicle-accessories-shop`
3. Install dependencies: `composer install`
4. Create a `.env` file: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`
6. Configure the database settings in the `.env` file.
7. Run migrations: `php artisan migrate`
8. Start the development server: `php artisan serve`
9. Access the application in your browser: `http://localhost:8000`

## Contributing

We welcome contributions from the community to improve this project. If you find any issues or have suggestions, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
