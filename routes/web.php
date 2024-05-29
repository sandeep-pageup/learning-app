<?php

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('all-users' , function() {
    foreach(User::all() as $user) {
        echo $user->name." , ";
    }
});

Route::get('all-users-map' , function() {
    return User::all()->reject(function(User $user) {
        return $user->id == 1;
    })->map(function(User $user) {
        return $user->name;
    });
});

Route::get('collect' , function (){
    $collection = collect(['sandeep' , 'patel']);
    return $collection;
});

Route::get('contains' , function() {
    $users = User::all();
    return $users->contains(14); //passing primary key.
});

Route::get('diff' , function() {
    $users = User::all();
    return $users->diff(User::whereIn('id' , [1,2,3,4,5])->get());
});

Route::get('except' , function(){
    return User::all()->except([1,2]);
});

Route::get('find' , function() {
    return User::all()->find([1,2,3]);
});