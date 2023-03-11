<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::get('/index', [TodoController::class , 'index']);
Route::get('/create', [TodoController::class , 'create']);
Route::post('/update', [TodoController::class , 'update']);
Route::get('/{id}/edit', [TodoController::class , 'edit']);
Route::patch('/modify', [TodoController::class , 'modify']);
