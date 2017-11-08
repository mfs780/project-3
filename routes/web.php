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

Route::get('/', 'BillCalculatorController@index');

Route::post('/submit', 'BillCalculatorController@submit');

Route::get('/submit', 'BillCalculatorController@index');

Route::get('/summary', 'BillCalculatorController@summary');

Route::get('/env', function () {
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));
});
