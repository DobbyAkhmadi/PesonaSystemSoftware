<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('payment')) {
            // Code to create table
            Schema::create('payment', function (Blueprint $table) {
                $table->increments('paymentid');
                $table->string('paymentname');
                $table->string('paymentnumber');
                $table->binary('paymentimage');
                $table->timestamps();
            });
        } else {
            Schema::dropIfExists('payment');
        }
        // because no medium blob on image we use manual statement
        DB::statement('ALTER TABLE payment MODIFY paymentimage MEDIUMBLOB');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
