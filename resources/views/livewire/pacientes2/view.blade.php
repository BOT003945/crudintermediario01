@section('title', __('Pacientes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Paciente Listing </h4>
						</div>
						<div wire:poll.60s>
							<!-- <code><h5>{{ now()->format('H:i:s') }} UTC</h5></code> -->
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Pacientes">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Pacientes
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.pacientes2.create')
						@include('livewire.pacientes2.update')
				<div class="table-responsive">
					<table class="table table-striped" style="width:100%">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Sucursal</th>
								<th>idPaciente</th>
								<th>Paciente</th>
								<!-- <th>Paterno</th>
								<th>Materno</th>
								<th>Nombre</th>
								<th>Fecnac</th>
								<th>Sexo</th>
								<th>Calle</th>
								<th>Numero</th>
								<th>Rfc</th>
								<th>Estudios</th>
								<th>Ult Solicitud</th>
								<th>Fec Alta</th>
								<th>Importe</th>
								<th>Importe Acum</th>
								<th>Saldo</th>
								<th>Empresaant</th>
								<th>Suc Empresa</th>
								<th>Empresa</th>
								<th>Foraneo</th>
								<th>Descuento</th>
								<th>Titular</th>
								<th>Estado</th>
								<th>Municipio</th>
								<th>Localidad</th>
								<th>Cp</th>
								<th>Colonia</th>
								<th>Credencial</th>
								<th>Numcredencial</th>
								<th>Telefono</th>
								<th>Numempleado</th>
								<th>Pais</th>
								<th>Cliente</th>
								<th>Email</th>
								<th>Fecha Act</th>
								<th>Fecha Sync</th>
								<th>Flag Sucursales</th>
								<th>Eliminar</th>
								<th>Enviarwhatsapp</th> -->
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($pacientes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->sucursal }}</td>
								<td>{{ $row->idPaciente }}</td>
								<td>{{ $row->Paciente }}</td>
								<!-- <td>{{ $row->Paterno }}</td>
								<td>{{ $row->Materno }}</td>
								<td>{{ $row->Nombre }}</td>
								<td>{{ $row->FecNac }}</td>
								<td>{{ $row->Sexo }}</td>
								<td>{{ $row->Calle }}</td>
								<td>{{ $row->Numero }}</td>
								<td>{{ $row->Rfc }}</td>
								<td>{{ $row->Estudios }}</td>
								<td>{{ $row->Ult_solicitud }}</td>
								<td>{{ $row->Fec_alta }}</td>
								<td>{{ $row->Importe }}</td>
								<td>{{ $row->Importe_Acum }}</td>
								<td>{{ $row->Saldo }}</td>
								<td>{{ $row->EmpresaAnt }}</td>
								<td>{{ $row->suc_empresa }}</td>
								<td>{{ $row->Empresa }}</td>
								<td>{{ $row->Foraneo }}</td>
								<td>{{ $row->Descuento }}</td>
								<td>{{ $row->Titular }}</td>
								<td>{{ $row->Estado }}</td>
								<td>{{ $row->Municipio }}</td>
								<td>{{ $row->Localidad }}</td>
								<td>{{ $row->Cp }}</td>
								<td>{{ $row->Colonia }}</td>
								<td>{{ $row->Credencial }}</td>
								<td>{{ $row->NumCredencial }}</td>
								<td>{{ $row->Telefono }}</td>
								<td>{{ $row->NumEmpleado }}</td>
								<td>{{ $row->Pais }}</td>
								<td>{{ $row->cliente }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->fecha_act }}</td>
								<td>{{ $row->fecha_sync }}</td>
								<td>{{ $row->flag_sucursales }}</td>
								<td>{{ $row->eliminar }}</td>
								<td>{{ $row->enviarwhatsapp }}</td> -->
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Paciente id {{$row->id}}? \nDeleted Pacientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $pacientes->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
