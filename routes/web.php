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
Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/videos', 'PagesController@getVideos');
Route::get('/contact', 'PagesController@getContact');
Route::get('/sponsors', 'PagesController@getSponsors');
Route::get('/signin', 'PagesController@getSignIn');
Route::get('/signout', 'PagesController@getSignOut');


Route::get('/signUp', 'PagesController@getSignUp');
Route::post('/signUp/request', 'PagesController@requestSignUp');
Route::post('/signIn/request', 'PagesController@requestSignIn');

Route::get('/welcom', function () {

    return view('welcom');
});

