<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SortableItemMaster extends Model
{
    use HasFactory;
    public function sortable_items(){
        return $this->hasMany(SortableItem::class);
    }
}
