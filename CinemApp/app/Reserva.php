<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function funcion()
    {
        return $this->belongsTo(Funcion::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
