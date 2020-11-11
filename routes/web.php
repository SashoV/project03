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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index')->name('home');
Route::get('/category/{id}', 'MainController@show')->name('category');

Route::get('/admin', 'AdminController@index')->name('adminHome')->middleware('auth');

Route::get('/admin/categories', 'CategoriesController@index')->name('adminCategories')->middleware('auth');
Route::get('/admin/category/{id}', 'CategoriesController@show')->name('adminCategory')->middleware('auth');
Route::get('/admin/categories/create', 'CategoriesController@create')->name('createCategory')->middleware('auth');
Route::get('/admin/category/{id}/edit', 'CategoriesController@edit')->name('editCategory')->middleware('auth');

Route::post('/admin/categories', 'CategoriesController@store')->name('storeCategory')->middleware('auth');
Route::put('/admin/category/{id}', 'CategoriesController@update')->name('updateCategory')->middleware('auth');


Route::get('/admin/lectures', 'LecturesController@index')->name('adminLectures')->middleware('auth');
Route::get('/admin/lectures/create', 'LecturesController@create')->name('createLecture')->middleware('auth');

Route::post('/admin/lectures', 'LecturesController@store')->name('storeLecture')->middleware('auth');
Route::delete('/admin/lecture/{id}', 'LecturesController@destroy')->name('deleteLecture')->middleware('auth');

Route::get('/admin/banners', 'BannersController@index')->name('adminBanners')->middleware('auth');
Route::get('/admin/banner/{id}', 'BannersController@show')->name('adminBanner')->middleware('auth');
Route::get('/admin/banners/create', 'BannersController@create')->name('createBanner')->middleware('auth');
Route::get('/admin/banner/{id}/edit', 'BannersController@edit')->name('editBanner')->middleware('auth');

Route::post('/admin/banners', 'BannersController@store')->name('storeBanner')->middleware('auth');
Route::put('/admin/banner/{id}', 'BannersController@update')->name('updateBanner')->middleware('auth');


Route::get('/admin/emails', 'EmailsController@index')->name('adminEmails')->middleware('auth');
Route::post('/admin/emails', 'EmailsController@store')->name('storeEmail');

Route::group(['prefix' => 'admin'], function () {
    
    Auth::routes(['register' => false]);
    
});
