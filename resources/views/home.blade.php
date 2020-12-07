@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel Administrativo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row">
                    <div class="col-lg-2">
                        <a class="btn btn-outline-primary">Paginas</a>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn btn-outline-success">Planes</a>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn btn-outline-primary">Slider</a>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn btn-outline-success">Sitios</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="btn btn-outline-primary">Galeria Sitios</a>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
