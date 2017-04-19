<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('room_type_id')->unsinged();
            $table->integer('no_of_rooms')->unsigned();
            $table->foreign('room_type_id')->references('id')->on('room_types')->onDelete('set null')
                ->onUpdate('cascade');
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
		Schema::drop('rooms');
	}

}
