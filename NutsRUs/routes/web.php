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
Route::resource('/SignUp', 'SignupController');

Route::resource('/EditInfo', 'EditInfoController');

Route::resource('/History', 'HistoryController');

Route::resource('/ThankYou', 'ThankYouController');

Route::get('/', function () {
        return view('welcome');
});

//Route::get('/', function ()  {
//   return view('index');
//});

//Route::get('SignUp', function () {
//    return view('SignUp');
//});
