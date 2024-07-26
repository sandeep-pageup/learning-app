<?php

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('side-bar', function () {
    return view('sidebar');
});

// Route::get('students', function() {
//     $student = Student::where('id', 1)->first();
//     return $student->posts();
// });