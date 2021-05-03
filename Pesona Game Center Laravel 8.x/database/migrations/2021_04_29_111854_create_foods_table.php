<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('foods')) {
            // Code to create table
            Schema::create('foods', function (Blueprint $table) {
                $table->increments('foodid');
                $table->string('foodname');          
                $table->string('price');
                $table->binary('image');
                $table->string('stock');
                $table->enum('statusfood', ['Active', 'NonActive']);
                $table->timestamps();
            });
        }
        else
        {       
        Schema::dropIfExists('foods');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
