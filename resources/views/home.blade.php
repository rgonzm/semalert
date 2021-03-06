@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    @foreach($municipios as $municipio)
                        <div
                            class="card col-5 mr-2"
                            @click="irMunicipio({{$municipio->id}})"
                        >
                            <div class="card-body">
                                {{$municipio->nombre}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.app.js') }}"></script>
@endpush
