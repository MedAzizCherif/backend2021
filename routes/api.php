<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->User();
});




// Route::get('/verified-only', function(Request $request){

//     dd('your are verified', $request->User()->name);
// })->middleware('auth:api','verified');


// Route::get('/email/resend', 'App\Http\Controllers\VerificationController@resend')->name('verification.resend');

// Route::get('/email/verify/{id}/{hash}', 'App\Http\Controllers\VerificationController@verify')->name('verification.verify');

Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('signup', 'AuthController@signup');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');

});

// Route::group([

//     'namespace' => 'App\Http\Controllers',

// ], function ($router) {
    
  

// });

Route::get('getUtilisateurById/{id}','App\Http\Controllers\Controller@getUtilisateurById');
Route::put('updateUtilisateur/{id}','App\Http\Controllers\Controller@updateUtilisateur');
Route::delete('deleteUtilisateur/{id}','App\Http\Controllers\Controller@deleteUtilisateur');

Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('getProspect' ,'ProspectController@getProspect');
    Route::get('getProspectById/{id}','ProspectController@getProspectById');
    Route::post('addProspect','ProspectController@addProspect');
    Route::put('updateProspect/{id}','ProspectController@updateProspect');
    Route::delete('deleteProspect/{id}','ProspectController@deleteProspect');

});


Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('getMonnaie' ,'MonnaieController@getMonnaie');
    Route::get('getMonnaieById/{id}','MonnaieController@getMonnaieById');
    Route::post('addMonnaie','MonnaieController@addMonnaie');
    Route::put('updateMonnaie/{id}','MonnaieController@updateMonnaie');
    Route::delete('deleteMonnaie/{id}','MonnaieController@deleteMonnaie');

});


Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('getRegime' ,'RegimeController@getRegime');
    Route::get('getRegimeById/{id}','RegimeController@getRegimeById');
    Route::post('addRegime','RegimeController@addRegime');
    Route::put('updateRegime/{id}','RegimeController@updateRegime');
    Route::delete('deleteRegime/{id}','RegimeController@deleteRegime');

});

