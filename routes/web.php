<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Teachercontroller;


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
    return view('homepage');
});

//to register
Route::post('/toregister', [Registercontroller::class, 'registers'])->name('registration.submit');//chosing type and to redirect
Route::post('/toregister', [Registercontroller::class, 'registers'])->name('registration.submit');//chosing type and to redirect

//to fill form & store data to table
Route::post('/studentregistration', [Studentcontroller::class, 'studentdata'])->name('studentregform.submit');
Route::view('/teacherregistration', [Teachercontroller::class,'teacherdata'])->name('teacherregform.submit');






//route for login 
//Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
