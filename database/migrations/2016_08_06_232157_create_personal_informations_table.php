<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 80);
            $table->string('paternal_surname', 80);
            $table->string('maternal_surname', 80)->nullable();
            $table->char('sex', 1)->default('F');
            $table->date('birthday')->nullable();
            $table->string('represent', 80)->nullable();
            $table->string('house_phone', 10)->nullable();
            $table->string('mobile_phone', 10)->nullable();
            $table->string('section', 50)->nullable();
            $table->string('block', 80)->nullable();
            $table->string('street', 80)->nullable();
            $table->string('number', 80)->nullable();
            $table->string('interior', 80)->nullable();
            $table->integer('colony_id')->unsigned()->nullable()->index();
            $table->foreign('colony_id')->references('id')->on('colonies');
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
        Schema::drop('personal_informations');
    }
}
