<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateViewHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS view_home');
        DB::statement("CREATE VIEW view_home AS SELECT
            devices.seatno,
            users.`name`,
            devices.devicename,
            packages.packagename,
            headtransaction.startplay,
            headtransaction.endplay,
            packages.hours
        FROM
            headtransaction
            INNER JOIN
            devices
            ON
                headtransaction.deviceid = devices.deviceid
            INNER JOIN
            users
            ON
                headtransaction.userid = users.id
            INNER JOIN
            detailtransaction
            ON
                headtransaction.idtransaction = detailtransaction.idtransaction
            INNER JOIN
            packages
            ON
                detailtransaction.packageid = packages.packageid
        WHERE
            headtransaction.statusplay = 'playing' AND
            headtransaction.paymentstatus = 'completed'
        LIMIT 5 ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS view_home');
    }
}
