<?php

use App\Http\Controllers\HomeController;
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
//ERRROR PAGE
Route::get('/error', [HomeController::class, 'errorPage']);

//Login
Route::post('/login', [HomeController::class, 'customLogin'])->name('login');
Route::get('/', function(){return view('login');});
Route::get('signout', [HomeController::class, 'signOut'])->name('signout');
//User
Route::get('/dashbroad', [HomeController::class, 'getUserById'])->name('dashbroad');
Route::post('/register', [HomeController::class, 'customRegistration'])->name('register');
Route::get('/register', function(){return view('register');});
//Subject
Route::get('/timetable', [HomeController::class, 'getTimeTable'])->name('timetable');
Route::get('/add-subject', [HomeController::class, 'getAllClassRooms']);
Route::get('/edit-subject/{id}', [HomeController::class, 'getSubjectById']);
Route::post('/save-subject', [HomeController::class, 'addSubject'])->name('saveSubject');
Route::post('/edit-subject', [HomeController::class, 'editSubject'])->name('editSubject');
Route::get('/delete-subject/{id}', [HomeController::class, 'deleteSubject']);
Route::get('/register-subject', [HomeController::class, 'getAllSubjects']);
Route::get('/subjects-regitsted', [HomeController::class, 'getAllById']);