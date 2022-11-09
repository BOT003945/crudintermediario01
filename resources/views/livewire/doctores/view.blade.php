@extends('layouts.app')
@section('title', __('Doctores'))

<div class="card">
	<div class="card-header">
		<div class="card-header">
            <h5 class="card-title">Lista de doctores</h5>
			@if (session()->has('message'))
		    <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
			   {{ session('message') }} 
		    </div>
		    @endif
			@include('livewire.doctores.create')
			@include('livewire.doctores.update')
        </div>
	</div>
				
				<div class="card-body">
						
				<div class="table-responsive">
					<button type="button" class="btn btn-info" data-toggle="modal" wire:click.prevent="cancel()" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar doctores
					</button>
					<a href="/doctores-pdf" style="text-decoration:none;color:aliceblue;"> <button type="button" class="btn btn-info" >Imprimir Reporte</button></a>
					
					<input wire:model='keyWord' type="text" class="float-right d-none d-sm-block" name="search" id="search" placeholder="Search">
					<table id="docs" class="table table-striped table-bordered" style="width:100%" >

						<thead class="thead">
							<tr> 
								<th scope="col">Doctor</th>							
								<th scope="col">Email</th>
								<th scope="col">Fecha de nacimiento</th>
								<td scope="col">Acciones</td>
							</tr>
						</thead>
						<tbody>
							@foreach($doctores as $row)
							<tr>								
								<td>{{ $row->doctor }}</td>																
								<td>{{ $row->email }}</td>
								<td>{{date('d/m/Y', strtotime($row->FecNac))}}</td>
								<td width="90">
							
									
									
									<a data-toggle="modal" data-target="#updateModal" class="btn-xs btn-primary fa fa fa-pencil" wire:click="edit({{$row->id}})">
										<i class="fa fa-edit"></i> 
									</a>							 
									<a class="btn-xs btn btn-danger" onclick="confirm('Confirm Delete Doctore id {{$row->id}}? \nDeleted Doctores cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})">
										<i class="fa fa-trash"></i>
									</a>   

								</td>
							</tr>
							@endforeach
						</tbody>
					</table>						
					{{ $doctores->links() }}
					</div>
				</div>
</div>
		
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
         $('#docs').DataTable({
        "lengthMenu": [[10,50,-1], [10,50,"All"]]
        });
    });
</script>