<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
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
    return view('homepage');
});

Route::get('/team/dashboard',function(){
    return view('teamdashboard');
})->name('teamdashboard');

Route::get('/timeline',function(){
    return view('timeline');
})->name('timeline');

Route::get('/team/register',function(){
    return view('registerteam');
})->name('team.register');

Route::get('/team/leader',function(){
    return view('teamleader');
})->name('team.leader');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';
