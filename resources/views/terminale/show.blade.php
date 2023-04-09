@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop 

@section('template_title')
    {{ $terminale->name ?? "{{ __('Show') Terminale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Terminal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('terminales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado Id:</strong>
                            {{ $terminale->estado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $terminale->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('content')
    <p>Welcome</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 

@section('js')
    <script> console.log('Hi'); </script>
@stop 
