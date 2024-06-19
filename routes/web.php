<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('store', function() {
    Storage::disk('local')->put('demo1.txt' , 'Sandeep Patel');
});