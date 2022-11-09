<div wire:ignore.self class="modal fade" id="updateModal2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Paciente (Edición SELECT)</h4>
                <button type="button" href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarDialogo()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form >
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
                                     <span class="badge badge-default">Paciente:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="Paciente3" name="Paciente3" wire:model="Paciente" <?php $this->emit('newfocus'); ?> onkeypress="return soloLetras(event)" placeholder="Nombre del paciente" autocomplete="off" required class="form-control text-box single-line" type="text">@error('Paciente') <span class="error text-danger">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Apellido paterno:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" id="Paterno" minlength="2" maxlength="30" name="Paterno" type="text" value="" wire:model="Paterno">@error('Paterno') <span class="error text-danger">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Apellido materno:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" id="Materno" minlength="2" maxlength="30" name="Materno" type="text" value="" wire:model="Materno">

                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Fecha de nacimiento:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="FecNac" value="2022-09-22" class="form-control text-box single-line" id="FecNac3" maxlength="10" name="FecNac3" type="date">

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
                                        <input wire:model="Sexo" checked="True" class="form-check-input" id="Sexo3" name="Sexo3" type="radio" value="H"><label class="form-check-label" for="Hombre">H</label>
                                     </div>
                                     <div class="form-check">
                                         <input class="form-check-input" id="Sexo3" name="Sexo3" type="radio" value="M" wire:model="Sexo"><label class="form-check-label" for="Mujer">M</label>
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Empresa:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control select2-hidden-accessible" wire:model="Empresa" id="Empresa3" name="Empresa3" tabindex="-1" aria-hidden="true">
                                        @foreach($empresas as $empresa)
                                        <option value="{{$empresa->id}}">{{$empresa->Nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Teléfono:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress='return validaNumericos(event)' wire:model="Telefono" class="form-control text-box single-line" id="Telefono3"  minlength="10" maxlength="10" name="Telefono2" type="tel">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Email:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" id="email3" maxlength="50" name="email3" type="email">
                                    <div class="form-check">
                                        <input wire:model="enviarwhatsapp" checked="True" class="form-check-input" id="enviarwhatsapp3" name="enviarwhatsapp3" type="radio" value="4"><label class="form-check-label">Enviar a Whatsapp</label>
                                    </div>  
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
                                     <span class="badge badge-default">RFC:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="Rfc" class="form-control text-box single-line" id="Rfc3" minlength="15" maxlength="15" name="Rfc3" type="text">                       
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Calle:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input  wire:model="Calle" class="form-control text-box single-line" id="Calle3" minlength="2" maxlength="100" name="Calle3" type="text" value="">                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Número:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="Numero" class="form-control text-box single-line" id="Numero3" maxlength="50" name="Numero3" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Colonia:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Colonia" class="form-control text-box single-line" id="Colonia3" maxlength="25" name="Colonia3" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Código Postal:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress='return validaNumericos(event)' wire:model="Cp" class="form-control text-box single-line" id="Cp3" minlength="5" maxlength="5" name="Cp3" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Municipio:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Municipio" class="form-control text-box single-line" id="Municipio3" minlength="2" maxlength="15" name="Municipio3" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Estado:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Estado" class="form-control text-box single-line" id="Estado3" minlength="2" maxlength="15" name="Estado3" type="text" value="">          

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">País:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Pais" class="form-control text-box single-line" id="Pais3" minlength="2" maxlength="15" name="Pais3" type="text" value="">                            

                                </div>
                            </div>
                            
                            
                        </div>
                        <!-----------------------Opcional-------------------------------->
                    </div>
                    </form>
                </div>
                
                                                                                                 
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
        </div>
            
            
        </div>
    </div>



            </div>
        </div>
    </div>
</div>
<script>
    function validaNumericos(event) {
      if(event.charCode >= 48 && event.charCode <= 57){
        return true;
       }
       return false;        
  }
    </script>
<script> document.addEventListener('livewire:load', () => { 
    window.livewire.on('newfocus', inputname => 
    { document.getElementById("Paciente").focus(); }) });
</script>