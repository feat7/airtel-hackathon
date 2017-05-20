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
});

Route::resource('solutions', 'SolutionController');
Route::resource('ai', 'ChatQuestionController');

Route::get('/api/question/{question}', 'ChatQuestionController@getQuestionById');
// Route::get('/api/question/{answer}', 'ChatQuestionController@getQuestionByAnswerId');
Route::get('/api/answers/{question}', 'ChatAnswerController@getAnswersByQuestionId');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
