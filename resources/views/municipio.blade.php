@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    @foreach($cruces as $cruce)
                        <div
                            class="card col-5 mr-2"
                            @click="irCruce({{$cruce->id}})"
                        >
                            <div class="card-body">
                                <p>{{$cruce->interseccion}}</p>
                                <span class="badge bg-danger">Apagado</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/municipio.app.js') }}"></script>
@endpush
