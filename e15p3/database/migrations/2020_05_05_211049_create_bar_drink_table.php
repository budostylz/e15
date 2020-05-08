<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarDrinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar_drink', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('bar_id')->unsigned();
            $table->bigInteger('drink_id')->unsigned();

            $table->foreign('bar_id')->references('id')->on('bars');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->decimal('price', 4, 2);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bar_drink');
    }
}
