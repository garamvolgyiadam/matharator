<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Examples;

class ExamplesController extends Controller {

	public function index($topic_id) {
		//var_dump($topic_id);
		$examples = Examples::where('topic_id','=',$topic_id)->orderBy('ordering')->get();
		//dd($examples); // die and dump

		return view('apps.examples.index', compact(['examples']));
	}

}
