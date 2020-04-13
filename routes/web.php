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

// Back-End
Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


    Route::group(['prefix' => 'homepage'], function () {

    });
});
Route::get('mainContent/edit', 'Admin\AdminHomepageController@editMainContent')->name('homepage.editMainContent');
Route::post('mainContent/{id}/save', 'Admin\AdminHomepageController@saveMainContent')->name('homepage.saveMainContent');
Route::get('category/list', 'Admin\AdminHomepageController@category')->name('homepage.category.list');
Route::get('/home', 'HomepageController@index')->name('homepage.index');
Route::get('/', 'Admin\AdminController@index')->name('admin.index');
