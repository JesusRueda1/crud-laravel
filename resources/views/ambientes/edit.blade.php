@extends('layouts.app')

@section('css')
<link rel="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css" href="styleshet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->

@endsection 

@section('template_title')
    Update Ambiente
@endsection

@section('content')
    <section class="container">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Ambiente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Ambientes.update', $Ambiente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('Administrador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
