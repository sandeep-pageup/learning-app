<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

Route::get('index' , function() {
    return view('student');
}); 

Route::get('students' , function() {
    $student = Student::query();
    return DataTables::of($student)->toJson();
});     