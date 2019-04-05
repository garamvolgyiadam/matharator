<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Topic;

class TopicController extends Controller {

	public function index() {
		$topics = Topic::all();
		//dd($topics); // die and dump

		return view('apps.topics.index', compact(['topics']));
	}
}
