<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\FoodFactory;
use App\Models\Food;
class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   
        $this->call([
            FoodSeeder::class,
        ]);    
  
    }
}
