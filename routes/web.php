<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index',[EmployeeController::class, 'index'])->name('index');
Route::get('/create',[EmployeeController::class, 'create'])->name('create');
Route::post('/store',[EmployeeController::class, 'store'])->name('store');

Route::get('/edit/{id}',[EmployeeController::class, 'edit'])->name('edit');
Route::post('/update',[EmployeeController::class, 'update'])->name('update');
Route::delete('/destroy/{id}',[EmployeeController::class, 'destroy'])->name('destroy');


Route::any('/logout',[LoginController::class,'logout'])->name('logout');