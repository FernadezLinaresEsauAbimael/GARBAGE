<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('terminal_id') }}
            {{ Form::select('terminal_id', $terminales, $camione->terminal_id, ['class' => 'form-control' . ($errors->has('terminal_id') ? ' is-invalid' : ''), 'placeholder' => 'Terminal Id']) }}
            {!! $errors->first('terminal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::select('usuario_id', $usuarios, $camione->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $camione->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placas') }}
            {{ Form::text('placas', $camione->placas, ['class' => 'form-control' . ($errors->has('placas') ? ' is-invalid' : ''), 'placeholder' => 'Placas']) }}
            {!! $errors->first('placas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>