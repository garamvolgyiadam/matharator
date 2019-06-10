<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\User;
use App\Test;
use App\TestItems;
use App\Exercises;

class UserTestController extends Controller {

	public function index() {
		if (!\Auth::check())
		{
				return redirect('/login');
		}
		else
		{

			$userid =  \Auth::id();

			$tests = Test::where('user_id',$userid)->get();

			return view('apps.usertest.index', compact(['tests']));
		}
	}

	public function show($test_id) {
		$userid =  \Auth::id();

		// megnezzuk a belepett user a sajat testjet akarja-e megnyitni
		$test = Test::where('id',$test_id)->first();

		if ($test->user_id != $userid) {
			die('Auth error');
		}

		$testitems = TestItems::where('test_id',$test_id)->get();
		return view('apps.usertest.show', compact(['testitems']));
	}
}
