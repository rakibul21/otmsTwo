<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/training-category', [HomeController::class,'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class,'allTraining'])->name('training.all');
Route::get('/training-detail', [HomeController::class,'trainingDetail'])->name('training.detail');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class,'loginRegistration'])->name('login-registration');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::get('/teacher/add',[TeacherController::class,'index'])->name('teacher.add');
    Route::get('/teacher/manage',[TeacherController::class,'manage'])->name('teacher.manage');
    Route::post('/teacher/create',[TeacherController::class,'create'])->name('teacher.create');
    Route::get('/teacher/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}',[TeacherController::class,'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}',[TeacherController::class,'delete'])->name('teacher.delete');
});
