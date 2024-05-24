<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('set-default-value'  , function(Request $request) {
    dd($request->session()->get('score' , 'Sandeep'));
});

Route::get('get-value'  , function() {
    dd(session('key' , 'Sandeep'));
});

Route::get('set-key-value' , function(){
    session(['name' => 'Sandeep Patel']);
    return session('name');
});

Route::get('get-name-value' , function() {
    return session('name' , 'Not In Session');
});

Route::get('get-session-data' , function() {
    return session()->all();
    // session(['_previous.url' => url('get-name-value')]);
    // return redirect(session("_previous")["url"]);
});

Route::get('retrieve-portion-of-data' , function() {
    return session()->only(['name' , '_token' , '_previous']);
});

Route::get('session-has' , function() {
    return session()->has('_previousasd');
});

Route::get('session-pull' , function() {
    return session()->pull('name');
});

Route::get('session-flash' , function() {
    session()->flash('flashed-data' , 'Acchi baat hai!');
});