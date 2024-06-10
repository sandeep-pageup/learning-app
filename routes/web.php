<?php

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('users', function() {
    return view('users' , ['users' => User::paginate(5)]);
});