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
Route::get('dang-xuat', 'Frontend\Users\SocialController@signOut')->name('user.sign-out');
Route::get('/auth/redirect/{provider}', 'Frontend\Users\SocialController@redirect');
Route::get('/callback/{provider}', 'Frontend\Users\SocialController@callback');
Route::get('/nha-cung-cap/{campaign}/{filter?}', 'Frontend\Pages\CampaignProductController@main')
    ->name('campaign-product');
Route::get('/tim-kiem', 'Frontend\Pages\SearchProduct@main')->name('search');
Route::get('bai-viet', 'Frontend\Pages\BlogController@main')->name('blog.list');
Route::get('bai-viet/{slug}', 'Frontend\Pages\BlogController@detail')->name('blog.detail');
Route::group(['prefix' => 'admin', 'middleware' => ['is_admin']], function () {
    Route::get('', 'Admin\Pages\HomeController@main')->name('admin-home');
    Route::group(['prefix' => 'post'], function () {
        Route::get('list', 'Admin\Pages\PostController@index')->name('post.list');
        Route::get('/create', 'Admin\Pages\PostController@create')->name('post.create');
        Route::post('/create', 'Admin\Pages\PostController@store')->name('post.store');
        Route::get('edit/{id}', 'Admin\Pages\PostController@edit')->name('post.edit');
        Route::put('edit/{id}', 'Admin\Pages\PostController@update')->name('post.update');
        Route::delete('delete/{id}', 'Admin\Pages\PostController@destroy')->name('post.destroy');
    });
});
