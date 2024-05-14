<?php

use App\Models\Developer;
use App\Models\Laptop;
use Illuminate\Support\Facades\Route;

Route::get('developer-laptop' , function() {
    return Developer::with('laptop')->get();
});

//using : operator
Route::get('developer-laptop-selected-columns' , function() {
    return Developer::with('laptop:developer_id,name')->get();
});

//using query builder
Route::get('developer-laptop-selected-columns-using-query-builder', function(){
    return Developer::with([
        'laptop' => function($query) {
            return $query->select('developer_id' , 'name');     
        }
    ])->get();
});

Route::get('laptop-developer' , function() {
    return Laptop::with('developer')->get();
});

Route::get('laptop-developer-selected-columns', function() {
    return Laptop::with('developer:id,name')->get();
});

Route::get('laptop-developer-selected-columns-using-query-builder' , function(){
    return Laptop::with(['developer' => function($query) {
        return $query->select('id' , 'name');
    }]);
});