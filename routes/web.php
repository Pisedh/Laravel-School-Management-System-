<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout ');
// });


route::get('/', [DashbaordController::class, 'index'])->name('dashboard');

route::get('/dashboard', [DashbaordController::class, 'index'])->name('dashboard');


route::resource('/students', StudentController::class);
route::resource('/batches', BatchController::class);
route::resource('/teachers', TeacherController::class);
route::resource('/payments', PaymentController::class);
route::resource('/enrollments', EnrollmentController::class);
route::resource('/courses', CourseController::class);


