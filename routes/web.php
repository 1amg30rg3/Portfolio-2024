<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index/Index');
});
Route::get('/test', function () {
    return 'Hello';
});
