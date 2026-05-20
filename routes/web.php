<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('students', [\App\Http\Controllers\studentmngtController::class, 'index'])->name('student.index');
    Route::get('students/create', [\App\Http\Controllers\studentmngtController::class, 'create'])->name('student.create');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    // Route::put('profile/password', [\App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('profile.update.password');
    // Route::delete('profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('profile/avatar', [\App\Http\Controllers\ProfileController::class, 'updateAvatar'])->name('profile.update.avatar');
    // Route::post('profile/avatar/remove', [\App\Http\Controllers\ProfileController::class, 'removeAvatar'])->name('profile.remove.avatar');
});
