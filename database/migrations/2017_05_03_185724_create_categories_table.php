<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->unique();
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('category_hotel',function(Blueprint $table){
           $table->integer('category_id')->unsigned();
           $table->integer('hotel_id')->unsigned();
           $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
           $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
           $table->primary(['category_id','hotel_id']);
        });
    }

    /**
     * Reverse the migrations.
     *php
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_hotel');
        Schema::dropIfExists('categories');
    }
}
