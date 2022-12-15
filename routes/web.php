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
    $data = [
        'saluto' => 'Hello World'
    ];
    return view('home', $data);
})->name('homepage');


Route::get('/about', function () {
    $data = [
        'saluto' => 'Hello World'
    ];
    return view('about', $data);
})->name('about');

Route::get('/contacts', function () {
    $data = [
        'saluto' => 'Hello World'
    ];
    return view('contacts', $data);
})->name('contacts');
