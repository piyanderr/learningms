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

//LogInPage of Adminlte 3
Route::get('/login', [LearningController::class, 'LoginPageIndexA3']);

// //My extend HomePage1 Profile's Dashboard of Adminlte
// Route::get('/adminhome', [LearningController::class, 'Homepage2index']);

//RegisterPage Adminlte3
Route::get('/register', [LearningController::class, 'Homepage3index']);