<?php

use App\Http\Controllers\indexcontroller;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[indexcontroller::class,'index'])->name('index');
Route::get('/register',[indexcontroller::class,'register'])->name('register');

Route::post('/register1', [indexcontroller::class, 'register1'])->name('register1');

Route::get('/login',[indexcontroller::class,'login'])->name('login');
 Route::post('/login/here',[indexcontroller::class,'login_o'])->name('login.here');
Route::get('/edit/{id}',[indexcontroller::class,'edit'])->name('edit');
Route::post('/update/{id}',[indexcontroller::class,'update'])->name('update');
Route::get('/delete{id}',[indexcontroller::class,'delete'])->name('delete');
