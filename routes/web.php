<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
use App\Models\Learning;

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

//LoginPage
Route::get('/login', [LearningController::class, 'LoginPageindex1']);

//Password
Route::get('/password', [LearningController::class, 'PassIndex']);

//My Dashboard dark
Route::get('/myhome', [LearningController::class, 'Homepageindex']);

//My Dashboard light
Route::get('/myhome2', [LearningController::class, 'Homepage2index']);

//layout-static homepage
Route::get('/layout', [LearningController::class, 'LayoutIndex']);

//RegisterPage
Route::get('/register', [LearningController::class, 'RegisterIndex']);

//Tables
Route::get('/tab', [LearningController::class, 'TableIndex']);

//Charts
Route::get('/chart', [LearningController::class, 'ChartsIndex']);
