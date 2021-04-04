<?php

namespace App\Http\Controllers;

use App\Models\Cruce;
use App\Models\Municipio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $municipios = Municipio::all();
//        ddd($cruces);
        return view('home')
            ->with('municipios', $municipios);
    }
}
