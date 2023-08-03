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
    return view('dashboard');
});

Route::prefix('tables')->group(function () {
    Route::get('/gridjs', function () {
        return view('tables.gridjs');
    });
    Route::get('/static-table', function () {
        return view('tables.static');
    });
    Route::get('/tabulator', function () {
        return view('tables.tabulator');
    });
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});
