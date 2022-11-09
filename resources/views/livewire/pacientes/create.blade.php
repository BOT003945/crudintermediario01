<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Paciente (Registro)</h4>
                <button type="button" href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarDialogo()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
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
                                     <span class="badge badge-default">Paciente:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="Paciente1" name="Paciente1" wire:model="Paciente"  onkeypress="return soloLetras(event)" placeholder="Nombre del paciente" autocomplete="off" required class="form-control text-box single-line" type="text">@error('Paciente') <span class="error text-danger">{{ $message }}</span> @enderror

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
                                     <span class="badge badge-default">Empresa:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control" wire:model="Empresa" id="Empresa1" name="Empresa1">@error('Empresa') <span class="error text-danger">{{ $message }}</span> @enderror
                                        
                                        @foreach($empresas as $empresa)
                                        <option value="{{$empresa->id}}" selected>{{$empresa->Nombre}}</option>
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
                                    <input onkeypress='return validaNumericos(event)' wire:model="Telefono" class="form-control text-box single-line" id="Telefono1"  minlength="10" maxlength="10" name="Telefono1" type="tel">

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
                                    <div class="form-check">
                                        <input wire:model="enviarwhatsapp" checked="True" class="form-check-input" id="enviarwhatsapp1" name="enviarwhatsapp1" type="radio" value="4"><label class="form-check-label">Enviar a Whatsapp</label>
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
                                    <input wire:model="Rfc" class="form-control text-box single-line" id="Rfc1" minlength="15" maxlength="15" name="Rfc1" type="text">                       
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Calle:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Calle" class="form-control text-box single-line" id="Calle1" minlength="2" maxlength="100" name="Calle1" type="text" value="">                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Número:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input wire:model="Numero" class="form-control text-box single-line" id="Numero1" maxlength="50" name="Numero1" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Colonia:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Colonia" class="form-control text-box single-line" id="Colonia1" maxlength="25" name="Colonia1" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Código Postal:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress='return validaNumericos(event)' wire:model="Cp" class="form-control text-box single-line" id="Cp1" minlength="5" maxlength="5" name="Cp1" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Municipio:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Municipio" class="form-control text-box single-line" id="Municipio1" minlength="2" maxlength="15" name="Municipio1" type="text" value="">                            

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">Estado:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Estado" class="form-control text-box single-line" id="Estado1" minlength="2" maxlength="15" name="Estado1" type="text" value="">          

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <span class="badge badge-default">País:</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input onkeypress="return soloLetras(event)" wire:model="Pais" class="form-control text-box single-line" id="Pais1" minlength="2" maxlength="15" name="Pais1" type="text" value="">                            

                                </div>
                            </div>            
                        </div>
                        <!-----------------------Opcional-------------------------------->
                    </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button id="btnEnfocar" type="submit" onclick="createDataModal.close()" wire:click.prevent="store()" class="btn btn-primary close-btn" aria-hidden="true">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    const $btnEnfocar = document.querySelector("#btnEnfocar"),
    $nombre = document.querySelector("#Paciente1");
    
    // En el click, enfocar
    $btnEnfocar.addEventListener("click", () => {
        $nombre.focus();
    });
</script>

<script>
    function validaNumericos(event) {
      if(event.charCode >= 48 && event.charCode <= 57){
        return true;
       }
       return false;        
  }
</script>
<script>
      
    function soloLetras(e) {
      var key = e.keyCode || e.which,
        tecla = String.fromCharCode(key).toLowerCase(),
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
        especiales = [8, 37, 39, 46],
        tecla_especial = false;
  
      for (var i in especiales) {
        if (key == especiales[i]) {
          tecla_especial = true;
          break;
        }
      }
  
      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
      }
      
    }
    
</script>
{{-- <script> document.addEventListener('livewire:load', () => { 
    window.livewire.on('newfocus', inputname => 
    { document.getElementById("Paciente1").focus(); }) });
</script>
     --}}