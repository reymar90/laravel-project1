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

// Route::get('/', function () {
//     $posts = [
//         'Post 1',
//         'Post 2',
//         'Post 3',
//         'Post 4',
//         'Post 5'
//     ];   
//     return view('welcome', [
//         'posts' => $posts,
//         'food' => 'feed'
        
//     ]);
// }); 
    Route::get('/', 'PagesController@home');
    Route::get('/about', 'PagesController@about');
    Route::get('/contact', 'PagesController@contact');
    
    // Route::get('/projects', 'ProjectsController@index');
    // Route::post('/projects', 'ProjectsController@store');
    // Route::get('/projects/create', 'ProjectsController@create');
  


    Route::resource('players', 'PlayersController');

    Route::resource('projects', 'ProjectsController');


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


