<?php

use App\Models\AppRoute;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users', function () {
    return User::search('y')->get();
});

Route::view('search', 'index')->name('search');

Route::get('search-data/{parameter}', function($parameter){
    return response()->json(AppRoute::search($parameter)->get());
});
