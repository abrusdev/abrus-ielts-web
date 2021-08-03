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


Route::group(["prefix" => "/home"], function () {

    Route::get("/speaking", "App\\Http\\Controllers\\Home\\SpeakingController@index");
    Route::post("/speaking", "App\\Http\\Controllers\\Home\\SpeakingController@store")->name("speaking.topics");

});
