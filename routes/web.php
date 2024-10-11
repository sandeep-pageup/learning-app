<?php

use App\Events\OrderPlaced;
use App\Mail\WelcomeEmail;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Mail::to('ombhandari7989@gmail.com')->send(new WelcomeEmail([
        'name' => 'Raaj',
    ]));
});

Route::get('/orderPlaced', function () {
    $order = new Order();
    $order->name = "Glasses";
    $order->save();
    event(new OrderPlaced($order));
    return "Order placed successfully!";
});
