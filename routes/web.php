<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LygSewingOutputController;

#Tanpa Auth
Route::get('/', function () {
	return view('auth.login');
});
Route::get('/login', [LoginController::class, 'perform'])->name('login');
Route::post('/perform', [LoginController::class, 'perform'])->name('perform');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registrasi', [DasboardController::class, 'registrasi'])->name('registrasi');
Route::post('/saveregis', [DasboardController::class, 'saveregis'])->name('saveregis');

#auth midelware
Route::group(['middleware' => ['auth']], function () {
    ##Dasboard
    Route::get('/dasboard', [DasboardController::class, 'index'])->name('dasboard');
     ##CRUD Sewing
     Route::get('/sewingoutput/index', [LygSewingOutputController::class, 'index'])->name('sewing.index');
     Route::get('/sewingoutput/read', [LygSewingOutputController::class, 'read'])->name('sewing.read');
     Route::get('/sewingoutput/details', [LygSewingOutputController::class, 'showDetails'])->name('sewing.showDetails');
     Route::post('/sewingoutput/update', [LygSewingOutputController::class, 'update'])->name('sewing.update');
     Route::get('/sewingoutput/update-summary', [LygSewingOutputController::class, 'updateSummary'])->name('sewing.updateSummary');
});
