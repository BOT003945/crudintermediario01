@extends('adminlte::page')

@section('content')  
<form  class="frmPacientes" id="Grupo" enctype="multipart/form-data" action="/detallegrupoantibioticos/{{$grupo_antibiotico->id}}" method="POST">
  @csrf
  @method('PUT')
  <div id="frm-pacientes" class="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" href="#Primero" data-toggle="tab" role="tab" aria-selected="false">
          <h4>Configuración del Grupo de Antibióticos</h4>
        </a>
      </li>       
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="Primero">
        <div class="card">
          <div class="card-body">
            <input hidden id="grupo_Id" name="grupo_Id" value="{{$grupo_antibiotico->id}}">
            <!----------------------descripcion---------------->
            <div class="form-group">
              <label for="descripcion">Descipción:</label>
              <input value="{{$grupo_antibiotico->descripcion}}" minlength="2" maxlength="100" onkeypress="return soloLetras(event)" required class="form-control" id="descripcion" name="descripcion" autofocus>
            </div>
                 
          </div>                                                               
        </div>
      </div>
      <div style="text-align:right">
        <a href="/detallegrupoantibioticos"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button></a>
        <button type="submit" class="btn btn-primary close-modal" >Guardar</button>         
      </div>

    </div>
  </div>


<!------------------------------------------------------------------------------------------------------------------->

<div class="card">
  <div class="card-header">
    <h4>Antibióticos del Grupo</h4>
    <?php $var_PHP = "<script> document.writeln(Var_JavaScript); </script>"; // igualar el valor de la variable JavaScript a PHP 
    echo $var_PHP   // muestra el resultado ?>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Antibióticos Disponibles</th>
            <th></th>
            <th>Antibióticos Asignados</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <!-------------------------------------------------------->
            <td style="width: 40%;">


              <select id="select_disponible" name="select_disponible" {{-- class="multi_select" --}} size="20">
                @foreach($antibioticos as $antibiotico)
                <option value="{{$antibiotico->id}}">{{$antibiotico->descripcion}}</option>
                @endforeach
              </select>
            </td>
            <td style="width: 20%;">
              <br>
              <center>
                <button id="btnGuardar" type="submit" class="btn btn-info"><i class="far fa fa-plus"></i></button>
              </center>
              <br>
          </form>
          <form id="Detalle" action="" method="POST">
            @csrf
            @method('DELETE')    
              <center>
                <button id="btnEliminar" class="btn btn-info"><i class="far fa fa-minus"></i></button>
              </center>
            </td>
          
            <!-------------------------------------------------------->
            <td style="width: 40%;">
              <div>
                <select id="select_asignado" name="select_asignado" size="20" style="width: 500px;">
                  @foreach($detallesGA as $ga)
                  <option value="{{$ga->id}}">{{$ga->antibiotico->descripcion}}</option>
                  @endforeach
                </select>
                
              </div>
          </form>
            </td>
            <!-------------------------------------------------------->
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
<script>var Var_JavaScript = 5;    // declaración de la variable </script>  
    
<script>
  $('#select_asignado').on('change', function() {
    var valor_seleccionado = "{{route('grupoantibioticos.destroy', 'valor' )}}";
    valor_seleccionado = valor_seleccionado.replace('valor', this.value)
    $("#Detalle").attr("action", valor_seleccionado);
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" 
integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function(){
    $('.multi_select').selectpicker();
  })
</script>
<script>
    function validaNumericos(event) {
      if(event.charCode >= 48 && event.charCode <= 57){
        return true;
      }
      return false;        
    }
</script>
<script>
        
    function soloLetras(e) {
        var key = e.keyCode || e.which,
        tecla = String.fromCharCode(key).toLowerCase(),
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
        especiales = [8, 37, 39, 46],
        tecla_especial = false;
      
        for (var i in especiales) {
            if (key == especiales[i]) {
              tecla_especial = true;
              break;
            }
        }
      
        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
          
    }
        
</script>

@stop