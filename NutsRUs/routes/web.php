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
Route::resource('/SignUp', 'SignUpController');

Route::resource('/EditInfo', 'EditInfoController');

Route::resource('/History', 'HistoryController');

Route::resource('/ThankYou', 'ThankYouController');

Route::resource('/AboutLogin', 'AboutLoginController');

Route::resource('/Checkout', 'CheckoutController');

Route::resource('/Order', 'OrderController');

Route::get('/', function () {
    return view('AboutLogin.index');
});

Route::get('/StyleGuide', function(){
    return view('pages.style-guide');
});