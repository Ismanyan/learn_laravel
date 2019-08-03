<?php

Route::get('/','PegawaiController@index');
Route::get('/cari','PegawaiController@cari');

Route::get('/input','IsmanyanController@input');
Route::post('/proses','IsmanyanController@proses');

Route::get('/siswa', 'SiswaController@index');