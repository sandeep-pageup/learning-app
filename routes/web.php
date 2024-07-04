<?php

use App\Models\SortableItem;
use App\Models\SortableItemMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index' , ['sortable_item_masters' => SortableItemMaster::with('sortable_items')->get()]);
});

Route::get('store', function (Request $request) {
    $data = array();
    foreach ($request->subjects as $class => $subjects) {
        foreach ($subjects as $subject) {
            array_push($data , [
                'Subject' => $subject,
                'sortable_item_master_id' => $class
            ]); 
        }
    }
    SortableItem::truncate();
    SortableItem::insert($data);
});