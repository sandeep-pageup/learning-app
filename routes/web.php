<?php

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('download-pdf' , function() {
    $pdf = Pdf::loadView('student', ["students" => Student::all()]);
    return $pdf->download();
});
Route::get('students', function(){
    return view('student', ["students" => Student::all()]);
});