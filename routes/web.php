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

Route::get('/home', "NewsController@index");
Route::get('/', "NewsController@index");

Route::resource('news', 'NewsController')->only('index', 'show');
Route::resource('addressbook', 'AddressBookController')->only('index');
Route::resource('documents', 'DocumentsController')->only('index');
Route::resource('birthday', 'BirthDayController')->only('index');
Route::resource('links', 'LinksController')->only('index');
Route::group(['namespace' => 'Management', 'prefix' => 'management'], function () {
    Route::resource('addressbook', 'AddressBookController')
        ->except('show')
        ->names('addressbook.management');
    Route::resource('news', 'NewsController')
        ->except('show')
        ->names('news.management');
    Route::resource('documents', 'DocumentsController')
        ->except('edit', 'update')
        ->names('documents.management');
    Route::resource('birthday', 'BirthDayController')
        ->only('index', 'edit', 'update')
        ->names('birthday.management');
    Route::resource('links', 'LinksController')
        ->except('show', 'edit', 'update')
        ->names('links.management');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::resource('users', 'UsersController')
        ->except('show', 'create', 'store')
        ->names('admin.users');
    Route::resource('roles', 'RolesController')
        ->names('admin.roles');
});


Auth::routes();

