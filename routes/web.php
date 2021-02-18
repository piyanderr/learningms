<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

//LogInPage by me
Route::get('/logsin', [UserAuthController::class, 'Loginpageindex']);

//LoginPage
Route::get('/login', [UserAuthController::class, 'LoginPageindex1'])->middleware('isLoggedIn');

//RegisterPage
Route::get('/register', [UserAuthController::class, 'RegisterIndex'])->middleware(('isLoggedIn'));
Route::post('/create', [UserAuthController::class, 'UserCreate'])->name('createuser');
Route::post('/checks', [UserAuthController::class, 'CheckIt'])->name('check.user');

//Password
Route::get('/password', [UserAuthController::class, 'PassIndex']);

//UserProfile
Route::get('/profile', [UserAuthController::class, 'UsersProfile'])->middleware('isLogged');
 
//LogOut Page
Route::get('/logout', [UserAuthController::class, 'LogOutPageIndex']);

// //My Dashboard 1
// Route::get('/home', [LearningController::class, 'AdminHomepageindex']);

// //My Dashboard 2
// Route::get('/home2', [LearningController::class, 'StudentHomepageindex']);

// //My Dashboard 3
// Route::get('/home3', [LearningController::class, 'TeacherHomepageindex']);

// // Tables
// Route::get('/tab', [LearningController::class, 'TableIndex']);

// // Charts
// Route::get('/chart', [LearningController::class, 'ChartsIndex']);

//Auth
// Auth::route();
//Route Middleware
// Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
// Route::get('/dashboardA', 'LearningController@AdminHomepageindex')->middleware('admin');
// Route::get('/dashboardB', 'LearninController@TeacherHomepageindex')->middleware('teacher');
// Route::get('/dashboardC', 'LearningController@StudentHomepageindex')->middleware('student');
