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

Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/vercalificacorredor', function () {
//     return view('vercalificacorredor');
// })->name('vercalificacorredor');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@index')->middleware('can:adminonly-users')->name('admin.index');

Route::get('/charts', 'AdminController@charts')->middleware('can:adminonly-users');

Route::resource('juridicos','CorredorjuridicoController');

Route::resource('naturales','CorredornaturalController');

Route::get('checknaturalescontroller', 'ChecknaturalesController@index');

Route::post('vernaturalescontroller','ChecknaturalesController@verNatural');

Route::post('checknaturalescontroller','ChecknaturalesController@formSubmit');

Route::post('calificanaturalescontroller','CalificanaturalesController@formSubmit');

//Route::post('vercalificanaturalescontroller','CalificanaturalesController@index');


Route::post('calificanaturalescontrollerupdate','CalificanaturalesController@store')->middleware('can:all-users');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users','UsersController', ['except' => ['show','create','store']]);



});

Route::resource('/perfil','GenericuserController')->middleware('can:generic-users');