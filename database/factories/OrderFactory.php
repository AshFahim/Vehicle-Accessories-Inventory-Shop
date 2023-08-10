<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' => $this->faker->randomElement(User::all())['id'],
            'status' => $this->faker->randomElement(array('Waiting for Payment', 'Processing', 'Suspended', 'Cancelled', 'Completed')),
            'payment_method' => $this->faker->randomElement(array('bkash', 'Nagad', 'Card', 'COD')),
            'shipping_address' => $this->faker->address(),
            'billing_address' => $this->faker->address(),
            'shipping_method' => $this->faker->randomElement(array('Sundarban', 'eCourier', 'Steadfast')),
        ];
    }
}
