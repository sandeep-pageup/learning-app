<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('users', function () {
    return User::search('y')->get();
});
