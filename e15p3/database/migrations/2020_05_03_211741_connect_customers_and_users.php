<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectCustomersAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
    
            //set foreign key for users
            $table->bigInteger('user_id')->unsigned();   
            $table->foreign('user_id')->references('id')->on('users');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {

            //drop users relationship
            $table->dropForeign('users_user_id_foreign');
            $table->dropColumn('user_id');
    
        });

    }
}

