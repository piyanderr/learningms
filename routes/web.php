<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;

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
Route::get('/logs', [LearningController::class, 'Loginpageindex']);

//HomePage by me Profile's Dashboard1
Route::get('/myhome', [LearningController::class, 'Homepageindex']);

//Index SB 
Route::get('/myhome2', [LearningController::class, 'index']);

//RegisterPage
Route::get('/register', [LearningController::class, 'Homepage3index']);

//LoginPage
Route::get('/log1', [LearningController::class, 'LoginPageindex1']);

//Tables
Route::get('/tab', [LearningController::class, 'TableIndex']);

//Charts
Route::get('/chart', [LearningController::class, 'ChartsIndex']);