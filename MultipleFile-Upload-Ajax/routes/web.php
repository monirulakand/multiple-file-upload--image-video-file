<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('upload');
});

Route::post('/fileUp', 'UploadController@onUpload');
