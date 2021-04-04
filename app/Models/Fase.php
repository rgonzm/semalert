<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    public function controlador()
    {
        return $this->belongsTo(Controlador::class);
    }
}
