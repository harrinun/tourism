<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityAddonsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entity_addons', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('addon_id')->unsigned();
            $table->integer('addonable_id');
            $table->string('addonable_type');
            $table->string('payment_frequency');
            $table->float('amount')->nullable();
            $table->boolean('available');
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
		Schema::drop('entity_addons');
	}

}
