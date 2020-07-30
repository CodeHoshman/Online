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
// Page Home
Route::get('/', function () {
    return view('welcome');
});
// Contact Us
Route::get('/contact', function () {
    return view('/contact')->middleware('auth');;
});
Route::post('/contact','shopController@SaveContact');

// View All POST IN Home
Route::get('/shopping','shopController@index')->middleware('auth');;

// View All Shopper
Route::get('/shopper','shopController@viewShopper')->middleware('auth');

// View Shopper By Id
Route::get('/shopper/{id}','shopController@view');

// Get Details By Shopper UserID and PostId
Route::get('/shopper/{id}/{postId}','shopController@getDetails');

// Delete Post
Route::get('/delete/{id}','shopController@delete')->middleware('auth');;

// Get data Json To Card
Route::post('/order','shopController@order');
// Card
Route::get('/card','shopController@card');


Auth::routes(
[
    'register'=>false
]
);
Route::get('/home','HomeController@index')->name('home');



Route::get('/getid','shopController@get_user_id');











Route::get('/login', function () {
    return view('/login',['username'=>'Hoshmand','password'=>'polo@#$12']);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
