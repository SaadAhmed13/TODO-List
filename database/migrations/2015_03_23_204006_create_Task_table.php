<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskTable extends Migration {

	public function up()
	{
		Schema::create('Task', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->date('DueDate');
			$table->integer('projectid')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Task');
	}
}