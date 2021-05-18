<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
                $table->enum('type', ['Food', 'Drink']);
                $table->string('price');
                $table->binary('image');
                $table->string('stock');
                $table->enum('statusfood', ['Active', 'NonActive']);
                $table->timestamps();
            });
            // because no medium blob on image we use manual statement
            DB::statement('ALTER TABLE users MODIFY image MEDIUMBLOB');
        } else {
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
