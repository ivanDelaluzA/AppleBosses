<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppleBossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apple_bosses', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_active');
            $table->string('email');

            $table->bigInteger('personal_information_id')->unsigned()->index()->nullable();
            $table->foreign('personal_information_id')->references('id')->on('personal_informations');

            $table->bigInteger('geolocation_data')->unsigned()->index()->nullable();
            $table->foreign('geolocation_data')->references('id')->on('geolocation_datas');

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
        Schema::drop('apple_bosses');
    }
}
