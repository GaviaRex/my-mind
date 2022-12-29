<?php

use App\Http\Livewire\Question;
use App\Http\Livewire\Quiz;
use Illuminate\Support\Facades\Route;

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

Route::get('/my-mind', function () {
    return view('my-mind');
});

Route::get('/quiz-menu', function () {
        return view('quiz-menu');
});

//Livewire routes
Route::get('/quiz', Quiz::class);
Route::get('/question', Question::class);