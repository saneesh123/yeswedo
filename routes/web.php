<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Admin 
Route::get('/dashboard', function () {
    return view('admin/index');
});
//Admin Login 
Route::get('/admin', function () {
    return view('admin/login-register');
});
//Admin Gallery 
Route::get('/gallery', function () {
    return view('admin/gallery');
});
//Admin Email manager 
Route::get('/email-manager', function () {
    return view('admin/emailmanager');
});

//Admin Event dashboard
Route::get('/dashboard-events', function () {
    return view('admin/dashboard-events');
});

//Admin Job dashboard
Route::get('/dashboard-job', function () {
    return view('admin/dashboard-job');
});


