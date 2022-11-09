<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Registrar nuevo Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="row">
                        
                        <div class="col-md-6 card">
                            <ul class="nav nav-tabs" role="tablist" style="border:0;">
                                <li style="border:0;" class="nav-item" role="presentation" >
                                    <a class="nav-link active" href="#General" aria-controls="" data-toggle="tab" role="tab" aria-selected="false">
                                        Datos Personales
                                    </a>
                                </li>
                                
                           </ul>
                           <br>
                           <br>
                           <hr>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Doctor:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input minlength="1" maxlength="150" onkeypress="return soloLetras(event)" placeholder="Nombre del doctor" autocomplete="off" required class="form-control text-box single-line" id="doctor" name="doctor" type="text" wire:model="doctor">@error('doctor') <span class="error text-danger">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Fecha de nacimiento:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="FecNac" class="form-control text-box single-line" id="FecNac" maxlength="10" name="FecNac" type="date">@error('FecNac') <span class="error text-danger">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Especialidad:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input autocomplete="off" onkeypress="return soloLetras(event)" class="form-control text-box single-line" id="Especialidad1" wire:model="Especialidad1" maxlength="30" name="Especialidad1" type="text" required tabindex="7">@error('Especialidad1') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Cédula Profesional:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input autofocus class="form-control text-box single-line" id="CedProf" minlength="6" wire:model="CedProf" maxlength="30" name="CedProf" type="text">                          

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Centro:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" id="Centro" maxlength="30" wire:model="Centro"  name="Centro" type="tel" >

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Sexo:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input wire:model="Sexo" checked="True" class="form-check-input" id="Sexo" name="Sexo" type="radio" value="H"><label class="form-check-label" for="Hombre">H</label>@error('Sexo') <span class="error text-danger">{{ $message }}</span> @enderror
                                     </div>
                                     <div class="form-check">
                                         <input class="form-check-input" id="Sexo" name="Sexo" type="radio" value="M" wire:model="Sexo"><label class="form-check-label" for="Mujer">M</label>
                                     </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Teléfono:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress='return validaNumericos(event)' wire:model="Tels" class="form-control text-box single-line" id="Tels"  minlength="10" maxlength="10" name="Tels" type="tel" value="">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Email:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="email" class="form-control text-box single-line" id="email" maxlength="50" name="email" type="email" value="">
                                                          
                                </div>
                            </div>
                        </div>
                        <!-----------------------Opcional-------------------------------->
                        <div class="col-md-6 card">
                            <ul class="nav nav-tabs" role="tablist" style="border:0;">
                                
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#Facturacion" aria-controls="" data-toggle="tab" role="tab" aria-selected="false">Datos de facturación (Opcional)</a>
                                </li>
                           </ul>
                           <br>
                           <hr>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Dirección:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" wire:model="Direccion" id="Direccion" minlength="10" maxlength="100" name="Direccion" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Colonia:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" wire:model="Colonia" id="Colonia" minlength="2" maxlength="99" name="Colonia" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Código Postal:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="cp" autocomplete="off" onkeypress='return validaNumericos(event)' class="form-control text-box single-line" id="cp" minlength="5" maxlength="5" name="cp" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Estado:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Estado" class="form-control text-box single-line" id="Estado" maxlength="25" name="Estado" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Municipio:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="Municipio" onkeypress="return soloLetras(event)" onkeypress='return validaNumericos(event)' class="form-control text-box single-line" id="Municipio" minlength="1" maxlength="20" name="Municipio" type="text" value="">                            

                                </div>
                            </div>
                                     
                        </div>
                        <!-----------------------Opcional-------------------------------->
                    </div>                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
