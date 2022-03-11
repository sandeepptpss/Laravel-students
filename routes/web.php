<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student',[StudentController::class,'Student']);
Route::post('add-student',[StudentController::class, 'Adddetail'])->name('add-student');
Route::get('index',[StudentController::class,'show']);
Route::get('edit/{id}',[StudentController::class,'editData']);
Route::post('/edit',[StudentController::class,'UpdateData']);
Route::get('delete/{id}',[StudentController::class,'delete']);





