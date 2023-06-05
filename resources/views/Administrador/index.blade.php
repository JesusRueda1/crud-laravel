@extends('layouts.app')

@section('css')
<link rel="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css" href="styleshet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->

@endsection 

@section('template_title')
    Administrador
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administrador') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('Administradors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table table-striped table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Administrador Id</th>
										<th>Nombre</th>
										<th>Documento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Administradors as $Administrador)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                {{ $Administrador->Ambiente->nombre}}
                                            </td>
											<td>{{ $Administrador->nombre }}</td>
											<td>{{ $Administrador->documento }}</td>

                                            <td>
                                                <form action="{{ route('Administradors.destroy',$Administrador->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Administradors.show',$Administrador->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Administradors.edit',$Administrador->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $Administradors->links() !!}
            </div>
        </div>
    </div>
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('jquery-3.6.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('DataTables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script>

    @endsection
@endsection
