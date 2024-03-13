<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.sing-in.login');
});
Route::get('/register', function () {
    return view('pages.sing-in.register');
});
Route::get('/courses/create', function () {
    return view('pages.courses.create');
});
Route::get('/courses/index', function () {
    return view('pages.courses.index');
});
Route::get('/exercise/create', function () {
    return view('pages.exercise.create');
});
Route::get('/exercise/index', function () {
    return view('pages.exercise.index');
});
Route::get('/stats', function () {
    return view('pages.stats');
});
Route::get('/settings', function () {
    return view('pages.settings');
});