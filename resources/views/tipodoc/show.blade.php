@extends('layouts.app')

@section('template_title')
    {{ $tipodoc->name ?? "{{ __('Show') Tipodoc" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipodoc</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipodocs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $tipodoc->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $tipodoc->documento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
