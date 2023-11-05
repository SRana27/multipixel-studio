<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/service',[WebsiteController::class,'service'])->name('service');
Route::get('/project',[WebsiteController::class,'project'])->name('project');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
