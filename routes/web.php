<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChangePasswordController;

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

//Profile
Route::get('user/profile', [ProfileController::class, 'ProfileDashboard'])->name('profile.dashbroad');
Route::get('user/profile/edit-profile', [ProfileController::class, 'EditProfile'])->name('profile.edit');
Route::post('user/profile/store-profile', [ProfileController::class, 'StoreProfile'])->name('profile.store');

//Change Password
Route::get('user/change-password', [ChangePasswordController::class, 'ChangePassword'])->name('change.password');
Route::post('user/change-password/update', [ChangePasswordController::class, 'UpdatePassword'])->name('update.password');