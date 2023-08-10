<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Product;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->randomElement(Order::all())['id'],
            'bmuk_no' => $this->faker->randomElement(Product::all())['bmuk_no'],
            'quantity' => $this->faker->randomDigitNotNull(),
        ];
    }
}
