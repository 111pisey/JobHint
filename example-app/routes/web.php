<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
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
//     return view('Homepage.Home_template');
// })

Route::get('/home',[CvController::class,'index']);
//Route::get('/create',[cv_controller::class,'create']);
Route::resource('/items', CvController::class);
?>
