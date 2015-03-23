<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'User';
	public $timestamps = true;

	public function Projects()
	{
		return $this->hasMany('Project');
	}

}