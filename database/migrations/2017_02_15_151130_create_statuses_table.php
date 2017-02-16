<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idno');
            $table->date('date_requested');
            $table->date('date_registered');
            $table->date('date_enrolled');
            $table->date('date_dropped');
            $table->integer('status');
            $table->string('department');
            $table->string('level');
            $table->string('track');
            $table->string('strand');
            $table->string('course');
            $table->string('section');
            $table->string('schoolyear');
            $table->string('period');
            $table->integer('class_no');
            $table->integer('isnew');
            $table->integer('isesc');
            $table->string('registeredby');
            $table->string('enrolledby');
            $table->string('droppedby');
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
        Schema::drop('statuses');
    }
}
