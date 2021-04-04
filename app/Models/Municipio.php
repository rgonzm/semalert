<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function cruces()
    {
        return $this->hasMany(Cruce::class);
    }
}
