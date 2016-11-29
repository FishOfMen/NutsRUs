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
//Route::resource('/SignUp', 'SignUpController');

Route::resource('/EditInfo', 'EditInfoController');

Route::resource('/History', 'HistoryController');

Route::resource('/ThankYou', 'ThankYouController');

Route::resource('/AboutLogin', 'AboutLoginController');

Route::resource('/Checkout', 'CheckoutController');

Route::resource('/Order', 'OrderController');


//Route::resource('/SignUp/Shipping', 'SignUpController');

Route::get('/', function () {
    return view('AboutLogin.index');
});

Route::get('/StyleGuide', function(){
    return view('pages.style-guide');
});

//Login/logout stuff
/*Route::get('index', array('uses' => 'AboutLoginController@index'));
Route::post('login', array('uses' => 'AboutLoginController@login'));
Route::get('logout', array('uses' => 'AboutLoginController@logout'));*/
Auth::routes();

Route::get('/home', 'HomeController@index');

//Shipping Information Stuff
Route::get('/SignUp/address', 'SignUpController@address');
Route::post('/SignUp/shipping', 'SignUpController@shipping');
Route::get('SignUp/create', 'SignUpController@create');

//Edit Info
Route::post('/EditInfo/update', 'EditInfoController@update');