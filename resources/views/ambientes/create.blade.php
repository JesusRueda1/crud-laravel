@extends('layouts.app')

@section('css')
<link rel="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css" href="styleshet">
@endsection 

@section('template_title')
    Create Ciudade
@endsection

@section('content')
<div class="container"> 
    <section id="Administrador" class="container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Ciudade</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ciudades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('Administrador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
