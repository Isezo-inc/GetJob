<?php

Route::get('/', function () {
    return view('staffer.main_staffer');
})->name('home');

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

Route::get('/create_vacancy', function () {
    return view('create_vacancy.first_create_vacancy');
})->name('fstep_cv');

Route::post('/create_vacancy/second_step', 'create_vacancyController@first_step')->name('sstep_cv');
Route::post('/create_vacancy/third_step', 'create_vacancyController@second_step')->name('tstep_cv');
Route::post('/create_vacancy/finish_step', 'create_vacancyController@third_step')->name('ffstep_cv');
//Route::post('/', 'create_vacancyController@save_step')->name('end_cv');

Route::post('/reg_employer/submit', 'UsersController@registration')->name('reg_emplyer_submit');
