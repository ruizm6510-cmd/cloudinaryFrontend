<?php

use App\Http\Controllers\AprendiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('area/list',[AreaController::class,'index'])->name('area.list');
Route::get('area/show/{id}',[AreaController::class,'show'])->name('area.show');
Route::get('area/create',[AreaController::class,'create'])->name('area.create');
Route::post('area/store',[AreaController::class,'store'])->name('area.store');

Route::get('training/list',[TrainingCenterController::class,'index'])->name('training.list');
Route::get('training/show/{id}',[TrainingCenterController::class,'show'])->name('training_center.show');
Route::get('training/create',[TrainingCenterController::class,'create'])->name('training_center.create');
Route::post('training/store',[TrainingCenterController::class,'store'])->name('training.store');

Route::get('computer/list',[ComputerController::class,'index'])->name('computer.list');
Route::get('computer/show/{id}',[ComputerController::class,'show'])->name('computer.show');
Route::get('computer/create',[ComputerController::class,'create'])->name('computer.create');
Route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');

Route::get('course/list',[CourseController::class,'index'])->name('course.list');
Route::get('course/show/{id}',[CourseController::class,'show'])->name('course.show');
Route::get('course/create',[CourseController::class,'create'])->name('course.create');
Route::post('course/store',[CourseController::class,'store'])->name('course.store');

Route::get('aprendice/list',[AprendiceController::class,'index'])->name('aprendice.list');
Route::get('aprendice/show/{id}',[AreaController::class,'show'])->name('aprendice.show');
Route::get('aprendice/create',[AprendiceController::class,'create'])->name('aprendice.create');
Route::post('aprendice/store',[AprendiceController::class,'store'])->name('aprendice.store');

Route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.list');
Route::get('teacher/show/{id}',[TeacherController::class,'show'])->name('teacher.show');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');



