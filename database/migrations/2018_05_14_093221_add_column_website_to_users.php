<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnWebsiteToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('website')->nullable();
        });
    }

    /**
     * Reverse the migrationsphp.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
