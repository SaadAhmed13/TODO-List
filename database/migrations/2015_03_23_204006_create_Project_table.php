<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTable extends Migration {

	public function up()
	{
		Schema::create('Project', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('ownerid')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Project');
	}
}