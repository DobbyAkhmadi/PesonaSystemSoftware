<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSpHistoryorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_historyorder`(IN `iduser` int)
        BEGIN
            #Routine body goes here...
        SELECT
            headtransaction.notransactions,
            headtransaction.purchasedate,
            packages.packagename,
            headtransaction.paymentstatus,
            headtransaction.Expired,
            devices.devicename
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
            payment
            ON
                headtransaction.paymentid = payment.paymentid
            INNER JOIN
            detailtransaction
            ON
                headtransaction.idtransaction = detailtransaction.idtransaction
            INNER JOIN
            packages
            ON
                detailtransaction.packageid = packages.packageid
        WHERE
            headtransaction.userid = 4 AND
            headtransaction.Expired < NOW()
        LIMIT 5;
        END";
        DB::unprepared("DROP procedure IF EXISTS sp_historyorder");
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_historyorder');
    }
}
