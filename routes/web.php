<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
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
Route::get('/', [AppointmentController::class, 'index']);

Route::get('/patients', [PatientController::class, 'index']);
Route::get('/patients/edit/{id}', [PatientController::class, 'edit']);
Route::get('/patients/destroy/{id}', [PatientController::class, 'destroy']);

Route::get('/patient/{id}', [PatientController::class, 'update']);

Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/doctors/edit/{id}', [DoctorController::class, 'edit']);
Route::get('/doctors/destroy/{id}', [DoctorController::class, 'destroy']);

Route::get('/doctor/{id}', [DoctorController::class, 'update']);

Route::get('/register-user', [UserController::class, 'create']);
Route::post('/register-user', [UserController::class, 'store']);

Route::get('/make-appointment', [AppointmentController::class, 'create']);
Route::post('/make-appointment', [AppointmentController::class, 'store']);

Route::get('/appointments/edit/{id}', [AppointmentController::class, 'edit']);
Route::get('/appointment/{id}', [AppointmentController::class, 'update']);
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy']);

