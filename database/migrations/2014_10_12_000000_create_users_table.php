<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idno')->unique();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('ename');
            $table->integer('accesslevel')->length(4)->default(0);
            $table->integer('status')->length(4)->default(0);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('terminalid');
            $table->integer('referenceid')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
