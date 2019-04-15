<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

	Route::get('/', function () {
		return view('index');
	});

	Route::get('/topics',	'Apps\TopicController@index');

	Route::get('/learn/{topic_id}', 'Apps\LearnController@index')
				->where('topic_id', '[0-9]+');

	Route::get('/test', 'Apps\TestController@index');

	Route::post('/test/dotest', 'Apps\TestController@dotest');

	Route::get('/examples/{topic_id}', 'Apps\ExamplesController@index')
				->where('topic_id', '[0-9]+');

	Auth::routes(['verify' => true]);

	Auth::routes();

	//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

	/*Route::get('profile', function () {
	    // Only verified users may enter...
	})->middleware('verified');*/
