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
    \Illuminate\Support\Facades\Session::flush();
    return view('index');
});

Route::get('/home', function () {
    \Illuminate\Support\Facades\Session::flush();
    return view('home');
});

Route::get('/howto', function () {

    return view('howto');
});

Route::get('/view_product', 'SoftwareController@getAll');

Route::get('/compare', function () {
    return view('compare');
});
Route::post('/Comparing', 'CompareController@Comparing');
