<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// INDEX, landing page!
Route::get('/', function () {
    return view('master_index');
});

// INDEX, tool landing!
Route::get('/tool', function () {
    return view('index');
});

// PERSON
Route::get('/people', 'PersonController@index');
Route::get('/people/create', 'PersonController@create');
Route::post('/people/create_person', 'PersonController@store');

// CANDIDATES
Route::get('/candidates', 'CandidateController@index');

// EMPLOYEES
Route::get('/employees', 'EmployeeController@index');

// LOOKUPS; :REQUIREMENTS, :MENTOR_TYPES, :POSITIONS
// Because we have multiple identical classes, these will all be routed
  // to a place where their respective controllers will then take over.
Route::get('/look_ups', function () {
    return view('look_ups.index');
});
