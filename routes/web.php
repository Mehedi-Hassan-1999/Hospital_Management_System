<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDoctorController;


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


//  User or Not-user //
Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('/myAppointment',[HomeController::class,'show_myAppointment'])->name('myAppointment');
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment'])->name('cancel_appointment');



//  User or Admin //
Route::get('/home',[HomeController::class,'redirect'])->name('home')->middleware('auth','verified');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/doctor',[AdminDoctorController::class,'doctor_form'])->name('doctor');
    Route::post('/add_doctor',[AdminDoctorController::class,'add_doctor'])->name('add_doctor');
    Route::get('/manage_doctor',[AdminDoctorController::class,'manage_doctor'])->name('manage_doctor');
    Route::get('/edit_doctor/{id}',[AdminDoctorController::class,'edit_doctor'])->name('edit_doctor');
    Route::post('/update_doctor',[AdminDoctorController::class,'update_doctor'])->name('update_doctor');
    Route::post('/delete_doctor',[AdminDoctorController::class,'delete_doctor'])->name('delete_doctor');


    Route::get('/manage_appointment',[AdminDoctorController::class,'manage_appointment'])->name('manage_appointment');
    Route::get('/approved/{id}',[AdminDoctorController::class,'approved'])->name('approved');
    Route::get('/canceled/{id}',[AdminDoctorController::class,'canceled'])->name('canceled');
    Route::get('/sendMail/{id}',[AdminDoctorController::class,'sendMail_form'])->name('sendMail');
    Route::post('/add_sendMail/{id}',[AdminDoctorController::class,'add_sendMail'])->name('add_sendMail');


});
