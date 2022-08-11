<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\CvController;
=======
use App\Http\Controllers\mycontroller;
>>>>>>> f83161ab76ef035f3b4b3a428d42ac2ca0efc28f
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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('Homepage.Home_template');
// })

Route::get('/home',[CvController::class,'index']);
//Route::get('/create',[cv_controller::class,'create']);
Route::resource('/items', CvController::class);
?>
=======
//Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/', function () {
    return view('crud');
});
Route::get('/Home', function () {
    return view('Homepage.Home_template');
});
Route::get('/Company', function () {
    return view('Company');
});
Route::get('/CV', function () {
    return view('CV');
});
Route::get('/', function () {
    return view('insertRead');
});

//Route::view('/','insertRead');
Route::post('insertData',[mycontroller::class,'insert']);
Route::get('/',[mycontroller::class,'readdata']);
//Route::view('update','updateview');
Route::get('updatedelete',[mycontroller::class,'updateordelete']);
Route::get('updatedata',[mycontroller::class,'update']);
>>>>>>> f83161ab76ef035f3b4b3a428d42ac2ca0efc28f
