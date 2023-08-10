<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $specs = [];
        $noOfSpecs = random_int(1, 5);
        for ($i = 0; $i < $noOfSpecs; $i++) {
            $specs[] = array(
                'engine' => $this->faker->randomElement(array('1.0L', '1.2L', '1.4L', '1.6L', '1.8L', '2.0L')),
                'fuelType' => $this->faker->randomElement(array('Petrol', 'Diesel', 'Hybrid', 'Electric')),
                'year' => $this->faker->randomElement(array('2010-2012', '2011-2017', '2012-2021', '2013-2022', '2014-2022', '2015-2023', '2018-2023'))
            );
        }
        $specs = json_encode($specs);
        return [
            'euro_id' => $this->faker->unique->uuid,
            'oem_id' => $this->faker->uuid,
            'image' => 'http://127.0.0.1:8000/demo-product.png',
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'collection' => $this->faker->randomElement(array('Air Filter', 'Oil Filter', '0w-30')),
            'filter_type' => $this->faker->randomElement(array('Polyurethane', 'Plastic Panel', 'Metal Cap')),
            'car_brand' => $this->faker->randomElement(array('Audi', 'BMW', 'Castrol', 'Citroen', 'Fiat', 'Ford')),
            'model' => $this->faker->randomElement(array('B-Max', 'C-Max', 'EcoSport')),
            'specification' => $specs
        ];
    }
}
