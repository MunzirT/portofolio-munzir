<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes (Static Portfolio Site)
|--------------------------------------------------------------------------
*/

// 1. NAVIGATION ROUTES (GET)
Route::get('/', function () { 
    return view('welcome'); 
})->name('home');

Route::get('/experience', function () { 
    return view('experience'); 
})->name('experience');

Route::get('/skills', function () { 
    return view('skills'); 
})->name('skills');

Route::get('/projects', function () { 
    return view('projects'); 
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// 2. PROJECTS DETAIL ROUTES (GET)
Route::get('/projects/integrated-monitoring', function () {
    return view('projects.monitoring');
})->name('projects.monitoring');

Route::get('/projects/ksema', function () {
    return view('projects.ksema');
})->name('projects.ksema');