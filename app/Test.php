<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {
	protected $table = 'test';
	protected $primaryKey = 'id';

	//const CREATED_AT = null;
	//const UPDATED_AT = null;

	protected $fillable = array('*');

	// 1 test-nek sok testitem-je lehet
	// meghozza a test_id-val kotodik a testitems object a test id-jahoz
	public function items() {
		return $this->hasMany('App\TestItems', 'test_id');
	}

}
