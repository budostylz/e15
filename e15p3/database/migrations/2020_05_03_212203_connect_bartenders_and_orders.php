<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectBartendersAndOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
 
            //set foreign key for bartender
            $table->bigInteger('bartender_id')->unsigned();   
            $table->foreign('bartender_id')->references('user_id')->on('bartenders');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //drop bartender relationship
            $table->dropForeign('bartenders_bartender_id_foreign');
            $table->dropColumn('bartender_id');

        });

    }
}
