<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('games', function(Blueprint $table) {
			$table->foreign('platform_id')->references('id')->on('platforms')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('games', function(Blueprint $table) {
			$table->dropForeign('games_platform_id_foreign');
		});
	}
}