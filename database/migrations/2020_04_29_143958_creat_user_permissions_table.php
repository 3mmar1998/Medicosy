<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatUserPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('User_Permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('can_post');
            $table->boolean('can_delete_post');
            $table->boolean('can_take_appointments');
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
        Schema::dropIfExists('User_Permissions');
    }
}
