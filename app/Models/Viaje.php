<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
 
    public function viajero()
    {
        return $this->belongsTo(Viajero::class);
    }

    public function origen()
    {
        return $this->hasMany(Origen::class);
    }
    public function Destino()
    {
        return $this->hasMany(Destino::class);
    }

    use HasFactory;
}
