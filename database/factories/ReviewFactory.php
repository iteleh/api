<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\product;

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
            'product_id' => function () {
                return product::all()->random();
            },
            'customer' =>$this->faker->name,
            'review'=>$this->faker->paragraph,
            'star'=>$this->faker->numberBetween(0, 5),
        ];
    }
}
