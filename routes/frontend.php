<?php

//=========== Home ============// 

Route::post('admission/submit','Web\AdmsnController@admsnSubmit')->name('web.admsn_submit');

Route::get('admission/pay/{id}','Web\AdmsnController@paySuccess')->name('web.pay_success');

Route::post('send/query/','Web\PagesController@insertQuery')->name('web.insert_query');

Route::get('/', function () {
    return view('web.index');
})->name('web.index');

//=========== About ============// 

Route::get('/About', function () {
    return view('web.about');
})->name('web.about');

//=========== Admission ============// 

Route::get('/Admission', function () {
    return view('web.admission');
})->name('web.admission');

//=========== Academics ============// 

Route::get('/Academics', function () {
    return view('web.academics');
})->name('web.academics');

//=========== News ============// 

Route::get('/News', function () {
    return view('web.news');
})->name('web.news');

//=========== Academics Stuff ============// 

Route::get('/Academics-Stuff', function () {
    return view('web.stuf');
})->name('web.stuf');

//=========== Contact ============// 

Route::get('/Contact', function () {
    return view('web.contact');
})->name('web.contact');
