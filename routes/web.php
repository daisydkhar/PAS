<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Teachercontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;






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



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';*/

Route::get('/', function () {
    return view('homepage');
});

//to register
Route::post('/toregister', [Registercontroller::class, 'registers'])->name('registration.submit');//chosing type and to redirect


//to customise login:
Route::post('/login', [Logincontroller::class,'login'])->name('login.submit');



//to fill form & store data to table
Route::post('/studentregistration', [Studentcontroller::class, 'studentdata'])->name('studentregform.submit');
Route::post('/teacherregistration', [Teachercontroller::class,'teacherdata'])->name('teacherregform.submit');
Route::post('/adminregistration', [Admincontroller::class,'admindata'])->name('adminregform.submit');

//to login:
Route::post('/login', [Logincontroller::class,'login'])->name('login.submit');

//admin page:
Route::post('/admin', [Admincontroller::class,'logout'])->name('admin.submit');//logout
Route::post('/departmentdata', [Admincontroller::class,'deptdata'])->name('departmentdata.submit');//fajax fecth data from db to page
Route::post('/coursedata', [Admincontroller::class,'coursedata'])->name('coursedata.submit');
Route::post('/userdata', [Admincontroller::class, 'userdata'])->name('userdata.submit');

//for edit or update department 
Route::get('/edit-department/{id}', [Admincontroller::class, 'editDept']);
Route::put('/update-department/{id}', [Admincontroller::class, 'updateDept']);









