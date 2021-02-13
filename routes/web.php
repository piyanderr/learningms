<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\UserAuthController;

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
Route::get('/login', [UserAuthController::class, 'LoginPageindex1']);

//RegisterPage
Route::get('/register', [UserAuthController::class, 'RegisterIndex']);
Route::post('/create', [UserAuthController::class, 'UserCreate'])->name('createuser');
Route::post('/checks', [UserAuthController::class, 'CheckIt'])->name('check.user');

//Password
Route::get('/password', [UserAuthController::class, 'PassIndex']);

//Profile
Route::get('/profile', [UserAuthController::class, 'UsersProfile']);

//LogOut Page
Route::get('/logout', [UserAuthController::class, 'LogOutPageIndex']);

//My Dashboard dark
Route::get('/myhome', [LearningController::class, 'Homepageindex']);

//My Dashboard light
Route::get('/myhome2', [LearningController::class, 'Homepage2index']);

//layout-static homepage
Route::get('/layout', [LearningController::class, 'LayoutIndex']);

//Tables
Route::get('/tab', [LearningController::class, 'TableIndex']);

//Charts
Route::get('/chart', [LearningController::class, 'ChartsIndex']);

