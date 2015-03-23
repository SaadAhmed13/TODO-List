<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $table = 'Project';
	public $timestamps = true;

	public function Owner()
	{
		return $this->hasOne('User', 'id');
	}

	public function Tasks()
	{
		return $this->hasMany('User');
	}

}