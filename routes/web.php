<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CryptoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get("/", function () {
    $data = HomepageController::homepageData();
    return view("homepage", $data);
});

Route::get("/crypto-police", function () {
    $data = CryptoController::cryptoData();
    return view("crypto", $data);
});