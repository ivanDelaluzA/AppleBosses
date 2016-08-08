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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('sub_email');
            $table->boolean('is_active');
            $table->string('password');

            $table->bigInteger('personal_information_id')->unsigned()->index()->nullable();
            $table->foreign('personal_information_id')->references('id')->on('personal_informations');

            $table->bigInteger('role_id')->unsigned()->index()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');

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
