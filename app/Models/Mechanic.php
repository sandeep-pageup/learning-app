<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Mechanic extends Model
{
    use HasFactory;

    public function carOwner() : HasOneThrough{
        return $this->hasOneThrough
        (
            Owner::class , //final model.
            Car::class, //intermediate model
            'mechanic_id', //foreign key on intermidiate model,
        'car_id', //foreign key on final model
            'id', //local key on this model,
        'id', //local key on intermidiate model
        ); 
    }

}
