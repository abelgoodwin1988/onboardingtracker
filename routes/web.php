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

Route::get('/', function () {
    return view('layouts.master');
});

// PERSON
Route::get('/person', 'PersonController@index');

// CANDIDATES

// EMPLOYEES

// LOOKUPS, :REQUIREMENTS, :MENTOR_TYPES, :POSITIONS
// Because we have multiple identical classes, these will all be routed
  // to a place where their respective controllers will then take over.
Route::get('/look_ups', function () {
    return view('look_ups.show');
});
