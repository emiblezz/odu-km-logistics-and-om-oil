<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("general_pages.logistics");
})->name('logistics');

Route::get('/contact', function () {
    return view('general_pages/contact');
})->name('contact');
Route::get('/oil', function () {
    return view('general_pages.oil');
})->name('oil');
Route::get('/projects', function () {
    return view('general_pages/projects');
})->name('projects');
Route::get('/publications', function () {
    return view('general_pages/publications');
})->name('publications');

//login pages
Route::get('/OMlogin', function () {
    return view('om_pages.login');
})->name('OMlogin');

Route::get('/KMlogin', function () {
    return view('km_pages.login');
})->name('KMlogin');

Route::get('/Adminlogin', function () {
    return view('Admin.login');
})->name('Adminlogin');


