<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia('Index/Index');
});

Route::get('/check', function(){
    return view('test');
});