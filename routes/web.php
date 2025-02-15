<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}', function ($id) {
    return $id;
})->whereNumber('id');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return "ID: $id, Name: $name";
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

Route::match(['get', 'post'], '/home', function () {
    return 'Home Page';
});

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
