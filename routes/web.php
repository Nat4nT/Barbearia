<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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


Route::get('/', function(){
    return view('welcome');
});

// Rotas User
Route::prefix('me')->name("me.")->group(function () {
    Route::get('/{id}', [UserController::class , 'show'])->name('index');
});

// Rotas Services
Route::prefix('service')->name('service.')->group(function (){
    // ------ VERBOS GET ------
    Route::get('/',[ ServiceController::class, 'index'])->name('index');
    Route::get('/new',[ServiceController::class, 'create'])->name('create');
    Route::get('/{service}' , [ServiceController::class, 'show'])->name('show');

    // ------ VERBOS POST ------
    Route::post('/store',[ServiceController::class, 'store'])->name('store');

    // ------ VERBOS PUT ------
    Route::put('/update/{service}', [ServiceController::class, 'edit'])->name('edit');

    // ------ VERBOS DELETE ------
    Route::delete('/delete/{service}', [ServiceController::class, 'destoy'])->name("delete");
});
