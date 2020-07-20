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
//return a view
Route::get('/', function () {
    return view('home');
});
/*
Route::get('home', function () {
    return view('example1/home');
});
Route::get('animals', function () {
    return view('example1/animals');
});
Route::get('home2', function () {
    return view('example2/home');
});
Route::get('animals2', function () {
    return view('example2/animals');
});
//return a controller
Route::get('breeds','BreedController@getAll');*/

//-----------------------------------------------------

/*//return a string
Route::get('home', function () {
    //echo "<h1>I think I get it!</h1>";
    //return ["name"=>"josy"];
    return view('example1/home');
});
//Route::get('test', function(){
    //return view('test', ['name'=> request ('name')];
  //  ]);

//});


Route::get('/posts/{post}', function($post){
   //return $post;
    $posts = [
        'my-first-post'=> 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (! array_key_exists($post, $posts)){
        abort(404, 'Sorry, that post was not found.');
    }
    else {
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
});
//load a controller method
Route::get('/posts/{post}', 'PostsController@show');*/
