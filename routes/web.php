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

// Route::get('/',function(){

//     return view('Auth.profile');
// });
Route::get('/login','AuthController@login')->name('login');
Route::post('/login','AuthController@auth');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dasboard','dasboardcontroller@index');
    Route::get('registo-staff','staffController@index');
    Route::post('registo-staff','staffController@create');
    Route::get('registo-staff/{id}','staffController@delete');
    Route::post('registo-staff/{id}','staffController@post');
    Route::get('registo-staff/detail/{id}','staffController@detail');
    Route::post('registo-staff/detail/{id}','staffController@detail');
    Route::get('report','staffController@report');
    //todo ida nee Mak Auth Controller
    Route::get('logout','AuthController@logout');
    Route::get('profile','AuthController@profile');
    Route::post('profile/auth','AuthController@chagepassword');
    Route::post('profile/foto','AuthController@foto');
    Route::get('user-list','AuthController@list');
    //?  ida nee Mak Ending Husi AuthController

    //todo ida nee Mak Controller husi position
    Route::get('position','positionController@index');
    Route::post('position','positionController@create');
    Route::get('position/delete/{id}','positionController@delete');
    Route::get('position/edit/{id}','positionController@edit');
    Route::put('position/edit/{id}','positionController@update');
    //todo ida nee Mak Rohan husi Controller Posistion
    //? ida nee mak Location Controller
    Route::get('location','locationController@index');
    Route::post('location','locationController@create');
    Route::get('location/delete/{id}','locationController@delete');
    Route::get('location/edit/{id}','locationController@edit');
    Route::put('location/edit/{id}','locationController@update');
    //? ida nee mak Location Controller ID
    //todo ida nee mak Controller
    Route::get('teka','tekaController@index');
    Route::post('teka','tekaController@create');
    Route::get('teka/delete/{id}','tekaController@delete');
    Route::get('teka/detail/{id}','tekaController@detail');
    //todo ida nee mak Rohan husi teka Controller
    Route::post('file','documentController@create');
    Route::get('file/delete/{id}','documentController@delete');
});