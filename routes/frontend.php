<?php

//=========== Home ============// 

Route::get('/', function () {
    return view('web.index');
})->name('web.index');



