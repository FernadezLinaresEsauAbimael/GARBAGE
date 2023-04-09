@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop 

@section('template_title')
    {{ $camione->name ?? "{{ __('Show') Camione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Camion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('camiones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Terminal Id:</strong>
                            {{ $camione->terminal_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $camione->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $camione->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Placas:</strong>
                            {{ $camione->placas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('content')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 

@section('js')
    <script> console.log('Hi'); </script>
@stop 

