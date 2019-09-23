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

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function(){
    Route::resource('remedy-manufacturer', 'RemedyManufacturerController');
    Route::resource('remedy', 'RemedyController');
    Route::resource('exam', 'ExamController');
    // Route::resource('payment-method', 'PaymentMethodController')->middleware('can:isAdmin,App\User');
    // Route::resource('profession', 'ProfessionController')->middleware('can:isAdmin,App\User');
    // Route::resource('knowledge-area', 'KnowledgeAreaController')->middleware('can:isAdmin,App\User');
    // Route::resource('course', 'CourseController')->middleware('can:isAdmin,App\User');
    // Route::resource('coupon', 'CouponController')->middleware('can:isAdmin,App\User');
    // Route::resource('bonus-type', 'BonusTypeController')->middleware('can:isAdmin,App\User');
    // Route::get('view-registration/{id}', 'RegistrationController@viewRegistrations')->middleware('can:isAdmin,App\User');
    // Route::post('/view-registration', 'RegistrationController@viewRegistrationsFiltered')->middleware('can:isAdmin,App\User');
    // Route::get('financial-reports', 'FinancialController@viewFinancialReports')->middleware('can:isAdmin,App\User');  
    // Route::post('financial-reports', 'FinancialController@viewFinancialReportsFiltered')->middleware('can:isAdmin,App\User');            
    // Route::get('report/{id}', 'ReportController@index')->middleware('can:isAdmin,App\User');
    // Route::post('report/filtered', 'ReportController@viewReportFiltered')->middleware('can:isAdmin,App\User');          
});  

Auth::routes();

// Rotas para deletar logicamentes os registros - e não usar as rotas resources destroy neste caso:
Route::post('/admin/remedy-manufacturer/{id}/destroy', 'Admin\RemedyManufacturerController@destroy');
Route::post('/admin/remedy/{id}/destroy', 'Admin\RemedyController@destroy');
Route::post('/admin/exam/{id}/destroy', 'Admin\ExamController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
