<?php

// Главная страница
Route::get('/', function () {
    return view('staffer.main_staffer');
})->name('home');

// СТраница аутентификации
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// СТраница регистрации соискателей
Route::get('/reg_staffer', function () {
    return view('auth.reg_staffer');
})->name('reg_staffer');

//Ф-ция отправки подтверждения почты на емаил
Route::post('/senmail', 'StafferController@sendmail')->name('sendmail');

//Ф-ция регистрации
Route::post('/reg_staffer/submit', 'StafferController@registration')->name('reg_staffer_submit');

//Ф-ция подтверждения емаила
Route::get('/confmail', 'StafferController@confmail')->name('confmail');



















Route::get('/regi_staffer', function () {
    return view('staffer.regi_staffer');
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


Route::get('/search_v', 'searchController@search_vacancy')->name('search_vacancy');
Route::post('/search_v/select', 'searchController@view_vacancy')->name('search_v_select');

// СТраница создания резюме
Route::get('/create_resume', function () {
    return view('create_resume.main_create_resume');
})->name('main_cr');
Route::get('/create_resume/preview', function () {
    return view('create_resume.preview_resume');
})->name('preview_cr');


// СТраница создания вакансии
Route::get('/create_vacancy', function () {
    return view('create_vacancy.first_create_vacancy');
})->name('fstep_cv');
// ф-ции 123 шагов
Route::post('/create_vacancy/second_step', 'create_vacancyController@first_step')->name('sstep_cv');
Route::post('/create_vacancy/third_step', 'create_vacancyController@second_step')->name('tstep_cv');
Route::post('/create_vacancy/finish_step', 'create_vacancyController@third_step')->name('ffstep_cv');
Route::post('/employer', 'create_vacancyController@save_step')->name('save_cv');

Route::post('/reg_employer/submit', 'UsersController@registration')->name('reg_emplyer_submit');
