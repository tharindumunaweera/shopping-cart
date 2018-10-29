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

Route::get('/', [
    'uses' =>'ProductController@getIndex',
    'as' =>'product.index'
]);

Route::get('/signup',[
    'uses' =>'UserController@getSignUp',
    'as' =>'user.signUp',
    'middleware'=>'guest'

]);



Route::post('/signup',[
    'uses'=>'UserController@postSignUp',
    'as' =>'user.signUp',
    'middleware'=>'guest'
]);

Route::get('/signin',[
    'uses' =>'UserController@getSignIn',
    'as' =>'user.signIn',
    'middleware'=>'guest'

]);

Route::post('/signin',[
    'uses'=>'UserController@postSignIn',
    'as' =>'user.signIn',
    'middleware'=>'guest'
]);

Route::get('/user/profile',[
    'uses' =>'UserController@getProfile',
    'as' =>'user.profile',
    'middleware'=>'auth'

]);

Route::get('/user/logout',[
    'uses' =>'UserController@getLogOut',
    'as' =>'user.logOut',
    'middleware'=>'auth'

]);
