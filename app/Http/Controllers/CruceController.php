<?php

namespace App\Http\Controllers;

use App\Models\Cruce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CruceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index($id)
    {
        $cruce = Cruce::where('id', $id)->first();

        $faseeTrasiciones = $this->getFaseTransicion($id)->groupBy('etapa_desc');
//        dd($faseeTrasiciones);

        return view('cruce')
            ->with('cruce', $cruce)
            ->with('fasesTransiciones',$faseeTrasiciones);
    }

    private function getFaseTransicion($cruceId)
    {
        return DB::table('fase_transicion')
            ->join('etapas','etapas.id','=','fase_transicion.etapa_id')
            ->join('fases','fases.id','=','fase_transicion.fase_id')
            ->join('lamparas','lamparas.id','=','fase_transicion.lampara_id')
            ->join('estados','estados.id','=','fase_transicion.estado_id')
            ->select('etapas.nombre as etapa_desc',
                'fases.nombre as fase_desc',
                'lamparas.color as lampara_desc',
                'estados.nombre as estado_desc',
                'fase_transicion.*'
            )
            ->where('cruce_id',$cruceId)
            ->orderBy('etapa_id')
            ->get();
    }

}
