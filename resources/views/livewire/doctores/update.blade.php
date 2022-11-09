<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
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
                                    <input minlength="1" maxlength="150" onkeypress="return soloLetras(event)" placeholder="Nombre del doctor" autocomplete="off" required class="form-control text-box single-line" id="doctor1" name="doctor1" type="text" wire:model="doctor">@error('doctor') <span class="error text-danger">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Fecha de nacimiento:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="FecNac" class="form-control text-box single-line" id="FecNac1" maxlength="10" name="FecNac1" type="date">@error('FecNac') <span class="error text-danger">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Especialidad:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input autocomplete="off" onkeypress="return soloLetras(event)" class="form-control text-box single-line" id="Especialidad11" wire:model="Especialidad1" maxlength="30" name="Especialidad1" type="text" required tabindex="7">@error('Especialidad1') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Cédula Profesional:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input autofocus class="form-control text-box single-line" id="CedProf1" minlength="6" wire:model="CedProf" maxlength="30" name="CedProf1" type="text">                          

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Centro:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" id="Centro1" maxlength="30" wire:model="Centro" name="Centro1" type="tel" >

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
                                        <input wire:model="Sexo" checked="True" class="form-check-input" id="Sexo1" name="Sexo1" type="radio" value="H"><label class="form-check-label" for="Hombre">H</label>@error('Sexo') <span class="error text-danger">{{ $message }}</span> @enderror
                                     </div>
                                     <div class="form-check">
                                         <input class="form-check-input" id="Sexo1" name="Sexo1" type="radio" value="M" wire:model="Sexo"><label class="form-check-label" for="Mujer">M</label>
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
                                    <input onkeypress='return validaNumericos(event)' wire:model="Tels" class="form-control text-box single-line" id="Tels1"  minlength="10" maxlength="10" name="Tels1" type="tel" value="">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Email:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="email" class="form-control text-box single-line" id="email1" maxlength="50" name="email1" type="email" value="">
                                                          
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
                                    <input class="form-control text-box single-line" wire:model="Direccion" id="Direccion1" minlength="10" maxlength="50" name="Direccion1" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Colonia:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" wire:model="Colonia" id="Colonia1" minlength="2" maxlength="99" name="Colonia1" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Código Postal:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="cp" autocomplete="off" onkeypress='return validaNumericos(event)' class="form-control text-box single-line" id="cp1" minlength="5" maxlength="5" name="cp1" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Estado:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Estado" class="form-control text-box single-line" id="Estado1" maxlength="25" name="Estado1" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Municipio:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="Municipio" onkeypress="return soloLetras(event)" onkeypress='return validaNumericos(event)' class="form-control text-box single-line" id="Municipio1" minlength="1" maxlength="20" name="Municipio1" type="text" value="">                            

                                </div>
                            </div>
                                     
                        </div>
                        <!-----------------------Opcional-------------------------------->
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
