@extends('layouts.app')

@section('template_title')
    {{ $rutasHora->name ?? "{{ __('Show') Rutas Hora" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rutas Hora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rutas-horas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ruta Id:</strong>
                            {{ $rutasHora->ruta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Horario Id:</strong>
                            {{ $rutasHora->horario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
