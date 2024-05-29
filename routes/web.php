<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function()
{
   return View::make('pages.home');
});
Route::get('/about', function()
{
   return View::make('pages.contact');
});