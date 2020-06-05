<?php

//=========== Home ============// 

Route::get('/', function () {
    return view('web.index');
})->name('web.index');

//=========== Admission ============// 

Route::get('/Admission', function () {
    return view('web.admission');
})->name('web.admission');
