<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', function () {
    return view('auth.login');
});

// Route::get('/', function () {
//     return view('index');
// });

use App\Http\Controllers\IndexController;

// Route::get('/', [RaindropController::class, 'index']);
Route::get('/', [IndexController::class, 'show']);
// Route::get('/', [RaindropController::class, 'Status']);
// Route::get('/', [RaindropController::class, 'showUltrasonic']);
// Route::get('/', [RaindropController::class, 'showWaterflow']);



Route::get('/dashboard', function () {
    return view('dashboard', ['user' => auth()->user()]);
}) ;

use App\Http\Controllers\UserController;

// Define the route for user management
Route::get('/kelola', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');











// Route::post('login', [AuthController::class, 'login']);
// Route::post('register', [AuthController::class, 'register']);
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
//   });
