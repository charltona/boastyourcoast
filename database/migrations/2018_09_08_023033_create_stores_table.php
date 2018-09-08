<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoresTable extends Migration {

	public function up()
	{
		Schema::create('stores', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('description');
			$table->tinyInteger('status');
			$table->integer('owner_id');
			$table->string('category');
			$table->string('image');
			$table->string('address');
			$table->string('website');
		});
	}

	public function down()
	{
		Schema::drop('stores');
	}
}