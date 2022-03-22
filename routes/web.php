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

//call with learning/create
Route::resource('/learning',LearningController::class);

Route::get('/contact', [LearningController::class,'contact']);

Route::get('/post',function(){
    return view('vander.post');
});
