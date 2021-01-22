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
Route::get('/logsin', [LearningController::class, 'Loginpageindex']);

//My Dashboard dark
Route::get('/myhome', [LearningController::class, 'Homepageindex']);

//My Dashboard light
Route::get('/myhome2', [LearningController::class, 'Homepage2index']);

//LoginPage
Route::get('/login', [LearningController::class, 'LoginPageindex1']);

//RegisterPage
Route::get('/register', [LearningController::class, 'Homepage3index']);

//Tables
Route::get('/tab', [LearningController::class, 'TableIndex']);

//Charts
Route::get('/chart', [LearningController::class, 'ChartsIndex']);