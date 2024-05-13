<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function posts() {
        return collect(explode(',', $this->time_table_group_ids))->map(function ($time_table_group_id) {
            return Post::find($time_table_group_id);
        });
    }
} 