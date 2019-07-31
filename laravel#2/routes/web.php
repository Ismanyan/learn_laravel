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

// Main page
Route::get('/', function () {
    return view('welcome');
});

// Blog page
Route::get('/blog', function(){
    return view('blog');
});

// Nyan Page
Route::get('/nyan', function(){
    return "YES WE NYAN";
});
