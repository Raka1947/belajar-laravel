<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/biodata', function () {
    return view('biodata', [
        'name' => 'Raka Aditya Saputra',
        'nim' => '19110201',
        'prodi' => 'IF-RPL S1',
        'smt' => '7 (Ganjil)'
    ]);
});

Route::get('/perulangan', function () {
    return view('perulangan');
});

Route::get('/percabangan', function () {
    return view('percabangan');
});
