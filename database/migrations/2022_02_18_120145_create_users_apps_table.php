<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_apps', function (Blueprint $table) {
            $table->id();
            $table->string('Token')->nullable(); 
            $table->string('Active');
            $table->string('Kind');
            $table->string('image')->nullable();  
            $table->string('name');
            $table->string('rate')->nullable(); 
            $table->string('numofrating')->nullable(); 
            $table->string('phone');
            $table->string('city');
            $table->string('Commercial_Register')->nullable(); 
            $table->string('imagecommercial')->nullable(); 
            $table->string('imagebank')->nullable(); 
            $table->string('Password');
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
        Schema::dropIfExists('users_apps');
    }
}
