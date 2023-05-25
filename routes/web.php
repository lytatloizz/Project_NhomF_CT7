<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\NotificationController;

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



Route::get('all/notification', [NotificationController::class, 'index'])->name('all.notification');
Route::get('/add/notification', [NotificationController::class, 'AddNotification'])->name('add.notification');
Route::post('store/notification', [NotificationController::class, 'StoreNotification'])->name('store.notification');
Route::get('edit/notification/{id}', [NotificationController::class, 'EditNotification'])->name('edit.notification');
Route::post('update/notification', [NotificationController::class, 'UpdateNotification'])->name('update.notification');
Route::get('delete/notification/{id}', [NotificationController::class, 'DeleteNotification'])->name('delete.notification');
Route::get('detail/notification/{id}', [NotificationController::class, 'DetailNotification'])->name('detail.notification');


Route::get('detail/notification/{id}', [NotificationController::class, 'DetailNotification'])->name('detail.notification');
