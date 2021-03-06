<?php

namespace Database\Factories;

use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idConfig = [
            'table' => 'users',
            'field' => 'nomember',
            'length' => 12,
            'prefix' => 'MBR-' . date('my') . '-'
        ];
        return [
            'name' => $this->faker->name,
            'nomember' => IdGenerator::generate($idConfig),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'role' => $this->faker->randomElement(['admin', 'user']),
            'address' => $this->faker->address,
            'identityid' => $this->faker->phoneNumber,
            'verified' => $this->faker->randomElement(['True', 'False']),
            'status' => $this->faker->randomElement(['Silver', 'Gold', 'Platinum', 'Diamond']),
            'image' => $this->faker->image('public/assets/img/User', 128, 128, null, false),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
