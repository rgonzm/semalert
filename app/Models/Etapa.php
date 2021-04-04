<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    public function fases()
    {
        return $this->belongsToMany(Fase::class);
    }
}
