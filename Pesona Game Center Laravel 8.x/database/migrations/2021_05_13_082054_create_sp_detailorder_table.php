<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSpDetailorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_detailorder`(IN `userid` int)
        BEGIN
            #Routine body goes here...
        SELECT
            packages.packagename,
            foods.foodname,
            devices.devicename,
            detailtransaction.qty,
            detailtransaction.pricetemp
        FROM
            headtransaction
            NATURAL LEFT JOIN
            detailtransaction
            LEFT JOIN
            packages
            ON
                packages.packageid = detailtransaction.packageid
            LEFT JOIN
            foods
            ON
                detailtransaction.foodid = foods.foodid
            INNER JOIN
            devices
            ON
                headtransaction.deviceid = devices.deviceid
        WHERE
            headtransaction.userid = userid and
                headtransaction.paymentstatus = 'waiting'
            LIMIT 5 ;
        END";
        DB::unprepared("DROP procedure IF EXISTS sp_detailorder");
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_detailorder');
    }
}
