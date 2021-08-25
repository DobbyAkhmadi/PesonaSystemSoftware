<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Packages')->insert([
            'packagename' => 'Paket Malam',
            'description' => '32732122212920002',
            'hours' =>4,
            'pricenormal' => 10000,
            'pricepromo' => 10000,
            'statuspackages' => 'Active',
            'adddualshock' => 'True',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('Packages')->insert([
            'packagename' => 'Paket Ramadhan',
            'description' => '32732122212920002',
            'hours' => 4,
            'pricenormal' => 40000,
            'pricepromo' => 10000,
            'statuspackages' => 'Active',
            'adddualshock' => 'True',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('Packages')->insert([
            'packagename' => 'Paket Normal',
            'description' => '32732122212920002',
            'hours' => 4,
            'pricenormal' => 30000,
            'pricepromo' => 10000,
            'statuspackages' => 'Active',
            'adddualshock' => 'True',
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
