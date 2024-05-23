<?php

use App\Models\Department;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('teacher-department', function(){
    return Teacher::where('id', 101)->first()->departments;
});

Route::get('department-teacher', function(){
    return Department::where('id', 1)->first()->teachers;
});