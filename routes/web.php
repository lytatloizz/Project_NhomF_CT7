<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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
// Route::get('/dashboard', function() {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashbroad');

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


Route::get('/notification', 'NotificationController@index')->name('notification.index');
Route::get('/addClassrooms', [ClassroomController::class, 'create']);
Route::get('/add-Classrooms', [ClassroomController::class, 'store'])->name('addClassrooms');


Route::get('/deleteClassrooms/{classroom_id}', [ClassroomController::class, 'delete']);

Route::get('/updateClassrooms/{classroom_id}', [ClassroomController::class, 'editClassroom']);
Route::post('/update-Classrooms/{classroom_id}', [ClassroomController::class, 'updateClassroom']);

//Sap xep Classroom
Route::get('/collectionClassrooms', [ClassroomController::class, 'sapXepClassroom']);
//Student
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/detail_users/{id}', [App\Http\Controllers\UserController::class, 'detail']);
Route::get('/delete_users/{id}', [App\Http\Controllers\UserController::class, 'delete']);


Route::get('/users_edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::get('/usersedit/{id}', [App\Http\Controllers\UserController::class, 'update']);

//Tim kiem users
Route::get('/users_search', function(){return view('users.users_search');});
Route::get('search',[App\Http\Controllers\UserController::class,'getSearch']);

//Sap xep user
Route::get('/sapXepUsers',[App\Http\Controllers\UserController::class,'sapXepUsers']);


//Profile
Route::get('user/profile', [ProfileController::class, 'ProfileDashboard'])->name('profile.dashbroad');
Route::get('user/profile/edit-profile', [ProfileController::class, 'EditProfile'])->name('profile.edit');
Route::post('user/profile/store-profile', [ProfileController::class, 'StoreProfile'])->name('profile.store');

//Change Password
Route::get('user/change-password', [ChangePasswordController::class, 'ChangePassword'])->name('change.password');
Route::post('user/change-password/update', [ChangePasswordController::class, 'UpdatePassword'])->name('update.password');
