@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop 

@section('template_title')
    {{ __('Create') }} Camione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Camione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('camiones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('camione.form')

                        </form>
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
