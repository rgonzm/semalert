<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cruce extends Model
{
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

}
