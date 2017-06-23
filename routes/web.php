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
Route::group(['middleware' => ['web','validUser']], function (){
    Route::get('/admin', function () {
        return view('admin.manage');
    });
    Route::get('/admin/city-add', function(){
        return view('admin.city.add_city');
    });
    Route::post('/admin/add-city', 'CityController@addCity');

    Route::get('/admin/city', 'CityController@city');

    Route::post('/admin/city-update', 'CityController@updateCity');

    Route::post('/admin/city-delete', 'CityController@deleteCity');


    Route::get('/admin/location-add', function(){
        return view('admin.location.add_location', ['cities'=>\App\City::allCity()]);
    });
    Route::post('/admin/add-location', 'LocationController@addLocation');

    Route::get('/admin/location', 'LocationController@location');

    Route::post('/admin/location-update', 'LocationController@updateLocation');

    Route::post('/admin/location-delete', 'LocationController@deleteLocation');

    Route::get('/admin/education-add', function(){
        return view('admin.education.add_education');
    });
    Route::post('/admin/add-education', 'EducationController@addEducation');

    Route::get('/admin/education', 'EducationController@education');

    Route::post('/admin/education-update', 'EducationController@updateEducation');

    Route::post('/admin/education-delete', 'EducationController@deleteEducation');


});

Route::get('/login', function(){
    return view('admin.login');
});

Route::post('/login', 'LoginController@login');



Route::get('/logout', 'LoginController@logout');