<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    public function viaje ()
    {
        return $this->belongsTo(Viaje::class);
    }
    use HasFactory;
}
