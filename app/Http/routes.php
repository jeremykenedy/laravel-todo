<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// PUBLIC HOMEPAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

// INSTANTIATE AUTH ROUTING AND ESTABLISH LOGOUT ROUTE
Route::auth();

// USER HOMEPAGE ROUTE
Route::get('/home', 'HomeController@index');

// USER PROJECTS ROUTES
Route::resource('projects', 'ProjectsController');

// USER TASKS ROUTES
Route::resource('tasks', 'TasksController');

// SLUG BASED USER TASKS ROUTES
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});

// SLUG BASED USER PROJECTS ROUTES
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});