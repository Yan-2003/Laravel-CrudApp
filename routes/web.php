<?php

use App\Http\Controllers\AddPeople;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/add', [AddPeople::class, 'index']);
Route::post('/add/people', [AddPeople::class, 'store']);

Route::get('/user/delete/{id}', [AddPeople::class, 'destroy']);

//Route::post('/push', [AddPeople::class, 'create']);


Route::get('/user/edit/{id}', [HomeController::class, 'updatePeople']);
Route::post('/user/update/{id}', [AddPeople::class, 'update']);

Route::get('/{id}', [HomeController::class, 'showPeople']);


Route::fallback(FallbackController::class);