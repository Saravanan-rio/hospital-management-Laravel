<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect']);


Route::get('/login', function () {
    return view('auth\login');
})->name('login');

Route::get('/register', function () {
    return view('auth\register');
})->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_doctor',[AdminController::class, 'add_doctor_view']);
Route::post('/upload_doctor',[AdminController::class, 'upload_doctor']);

Route::post('/appointment',[HomeController::class, 'appointment']);
Route::get('/my-appointments',[HomeController::class, 'myappointments']);

Route::get('/cancel_appointment/{id}',[HomeController::class, 'cancel_appointment']);

Route::get('/showappointments',[AdminController::class, 'showappointments']);

Route::get('/approve/{id}',[AdminController::class, 'approve']);
Route::get('/cancel/{id}',[AdminController::class, 'cancel']);

Route::get('/all_doctors',[AdminController::class, 'all_doctors']);
Route::get('/edit_doctor/{id}',[AdminController::class, 'edit_doctor']);
Route::post('/update_doctor/{id}',[AdminController::class, 'update_doctor']);
Route::get('/delete_doctor/{id}',[AdminController::class, 'delete_doctor']);

Route::get('/downloadPDF',[AdminController::class, 'createPDF'])->name('downloadPDF');