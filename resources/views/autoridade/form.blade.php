<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('autoridad') }}
            {{ Form::text('autoridad', $autoridade->autoridad, ['class' => 'form-control' . ($errors->has('autoridad') ? ' is-invalid' : ''), 'placeholder' => 'Autoridad']) }}
            {!! $errors->first('autoridad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $autoridade->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>