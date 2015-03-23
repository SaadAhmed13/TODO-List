<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	protected $table = 'Task';
	public $timestamps = true;

	public function Project()
	{
		return $this->hasOne('Project', 'projectid');
	}

}