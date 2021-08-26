<?php

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

Route::get('/', function () {

    $brokers = [];
    $fees = [];

    // Test database connection
    try {
        DB::connection()->getPdo();

        $brokers = DB::select('select * from cryptofx');
        $fees = DB::select('select * from fees');

    } catch (\Exception $e) {
        error_log("Database error: " . $e->getMessage());
    }


    $data = [
        'brokers' => $brokers,
        'fees' => $fees,
    ];

    return view('welcome', $data);
});
