<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Empresa</h5>
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
                                        Datos Generales
                                    </a>
                                </li>
                                
                           </ul>
                           <br>
                           <br>
                           <hr>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Nombre de la empresa:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input minlength="2" maxlength="50" onkeypress="return soloLetras(event)" placeholder="Nombre de la empresa" autocomplete="off" required class="form-control text-box single-line" id="Nombre1" name="Nombre1" type="text" wire:model="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Teléfono 1:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input autofocus class="form-control text-box single-line" id="tel1_1" minlength="10" wire:model="tel1" maxlength="10" name="tel1_1" type="text">                          
    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Teléfono 2:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" id="tel2_1" minlength="10" maxlength="20" wire:model="tel2"  name="tel2_1" type="tel" >
    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Tipo de Empresa:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select wire:model="Tipo_Empresa" class="form-control text-box single-line" id="Tipo_Empresa1" name="Tipo_Empresa1" maxlength="12"  type="text" >
                                        <option value="---">Elegir...</option>
                                        <option value="Pública">Pública</option>
                                        <option value="Privada">Privada</option>
                                    </select>                                                      
                                </div>
                            </div>
                        </div>
                        <!-----------------------Opcional-------------------------------->
                        <div class="col-md-6 card">
                            <ul class="nav nav-tabs" role="tablist" style="border:0;">
                                
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#Facturacion" aria-controls="" data-toggle="tab" role="tab" aria-selected="false">Datos de ubicación (Opcional)</a>
                                </li>
                           </ul>
                           <br>
                           <hr>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">RFC:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" wire:model="rfc" id="rfc1" minlength="15" maxlength="15" name="rfc1" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Número:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" wire:model="numero" id="numero1" minlength="1" maxlength="80" name="numero1" type="text" >                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Colonia:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="colonia" autocomplete="off"  class="form-control text-box single-line" id="colonia1" minlength="1" maxlength="30" name="colonia1" type="text" >                            
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Municipio:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="Ciudad" onkeypress="return soloLetras(event)" class="form-control text-box single-line" id="Ciudad1" minlength="1" maxlength="30" name="Ciudad1" type="text" value="">                            
    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Estado:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="Entidad" onkeypress="return soloLetras(event)" class="form-control text-box single-line" id="Entidad1" minlength="1" maxlength="30" name="Entidad1" type="text" value="">                            
    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">País:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="pais" onkeypress="return soloLetras(event)" class="form-control text-box single-line" id="pais1" minlength="1" maxlength="30" name="pais1" type="text" value="">                            
    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Código Postal::</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="cp" onkeypress="return soloLetras(event)" class="form-control text-box single-line" id="cp1" minlength="5" maxlength="5" name="cp1" type="text" value="">                            
    
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
