<?php

//=========== Home ============// 

Route::post('admission/submit','Web\AdmsnController@admsnSubmit')->name('web.admsn_submit');

Route::get('admission/pay/{id}','Web\AdmsnController@paySuccess')->name('web.pay_success');

Route::post('send/query/','Web\PagesController@insertQuery')->name('web.insert_query');

Route::get('/', function () {
    return view('web.index');
})->name('web.index');

//=========== Admission ============// 

Route::get('/Admission', function () {
    return view('web.admission');
})->name('web.admission');
