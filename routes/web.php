<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return redirect('/index');
});

Route::get('/index', [TodoController::class , 'index']);
Route::get('/create', [TodoController::class , 'create']);
Route::post('/update', [TodoController::class , 'update']);
Route::get('/{id}/edit', [TodoController::class , 'edit']);
Route::patch('/modify', [TodoController::class , 'modify']);
Route::get('/{id}/completed', [TodoController::class , 'completed']);
Route::get('/{id}/delete', [TodoController::class , 'delete']);
Route::get('/{group}/deletegrp', [TodoController::class , 'deletegrp']);
Route::get('/{group}/grouplist', [TodoController::class , 'grouplist']);
Route::patch('/addgroup', [TodoController::class , 'groupmodify']);