<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [QuizController::class, 'index']);
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');

Route::get('/quizzes/{id?}', 'QuizController@edit');
Route::post('/quizzes/{id?}', 'QuizController@store');