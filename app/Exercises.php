<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercises extends Model {
	protected $table = 'exercise';
	protected $primaryKey = 'id';

	const CREATED_AT = null;
	const UPDATED_AT = null;

	protected $fillable = array('*');

	public function getAnswersRandomOrder(){
		$res = array();

		if($this->answer1 != "")
			$res[] = [1, $this->answer1];

		if($this->answer2 != "")
			$res[] = [2, $this->answer2];

		if($this->answer3 != "")
			$res[] = [3, $this->answer3];

		if($this->answer4 != "")
			$res[] = [4, $this->answer4];

		shuffle($res);
		return $res;
	}

}
