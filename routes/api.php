<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\StudentApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
   
    Route::post('/store', [StudentApiController::class, 'store'])->name('store');
    Route::get('list',[StudentApiController::class,'list'])->name('list');
    Route::get('{id}/edit', [StudentApiController::class, 'edit'])->name('edit');
    Route::post('update', [StudentApiController::class, 'update'])->name('update');
    Route::get('{id}/delete', [StudentApiController::class, 'delete'])->name('delete');

    });

Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);

//Student Api Route
    
   


