@extends('layouts.app')

@section('css')
<link rel="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css" href="styleshet">
@endsection 

@section('template_title')
    {{ $ciudade->name ?? 'Show Ciudade' }}
@endsection

@section('content')
<div id="Administrador" class="container"> 
    <section class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ciudade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ciudades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ciudade->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
     </div>
</section>
@endsection
