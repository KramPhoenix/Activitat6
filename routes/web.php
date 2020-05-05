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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/properties', 'PropertiesController@index')->name('properties');

Route::resource('myproperties', 'MyPropertiesController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);

Route::get('/myproperties/{id}/delete', 'MyPropertiesController@destroy')->name('myproperties.destroy');

Route::get('/contact', function () {
    return view('contacto');
});

/* ADMIN */

Route::prefix('admin')->name('admin.')->middleware('auth', 'role')->group(function () {

    Route::get('/', 'AdminHomeController@index')->name('home');

    Route::resource('users', 'AdminUserController')->only([
        'index', 'edit', 'update'
    ]);

    Route::get('/users/{id}/delete', 'AdminUserController@destroy')->name('users.destroy');


    Route::resource('properties', 'AdminPropertyController')->only([
        'index', 'show', 'edit', 'update'
    ]);

    Route::get('/properties/{id}/delete', 'AdminPropertyController@destroy')->name('properties.destroy');

});
