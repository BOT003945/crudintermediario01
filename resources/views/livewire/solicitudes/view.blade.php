@section('title', __('Solicitudes'))

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card card-light">   
				<div>
					
					<label>Selecciona un paciente:</label>
                    <select id="select2" class="form-select" wire:model="pacienteSeleccionado">
						<option value="">Seleccione un paciente</option>
                        @foreach($pacientes as $paciente)
                        <option value="{{$paciente->id}}" >{{$paciente->Paciente}}</option>
                        @endforeach
                    </select>
                    <button type="button" class="btn btn-info" data-toggle="modal" wire:click.prevent="cancel()" data-target="#createDataModal">
                       <i class="fa fa-plus"></i>
                    </button>
                    <button data-placement="top" type="button" class="editbtn" wire:click.prevent="cancel()" wire:click="edit({{$pacienteSeleccionado}})"
						 data-toggle="modal" data-target="#updateModal">
                       <i class="fa fa-edit"></i>
                    </button>
                    <a class="btn-xs btn btn-danger" onclick="confirm('Confirmar eliminación del Paciente id {{$pacienteSeleccionado}}? \nDeleted Pacientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$pacienteSeleccionado}})"><i class="fa fa-trash"></i></a>   
					<label class="flex justify-center">Ud. seleccionó: <strong>{{ $pacienteSeleccionado }}</strong></label>
				</div>
			</div>
		</div>
	</div>
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
					<div class="card-body">
                {{--	@include('livewire.solicitudes.update2')--}}						
                         @include('livewire.solicitudes.create')
						 @include('livewire.solicitudes.update')
							
					<div class="table-responsive">
						<div class="card-header">
							<h5 class="card-title">Lista de Pacientes</h5>
							
						</div>						
						@if (session()->has('message'))
							<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<input wire:model='keyWord' type="text" class="float-right d-none d-sm-block" name="search" id="search" placeholder="Search Pacientes">
						<!-----------------------------!!!!!!!!!!!!!!TABLA!!!!!!!!!!!!!!---------------------------------------->
						<table id="pacientes" class="table table-striped" style="width:100%">
							<thead class="thead">
								<tr> 
									
									<th scope="col">Sucursal</th>
									<th scope="col">Paciente</th>
									<th scope="col">Fecha de Nacimiento</th>
									<td scope="col">Acciones</td>
								</tr>
							</thead>
							<tbody>
								
								@foreach($pacientes as $row)
								  
								<tr>
									
									<td style="width: 5%;">{{ $row->sucursal }}</td>
									<td style="width: 40%;">{{ $row->Paciente }}</td>
									<td>{{date('d/m/Y', strtotime($row->FecNac))}}</td>
									<td>
										<a data-toggle="modal" data-target="#updateModal" class="btn-xs btn-primary fa fa fa-pencil" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i></a>							 
										<a class="btn-xs btn btn-danger" onclick="confirm('Confirmar eliminación del Paciente id {{$row->id}}? \nDeleted Pacientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i></a>   
										
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<!-------------Hace que funcione la paginación/Si se elimina, la paginación no funcionará------------------>	
						{{$pacientes->links()}}			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- <script>
     
		$(document).ready(function() {
			$('#select2').select2();
			$('#select2').on('change', function (e) {
				let valor = $('#select2').select2("val");//seleccionamos el value      
				var data = $('#select2').select2("val");
            @this.set('pacienteSeleccionado', data); 
				
			});
		});
	</script> --}}
	<link rel="stylesheet" href="/css/admin_custom.css">
	<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/select@4.1.0-rc.0/dist/js/select2.min.js" ></script>

{{-- <script type="text/javascript">
    $(document).ready( function () {
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('#ajax-crud-datatable').DataTable({
    // processing: true,
    serverSide: true,
    ajax: "{{ url('doctores') }}",
    columns: [
    { data: 'doctor', name: 'doctor'},
    { data: 'email', name: 'email' },
    { data: 'FecNac', name: 'FecNac' },
    {data: 'action', name: 'action', orderable: false},
    ],
    order: [[0, 'desc']]
    });
    });
    function add(){
    $('#CompanyForm').trigger("reset");
    $('#CompanyModal').html("Registro de doctores");
    $('#company-modal').modal('show');
    $('#id').val('');
    }   
    function editFunc(id){
$.ajax({
type:"POST",
url: "{{ url('doctores.edit2') }}",
data: { id: id },
dataType: 'json',
success: function(res){
$('#CompanyModal').html("Editar doctor");
$('#company-modal').modal('show');
$('#id').val(res.id);
$('#Doctor').val(res.doctor);
/* $('#paterno').val(res.Paterno);
$('#materno').val(res.Materno); */
$('#fecnac').val(res.FecNac);
$('#especialidad1').val(res.Especialidad1);
$('#cedprof').val(res.CedProf);
$('#centro').val(res.Centro);
$('#sexo').val(res.Sexo);
$('#tels').val(res.Tels);
$('#Email').val(res.email);
$('#direccion').val(res.Direccion);
$('#colonia').val(res.Colonia);
$('#Cp').val(res.cp);
$('#estado').val(res.Estado);
$('#municipio').val(res.Municipio);
}
});
} 
    function deleteFunc(id){
    if (confirm("Delete Record?") == true) {
    var id = id;
    // ajax
    $.ajax({
    type:"POST",
    url: "{{ url('doctores.destroy') }}",
    data: { id: id },
    dataType: 'json',
    success: function(res){
    var oTable = $('#ajax-crud-datatable').dataTable();
    oTable.fnDraw(false);
    }
    });
    }
    }
    $('#CompanyForm').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
    type:'POST',
    url: "{{ url('doctores.store')}}",
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    success: (data) => {
    $("#company-modal").modal('hide');
    var oTable = $('#ajax-crud-datatable').dataTable();
    oTable.fnDraw(false);
    $("#btn-save").html('Submit');
    $("#btn-save"). attr("disabled", false);
    },
    error: function(data){
    console.log(data);
    }
    });
    });
    </script> --}}