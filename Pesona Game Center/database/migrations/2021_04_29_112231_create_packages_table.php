<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('packages')) {
            // Code to create table
            Schema::create('packages', function (Blueprint $table) {
                $table->increments('packageid');
                $table->string('packagename');
                $table->integer('hours');
                $table->string('description');
                $table->string('pricenormal');
                $table->string('pricepromo');
                $table->enum('adddualshock', ['True', 'False']);
                $table->enum('statuspackages', ['Active', 'NonActive']);
                $table->timestamps();
            });
        }
        else
        {
            Schema::dropIfExists('packages');
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
