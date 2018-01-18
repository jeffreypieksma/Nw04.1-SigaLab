<?php
Route::get('/', 'PageController@home')->name('home');
Route::get('/home', 'PageController@home')->name('home');
Route::get('/team', 'PageController@team')->name('team');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/workshops', 'WorkshopController@readWorkshops')->name('workshops');
Route::get('/workshop/read/{id}', 'WorkshopController@read')->name('read_workshop');

Route::get('/intake/create', 'IntakeController@showCreateForm')->name('create_intake_form');
Route::post('/intake/create', 'IntakeController@create')->name('create_intake');
Route::get('/intake/invite/{hash}/{email}', 'IntakeController@invite')->name('invite_intake');
//Route::get('/intake/dashboard/{hash}', 'IntakeController@showDashboard')->name('dashboard_intake');
Route::get('/intake/dashboard/{hash}/{email}', 'IntakeController@showDashboard')->name('dashboard_intake');

Route::get('/intake/welcome/{hash}/{email}', 'IntakeController@showWelcomeForm')->name('intake_welcome');

Route::get('/intake/test/{hash}/{email}', 'IntakeController@showTestForm')->name('intake_test');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

##Admin routes with /admin prefix in URL, can only be approaced when logged in as admin. 
Route::group(['middleware' => 'admin'], function () {
	
	Route::prefix('admin')->group(function(){

	  Route::get('/', 'AdminController@index')->name('admin_dashboard');

		##Workshops
		Route::get('/workshop/create', 'WorkshopController@create_workshop_form')->name('create_workshop_form');
		Route::post('/workshop/create', 'WorkshopController@create')->name('create_workshop');
		Route::get('/workshops', 'WorkshopController@index')->name('admin_workshops');
		Route::get('/workshop/read/{id}', 'WorkshopController@read')->name('admin_read_workshop');
		Route::get('/workshop/update/{id}', 'WorkshopController@update_workshop_form')->name('update_workshop_form');
		Route::post('/workshop/update/{id}', 'WorkshopController@update')->name('update_workshop');
		Route::get('/workshop/delete/{id}', 'WorkshopController@delete')->name('delete_workshop');

		##Users
		Route::get('/user/create', 'UserController@create_user_form')->name('create_user_form');
		Route::post('/user/create', 'UserController@create')->name('create_user');
		Route::get('/users', 'UserController@index')->name('admin_users');
		Route::get('/user/read/{id}', 'UserController@read')->name('read_user');
		Route::get('/user/update/{id}', 'UserController@update_user_form')->name('update_user_form');
		Route::post('/user/update', 'UserController@update')->name('update_user');
		Route::get('/user/delete/{id}', 'UserController@delete')->name('delete_user');

		##Competences
	  Route::get('/competences', 'CompetenceController@index')->name('admin_competences');
	  Route::get('/competence/create', 'CompetenceController@create_competence_form')->name('create_competence_form');
	  Route::post('/competence/create', 'CompetenceController@create')->name('create_competence');
		Route::get('/competence/read/{id}', 'CompetenceController@read')->name('read_competence');
		Route::get('/competence/update/{id}', 'CompetenceController@update_competence_form')->name('update_competence_form');
		Route::post('/competence/update/{id}', 'CompetenceController@update')->name('update_competence');
		Route::get('/competence/delete/{id}', 'CompetenceController@delete')->name('delete_competence');

		#Educations
		Route::get('/educations', 'EducationController@index')->name('admin_educations');
		Route::get('/education/create', 'EducationController@create_education_form')->name('create_education_form');
		Route::post('/education/create', 'EducationController@create')->name('create_education');

	});    
});