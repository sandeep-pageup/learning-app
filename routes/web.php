<?php

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Mail::to('ombhandari7989@gmail.com')->send(new WelcomeEmail([
        'name' => 'Raaj',
    ]));
});
