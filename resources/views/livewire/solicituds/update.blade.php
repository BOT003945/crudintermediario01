<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="Id"></label>
                <input wire:model="Id" type="text" class="form-control" id="Id" placeholder="Id">@error('Id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="sucursal"></label>
                <input wire:model="sucursal" type="text" class="form-control" id="sucursal" placeholder="Sucursal">@error('sucursal') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Solicitud"></label>
                <input wire:model="Solicitud" type="text" class="form-control" id="Solicitud" placeholder="Solicitud">@error('Solicitud') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Folio"></label>
                <input wire:model="Folio" type="text" class="form-control" id="Folio" placeholder="Folio">@error('Folio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="suc_paciente"></label>
                <input wire:model="suc_paciente" type="text" class="form-control" id="suc_paciente" placeholder="Suc Paciente">@error('suc_paciente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="paciente"></label>
                <input wire:model="paciente" type="text" class="form-control" id="paciente" placeholder="Paciente">@error('paciente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha"></label>
                <input wire:model="Fecha" type="text" class="form-control" id="Fecha" placeholder="Fecha">@error('Fecha') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="suc_doctor"></label>
                <input wire:model="suc_doctor" type="text" class="form-control" id="suc_doctor" placeholder="Suc Doctor">@error('suc_doctor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Doctor"></label>
                <input wire:model="Doctor" type="text" class="form-control" id="Doctor" placeholder="Doctor">@error('Doctor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="suc_empresa"></label>
                <input wire:model="suc_empresa" type="text" class="form-control" id="suc_empresa" placeholder="Suc Empresa">@error('suc_empresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Empresa"></label>
                <input wire:model="Empresa" type="text" class="form-control" id="Empresa" placeholder="Empresa">@error('Empresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tipo_Pago"></label>
                <input wire:model="Tipo_Pago" type="text" class="form-control" id="Tipo_Pago" placeholder="Tipo Pago">@error('Tipo_Pago') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_Entrega"></label>
                <input wire:model="Fecha_Entrega" type="text" class="form-control" id="Fecha_Entrega" placeholder="Fecha Entrega">@error('Fecha_Entrega') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Anticipo"></label>
                <input wire:model="Anticipo" type="text" class="form-control" id="Anticipo" placeholder="Anticipo">@error('Anticipo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Expediente"></label>
                <input wire:model="Expediente" type="text" class="form-control" id="Expediente" placeholder="Expediente">@error('Expediente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe"></label>
                <input wire:model="Importe" type="text" class="form-control" id="Importe" placeholder="Importe">@error('Importe') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tipo_toma"></label>
                <input wire:model="Tipo_toma" type="text" class="form-control" id="Tipo_toma" placeholder="Tipo Toma">@error('Tipo_toma') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Estatus"></label>
                <input wire:model="Estatus" type="text" class="form-control" id="Estatus" placeholder="Estatus">@error('Estatus') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Descuento"></label>
                <input wire:model="Descuento" type="text" class="form-control" id="Descuento" placeholder="Descuento">@error('Descuento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Facturar_a"></label>
                <input wire:model="Facturar_a" type="text" class="form-control" id="Facturar_a" placeholder="Facturar A">@error('Facturar_a') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fur"></label>
                <input wire:model="Fur" type="text" class="form-control" id="Fur" placeholder="Fur">@error('Fur') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Total"></label>
                <input wire:model="Total" type="text" class="form-control" id="Total" placeholder="Total">@error('Total') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="porcentaje"></label>
                <input wire:model="porcentaje" type="text" class="form-control" id="porcentaje" placeholder="Porcentaje">@error('porcentaje') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_Entregado"></label>
                <input wire:model="Fecha_Entregado" type="text" class="form-control" id="Fecha_Entregado" placeholder="Fecha Entregado">@error('Fecha_Entregado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Factura"></label>
                <input wire:model="Factura" type="text" class="form-control" id="Factura" placeholder="Factura">@error('Factura') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NomCredencial"></label>
                <input wire:model="NomCredencial" type="text" class="form-control" id="NomCredencial" placeholder="Nomcredencial">@error('NomCredencial') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Pagos"></label>
                <input wire:model="Pagos" type="text" class="form-control" id="Pagos" placeholder="Pagos">@error('Pagos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NumImpResultados"></label>
                <input wire:model="NumImpResultados" type="text" class="form-control" id="NumImpResultados" placeholder="Numimpresultados">@error('NumImpResultados') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="SeFactura"></label>
                <input wire:model="SeFactura" type="text" class="form-control" id="SeFactura" placeholder="Sefactura">@error('SeFactura') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Impreso"></label>
                <input wire:model="Impreso" type="text" class="form-control" id="Impreso" placeholder="Impreso">@error('Impreso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Edad"></label>
                <input wire:model="Edad" type="text" class="form-control" id="Edad" placeholder="Edad">@error('Edad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="EdadTipo"></label>
                <input wire:model="EdadTipo" type="text" class="form-control" id="EdadTipo" placeholder="Edadtipo">@error('EdadTipo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Sexo"></label>
                <input wire:model="Sexo" type="text" class="form-control" id="Sexo" placeholder="Sexo">@error('Sexo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="pase"></label>
                <input wire:model="pase" type="text" class="form-control" id="pase" placeholder="Pase">@error('pase') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tel"></label>
                <input wire:model="tel" type="text" class="form-control" id="tel" placeholder="Tel">@error('tel') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Estudios"></label>
                <input wire:model="Estudios" type="text" class="form-control" id="Estudios" placeholder="Estudios">@error('Estudios') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="VerificadoPor"></label>
                <input wire:model="VerificadoPor" type="text" class="form-control" id="VerificadoPor" placeholder="Verificadopor">@error('VerificadoPor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="condicionesdepago"></label>
                <input wire:model="condicionesdepago" type="text" class="form-control" id="condicionesdepago" placeholder="Condicionesdepago">@error('condicionesdepago') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="numcta"></label>
                <input wire:model="numcta" type="text" class="form-control" id="numcta" placeholder="Numcta">@error('numcta') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="SolPDF"></label>
                <input wire:model="SolPDF" type="text" class="form-control" id="SolPDF" placeholder="Solpdf">@error('SolPDF') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="procesar"></label>
                <input wire:model="procesar" type="text" class="form-control" id="procesar" placeholder="Procesar">@error('procesar') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_act"></label>
                <input wire:model="fecha_act" type="text" class="form-control" id="fecha_act" placeholder="Fecha Act">@error('fecha_act') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_sync"></label>
                <input wire:model="fecha_sync" type="text" class="form-control" id="fecha_sync" placeholder="Fecha Sync">@error('fecha_sync') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="flag_sucursales"></label>
                <input wire:model="flag_sucursales" type="text" class="form-control" id="flag_sucursales" placeholder="Flag Sucursales">@error('flag_sucursales') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="eliminar"></label>
                <input wire:model="eliminar" type="text" class="form-control" id="eliminar" placeholder="Eliminar">@error('eliminar') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="subtotal"></label>
                <input wire:model="subtotal" type="text" class="form-control" id="subtotal" placeholder="Subtotal">@error('subtotal') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="iva"></label>
                <input wire:model="iva" type="text" class="form-control" id="iva" placeholder="Iva">@error('iva') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="retivaprct"></label>
                <input wire:model="retivaprct" type="text" class="form-control" id="retivaprct" placeholder="Retivaprct">@error('retivaprct') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="retivaimpte"></label>
                <input wire:model="retivaimpte" type="text" class="form-control" id="retivaimpte" placeholder="Retivaimpte">@error('retivaimpte') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="retisrprct"></label>
                <input wire:model="retisrprct" type="text" class="form-control" id="retisrprct" placeholder="Retisrprct">@error('retisrprct') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="retisrimpte"></label>
                <input wire:model="retisrimpte" type="text" class="form-control" id="retisrimpte" placeholder="Retisrimpte">@error('retisrimpte') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
