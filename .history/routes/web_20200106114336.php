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
    return view('auth.login');
});
Route::get('/apidoc', function () {
    return view('apidoc');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::any('/useradd', 'UserController@add')->name('useradd');
Route::any('/userview', 'UserController@index')->name('userview');
Route::any('/edituser/{id}', 'UserController@edit')->name('edituser');
Route::any('/deleteuser/{id}', 'UserController@delete')->name('deleteuser');


Route::any('/addblog', 'BlogController@add')->name('blogadd');
Route::any('/blogview', 'BlogController@index')->name('blogview');
Route::any('/editblog/{id}', 'BlogController@edit')->name('editblog');
Route::any('/deleteblog/{id}', 'BlogController@delete')->name('deleteblog');


Route::any('/addcategory', 'CategoryController@add')->name('blogadd');
Route::any('/categoryview', 'CategoryController@index')->name('blogview');
Route::any('/editcategory/{id}', 'CategoryController@edit')->name('editblog');
Route::any('/deletecategory/{id}', 'CategoryController@delete')->name('deleteblog');

Route::any('/addhomeimages', 'CategoryController@addhomeimages')->name('addhomeimages');
Route::any('/homeimageview', 'CategoryController@indexhomeimages')->name('homeimagesview');
Route::any('/edithomeimages/{id}', 'CategoryController@edithomeimages')->name('edithomeimages');
Route::any('/deletehomeimages/{id}', 'CategoryController@deletehomeimages')->name('deletehomeimages');


Route::any('/addquestion', 'QuestionController@add')->name('addquestion');
Route::any('/viewquestion', 'QuestionController@index')->name('viewquestion');
Route::any('/editquestion/{id}', 'QuestionController@edit')->name('editquestion');
Route::any('/deletequestion/{id}', 'QuestionController@delete')->name('deletequestion');

Route::any('/setting', 'UserController@setting')->name('setting');

Route::any('/withdrawalpending', 'WithdrawalController@withdrawalpending')->name('withdrawalpending');
Route::any('/withdrawalcom', 'WithdrawalController@index')->name('withdrawalcom');
Route::any('/updatestatus/{id}', 'WithdrawalController@updatestatus')->name('updatestatus');
Route::any('/prizedistribute', 'WithdrawalController@prizedistribute')->name('prizedistribute');
Route::any('/winnerlist', 'WithdrawalController@winnerlist')->name('winnerlist');

Route::any('/addquestionset', 'QuestionController@addquestionset')->name('addquestionset');
Route::any('/viewquestionset', 'QuestionController@viewquestionset')->name('viewquestionset');
Route::any('/editquestionset/{id}', 'QuestionController@edit')->name('editquestion');

Route::any('/logout', 'UserController@logout')->name('logout');

