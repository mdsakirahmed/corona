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
Route::post('/certificate', 'CertificateController@store')->name('CertificateControllerStore');

Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//User
//Route::group(['middleware'=>['auth']], function (){


//});
//Admin
Route::group(['middleware'=>['auth','admin']], function (){

    Route::get('/admin/dashboard', 'BackendController@dashboard')->name('BackendControllerDashboard');
    Route::get('/admin/question-answer', 'BackendController@QuestionAnswer')->name('BackendControllerQuestionAnswer');
    Route::get('/admin/question-answer-edit/{id}', 'BackendController@QuestionAnswerEdit')->name('BackendControllerQuestionAnswerEdit');
    Route::get('/admin/question-answer-delete/{id}', 'BackendController@QuestionAnswerDelete')->name('BackendControllerQuestionAnswerDelete');
    Route::get('/admin/user', 'BackendController@user')->name('BackendControllerUser');
    Route::post('/admin/question-answer/insert', 'BackendController@InsertQuestionAnswer')->name('BackendControllerInsertQuestionAnswer');
    Route::post('/admin/question-answer/edit/{id}', 'BackendController@EditQuestionAnswer')->name('BackendControllerEditQuestionAnswer');
    Route::post('/admin/user/insert', 'BackendController@InsertUser')->name('BackendControllerInsertUser');

    Route::get('/admin/certificate', 'CertificateSetupController@CertificateSetup')->name('CertificateSetupControllerCertificateSetup');
    Route::post('/admin/certificate-update', 'CertificateSetupController@CertificateEdit')->name('CertificateSetupControllerCertificateEdit');

//Setting View
    Route::get('/admin/setting', 'BackendController@setting')->name('BackEndControllerSetting');
    //Result
    Route::get('/admin/result', 'BackendController@result')->name('BackEndControllerResult');
//Update Common Website Information * in Setting view
    Route::post('/admin/CommonInformationOfWebsiteEdit', 'CommonWebsiteInfoController@edit')->name('CommonInformationOfWebsiteEdit');
//Add Social Links * in Setting view
    Route::post('/admin/SocialMediaLinkOfWebsiteControllerStore', 'SocialMediaLinkOfWebsiteController@store')->name('SocialMediaLinkOfWebsiteControllerStore');
//Add Phone Number * in Setting view
    Route::post('/admin/ContactNumberOfWebsiteControllerStore', 'ContactNumberOfWebsiteController@store')->name('ContactNumberOfWebsiteControllerStore');
//Add Emails * in Setting view
    Route::post('/admin/EmailAddressOfWebsiteControllerStore', 'EmailAddressOfWebsiteController@store')->name('EmailAddressOfWebsiteControllerStore');
//Add Address * in Setting view
    Route::post('/admin/OfficialAddressOfWebsiteControllerStore', 'OfficialAddressOfWebsiteController@store')->name('OfficialAddressOfWebsiteControllerStore');
//Update Other Website Information * in Setting view
    Route::post('/admin/OtherInformationOfWebsiteControllerEdit', 'OtherInformationOfWebsiteController@Edit')->name('OtherInformationOfWebsiteControllerEdit');
//Update Info Sender Email * in Setting view
    Route::post('/admin/InformationSenderEmailOfWebsiteControllerEdit', 'InformationSenderEmailOfWebsiteController@Edit')->name('InformationSenderEmailOfWebsiteControllerEdit');

});

