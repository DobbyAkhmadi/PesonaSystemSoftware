<?php

namespace Database\Factories;

use App\Models\Devices;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DevicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Devices::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'devicename' => $this->faker->randomElement(['Playstation 5', 'Playstation 4 Pro']),
            'seatno' => $this->faker->randomElement(['S01-PS5', 'S02-PS5', 'S03-PS5', 'S01-PS4PRO', 'S02-PS4PRO']),
            'type' => $this->faker->randomElement(['Console', 'Joystick']),
            'serialnumber' => Str::random(10),
            'warranty' =>  now(),
            "Statusdevice" => $this->faker->randomElement(["Online", "Offline", "Maintenance"])
        ];
    }
}
