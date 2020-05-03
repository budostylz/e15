<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectBarsAndOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
    
            //set foreign key for bars
            $table->bigInteger('bar_id')->unsigned();   
            $table->foreign('bar_id')->references('id')->on('bars');
    
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

            //drop bars relationship
            $table->dropForeign('bars_bar_id_foreign');
            $table->dropColumn('bar_id');
    
        });
    }
}
