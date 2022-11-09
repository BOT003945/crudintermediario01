<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="sucursal"></label>
                <input wire:model="sucursal" type="text" class="form-control" id="sucursal" placeholder="Sucursal">@error('sucursal') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Clave"></label>
                <input wire:model="Clave" type="text" class="form-control" id="Clave" placeholder="Clave">@error('Clave') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Paciente"></label>
                <input wire:model="Paciente" type="text" class="form-control" id="Paciente" placeholder="Paciente">@error('Paciente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Paterno"></label>
                <input wire:model="Paterno" type="text" class="form-control" id="Paterno" placeholder="Paterno">@error('Paterno') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Materno"></label>
                <input wire:model="Materno" type="text" class="form-control" id="Materno" placeholder="Materno">@error('Materno') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FecNac"></label>
                <input wire:model="FecNac" type="text" class="form-control" id="FecNac" placeholder="Fecnac">@error('FecNac') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Sexo"></label>
                <input wire:model="Sexo" type="text" class="form-control" id="Sexo" placeholder="Sexo">@error('Sexo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Calle"></label>
                <input wire:model="Calle" type="text" class="form-control" id="Calle" placeholder="Calle">@error('Calle') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Numero"></label>
                <input wire:model="Numero" type="text" class="form-control" id="Numero" placeholder="Numero">@error('Numero') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Rfc"></label>
                <input wire:model="Rfc" type="text" class="form-control" id="Rfc" placeholder="Rfc">@error('Rfc') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Estudios"></label>
                <input wire:model="Estudios" type="text" class="form-control" id="Estudios" placeholder="Estudios">@error('Estudios') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Ult_solicitud"></label>
                <input wire:model="Ult_solicitud" type="text" class="form-control" id="Ult_solicitud" placeholder="Ult Solicitud">@error('Ult_solicitud') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fec_alta"></label>
                <input wire:model="Fec_alta" type="text" class="form-control" id="Fec_alta" placeholder="Fec Alta">@error('Fec_alta') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe"></label>
                <input wire:model="Importe" type="text" class="form-control" id="Importe" placeholder="Importe">@error('Importe') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe_Acum"></label>
                <input wire:model="Importe_Acum" type="text" class="form-control" id="Importe_Acum" placeholder="Importe Acum">@error('Importe_Acum') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Saldo"></label>
                <input wire:model="Saldo" type="text" class="form-control" id="Saldo" placeholder="Saldo">@error('Saldo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="EmpresaAnt"></label>
                <input wire:model="EmpresaAnt" type="text" class="form-control" id="EmpresaAnt" placeholder="Empresaant">@error('EmpresaAnt') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <label for="Foraneo"></label>
                <input wire:model="Foraneo" type="text" class="form-control" id="Foraneo" placeholder="Foraneo">@error('Foraneo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Descuento"></label>
                <input wire:model="Descuento" type="text" class="form-control" id="Descuento" placeholder="Descuento">@error('Descuento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Titular"></label>
                <input wire:model="Titular" type="text" class="form-control" id="Titular" placeholder="Titular">@error('Titular') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Estado"></label>
                <input wire:model="Estado" type="text" class="form-control" id="Estado" placeholder="Estado">@error('Estado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Municipio"></label>
                <input wire:model="Municipio" type="text" class="form-control" id="Municipio" placeholder="Municipio">@error('Municipio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Localidad"></label>
                <input wire:model="Localidad" type="text" class="form-control" id="Localidad" placeholder="Localidad">@error('Localidad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Cp"></label>
                <input wire:model="Cp" type="text" class="form-control" id="Cp" placeholder="Cp">@error('Cp') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Colonia"></label>
                <input wire:model="Colonia" type="text" class="form-control" id="Colonia" placeholder="Colonia">@error('Colonia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Credencial"></label>
                <input wire:model="Credencial" type="text" class="form-control" id="Credencial" placeholder="Credencial">@error('Credencial') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NumCredencial"></label>
                <input wire:model="NumCredencial" type="text" class="form-control" id="NumCredencial" placeholder="Numcredencial">@error('NumCredencial') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Telefono"></label>
                <input wire:model="Telefono" type="text" class="form-control" id="Telefono" placeholder="Telefono">@error('Telefono') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NumEmpleado"></label>
                <input wire:model="NumEmpleado" type="text" class="form-control" id="NumEmpleado" placeholder="Numempleado">@error('NumEmpleado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Pais"></label>
                <input wire:model="Pais" type="text" class="form-control" id="Pais" placeholder="Pais">@error('Pais') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cliente"></label>
                <input wire:model="cliente" type="text" class="form-control" id="cliente" placeholder="Cliente">@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <label for="enviarwhatsapp"></label>
                <input wire:model="enviarwhatsapp" type="text" class="form-control" id="enviarwhatsapp" placeholder="Enviarwhatsapp">@error('enviarwhatsapp') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
