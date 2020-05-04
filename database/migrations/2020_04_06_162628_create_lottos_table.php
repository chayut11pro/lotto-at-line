<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLottosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('note')->nullable();
            $table->integer('seller_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_lot')->nullable();
            $table->integer('number')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('lot')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('annouced_date')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lottos');
    }
}
