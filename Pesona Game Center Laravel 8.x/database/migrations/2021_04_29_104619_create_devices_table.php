<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('devices')) {
            // Code to create table
            Schema::create('devices', function (Blueprint $table) {
                $table->increments('deviceid');
                $table->string('seatno');
                $table->string('devicename');
                $table->string('type');
                $table->string('serialnumber');
                $table->date('warranty');
                $table->enum('statusdevice', ['Online', 'Offline','Maintenance']);
                $table->timestamps();
            });
        }
        else
        {            
            Schema::dropIfExists('devices');        
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
