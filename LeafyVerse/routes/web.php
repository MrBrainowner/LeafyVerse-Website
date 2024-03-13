<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
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
// Index Page
Route::get('/', [DashboardController::class , 'index']);
// Home Page
Route::get('/homepage', [HomepageController::class , 'homepage']);
// About Page
Route::get('/about', [AboutController::class , 'about']);
// Contact Page
Route::get('/contact', [ContactController::class , 'contact']);


Route::get('/service1', function (){
    return view('service1');
});
Route::get('/service2', function (){
    return view('service2');
});
Route::get('/service3', function (){
    return view('service3');
});







// breeze

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
