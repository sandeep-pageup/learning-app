<?php

use App\Models\Mechanic;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('owner-through-car', function() {
    $mechanic = Mechanic::where('id' , 1001)->first();
    return $mechanic->carOwner()->get();
}); 



