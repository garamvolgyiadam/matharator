<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Test;
use App\User;
use App\TestItems;
use App\Exercises;
use Illuminate\Http\Request;

class TestController extends Controller {

	public function index() {
		$topics = Topic::all();
		return view('apps.test.index',compact(['topics','uptime']));
	}

/**
 *
 * Ez kapja el a postolt topikokat, azoknak az összes adatát
 * Lekéri a 10 feladat id-ját és eltárolja ezt egy session-ben -> nem lesz egy kérdés 2x
 * 					SELECT id FROM `exercise` WHERE exercise.topic_id IN (4,7,9) ORDER BY rand() LIMIT 10
 *
 *
 * $request fogja tárolni az összes postolt adatot ( topicok és a laravel tokent )
 * $topics fogja tárolni csak a topic id-kat
 *
 */
	public function dotest(Request $request) {
		if (!array_key_exists('topic', $request->all())) { //ha nem választok ki semmilyen témakört, amiből tesztet generálnék, visszadob a témakörkiválasztáshoz
						return redirect('/test');
		}
		$topics=$request->all()['topic'];

		// lekeri a 10 excerciset, random 10-et raszukitve a topicokra
		// a 10 excersise-on belul berandomolja a valaszok sorrendjet
		// atadja a viewnak
		//return view('apps.test.index',compact(['topics']));
		$exercises = Exercises::whereIn('topic_id', $topics)->inRandomOrder()->limit(10)->get(); //10db kérdést lekér válasszal
		return view('apps.test.dotest',compact(['exercises']));

	}

	public function savetest(Request $request) {
		if (!\Auth::check())
		{
				return redirect('/login');
		}

		$userid =  \Auth::id();

		if (!array_key_exists('data', $request->all())) { //ha nem választok ki semmilyen témakört, amiből tesztet generálnék, visszadob a témakörkiválasztáshoz
						return redirect('/test');
		}
		$data=$request->all()['data'];

		$test = new Test();
		$test -> user_id = $userid;
		$test ->save();

		foreach ($data as $exercise_id => $answer) {
			if ($answer=="") {
				$answer = null;
			}
			$t = new TestItems();
			$t->test_id = $test->id;
			$t->exercise_id = $exercise_id;
			$t->answer = $answer;
			$t->save();
		}

		//dd($test->id);
	}

}
