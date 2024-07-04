<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SortableItem extends Model
{
    use HasFactory;
    public function sortable_item_master(){
        return $this->belongsTo(SortableItemMaster::class);
    }
}
