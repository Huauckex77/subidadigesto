<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dependencia') }}
            {{ Form::text('dependencia', $dependencia->dependencia, ['class' => 'form-control' . ($errors->has('dependencia') ? ' is-invalid' : ''), 'placeholder' => 'Dependencia']) }}
            {!! $errors->first('dependencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>