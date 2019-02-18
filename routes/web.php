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
Route::get('login','UserController@getlogin');
Route::post('login','UserController@postlogin');

Route::get('admin/dashboard','UserController@getdashboard');


Route::get('admin/logout','UserController@getlogout');
Route:: group(['prefix' =>'admin','middleware'=>'loginAdmin'],function() {
    Route::get('dashboard','UserController@getdashboard');

    Route::get('infor','UserController@show');
    Route::get('update','UserController@update');
    Route::post('update','UserController@update');

    Route::get('admin_list','UserController@admin_list');
    Route:: post('admin_add','UserController@admin_post_add');
    Route::get('admin_delete',array(
        'as' => 'admin.xoa',
        'uses' =>'UserController@admin_delete'
    ));

    Route:: group(['prefix'=> 'user'],function(){
        Route:: get('user_list','ControllerUserLecturer@user_list');

        Route:: get('user_edit/{id}','ControllerUserLecturer@user_get_edit');
        Route:: post('user_edit/{id}','ControllerUserLecturer@user_post_edit');

        Route:: get('user_add','ControllerUserLecturer@user_get_add');
        Route:: post('user_add','ControllerUserLecturer@user_post_add');

        Route::post('user_addone','ControllerUserLecturer@user_post_addone');
        Route:: get('xoa/{id}','ControllerUserLecturer@user_delete');    

        
    });
    Route:: group(['prefix'=> 'student'],function(){
        Route:: get('student_list','ControllerUserStudent@user_list');

        Route:: get('student_edit/{id}','ControllerUserStudent@student_get_edit');
        Route:: post('student_edit/{id}','ControllerUserStudent@student_post_edit');

        Route:: get('student_add','ControllerUserStudent@student_get_add');
        Route:: post('student_add','ControllerUserStudent@student_post_add');

        Route::post('student_addone','ControllerUserStudent@student_post_addone');
        Route:: get('xoa/{id}','ControllerUserStudent@student_delete');    

        
    });
    Route::group(['prefix'=>'servey'],function() {
        Route::get('servey_sheet_list','ControllerServeySheet@servey_sheet_list');

        Route:: get('servey_sheet_add','ControllerServeySheet@servey_sheet_get_add');
        Route:: post('servey_sheet_add','ControllerServeySheet@servey_sheet_post_add');

        Route:: post('servey_sheet_version','ControllerServeySheet@servey_sheet_post_version');
        Route:: post('servey_sheet_addfile','ControllerServeySheet@servey_sheet_post_addfile');
        Route:: get('servey_sheet_edit/{id}','ControllerServeySheet@servey_sheet_get_edit');
        Route:: post('servey_sheet_edit/{id}','ControllerServeySheet@servey_sheet_post_edit');

        Route:: get('delete/{id}','ControllerServeySheet@servey_sheet_delete');
    });
    Route::group(['prefix'=>'survey'],function() {
        Route::get('survey_list','ControllerSurvey@survey_list');

        Route:: get('survey_add','ControllerSurvey@survey_get_add');
        Route:: post('survey_add','ControllerSurvey@survey_post_add');

        Route::get('survey_addfile','ControllerSurvey@survey_get_addfile');
        Route::post('survey_addfile','ControllerSurvey@survey_post_addfile');
    });
});
Route::get('user/logout','UserController@getlogout');
Route:: group(['prefix'=>'user'],function() {
    
    Route::group(['prefix'=>'students','middleware'=>'loginStudent'],function() {
        Route:: get('dashboard','UserController@getDashboardStudent');
        Route::get('infor','StudentInfor@show');
        Route::get('update','StudentInfor@update');
        Route::post('update','StudentInfor@update');
        Route::get('feedback/{id}/{id2}','ControllerSubject@getFeedback');
        Route::post('feedback/{id}/{id2}','ControllerSubject@postFeedback');

    });

    Route::group(['prefix'=>'lecturers','middleware'=>'loginLecturer'],function() {
        Route:: get('dashboard','UserController@getDashboardLecturer');
        Route:: get('subject_list','ControllerSubject@getList');
        Route::get('infor','LecturerInfor@show');
        Route::get('update','LecturerInfor@update');
        Route::post('update','LecturerInfor@update');
        Route::get('result/{id}','ControllerSubject@getResult');
    });
});


Route:: get('notfound',function(){
    return view('admin.notfound');
});


