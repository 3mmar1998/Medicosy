<?php

use Illuminate\Support\Facades\Route;

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

// Routes for public pages 
    // index page Route 

Route::get('/', function () {
    return view('public pages.index');
});
Route::get('/clinics', function () {
    return view('public pages.clinics');
});

Route::get('/clinics/map', function () {
    return view('public pages.map');
});
Route::get('/guieds', function () {
    return view('public pages.guides');
});
Route::get('/About', function () {
    return view('public pages.about');
});
// End public pages Routes




Route::get('/home', 'HomeController@index')->name('home');


//Authentication Routes for Application
    // authentication for user
Auth::routes();
    //authentication for secretary
Route::get('secretery/login','Auth\loginController@show_secreatry_login_form')->name('secretary_login');
Route::post('secreatry/login','Auth\loginController@login_secretary');
    //authentication for doctor
Route::get('doctor/login','Auth\loginController@show_doctor_login_form')->name('doctor_login');
Route::post('doctor/login','Auth\loginController@login_doctor');
    //authentication for system employees
Route::get('system_employee/login','Auth\loginController@show_system_employee_login_form')->name('employee_login');
Route::post('system_employee/login','Auth\loginController@login_system_employee');
    //logout for all type of users
Route::post('/logoutAll','Auth\loginController@logoutAll');
// End authentication Routes section 




//user Routes =======================================================================================
Route::get('/user',function(){
    
    
    return view('private pages.user pages.home_user');
    
});

Route::get('/user/my_profile','userController@get_my_profile');
Route::get('/user/edit_my_information','userController@edit_my_information');
Route::post('/user/edit_my_information','userController@edit_my_information');

Route::get('/user/create_post','postController@create');
Route::post('/user/add_post','postController@store');
Route::get('/user/{{id}}/edit_post','postController@edit');
Route::post('/user/{{id}}/update_post','postController@update');
Route::post('/user/{{id}}/delete_post','postController@delete');

Route::get('/user/my_appointments','appointmentController@get_my_appointments');
Route::get('/user/take_appointments','appointmentController@take_appointments');
Route::post('/user/{{id}}/delete_appointments','appointmentController@delete');

Route::get('/user/show_clinics_map','clinicController@show_clinics_map');
Route::get('/user/show_guieds','patient_guide@show_guieds');
Route::get('/user/show_my_notifications','patient_notification@show_my_notifications');    
//end users Routes====================================================================================    


    
//doctors Routes =================================================
Route::get('/doctor',function(){
    
    
    return view('private pages.doctor pages.home-doctor');
    
});
//doctors Routes ==================================================




//secretaries Routes===========================================







//end secretaries Routes=========================================




// employees Routes =======================================================================
Route::get('/system_employee','system_employeeController@get_dashboard');

Route::get('/system_employee/manage_users','userController@manage_user');
Route::post('/system_employee/{{id}}/update_user_permission','user_permissionController@update');
Route::get('/system_employee/edit_my_info/{id}','system_employeeController@edit');
Route::post('/system_employee/update_my_info/{id}','system_employeeController@update');
Route::get('/system_employee/view_user_details/{id}','userController@view_details');
Route::get('/system_employee/delete_user/{id}','userController@delete');

Route::get('/system_employee/manage_posts','postController@manage_post');
Route::post('/system_employee/{{id}}/delete_post','postController@delete');

Route::get('/system_employee/manage_clinic','clinicController@manage_clinic');
Route::get('/system_employee/add_clinic','clinicController@store');
Route::get('/system_employee/{id}/edit_clininc','clinicController@edit');
Route::post('/system_employee/{id}/update_clininc','clinicController@update');
Route::get('/system_employee/delete_clininc/{id}','clinicController@delete');
Route::get('/system_employee/view_clinic_details/{id}','clinicController@view_details');

Route::get('/system_employee/create_secretary/{id}','secretaryController@create');
Route::post('/system_employee/add_secretary','secretaryController@store');
Route::get('/system_employee/edit_secretary/{id}','secretaryController@edit');
Route::post('/system_employee/update_secretary/','secretaryController@update');
Route::get('/system_employee/delete_secretary/{id}','secretaryController@delete');


Route::get('/system_employee/create_doctor/{id}','doctorController@create');
Route::post('/system_employee/add_doctor','doctorController@store');
Route::get('/system_employee/edit_doctor/{id}','doctorController@edit');
Route::post('/system_employee/update_doctor','doctorController@update');
Route::get('/system_employee/delete_doctor/{id}','doctorController@delete');



Route::get('/system_employee/manage_employee','system_employeeController@manage_employee');
Route::get('/system_employee/create_employee','system_employeeController@create');
Route::post('/system_employee/add_employee','system_employeeController@store');
Route::get('/system_employee/edit_employee_info','system_employeeController@edit_my_info');
Route::post('/system_employee/update_employee_info','system_employeeController@update_my_info');
Route::post('/system_employee/update_employee','system_employeeController@update');
Route::get('/system_employee/delete_employee/{id}','system_employeeController@delete');
Route::get('/system_employee/view_employee_details/{id}','system_employeeController@view_details');

Route::post('/system_employee/update_employee_permission','employee_PermissionController@update');


Route::get('/system_employee/create_guides','patient_guideController@create');
Route::post('/system_employee/add_guides','patient_guideController@store');
Route::get('/system_employee/{{id}}}/edit_guides','patient_guideController@edit');
Route::post('/system_employee/{{id}}/update_guides','patient_guideController@update');
Route::post('/system_employee/{{id}}/delete_guides','patient_guideController@delete');
// end employee Routes ===========================================================================




