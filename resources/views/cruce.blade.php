@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="mb-5">{{$cruce->interseccion}} <span class="badge bg-danger">Apagado</span></h3>
                <div class="row">
                    @foreach($fasesTransiciones as $nombreEtapa => $etapa)
                        <div class="card col-3 mr-2 mb-2">
                            <div class="card-body">
                                <h5 class="card-title">{{$nombreEtapa}}</h5>
                                <ul class="mt-3 mb-3 semaforo {{$etapa->where('lampara_id','3')->first()->estado_id == 1 ?'verde':'rojo'}}">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        window.__store__ = {
            cruce: @json($cruce)
        }
    </script>
    <script src="{{ asset('js/cruce.app.js') }}"></script>
@endpush
