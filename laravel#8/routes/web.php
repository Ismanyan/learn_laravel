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
Route::get('blog', 'Blog@index');
Route::get('blog/tentang', 'Blog@tentang');
Route::get('blog/kontak', 'Blog@kontak');

// Blog page and send request data from url
Route::get('blog/getDataUrl/{data}', 'Blog@getDataUrl');
Route::get('/form', 'Blog@form');
Route::post('/form/getDataPost', 'Blog@getDataPost');
// Nyan Page
Route::get('/nyan', function(){
    return "YES WE NYAN";
});
