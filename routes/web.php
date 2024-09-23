<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['throttle:global'])->group(function() {
    Route::get('canAccess' , function(){
        return "Yeah, you can!!!!";
    });
});