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
