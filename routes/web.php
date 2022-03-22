<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
use App\Models\Post;
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

Route::get('/update',function(){
$update = DB::update('update posts set title = "updated title" where id = ?', ['1']);
return $update;
});

Route::get('/delete',function()
{
$delete = DB::delete('delete from posts where id =?',[1]);
return $delete;
});

Route::get('/find',function(){
    $posts = Post::all();
    foreach($posts as $post){
        return $post->title;
    }

});

// Route::get('/findwhere',function(){
// $posts=Post::where('id',2)->orderBy('id','desc');
// return $posts->title;
// });

Route::get('/findwhere',function(){
    $posts=Post::where('id',2)->orderBy('id','desc')->take(1)->get();
    return $posts->title;
    });

Route::get('/findmore',function(){
    $posts = Post::findOrFail(2);
    return $posts;
});
