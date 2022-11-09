<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Registrar nuevo Departamento</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
                    <div id="frm-pacientes" class="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#Primero" data-toggle="tab" role="tab" aria-selected="false">General</a>
                            </li>
                       </ul>
                       <div class="tab-content">
                           <div role="tabpanel" class="tab-pane active" id="Primero">
                               <div class="card">
            
                                   <div class="card-body">
                                    
                                    
                                       <!--------------------Depto ------------------->
                                       <div class="form-group">
                                           <label class="control-label">Nombre del Departamento:</label><b class="obligatorio">(*)</b>
                                           <input wire:model="Depto" class="form-control text-box single-line" id="Depto" minlength="2" maxlength="35" name="Depto" type="text" tabindex="4">@error('Depto') <span class="error text-danger">{{ $message }}</span> @enderror
                                       </div>   
                                                                  
                                    </div>                                                               
                               </div>
                            </div>

                        </div>
                   </div>
                </form>
            </div>
            @if($message = Session::get("error"))
                <div class="alert alert-danger">
                   <p>{{$message="Departamento previamente registrado."}}</p>
                </div>
		    @endif
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
