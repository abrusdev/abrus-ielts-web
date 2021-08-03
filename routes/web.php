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

    Route::get("/speaking", "App\\Http\\Controllers\\Home\\Speaking\\IndexController@index")->name("speaking.topics");
    Route::post("/speaking", "App\\Http\\Controllers\\Home\\Speaking\\IndexController@store");

    Route::get("/speaking/{id}/questions", "App\\Http\\Controllers\\Home\\Speaking\\QuestionController@index")->name("speaking.questions");
    Route::post("/speaking/{id}/questions", "App\\Http\\Controllers\\Home\\Speaking\\QuestionController@store");

});
