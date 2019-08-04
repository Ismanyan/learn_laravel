<?php

Route::get('/upload', 'UploadController@upload');
Route::get('/upload_gambar', 'UploadController@upload_gambar');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');