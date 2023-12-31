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
    return View("pages.index");
});

Route::get('/information', function () {
    return View("pages.information");
});

Route::get('/artists', function () {
    return View("pages.artists");
});

Route::get('/calendar', function () {
    return View("pages.calendar");
});

Route::get('/plans', function () {
    return View("pages.plans");
});
