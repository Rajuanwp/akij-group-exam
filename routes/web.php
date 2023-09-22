<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Admin\StudentController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::post('/passwordUpdate', [ProfileController::class, 'passwordUpdate'])->name('profile.passwordUpdate');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/system-info', [SettingController::class, 'systemInfo'])->name('systemInfo');
    Route::get('/optimize', [SettingController::class, 'optimize'])->name('optimize');


    //Student Route
    
    Route::name('student.')->prefix('student')->group(function(){

        Route::get('/add', [StudentController::class, 'index'])->name('add');
        Route::post('/store', [StudentController::class, 'store'])->name('store');
        Route::get('list',[StudentController::class,'list'])->name('list');
        Route::get('{firstname}/edit', [StudentController::class, 'edit'])->name('edit');
        Route::post('update', [StudentController::class, 'update'])->name('update');
        Route::get('{firstname}/delete', [StudentController::class, 'delete'])->name('delete');
      });
});



require __DIR__.'/auth.php';
