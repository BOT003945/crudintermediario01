<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Departamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<div class="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#Segundo" data-toggle="tab" role="tab" aria-selected="false">General</a>
                            </li>
                       </ul>
                       <div class="tab-content">
                           <div role="tabpanel" class="tab-pane active" id="Segundo">
                               <div class="card">
            
                                   <div class="card-body">
                                    
                                    
                                       <!--------------------Depto ------------------->
                                       <div class="form-group">
                                           <label class="control-label">Nombre del Departamento:</label><b class="obligatorio">(*)</b>
                                           <input wire:model="Depto" class="form-control text-box single-line" id="Depto" minlength="2" maxlength="35" name="Depto" type="text" required tabindex="4">@error('Depto') <span class="error text-danger">{{ $message }}</span> @enderror
                                       </div>   
                                                                        
                                    </div>                                                               
                               </div>
                            </div>

                        </div>
                   </div>

                </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
