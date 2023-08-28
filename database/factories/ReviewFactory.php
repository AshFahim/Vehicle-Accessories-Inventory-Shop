<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->randomElement(User::all())['id'],
            "product_id" => $this->faker->randomElement(Product::all())['bmuk_no'],
            "order_id" => $this->faker->randomElement(Order::all())['id'],
            "rating" => $this->faker->numberBetween(1, 5),
            "comment" => $this->faker->paragraph(1),
        ];
    }
}
