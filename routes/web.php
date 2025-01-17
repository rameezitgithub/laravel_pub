<?php

use App\Http\Controllers\TaskController;

use Illuminate\Support\Facades\Route;


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



Route::get('/', [TaskController::class, 'index']);
Route::delete('/task/{id}',[TaskController::class,'delete'] );
Route::post('/task', [TaskController::class,'update']);
