<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {
	protected $table = 'topic';
	protected $primaryKey = 'id';

	const CREATED_AT = null;
	const UPDATED_AT = null;

	protected $fillable = array('*');

}
