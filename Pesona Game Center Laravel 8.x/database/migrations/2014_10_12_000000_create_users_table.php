<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            // Code to create table
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nomember');
                $table->string('name');
                $table->string('phone')->unique();
                $table->string('email')->unique();
                $table->string('address')->nullable();
                $table->string('identityid')->nullable();
                $table->string('verified')->default('false');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('role')->default('user');
                $table->string('status')->default('Silver');
                $table->string('accountStatus')->default('Active');
                $table->binary('image')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
            // because no medium blob on image we use manual statement
            DB::statement('ALTER TABLE users MODIFY image MEDIUMBLOB');
        } else {
            Schema::dropIfExists('users');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
