@section('title', __('Estudios'))
<div class="container-fluid card">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div >
				<h5 class="card-title">Lista de Estudios</h5>
				<hr>
					
				<hr>
			</div>
			@include('livewire.estudios.create')
			@include('livewire.estudios.update')
				
			<div class="table-responsive">
				<button type="button" class="btn btn-info" data-toggle="modal" wire:click.prevent="cancel()" data-target="#createDataModal">
					<i class="fa fa-plus"></i>  Agregar estudio
				</button>
				<a href="/estudios-pdf" style="text-decoration:none;color:aliceblue;"> <button type="button" class="btn btn-info" >Imprimir Reporte</button></a>
				
				<input wire:model='keyWord' type="text" class="float-right d-none d-sm-block" name="search" id="search" placeholder="Search estudios">
				@if (session()->has('message'))
					<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
				@endif
				<!-----------------------------!!!!!!!!!!!!!!TABLA!!!!!!!!!!!!!!---------------------------------------->
				<table id="estudios" class="table table-striped table-bordered" style="width:100%">
					<thead class="thead">
						<tr> 
							<th scope="col">Nombre del Estudio</th>
							<td scope="col">Tomas</td>
							<td scope="col">Frecuencia</td>
							<td scope="col">Tiempo de Proceso</td>
							<td scope="col">Tipo de Muestra</td>
							<td scope="col">Acciones</td>
						</tr>
					</thead>
					<tbody>
						
						@foreach($estudios as $estudio)
					   
						<tr>
							<td>{{ $estudio->Nombre }}</td>
							<td>{{ $estudio->Tomas }}</td>
							<td>{{ $estudio->Frecuencia }}</td>
							<td>{{ $estudio->TiempoProceso }}</td>
							<td>{{ $estudio->TipoMuestra }}</td>
							<td>
							
								<a data-toggle="modal" data-target="#updateModal" class="btn-xs btn-primary fa fa fa-pencil" wire:click="edit({{$estudio->id}})">
									<i class="fa fa-edit"></i> </a>							 
								<a class="btn-xs btn btn-danger" onclick="confirm('Confirm Delete Estudio id {{$estudio->id}}? \nDeleted Estudios cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$estudio->id}})">
									<i class="fa fa-trash"></i> </a>   
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>						
				{{ $estudios->links() }}
			</div>
		</div>
	</div>
</div>
