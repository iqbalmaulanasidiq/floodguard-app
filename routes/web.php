<?php

use Illuminate\Support\Facades\Route;




Route::get('/login', function () {
    return view('auth.login');
});



use App\Http\Controllers\IndexController;
use App\Http\Controllers\RealtimeDataController;


Route::get('/', [IndexController::class, 'show'])->name('index');
Route::get('/raindrop', [IndexController::class, 'showRaindrop'])->name('raindrops');
Route::get('/cuaca', [IndexController::class, 'showCuaca'])->name('cuaca');
Route::get('/status', [IndexController::class, 'showStatus'])->name('status');
Route::get('/ultrasonic', [IndexController::class, 'showUltrasonic'])->name('ultrasonic');
Route::get('/waterflow', [IndexController::class, 'showWaterflow'])->name('waterflow');




Route::get('/info', function () {
    return view('info');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/alat', function () {
    return view('alat');
});
Route::get('/test', function () {
    return view('test');
});

use Illuminate\Support\Facades\Auth; 
Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', ['user' => $user]);
})->middleware('auth');


use App\Http\Controllers\ButtonController;
Route::post('/button/update', [ButtonController::class, 'update'])->name('button.update');

use App\Http\Controllers\UserController;

// Define the route for user management
Route::get('/kelola', [UserController::class, 'index'])->name('users.index')->middleware('auth');
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