<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

 Route::post('register', 'ApiController@register');
 Route::post('otp-match', 'ApiController@otpMatch');

 Route::post('login', 'ApiController@login');
 
 Route::post('send-otp', 'ApiController@resendOtp');
 Route::post('forgetpassword', 'ApiController@forgetpassword');
 

 Route::post('edit-profile', 'ApiController@updateProfile');
 Route::post('get-profile', 'ApiController@getProfile');
 Route::post('storeletlong', 'ApiController@storeletlong');
 Route::post('homepage', 'ApiController@homepage');
 
 Route::post('getQuestion', 'ApiController@getQuestion');


 Route::post('storeQuestion', 'ApiController@storeQuestion');
 Route::post('prize', 'ApiController@prize');
 Route::post('withdrawal', 'ApiController@withdrawal');
 Route::post('withdrawalRequest', 'ApiController@withdrawalRequest');
 Route::post('bloglist', 'ApiController@bloglist');


 Route::post('changepassword', 'ApiController@changepassword');
 Route::post('battingRequest', 'ApiController@battingRequest');


  Route::post('myBatting', 'ApiController@myBatting');
    Route::get('howplay', 'ApiController@get');
  Route::post('myprofile', 'ApiController@myprofile');
  Route::post('history', 'ApiController@history');
  Route::post('historyDetails', 'ApiController@historyDetails');



 /*Route::post('login', 'AuthController@login');*/