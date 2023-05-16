<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|//php -S localhost:8000 -t public/
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/operator',[OperatorController::class,'index'])->name('operator.index');
Route::get('/view',[OperatorController::class,'view']);
Route::get('/bench',[OperatorController::class,'bench'])->name('operator.bench');
Route::get('/non_bench',[OperatorController::class,'non_bench'])->name('operator.non_bench');

Route::post('userRegistration',[AdminController::class, 'userRegistration']);
Route::post('store',[OperatorController::class, 'store']);
Route::post('report',[OperatorController::class, 'report']);
Route::post('non_report',[OperatorController::class, 'non_report']);
Route::post('machineCheck',[OperatorController::class, 'machineCheck']);
Route::get('dailyReport',[OperatorController::class, 'dailyReport']);
Route::get('confirm',[OperatorController::class,'confirm'])->name('operator.confirm');
Route::get('user',[AdminController::class,'user'])->name('admin.user');
Route::get('add_user',[AdminController::class,'add_user'])->name('add_user');
Route::get('show/{id}',[OperatorController::class,'show']);
Route::get('final/{id}',[OperatorController::class,'final']);



Route::middleware('auth','is_admin')->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
})->name('admin.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
