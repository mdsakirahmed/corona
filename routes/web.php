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



Route::get('/', 'CertificateController@index')->name('CertificateControllerIndex');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'BackendController@dashboard')->name('BackendControllerDashboard');
Route::get('/admin/question-answer', 'BackendController@QuestionAnswer')->name('BackendControllerQuestionAnswer');
Route::get('/admin/question-answer-edit/{id}', 'BackendController@QuestionAnswerEdit')->name('BackendControllerQuestionAnswerEdit');
Route::get('/admin/question-answer-delete/{id}', 'BackendController@QuestionAnswerDelete')->name('BackendControllerQuestionAnswerDelete');
Route::get('/admin/user', 'BackendController@user')->name('BackendControllerUser');
Route::post('/admin/question-answer/insert', 'BackendController@InsertQuestionAnswer')->name('BackendControllerInsertQuestionAnswer');
Route::post('/admin/question-answer/edit/{id}', 'BackendController@EditQuestionAnswer')->name('BackendControllerEditQuestionAnswer');
Route::post('/admin/user/insert', 'BackendController@InsertUser')->name('BackendControllerInsertUser');
