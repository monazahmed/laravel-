<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('post');
});




Route::get('/post/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post ID: {$id}</h1>";
    } else {
        return "<h1>no id found</h1>";
    }
})->where('id','[0-9]+');


