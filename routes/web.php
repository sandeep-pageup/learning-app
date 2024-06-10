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

Route::get('students-add-column' , function() {
    $student = Student::query();
    // return DataTables::of($student)->addColumn('action', 'D')->toJson();

    // return DataTables::of($student)->addColumn('action', 'D')->setRowId(function ($student){
    //     return $student->name;
    // })->toJson();

    // return DataTables::of($student)->addColumn('action', 'D')->setRowClass(function($user) {
    //     return 'demoClass';
    // })->toJson();

    // return DataTables::of($student)->addColumn('action', 'D')->setRowData([
    //     'data-id' => 'sandeep'
    // ])->toJson();

});  
