<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('acceso') }}
            {{ Form::text('acceso', $tipoacceso->acceso, ['class' => 'form-control' . ($errors->has('acceso') ? ' is-invalid' : ''), 'placeholder' => 'Acceso']) }}
            {!! $errors->first('acceso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>