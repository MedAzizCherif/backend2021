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

Route::middleware('auth:api')->get('/user', function (Request $request) {
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
    Route::get('getUtilisateurById','AuthController@getUtilisateurById');
    Route::get('updateUtilisateur','AuthController@updateUtilisateur');
    Route::get('deleteUtilisateur','AuthController@deleteUtilisateur');

});
