<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadtransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('headtransaction')) {
            // Code to create table
            Schema::create('headtransaction', function (Blueprint $table) {
                $table->increments('idtransaction');
                $table->string('notransactions',20)->unique();
                $table->integer('userid')->unsigned();
                $table->foreign('userid')->references('id')->on('users');
                $table->integer('paymentid')->unsigned();
                $table->foreign('paymentid')->references('paymentid')->on('payment');
                $table->integer('deviceid')->unsigned();
                $table->foreign('deviceid')->references('deviceid')->on('devices');
                $table->dateTime('purchasedate');
                $table->enum('paymentstatus', ['waiting','completed']);
                $table->integer('paymentcode');
                $table->integer('barcode');
                $table->dateTime('startplay')->nullable();
                $table->dateTime('endplay')->nullable();
                $table->enum('statusplay', ['playing','waiting', 'finished']);
                $table->dateTime('Expired')->nullable();
                $table->timestamps();
            });
        }
        else
        {
            Schema::dropIfExists('headtransaction');
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headtransaction');
    }
}
