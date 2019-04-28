<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {
	protected $table = 'test';
	protected $primaryKey = 'id';

	//const CREATED_AT = null;
	//const UPDATED_AT = null;

	protected $fillable = array('*');

}
