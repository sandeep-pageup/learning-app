<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Middleware\VerifyAuthenticatedUser;
use Illuminate\Support\Facades\Route;

Route::view('/' , 'login');
Route::post('/auth' , [AuthController::class , 'auth'])->name('auth');
Route::get('is-user-loggedin', [AuthController::class , 'is_user_loggedin']);

Route::group(['middleware' => ['auth']] , function(){
    Route::get('dashboard' , [DashBoardController::class , 'dashboard'])->name('dashboard');
    Route::get('auth/user' , function() {
        $user = auth()->user();
        return $user;
    });
    Route::get('before_logout_session' , [AuthController::class , 'before_logout_session']);
    Route::get('after_logout_session' , [AuthController::class , 'after_logout_session']);
});