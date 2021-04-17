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

Route::get('/', function () {
    return view('blog');
});
Route::get('/post/{id}', function () {
    return 'Hello World';
});
Route::get('/admin/', function () {
    return 'Hello World';
});
Route::get('/admin/create', function () {
    return 'Hello World';
});
Route::get('/admin/edit/{id}', function () {
    return 'Hello World';
});

