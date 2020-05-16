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

// Route::get('/', 'ReceipeController@index');

Route::resource('receipe', 'ReceipeController');

// create

// Route::get('receipe', 'ReceipeController@index');
// Route::get('receipe/create', 'ReceipeController@createReceipeForm');
// Route::post('receipe', 'ReceipeController@create');

//show

// Route::get('receipe/{id}', 'ReceipeController@show');

//edit

// Route::get('receipe/{id}/edit', 'ReceipeController@edit');

//update

// Route::patch('receipe/{id}', 'ReceipeController@update');

//delete

// Route::delete('receipe/{id}', 'ReceipeController@delete');





// Route::get('php', 'HomeController@phpPage');
// Route::get('js', 'HomeController@jsPage');

// // Route::get('/', function () {
// //     return view('home',[ 'name' => "Home Page"]);
// // });

// Route::get('php', function () {
//     return view('php',[
//     	"data" => array(
//     		"lesson1" => "php lesson1",
//     		"lesson2" => "php lesson2",
//     		"lesson3" => "php lesson3",
//     	)

//     ]);
// });

// Route::get('js', function () {
//     return view('js', [
//     	"data" => array(
//     		"lesson1" => "js lesson1",
//     		"lesson2" => "js lesson2",
//     		"lesson3" => "js lesson3",
//     	)

//     ]);
// });


