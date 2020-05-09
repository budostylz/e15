<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectCustomersAndOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
    
            //set foreign key for customers
            $table->bigInteger('customer_id')->unsigned();   
            $table->foreign('customer_id')->references('id')->on('customers');
    
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
            //drop customers relationship
            $table->dropForeign('customers_customer_id_foreign');
            $table->dropColumn('customer_id');

        });

    }
}
