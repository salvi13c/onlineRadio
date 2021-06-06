<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_table', function (Blueprint $table) {
            $table->text('uidd')->unique(); 
            $table->string('name');
            $table->string('email');
            $table->string('user_level');
            $table->jsonb('favourite_stations');
            $table->jsonb('playlist_stations');
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
        Schema::dropIfExists('users_table');
    }
}
