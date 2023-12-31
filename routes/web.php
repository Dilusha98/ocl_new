<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\ajaxController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('layouts.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [viewController::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // create group
    Route::post('/create-group', [ajaxController::class,'CreateGroup']);
    //groups List
    Route::get('/groups', [viewController::class,'groupsList']);
    //view group
    Route::get('/view-group/{id}', [viewController::class,'viewGroup']);

});

require __DIR__.'/auth.php';
