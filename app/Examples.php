<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examples extends Model {
	protected $table = 'examples';
	protected $primaryKey = 'id';

	const CREATED_AT = null;
	const UPDATED_AT = null;

	protected $fillable = array('*');

}
