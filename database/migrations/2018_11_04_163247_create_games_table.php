<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamesTable extends Migration {

	public function up()
	{
		Schema::create('games', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('platform_id')->unsigned();
			$table->string('name', 30);
			$table->boolean('is_finished');
			$table->date('release_date');
			$table->date('created_at');
		});
	}

	public function down()
	{
		Schema::drop('games');
	}
}