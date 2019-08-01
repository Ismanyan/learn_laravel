<?php
// Home Page
Route::get('/','PegawaiController@index');

// Add Page
Route::get('/add','PegawaiController@add');
// Add newPegawai
Route::post('/add/newPegawai','PegawaiController@addnew');

// Edit Page 
Route::get('/edit/{id}','PegawaiController@edit');
// Edit Pegawai
Route::post('/edit/pegawai','PegawaiController@editPegawai');

// Delete Pegawai
Route::get('/hapus/{id}','PegawaiController@delete');