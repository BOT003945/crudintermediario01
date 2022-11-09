@extends('layouts.app')
@section('title', __('Grupo Antibioticos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Grupo Antibiotico Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Grupo Antibioticos">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Grupo Antibioticos
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.grupo_antibioticos.create')
						@include('livewire.grupo_antibioticos.update')
				<div class="table-responsive">
					<table class="table table-bordered table-stripped">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Descripcion</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($grupoAntibioticos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->descripcion }}</td>
								<td width="90">
								
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Grupo Antibiotico id {{$row->id}}? \nDeleted Grupo Antibioticos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>						
					{{ $grupoAntibioticos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
