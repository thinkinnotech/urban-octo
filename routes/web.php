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
Route::group(['middleware' => ['web', 'validUser']], function () {
    Route::get('/admin', function () {
        return view('admin.manage');
    });
    Route::get('/admin/city-add', function () {
        return view('admin.city.add_city');
    });
    Route::post('/admin/add-city', 'CityController@addCity');

    Route::get('/admin/city', 'CityController@city');

    Route::post('/admin/city-update', 'CityController@updateCity');

    Route::post('/admin/city-delete', 'CityController@deleteCity');


    Route::get('/admin/location-add', function () {
        return view('admin.location.add_location', ['cities' => \App\City::allCity()]);
    });
    Route::post('/admin/add-location', 'LocationController@addLocation');

    Route::get('/admin/location', 'LocationController@location');

    Route::post('/admin/location-update', 'LocationController@updateLocation');

    Route::post('/admin/location-delete', 'LocationController@deleteLocation');

    Route::get('/admin/education-add', function () {
        return view('admin.education.add_education');
    });
    Route::post('/admin/add-education', 'EducationController@addEducation');

    Route::get('/admin/education', 'EducationController@education');

    Route::post('/admin/education-update', 'EducationController@updateEducation');

    Route::post('/admin/education-delete', 'EducationController@deleteEducation');

    Route::get('/admin/roles-add', function(){
        return view('admin.roles.add_job_role');
    });

    Route::post('/admin/add-roles', 'RolesController@addRoles');

    Route::get('/admin/roles', 'RolesController@roles');

    Route::post('/admin/roles-update', 'RolesController@updateRoles');

    Route::post('/admin/roles-delete', 'RolesController@deleteRoles');

    Route::get('/admin/language-add', function(){
        return view('admin.language.add_language');
    });

    Route::post('/admin/add-language', 'LanguageController@addLanguage');

    Route::get('/admin/language', 'LanguageController@language');

    Route::post('/admin/language-update', 'LanguageController@updateLanguage');

    Route::post('/admin/language-delete', 'LanguageController@deleteLanguage');

    Route::get('/admin/skill-add', function(){
        return view('admin.skill.add_skill');
    });

    Route::post('/admin/add-skill', 'SkillController@addSkill');

    Route::get('/admin/skill', 'SkillController@skill');

    Route::post('/admin/skill-update', 'SkillController@updateSkill');

    Route::post('/admin/skill-delete', 'SkillController@deleteSkill');

    Route::get('/admin/designation-add', function(){
        return view('admin.designation.add_designation');
    });

    Route::post('/admin/add-designation', 'DesignationController@addDesignation');

    Route::get('/admin/designation', 'DesignationController@designation');

    Route::post('/admin/designation-update', 'DesignationController@updateDesignation');

    Route::post('/admin/designation-delete', 'DesignationController@deleteDesignation');

});

Route::get('/login', function () {
    return view('admin.login');
});

Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::get('/jobseeker-profile', function(){
    return view('jobseeker');
});

Route::post('/add-jobseeker-profile', 'JobseekerController@create');

Route::get('/jobsearch', function () {

    return view('jobsearch');

});

Route::get('/jobdetail', function () {

    return view('jobdetail');

});


Route::get('/jobpost', function () {

    return view('jobpost');

});

Route::get('/jobdetail/{job}', function (\App\Job $job) {

    return view('jobdetail', compact('job'));

});

Route::post('/getLocation', function(){
    $city_id = \Illuminate\Support\Facades\Input::get('id');

    $locations = \App\Location::where('city_id',$city_id)->get();
    $output = "<option>Select Location</option>";
    foreach ($locations as $location)
    {
        $output.='<option value="'.$location->id.'">'.$location->location.'</option>';

    }
    return $output;
});


Route::resource('/job', 'JobController');