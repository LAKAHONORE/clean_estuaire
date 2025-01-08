<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\BlanchisserieController;
use App\Http\Controllers\PressingController;
use App\Http\Controllers\RepassageController;
use App\Http\Controllers\CollecteLivraisonController;


Route::get('/', function () {
    return view('dash');
})->name('dashboard');


Route::resource('config', ConfigController::class);
Route::resource('blanchisserie', BlanchisserieController::class);
Route::resource('pressing', PressingController::class);
Route::resource('repassage', RepassageController::class);
Route::resource('collecte', CollecteLivraisonController::class);