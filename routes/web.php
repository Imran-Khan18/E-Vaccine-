<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\AdminAmbulanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\GraveController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/daily-info', [HomeController::class, 'dailyInfo'])->name('daily-info');

Route::get('/doctors-near', [HomeController::class, 'doctorsNear'])->name('doctors-near');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

Route::get('/hospitalize-service', [HomeController::class, 'hospitalizeService'])->name('hospitalize-service');

Route::get('/vaccine-service', [HomeController::class, 'vaccineService'])->name('vaccine-service');

Route::get('/ambulence-service', [HomeController::class, 'ambulenceService'])->name('ambulence-service');

Route::get('/gravary-service', [HomeController::class, 'gravaryService'])->name('gravary-service');

Route::post('make_appointment', [AppointmentController::class, 'make_appointment'])->name('make_appointment');

Route::post('make_contact', [ContactController::class, 'make_contact'])->name('make_contact');

Route::post('register', [RegistrationController::class, 'register'])->name('register');


/***********************************************/

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('admin/doctors/add', [DoctorController::class, 'add'])->name('admin-doctors');

    Route::get('admin/departments/add', [DepartmentController::class, 'add'])->name('admin-departments');

    Route::get('admin/ambulances/add', [AdminAmbulanceController::class, 'add'])->name('admin-ambulances');

    Route::post('/save-doctor', [DoctorController::class, 'save_doctor'])->name('save-doctor');

    Route::post('/save-department', [DepartmentController::class, 'save_department'])->name('save-department');

    Route::post('/save-ambulance', [AdminAmbulanceController::class, 'save_ambulance'])->name('save-ambulance');

    Route::post('delete-doctor', [DoctorController::class, 'delete'])->name('delete-doctor');

	Route::post('delete-department', [DepartmentController::class, 'delete'])->name('delete-department');

	Route::post('delete-ambulance', [AdminAmbulanceController::class, 'delete'])->name('delete-ambulance');

	Route::post('delete-registration', [RegistrationController::class, 'delete'])->name('delete-registration');

	Route::post('delete-appointment', [AppointmentController::class, 'delete'])->name('delete-appointment');
    
	Route::post('delete-ambulance-request', [AmbulanceController::class, 'delete'])->name('delete-ambulance-request');
	Route::post('delete-contact', [ContactController::class, 'delete'])->name('delete-contact');

    Route::get('doctors', [DoctorController::class, 'all_doctors']);

	Route::get('departments', [DepartmentController::class, 'all_departments']);

	Route::get('adminambulance', [AdminAmbulanceController::class, 'all_ambulances']);

    Route::get('admin/doctors/view', [DoctorController::class, 'view'])->name('doctors-view');

    Route::get('admin/departments/view', [DepartmentController::class, 'view'])->name('departments-view');

    Route::get('admin/ambulances/view', [AdminAmbulanceController::class, 'view'])->name('ambulances-view');

    Route::get('registrations', [RegistrationController::class, 'index'])->name('registrations');

    Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments');

    Route::get('get_appointments', [AppointmentController::class, 'appointments'])->name('get_appointments');

    Route::get('get_registrations', [RegistrationController::class, 'registrations'])->name('get_registrations');

    Route::get('contacts', [ContactController::class, 'index'])->name('contacts');

    Route::get('get_contacts', [ContactController::class, 'contacts'])->name('get_contacts');

    Route::get('ambulance-requests', [AmbulanceController::class, 'index'])->name('ambulance-requests');

    Route::get('get_ambulance_requests', [AmbulanceController::class, 'get_requests'])->name('ambulance_requests');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('login', [AuthController::class, 'login'])->name('login');

Route::post('make-login', [AuthController::class, 'make_login'])->name('make-login');

Route::get('register', [AuthController::class, 'register'])->name('register');

Route::post('make-register', [AuthController::class, 'make_register'])->name('make-register');

Route::post('request-ambulance', [AmbulanceController::class, 'request_ambulance'])->name('request-ambulance');

Route::post('request-hospitalzed', [AmbulanceController::class, 'request_hospitalzed'])->name('request-hospitalzed');

Route::post('request-travel', [TravelController::class, 'request_travel'])->name('request-travel');

Route::post('request-grave', [GraveController::class, 'request_grave'])->name('request-grave');
