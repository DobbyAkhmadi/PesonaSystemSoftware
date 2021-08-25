<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Payment')->insert([
            'paymentname' => 'Qris Payment',
            'paymentnumber' => 'ID1021070150763',
            'paymentimage' => 'assets/img/User/user7-128x128.jpg',     
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('Payment')->insert([
            'paymentname' => 'Midtrans Payment',
            'paymentnumber' => '32732122212920002',
            'paymentimage' => 'assets/img/User/user7-128x128.jpg',    
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
