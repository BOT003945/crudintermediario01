@extends('adminlte::page')

@section('title', 'Edición')

@section('content')
<br>
<div id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
	<div class="container-fluid card" style="width:40%;" >
		<div class="modal-body">
			<div id="CreaContainer">                                       
				<form  class="frmpacientes" id="createpacientes" enctype="multipart/form-data" action="/bacterias/{{$bacteria->id}}" method="POST">
					@csrf
					@method('PUT')
					<div id="frm-pacientes" class="tabpanel">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" href="#Primero" data-toggle="tab" role="tab" aria-selected="false">Datos Generales</a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="Primero">
							    <div class="card">
									<div class="card-body">
										<!--------------------Nombre------------------->
										<div class="form-group">
											
											<label class="control-label">Nombre:</label><b class="obligatorio">(*)</b>
											<input autocomplete="off" onkeypress="return soloLetras(event)" required class="form-control text-box single-line" value="{{$bacteria->descripcion}}" id="descripcion" minlength="2" maxlength="100" name="descripcion" type="text" tabindex="4">
										</div>
                                                
													
									</div>                                                               
								</div>
							</div>
							<a href="/bacterias"> <button class="btn btn-secondary" type="button">Cancelar</button></a>
							<button type="submit" class="btn btn-primary close-modal" >Guardar</button>
						</div>
			        </div>
			   </form>	
			</div>
		</div>
	</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/app.css">
@stop
@section('js')
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