@extends('layouts.app')

@section('template_title')
    {{ $autoridade->name ?? "{{ __('Show') Autoridade" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Autoridade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autoridades.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Autoridad:</strong>
                            {{ $autoridade->autoridad }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $autoridade->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
