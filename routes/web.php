<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/firstname', function () {
    return "tornike";
});

Route::get('/lastname', function () {
    return 'gherkenashvili';
});

Route::get('/age', function () {
    return '22';
});

Route::get('/hobie', function () {
    return 'playing guitar';
});

Route::get('/address', function() {
    return 'Tbilisi';
});

Route::post('/save', function () {
    return response() -> json([
        'msg' => 'saved'
    ]);
});
