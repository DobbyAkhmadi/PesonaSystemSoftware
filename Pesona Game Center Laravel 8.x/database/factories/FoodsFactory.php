<?php

namespace Database\Factories;

use App\Models\Foods;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Foods::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'foodname' => $this->faker->name(),
            'price' => $this->faker->numberBetween(20000, 25000),
            'image' => $this->faker->image('public/assets/img/Food', 640, 480, null, false),
            'stock' => $this->faker->numberBetween(1, 100),
            "statusfood" => $this->faker->randomElement(["Active", "NonActive"])
        ];
    }
}
