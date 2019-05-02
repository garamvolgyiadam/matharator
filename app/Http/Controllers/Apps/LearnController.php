<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Exercises;

class LearnController extends Controller {

	public function index($topic_id) {
		//var_dump($topic_id);
		$exercises = Exercises::where('topic_id',$topic_id)->get();
		//dd($exercises); // die and dump
		return view('apps.exercises.index', compact(['exercises']));
	}

}
