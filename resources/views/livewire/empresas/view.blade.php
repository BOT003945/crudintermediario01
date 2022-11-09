@section('title', __('Empresas'))
<div class="card">
	<div class="card-header">
		<div class="card-header">
            <h5 class="card-title">Lista de Departamentos</h5>
			@if (session()->has('message'))
		    <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
			   {{ session('message') }} 
		    </div>
			
		    @endif
			@include('livewire.empresas.create')
			@include('livewire.empresas.update')
        </div>
		
	</div>
				
	<div class="card-body">		
		<div class="table-responsive">
			<button type="button" class="btn btn-info" data-toggle="modal" wire:click.prevent="cancel()" data-target="#createDataModal">
				<i class="fa fa-plus"></i>  Agregar Empresa
			</button>
            <a href="/empresas-pdf" style="text-decoration:none;color:aliceblue;"> <button type="button" class="btn btn-info" >Imprimir Reporte</button></a>
			
			<input wire:model='keyWord' type="text" class="float-right d-none d-sm-block" name="search" id="search" placeholder="Search Deptos">
			    <table id="deptos" class="table table-striped table-bordered" style="width:100%">
					<thead class="thead">
						<tr> 
							<th scope="col">Sucursal</th>
							<th scope="col">Nombre</th>
							<td scope="col">Acciones</td>
						</tr>
					</thead>
					<tbody>
						@foreach($empresas as $row)
						<tr>
							<td style="width: 5%;">{{ $row->sucursal }}</td>
							<td>{{ $row->Nombre }}</td>
							<td width="90">
								
								<a data-toggle="modal" data-target="#updateModal" class="btn-xs btn-primary fa fa fa-pencil" wire:click="edit({{$row->id}})">
									<i class="fa fa-edit"></i> 
								</a>							 
								<a class="btn-xs btn btn-danger" onclick="confirm('Confirm Delete Departamento id {{$row->id}}? \nDeleted Doctores cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})">
									<i class="fa fa-trash"></i>
								</a>   	
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>						
				{{ $empresas->links() }}
		</div>
	</div>
</div>
		