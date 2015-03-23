<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('User', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken('rememberToken');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('User');
	}
}