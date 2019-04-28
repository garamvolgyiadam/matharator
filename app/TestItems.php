<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestItems extends Model {
	protected $table = 'test_items';
	protected $primaryKey = 'id';

	const CREATED_AT = null;
	const UPDATED_AT = null;

	protected $fillable = array('*');

}
