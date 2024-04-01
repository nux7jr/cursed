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
Route::get('/settings', function () {
    return view('pages.settings');
});