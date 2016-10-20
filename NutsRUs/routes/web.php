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

/*
//the default route:
Route::get('/', function () {
    return view('welcome');
});
*/


//public index
Route::get('/', function () {  
    return view('pages.home');
});

//private index
Route::get('home', function()
{
    return View::make('pages.home');
});


Route::get('history', function()
{
    return View::make('pages.history');
});


Route::get('paypal', function()
{
    return View::make('pages.paypal');
});


Route::get('sign-up', function()
{
    return View::make('pages.sign-up');
});


Route::get('style-guide', function()
{
    return View::make('pages.style-guide');
});


Route::get('update', function()
{
    return View::make('pages.thanks');
});


Route::get('update', function()
{
    return View::make('pages.update');
});


