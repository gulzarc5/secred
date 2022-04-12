<?php

Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login','LoginController@showLoginForm')->name('admin.login');    
    Route::post('login', 'LoginController@adminLogin');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard');

        Route::get('/user/list', 'AdmsnController@userList')->name('admin.user_list');
        Route::get('/user/list/ajax', 'AdmsnController@userListAjax')->name('admin.user_list_ajax');
        Route::get('/super/list', 'AdmsnController@superList')->name('amin.super.list');
        Route::get('/super/list/ajax', 'AdmsnController@superListAjax')->name('amin.super.list_ajax');
        Route::get('/user/details/{id}', 'AdmsnController@userDetails')->name('admin.user_details');
        Route::get('/students/query/', 'DashboardController@userQuery')->name('admin.students_query');
    });

});