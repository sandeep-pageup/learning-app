<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    public function laptop(){
        return $this->hasOne(Laptop::class , 'developer_id', 'id');
    }
}
