<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttractionsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attractions', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->string('region');
			$table->string('location');
			$table->integer('attraction_type_id')->unsigned();
            $table->integer('manager')->unsigned();
            $table->foreign('manager')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('attraction_type_id')->references('id')->on('attraction_types')
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
		Schema::drop('attractions');
	}

}
