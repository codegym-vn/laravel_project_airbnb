<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('address', 100);
            $table->integer('room');
            $table->integer('number_room');
            $table->integer('number_bathroom');
            $table->integer('price');
            $table->string('describe', 255);
            $table->integer('id_kind_house')->unsigned();
            $table->foreign('id_kind_house')->references('id')->on('kind_house');
            $table->boolean('status');
            $table->boolean('time_box');
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
        Schema::dropIfExists('houses');
    }
}
