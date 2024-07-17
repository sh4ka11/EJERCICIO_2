<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{

    public function viaje()
    {
        return $this->hasMany(Viaje::class);
    }
    use HasFactory;
}
