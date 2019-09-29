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
    Route::resource('patient', 'PatientController');
    Route::resource('speciality', 'SpecialityController');
    Route::resource('attendant', 'AttendantController');
    Route::resource('doctor', 'DoctorController');
    Route::resource('consultation', 'ConsultationController');
   
});  

Auth::routes();

// Rotas para deletar logicamentes os registros - e não usar as rotas resources destroy neste caso:
Route::post('/admin/remedy-manufacturer/{id}/destroy', 'Admin\RemedyManufacturerController@destroy');
Route::post('/admin/remedy/{id}/destroy', 'Admin\RemedyController@destroy');
Route::post('/admin/exam/{id}/destroy', 'Admin\ExamController@destroy');
Route::post('/admin/patient/{id}/destroy', 'Admin\PatientController@destroy');
Route::post('/admin/speciality/{id}/destroy', 'Admin\SpecialityController@destroy');
Route::post('/admin/attendant/{id}/destroy', 'Admin\AttendantController@destroy');
Route::post('/admin/doctor/{id}/destroy', 'Admin\DoctorController@destroy');
Route::post('/admin/consultation/{id}/destroy', 'Admin\ConsultationController@destroy');

Route::post('/admin/view-consultation', 'Admin\ConsultationController@viewConsultation')->name('consultation.view-consultation');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

