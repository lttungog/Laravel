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

Route::get('/', 'HomeController@showWelcome');

Route::get('/', function () {
//    return 'Welcome Home by Luong Thanh Tung';
    return view('welcome');
});

Route::get('about', function () {
    return 'About Content';
});

Route::get('about/direction', function () {
    return 'Directions go here';
});

Route::any('submit-form', function () {
    return 'Process Form';
});

Route::get('about/{theSubject}', function ($theSubject) {
    return $theSubject. ' content goes here';
});

Route::get('about/{Art}/{Price}', function ($Art, $Price) {
    return "The product is $Art and the price is $Price";
});

Route::get('where', function () {
    return Redirect::to('about/directions');
});
