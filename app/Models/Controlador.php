<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Controlador extends Model
{
    protected $table = 'controladores';

    public function cruces()
    {
        return $this->belongsToMany(Cruce::class);
    }
}
