<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FoodSeeder;
use App\Models\Foods;
use App\Models\User;
use App\Models\Devices;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PackagesSeeder::class,
            PaymentSeeder::class,
        ]);
        Devices::factory(5)->create();
        Foods::factory(15)->create();
        User::factory(5)->create();
    }
}
