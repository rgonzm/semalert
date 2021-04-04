<?php

namespace App\Http\Controllers;

use App\Models\Cruce;
use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function index($id)
    {
        $cruces = Cruce::where('municipio_id', $id)->get();

        return view('municipio')
            ->with('cruces', $cruces);
    }
}
