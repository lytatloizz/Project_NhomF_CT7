<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;

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

Route::get('/dashbroad', [HomeController::class, 'getUserById'])->name('dashbroad');
Route::get('/timetable', [HomeController::class, 'getTimeTable'])->name('timetable');
Route::post('/login', [HomeController::class, 'customLogin'])->name('login');
Route::post('/register', [HomeController::class, 'customRegistration'])->name('register');
Route::get('signout', [HomeController::class, 'signOut'])->name('signout');
Route::get('/', function(){return view('login');});
Route::get('/register', function(){return view('register');});

Route::get('/classrooms', [ClassroomController::class, 'index']);
Route::get('/detail_classroom/{classroom_id}', [ClassroomController::class, 'DetailClassroom']);


Route::get('/addClassrooms', [ClassroomController::class, 'create']);
Route::get('/add-Classrooms', [ClassroomController::class, 'store'])->name('addClassrooms');


Route::get('/deleteClassrooms/{classroom_id}', [ClassroomController::class, 'delete']);

Route::get('/updateClassrooms/{classroom_id}', [ClassroomController::class, 'editClassroom']);
Route::post('/update-Classrooms/{classroom_id}', [ClassroomController::class, 'updateClassroom']);

//Sap xep Classroom
Route::get('/collectionClassrooms', [ClassroomController::class, 'sapXepClassroom']);
