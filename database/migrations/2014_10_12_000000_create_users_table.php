<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('password');
            $table->string('city');
            $table->date('birthdate');
            $table->string('phone_number');
            $table->boolean('entreprise');
            $table->string('siret');
            $table->mediumText('description');
            $table->string('pitch_video');
            $table->string('cv');
            $table->string('avatar');
            $table->rememberToken();
            $table->timestamps(); //created and update by it self
        });
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
