<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
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
    return view('welcome');
});

// Admin/Auth routes
Route::get('/secret/admin', function (){
    return view('auth.admin');
});

Route::post('/process-form', [FormController::class, 'process'])->name('process.form');

// Post admin, Dashboard route is accessible
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Blog route
Route::get('/blog/all', function(){
    return view('blog/blogAll');
});


require __DIR__.'/auth.php';
