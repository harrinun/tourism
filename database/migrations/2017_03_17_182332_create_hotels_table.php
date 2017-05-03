<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->string('phone_number');
			$table->text('address');
			$table->string('city');
			$table->string('suburb');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('manager')->unsigned();
			$table->foreign('manager')->references('id')->on('users')
                ->onDelete('cascade');
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
		Schema::drop('hotels');
	}

}
