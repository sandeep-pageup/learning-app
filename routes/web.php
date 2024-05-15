<?php

use App\Models\Department;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('teachers-with-department' , function(){
    return Teacher::with('departments')->get(); 
});

Route::get('departments-with-teacher' , function(){
    return Department::with('teacher')->get(); 
});

Route::get('teacher-with-student-lazy-loading' , function(){
    $teachers = Teacher::all();
    foreach ($teachers as $teacher) {
        echo $teacher->departments;
    }
});