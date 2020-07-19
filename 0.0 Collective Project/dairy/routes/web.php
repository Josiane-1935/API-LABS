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


/**
 *
 * dominos.co.ke
 * | / -> homepage
 * | orders -> ordersPage
 * | pizzas -> pizzasPage
 * | pay -> paymentPage
 *
 * GET(information retrieval) or POST (information update)
 * facade (front side of a building)
 */

Route::get('/', function () {
    return view('home');
});





/*
Route::get('home', function () {
  return view('example1/home');
});

Route::get('animals', function () {
    $animals = [
        'cow1' => 'ddd',
        'cow2' => 'eee'
    ];
    return view('example1/animals',['data' => $animals]);
});


//example 2

Route::get('home2', function () {
    return view('example2/home');
});

Route::get('animals2', function () {
    $animals = [
        'cow1' => 'ddd',
        'cow2' => 'eee'
    ];
    return view('example2/animals',['data' => $animals]);
});


//return some string
Route::get('about', function () {
  echo "<h1>About</h1>";
});

//load a controller method
Route::get('breeds','BreedController@getAll');

*/
