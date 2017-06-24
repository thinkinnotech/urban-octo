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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.manage');
})->middleware('validUser');

Route::get('/login', function(){
    return view('admin.login');
});
Route::get('/jobsearch', function(){
    return view('jobsearch');
});
Route::get('/jobdetail', function(){
    return view('jobdetail');
});

Route::get('/jobpost', function(){
    return view('jobpost');
});
Route::get('/jobdetail/{job}', function(\App\Job $job){
    return view('jobdetail', compact('job'));
});

Route::resource('/job','JobController');