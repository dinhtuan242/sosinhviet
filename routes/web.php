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

Route::get('', 'Frontend\Home\HomePageController@main')->name('home-page');
Route::get('dang-nhap', 'Frontend\Users\AccountController@signIn')->name('user.sign-in');
Route::get('dang-ky', 'Frontend\Users\AccountController@signUp')->name('user.sign-up');
Route::get('dang-xuat', 'Frontend\Users\AccountController@signOut')->name('user.sign-out');
Route::get('/auth/redirect/{provider}', 'Frontend\Users\SocialController@redirect');
Route::get('/callback/{provider}', 'Frontend\Users\SocialController@callback');
