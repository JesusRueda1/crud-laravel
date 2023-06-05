@extends('layouts.app')

@section('template_title')
    {{ $Administrador->name ?? 'Show Administrador' }}
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Administrador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Administradors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ambientes Id:</strong>
                            {{ $Administrador->Ambientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $Administrador->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $Administrador->documento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
