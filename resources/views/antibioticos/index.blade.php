@extends('adminlte::page')


@section('content_header')
    <h1>Catalogo de Antibióticos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a style="text-decoration:none;color:aliceblue;" class="float-right d-none d-sm-block">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
               <i class="far fa fa-plus-square"></i> Agregar
           </button> 
        </a>
        @include('antibioticos.create')
    </div>
    <div class="card-body">
        <table id="antibioticos" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Descripción</th>
                    <td scope="col">Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($antibioticos as $antibiotico)
                <tr>
                    <td style="text-transform: uppercase;width: 92%;">{{$antibiotico->descripcion}}</td>
                    <td><center>
                        <form class="formulario" action="{{route('antibioticos.destroy',$antibiotico->id)}}" method ="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('antibioticos.edit',Crypt::encrypt($antibiotico->id))}}" class="btn-xs btn-primary fa fa fa-pencil"><i class="fa fa-edit"></i></a>
                        
                           <button class="btn-xs btn btn-danger"><i class="fa fa-trash"></i></button>
                            
                        </form></center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
@stop

@section('js') {{--SweetAlert Vista--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('eliminar')=='Echo')
    <script>
        Swal.fire(
      '¡Eliminado!',
      'El registro ha sido eliminado.',
      'Cumplido.'
    )
    </script>
    @endif
    <script>
        $('.formulario').submit(function(e){
            e.preventDefault();
            Swal.fire({
  title: '¿Estás seguro?',
  text: "¡No podrás revertir esta acción!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, ¡Eliminalo!'
}).then((result) => {
  if (result.isConfirmed) {
    
    this.submit();
  }
})
        });
        
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script>
        $(document).ready(function () {
           $('#antibioticos').DataTable({
           "lengthMenu": [[10,50,-1], [10,50,"All"]]
        });
    });
    </script> 
@stop