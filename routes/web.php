<?php

use App\Http\Controllers\HourController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
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
Route::get('/dashboard',function (){
    return redirect()->route('dashboard');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // ROTAS PARA USUARIO
    Route::prefix('/')->name('profile.')->group(function (){
        Route::get('/me', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/me', [ProfileController::class, 'update'])->name('update');
        Route::delete('/me', [ProfileController::class, 'destroy'])->name('destroy');
    });


    // apenas boss
    Route::middleware(['admin','boss'])->prefix('/hour')->name('hour.')->group(function(){
        Route::post('/store',[HourController::class,'store'])->name('create');
    });

    // ROTAS PARA SERVIÇOS
    // apenas boss e admin
    Route::prefix('service')->middleware(["admin", 'boss'])->name('service.')->group(function (){
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

});

require __DIR__.'/auth.php';
