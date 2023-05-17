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

Route::get('/dashbroad', [HomeController::class, 'getUserById'])->name('dashbroad');
Route::get('/timetable', [HomeController::class, 'getTimeTable'])->name('timetable');
Route::post('/login', [HomeController::class, 'customLogin'])->name('login');
Route::post('/register', [HomeController::class, 'customRegistration'])->name('register');
Route::get('signout', [HomeController::class, 'signOut'])->name('signout');
Route::get('/', function(){return view('login');});
Route::get('/register', function(){return view('register');});
Route::get('/add-subject', [HomeController::class, 'getAllClassRooms']);
Route::post('/save-subject', [HomeController::class, 'addSubject'])->name('saveSubject');