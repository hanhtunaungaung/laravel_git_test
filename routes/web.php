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

Route::get('/', 'ReceipeController@index');





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

