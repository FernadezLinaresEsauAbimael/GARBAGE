<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ruta_id') }}
            {{ Form::text('ruta_id', $rutasHora->ruta_id, ['class' => 'form-control' . ($errors->has('ruta_id') ? ' is-invalid' : ''), 'placeholder' => 'Ruta Id']) }}
            {!! $errors->first('ruta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario_id') }}
            {{ Form::text('horario_id', $rutasHora->horario_id, ['class' => 'form-control' . ($errors->has('horario_id') ? ' is-invalid' : ''), 'placeholder' => 'Horario Id']) }}
            {!! $errors->first('horario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>

        <a class="btn btn-primary" href="{{ route('rutas-horas.index') }}"> {{ __('Back') }}</a>

    </div>
</div>