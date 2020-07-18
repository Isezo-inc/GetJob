<?php

Route::get('/', function () {
    return view('staffer.main_staffer');
})->name('staffer');

Route::get('/reg_staffer', function () {
    return view('staffer.reg_staffer');
})->name('registration_staffer');

Route::get('/employer', function () {
    return view('employer.main_employer');
})->name('employer');

Route::get('/reg_employer', function () {
    return view('employer.reg_employer');
})->name('registration_employer');

Route::get('/lk', function () {
    return view('staffer.lk_staffer');
})->name('lk');

Route::get('/create_job', function () {
    return view('papkahuyapka.create_job');
})->name('create_job');


Route::post('/reg_employer/submit', 'UsersController@registration')->name('reg_emplyer_submit');
