<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('detailtransaction')) {
            // Code to create table
            Schema::create('detailtransaction', function (Blueprint $table) {
                $table->integer('idtransaction')->unsigned();
                $table->foreign('idtransaction')->references('idtransaction')->on('headtransaction');
                $table->integer('packageid')->nullable()->unsigned();
                $table->foreign('packageid')->references('packageid')->on('packages');
                $table->integer('foodid')->nullable()->unsigned();
                $table->foreign('foodid')->references('foodid')->on('foods');
                $table->integer('qty');
                $table->integer('pricetemp');
            });
        }
        else
        {
            Schema::dropIfExists('detailtransaction');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransaction');
    }
}
