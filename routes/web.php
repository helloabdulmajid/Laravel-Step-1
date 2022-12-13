<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

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
//view redirect

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about/{id}',function($id){
//     $data=['name'=>'About Page','content'=>'this is a about us page','id'=>$id];
//     return view('about',$data);
// });

// Route::get('/contact',function(){
   
//     return view('layout.contact')->with('name','Contact us');
// });

// Route::get('/app',function(){
   
//     return view('app');
// });

//Controller
// Route::get('/app', 'bookcontroller@show' ;
// Route::get('/app/{user}', [bookController::class,'show']) ;


//php code
Route::get('/test', function () {
    echo "hello test page";
});

//php code

// Route::get('/test1', function () {
//     echo 2+2;
// });

//route redirect

// Route::redirect('/here', '/youtube/laravel/public/test');

//route name code

Route::get('/test3', function () {
    echo "test 3 page";
})->name('am');

//route redicrect with name

Route::get('/here2', function(){
    return redirect()->route('am');
});

//route with id

// Route::get('/user/{id}', function($id){
//     echo $id;
// });

//route with two parameters

// Route::get('/user/{id}/{p2}', function($id,$p2){
//     echo $id;
//     echo "<br><br>";
//     echo $p2;
// });

//route with two parameters with url 

// Route::get('/user/{id}/hello/{p2}', function($id,$p2){
//     echo $id;
//     echo "<br><br>";
//     echo $p2;
// });

//route with two parameters only numaric value pass
// Route::get('/user/{id}/{p2}', function($id,$p2){
//     echo $id;
//     echo "<br><br>";
//     echo $p2;
// })->where('id','[0-9]+');

//route with two parameters only numaric value pass & alpa
// Route::get('/user/{id}/{p2}', function($id,$p2){
//     echo $id;
//     echo "<br><br>";
//     echo $p2;
// })->where('id','[0-9]+')->where('p2','[a-z]+');