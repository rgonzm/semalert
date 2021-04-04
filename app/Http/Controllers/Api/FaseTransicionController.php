<?php


namespace App\Http\Controllers\Api;


use App\Models\Cruce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaseTransicionController
{
    public function index(Request $request)
    {
        $faseeTrasiciones = $this->getFaseTransicion($request->input('cruce_id'))->groupBy('etapa_desc');
//        dd($faseeTrasiciones,$request);

        return $faseeTrasiciones;
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
