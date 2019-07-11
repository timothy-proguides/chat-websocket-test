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

Route::any('{uri}', function (\Illuminate\Http\Request $request) {
    $message = "";
    $message .= "Method: " . $request->method() . "\n";
    $message .= "Uri: " . $request->fullUrl() . "\n";
    $message .= "Data: " . json_encode($request->all()) . "\n";
    $message .= "\n";

    Log::info($message);
    return "HERE";
})->where('uri', '.*');
