<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// //call with learning/create
// Route::resource('/learning',LearningController::class);

// Route::get('/contact', [LearningController::class,'contact']);

// Route::get('/post',function(){
//     return view('vander.post');
// });


/**
 * @author Rustam
 * @application Route
 */
Route::get('/insert',function(){
DB::insert('insert into posts(title,content) values(?,?)',['PHP with Laravel','Laravel is best thing that has happen to PHP']);


});


Route::get('/read',function(){
$results = DB::select('select * from posts where id=?',[1]);

var_dump($results) ;


});
