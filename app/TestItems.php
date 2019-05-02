<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestItems extends Model {
	protected $table = 'test_items';
	protected $primaryKey = 'id';

	const CREATED_AT = null;
	const UPDATED_AT = null;

	protected $fillable = array('*');

	// az exercise id-ja = a mi exercise_id-nkkal
	public function exercise() {
		return $this->hasOne('App\Exercises', 'id', 'exercise_id');
																		//foreign_key, local_key
	}

}
