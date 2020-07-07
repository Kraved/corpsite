<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/test', "TestController@index");

Route::resource('news', 'NewsController')->only('index', 'show');
Route::resource('addressbook', 'AddressBookController')->only('index');
Route::resource('documents', 'DocumentsController')->only('index');
Route::resource('birthdays', 'BirthDayController')->only('index');
Route::resource('links', 'LinksController')->only('index');
Route::group(['namespace' => 'Management', 'prefix' => 'management'], function () {
    Route::resource('addressbook', 'AddressBookController')
        ->except('show')
        ->names('admin.addressbook');
    Route::resource('news', 'NewsController')
        ->except('show')
        ->names('admin.news');
});

Auth::routes();

