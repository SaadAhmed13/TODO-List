<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Project', function(Blueprint $table) {
			$table->foreign('ownerid')->references('id')->on('User')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Task', function(Blueprint $table) {
			$table->foreign('projectid')->references('id')->on('Project')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Project', function(Blueprint $table) {
			$table->dropForeign('Project_ownerid_foreign');
		});
		Schema::table('Task', function(Blueprint $table) {
			$table->dropForeign('Task_projectid_foreign');
		});
	}
}