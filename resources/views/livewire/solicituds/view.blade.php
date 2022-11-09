@section('title', __('Solicituds'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Solicitud Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Solicituds">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Solicituds
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.solicituds.create')
						@include('livewire.solicituds.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Id</th>
								<th>Sucursal</th>
								<th>Solicitud</th>
								<th>Folio</th>
								<th>Suc Paciente</th>
								<th>Paciente</th>
								<th>Fecha</th>
								<th>Suc Doctor</th>
								<th>Doctor</th>
								<th>Suc Empresa</th>
								<th>Empresa</th>
								<th>Tipo Pago</th>
								<th>Fecha Entrega</th>
								<th>Anticipo</th>
								<th>Expediente</th>
								<th>Importe</th>
								<th>Tipo Toma</th>
								<th>Estatus</th>
								<th>Descuento</th>
								<th>Facturar A</th>
								<th>Fur</th>
								<th>Total</th>
								<th>Porcentaje</th>
								<th>Fecha Entregado</th>
								<th>Factura</th>
								<th>Nomcredencial</th>
								<th>Pagos</th>
								<th>Numimpresultados</th>
								<th>Sefactura</th>
								<th>Impreso</th>
								<th>Edad</th>
								<th>Edadtipo</th>
								<th>Sexo</th>
								<th>Pase</th>
								<th>Tel</th>
								<th>Estudios</th>
								<th>Verificadopor</th>
								<th>Condicionesdepago</th>
								<th>Numcta</th>
								<th>Solpdf</th>
								<th>Procesar</th>
								<th>Fecha Act</th>
								<th>Fecha Sync</th>
								<th>Flag Sucursales</th>
								<th>Eliminar</th>
								<th>Subtotal</th>
								<th>Iva</th>
								<th>Retivaprct</th>
								<th>Retivaimpte</th>
								<th>Retisrprct</th>
								<th>Retisrimpte</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($solicituds as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->Id }}</td>
								<td>{{ $row->sucursal }}</td>
								<td>{{ $row->Solicitud }}</td>
								<td>{{ $row->Folio }}</td>
								<td>{{ $row->suc_paciente }}</td>
								<td>{{ $row->paciente }}</td>
								<td>{{ $row->Fecha }}</td>
								<td>{{ $row->suc_doctor }}</td>
								<td>{{ $row->Doctor }}</td>
								<td>{{ $row->suc_empresa }}</td>
								<td>{{ $row->Empresa }}</td>
								<td>{{ $row->Tipo_Pago }}</td>
								<td>{{ $row->Fecha_Entrega }}</td>
								<td>{{ $row->Anticipo }}</td>
								<td>{{ $row->Expediente }}</td>
								<td>{{ $row->Importe }}</td>
								<td>{{ $row->Tipo_toma }}</td>
								<td>{{ $row->Estatus }}</td>
								<td>{{ $row->Descuento }}</td>
								<td>{{ $row->Facturar_a }}</td>
								<td>{{ $row->Fur }}</td>
								<td>{{ $row->Total }}</td>
								<td>{{ $row->porcentaje }}</td>
								<td>{{ $row->Fecha_Entregado }}</td>
								<td>{{ $row->Factura }}</td>
								<td>{{ $row->NomCredencial }}</td>
								<td>{{ $row->Pagos }}</td>
								<td>{{ $row->NumImpResultados }}</td>
								<td>{{ $row->SeFactura }}</td>
								<td>{{ $row->Impreso }}</td>
								<td>{{ $row->Edad }}</td>
								<td>{{ $row->EdadTipo }}</td>
								<td>{{ $row->Sexo }}</td>
								<td>{{ $row->pase }}</td>
								<td>{{ $row->tel }}</td>
								<td>{{ $row->Estudios }}</td>
								<td>{{ $row->VerificadoPor }}</td>
								<td>{{ $row->condicionesdepago }}</td>
								<td>{{ $row->numcta }}</td>
								<td>{{ $row->SolPDF }}</td>
								<td>{{ $row->procesar }}</td>
								<td>{{ $row->fecha_act }}</td>
								<td>{{ $row->fecha_sync }}</td>
								<td>{{ $row->flag_sucursales }}</td>
								<td>{{ $row->eliminar }}</td>
								<td>{{ $row->subtotal }}</td>
								<td>{{ $row->iva }}</td>
								<td>{{ $row->retivaprct }}</td>
								<td>{{ $row->retivaimpte }}</td>
								<td>{{ $row->retisrprct }}</td>
								<td>{{ $row->retisrimpte }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Solicitud id {{$row->id}}? \nDeleted Solicituds cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $solicituds->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
