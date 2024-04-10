<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/', [UserController::class, 'index']
    // return view('welcome');
)->name('login');
Route::get('/register', [UserController::class, 'create']
    // return view('welcome');
)->name('register');

// Rotas User
Route::prefix('me')->name("me.")->group(function () {
    Route::get('/{id}', [UserController::class , 'show'])->name('index');
    Route::get('/', [UserController::class , 'index'])->name('dx');

    Route::post('/store',[UserController::class,'store'])->name('register');
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
